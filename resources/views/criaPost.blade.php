<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Nova Postagem</title>
</head>
<body>

<nav class="">
  <div class="mx-auto p-4">
    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="text-2xl font-semibold ">THE ORIGINAL </span>
        <img src="https://coloringlib.com/wp-content/uploads/2023/09/graffiti-alphabet-letter-y-coloring.jpg" class="h-12" alt="" />
    </a>

    <div class="text-black-900 text-2xl font-semibold "> Nova Postagem </div>

    <form action="/salva-post" method="POST">

    @csrf
    
        <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>

        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">POSTAR</button>
    </form>

</body>
</html>