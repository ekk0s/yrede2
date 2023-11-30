<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Inicial - YRede</title>
    <style>
        body {
            background-image: url('https://wallpapers.com/images/hd/dark-mode-3840-x-2160-background-6xrac361hd277x12.jpg');
            background-size: cover;
        }
    </style>
</head>

<body class="dark:bg-gray-800 text-white min-h-screen flex items-center justify-center">
    <div class="container bg-gray-900 bg-opacity-50 p-8 rounded-lg shadow-lg"> <!-- Adicionei a classe bg-opacity-50 para tornar o elemento meio opaco -->
        <div class="flex">
            <div class="w-1/4 p-4">
                <div class="flex items-center space-x-4">
                    <div class="rounded-full bg-gray-700 w-12 h-12 flex items-center justify-center">
                        <span class="font-medium text-gray-300">Y</span>
                    </div>
                </div>
                <ul class="mt-4">
                    <li>
                        <a href="/cria-post" class="text-white font-bold hover:text-gray-300">Nova Postagem</a>
                    </li>
                </ul>
            </div>

            <div class="w-3/4 p-5 text-center text-3xl font-semibold">
                <h1 class="text-center">SUA TIMELINE</h1>

                @foreach ($posts as $post)
                    <div class="rounded-xl bg-gray-600 bg-opacity-50 p-4 my-4 shadow-lg"> <!-- Adicionei a classe bg-opacity-50 para tornar o elemento meio opaco -->
                        <div class="flex items-center space-x-4">
                            <div class="rounded-full bg-gray-700 w-12 h-12 flex items-center justify-center">
                                <span class="font-medium text-gray-300">Y</span>
                            </div>
                            <div>
                                <h2 class="font-bold text-2xl text-white">Postagem - {{$post->id}}</h2>
                                <p class="text-gray-300">{{$post->mensagem}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>