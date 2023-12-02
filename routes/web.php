<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'inicialT');

Route::get('/inicial', function () {
    $posts = Post::all();
    return view('inicial', compact('posts'));
})->middleware('auth');

Route::get('/lista-usuarios', function () {
    $usuarios = User::all();
    return view('listaUsuarios', compact('usuarios'));
})->name('lista-usuario');

Route::view('/cadastra-usuario', 'cadastraUsuarios');

Route::post('/salva-usuario', function (Request $request) {
    $usuario = new User();
    $usuario->usuario = $request->input('usuario');
    $usuario->name = $request->input('nome');
    $usuario->bio = $request->input('bio');
    $usuario->email = $request->input('email');
    $usuario->password = bcrypt($request->input('senha'));
    $usuario->save();

    return redirect()->intended('/');
})->name('salva-usuario');

Route::view('login', 'login')->name('login');

Route::post('/logar', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
        $request->session()->regenerate();
        return redirect()->intended('/inicial');
    }

    return redirect('/cadastra-usuario');
});

Route::middleware(['auth'])->group(function () {
    Route::view('/cria-post', 'criaPost');

    Route::post('/salva-post', function (Request $request) {
        $post = new Post();
        $post->user_id = Auth::id();
        $post->mensagem = $request->input('mensagem'); // Corrected the field name
        $post->save();

        return redirect('/inicial');
    });
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');
