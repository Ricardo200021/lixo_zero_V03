<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lixo Zero Web App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <div>
        <form method="POST" action="/nova-denuncia" enctype='multipart/form-data' class="flex flex-col justify-between">
            @csrf

            <div class="bg-gradient-to-br from-purple-600 to-purple-400 flex justify-between items-center py-6">
                <div>
                    <h1 class="px-5 text-white text-xs uppercase">Lixo Zero</h1>
                    <h2 class="px-5 text-white font-bold text-xl">Nova denúncia</h2>
                </div>
                <div class="px-5">
                    <a href="/denuncias" class="bg-black/50 px-5 py-2 rounded-lg text-white uppercase text-sm">Voltar</a>
                </div>
            </div>

            <div class="flex flex-col space-y-5 px-5 pt-5">
                <div class="flex flex-col space-y-2">
                    <div class="text-stone-600 font-bold">Endereço</div>
                    <div class="text-stone-400 text-sm">Qual o endereço de acúmulo de lixo?</div>
                    <input required name="endereco" class="bg-zinc-100 text-zinc-600 p-3 rounded outline-none" type="text" placeholder="Digite o endereço">
                </div>
            </div>

            <div class="flex flex-col space-y-5 px-5 mt-5">
                <div class="flex flex-col space-y-1">
                    <div class="text-stone-600 font-bold">Foto do local</div>
                    <div class="text-stone-400 text-sm">Selecione ou tire uma foto</div>
                    <input name="selecionarFoto" id="selecionarFoto" type="file" accept="image/*" class="" />
                </div>
            </div>

            <div class="flex flex-col px-5 pt-5">
                <button type="submit" class="bg-purple-600 py-4 w-full rounded-2xl text-white font-bold text-center">Fazer
                    nova denúncia</button>

                <div class="text-center pt-5">
                    <a href="/denuncias" class="text-white">Voltar para a home</a>
                </div>
            </div>
        </form>
        <div class="text-center text-white py-10">Créditos do WebApp aqui</div>
    </div>
</body>

</html>