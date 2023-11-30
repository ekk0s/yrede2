<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

public function index()
{
    $usuarios = User::all(); // Substitua User::all() pela sua consulta ao banco de dados

    return view('nome_da_sua_view', ['usuarios' => $usuarios]);
}