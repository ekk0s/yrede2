<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>


    <title>Inicial - YRede</title>
</head>


<body class="dark:bg-gray-800 text-white">



<nav class="">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://i.pinimg.com/originals/8d/37/20/8d3720db12d126c8f3169e55083d5b45.png" class="rounded h-12" alt="" />
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-bold flex p-4 md:p-0 ">
        <li>
          <a href="/cadastra-usuario" class="text-white-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Criar Conta</a>
        </li>
        <li>
          <a href="/login" class="text-white-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Login</a>
        </li>
        <li>
          <a href="/cria-post" class="text-white-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Nova Postagem</a>
        </li>   
      </ul>
    </div>
  </div>
</nav>

<div class="p-5 text-center text-3xl font-semiitalic whitespace-nowrap">

        <h1>SUA TIMELINE</h1>

</div>

        @foreach ($posts as $post)

        <div class=" rounded-xl flex items-stretch font-semibold text-2xl text-white p-4 border-4 dark:border-gray-700">
            <div class="  mr-4 object-cover p-6 font-bold text-3xl text-gray-200 ">
              <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
    <span class="font-medium text-gray-600 dark:text-gray-300"> Y </span>
</div>  Postagem - {{$post->id}}
            </div>
            {{$post->mensagem}}
        </div>
        <hr>
        @endforeach

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>
</html>