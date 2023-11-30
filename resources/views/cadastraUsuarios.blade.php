<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>CADASTRO</title>
</head>
<body>

  
    <h1 class="w-full text-center p-14 text-2xl font-black text-gray-200"> CADASTRAR USUÁRIO </h1>

    <form class="card-body max-w-md m-auto "  action="{{route('salva-usuario')}}" method="post">

    @csrf

<div class="form-control">
    <label class="label">
      <span class="label-text font-bold text-gray-200">Usuário</span>
    </label>
    <input name="usuario" type="text" placeholder="Usuario" 
            class="input input-bordered" required />
</div>

<div class="form-control">
    <label class="label">
      <span class="label-text font-bold text-gray-200">Bio</span>
    </label>
    <input name="bio" type="text" placeholder="Bio" 
            class="input input-bordered" required />
</div>

<div class="form-control">
    <label class="label">
      <span class="label-text font-bold text-gray-200">Nome</span>
    </label>
    <input name="nome" type="text" placeholder="Nome" 
            class="input input-bordered" required />
</div>

<div class="form-control">
    <label class="label">
      <span class="label-text font-bold text-gray-200">E-mail</span>
    </label>
    <input name="email" type="email" placeholder="Email" 
            class="input input-bordered" required />
</div>

<div class="form-control">
    <label class="label">
      <span class="label-text font-bold text-gray-200">Senha</span>
    </label>
    <input name="senha" type="password" placeholder="Senha" 
            class="input input-bordered" required />
</div>

<button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">CADASTRAR</button>   

</body>
</html>
