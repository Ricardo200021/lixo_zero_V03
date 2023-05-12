<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lixo Zero Web App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-purple-600 to-purple-400 h-full">
    <div class="min-h-full flex flex-col justify-between">
        <h1 class="text-white font-bold text-center mt-10 text-3xl">Login - Lixo Zero</h1>

        <form action="" method="POST" class="flex flex-col space-y-2 px-5">
            <div class="flex flex-col space-y-1">
                <div class="text-white font-bold">E-mail</div>
                <input name="email" class="ring ring-purple-400 border-0 p-3 bg-purple-700 text-white placeholder-purple-200 rounded outline-none" type="text" placeholder="Digite seu email">
            </div>

            <div class="flex flex-col space-y-1">
                <div class="text-white font-bold">Senha</div>
                <input name="senha" class="ring ring-purple-400 border-0 p-3 bg-purple-700 text-white placeholder-purple-200 rounded outline-none" type="password" placeholder="Digite sua senha">
            </div>

            <div class="flex space-x-2 pt-3">
                <button type="submit" class="bg-white py-4 w-full rounded text-purple-600 font-bold text-center">Fazer login</button>
                <a href="cadastro" class="bg-purple-800 py-4 w-full rounded text-white font-bold text-center">Cadastrar</a>
            </div>
        </form>

        <div class="text-center text-white py-10">Créditos do WebApp aqui</div>
    </div>
</body>

</html>