<!DOCTYPE html>
<html lang="en">
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
        <span class="self-center text-2xl font-semibold whitespace-nowrap ">THE ORIGINAL </span>
        <img src="https://img1.picmix.com/output/stamp/normal/6/3/0/5/2195036_c5bd9.png" class="h-12" alt="" />
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
          <a href="/cadastra-usuario" class="block py-2 px-3 text-purple-900 rounded">Criar Conta</a>
        </li>
        <li>
          <a href="/login" class="block py-2 px-3 text-purple-900 rounded">Login</a>
        </li>
        <li>
          <a href="/cria-post" class="block py-2 px-3 text-purple-900 rounded">Nova Postagem</a>
        </li>   
      </ul>
    </div>
  </div>
</nav>

<div class="p-4 text-center text-3xl font-semibold whitespace-nowrap">

        <h1>SUA TIMELINE</h1>

</div>

        @foreach ($posts as $post)

        <div class=" rounded-xl flex items-stretch font-semibold text-2xl text-white p-4 border-4 dark:border-gray-700">
            <div class="  mr-4 object-cover p-6 font-bold text-3xl text-purple-600 ">
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