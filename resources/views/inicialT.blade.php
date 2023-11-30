<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à Y Rede</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://wallpapers.com/images/hd/dark-mode-3840-x-2160-background-6xrac361hd277x12.jpg');
        }
    </style>
</head>
<body class="bg-cover bg-center flex items-center justify-center min-h-screen">
    <div class="bg-gray-800 bg-opacity-75 p-8 rounded-lg shadow-md w-[32rem] h-[32rem] flex">
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-bold mb-8 text-gray-300">Bem-vindo à Y Rede</h2>
            <p class="text-gray-300">Entre com seu email e senha para continuar.</p>
        </div>
        <div class="w-1/2 p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl text-center">
                  ENTRAR EM SUA CONTA
            </h1>
            <form class="space-y-4 md:space-y-6" action="/logar" method="POST">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-200">Seu email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="seuEmail@company.com" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-200">Senha</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Lembrar de mim</label>
                        </div>
                    </div>
                    <a href="#" class="text-sm text-gray-400 font-medium text-primary-600 hover:underline dark:text-primary-500">Esqueceu sua senha?</a>
                </div>
                <button type="submit" class="w-full p-3 bg-green-600 text-white rounded block text-center hover:bg-green-700 transition-colors mt-4">Entrar</button>
            </form>
            <a href="/cadastra-usuario" class="w-full p-3 bg-blue-600 text-white rounded block text-center hover:bg-blue-700 transition-colors mt-4">Registre-se</a>
        </div>
    </div>
</body>
</html>
