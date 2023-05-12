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
    <div class="flex flex-col justify-between">
        <div class="bg-gradient-to-br from-purple-600 to-purple-400 flex justify-between items-center py-6">
            <div>
                <h1 class="px-5 text-white text-xs uppercase">Lixo Zero</h1>
                <h2 class="px-5 text-white font-bold text-xl">Bem-vindo, {{ auth()->user()->name }}.</h2>
            </div>
            <div class="px-5">
                <a href="/" class="bg-black/50 px-5 py-2 rounded-lg text-white uppercase text-sm">Sair</a>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex space-x-2 mb-5 px-5 pb-5 border-b border-gray-100 overflow-x-scroll relative">
                @foreach($dadosDeOutrosUsuarios as $dado)
                <a href="/denuncias/{{ $dado['id'] }}">
                    <div class="flex-shrink-0 w-[60px] h-[60px] bg-gradient-to-b from-purple-500 via-orange-500 to-pink-500 rounded-full p-[2px]">
                        <img src="{{ $dado['caminho_foto'] }}?{{ rand(0, 2000000) }}" class="w-full h-full bg-white rounded-full border-[3px] border-white" />
                    </div>
                </a>
                @endforeach
            </div>

            <div class="text-stone-600 font-bold text-lg px-5 mb-5">Suas últimas denúncias</div>

            <!-- Report -->
            <div class="flex flex-col space-y-5">
                @foreach($dados as $dado)
                <a href="/denuncias/{{ $dado['id'] }}">
                    <div class="flex flex-col px-5">
                        <div class="relative">
                            <img class="max-w-full rounded-2xl" src="{{ $dado['caminho_foto'] }}?{{ rand(0, 2000000) }}" />

                            <a href="https://maps.google.com/maps?q={{ $dado['endereco'] }}" target="_blank" class="absolute p-3 rounded-full top-5 right-5 bg-black/50 text-white">
                                <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"></path>
                                </svg>
                            </a>

                            <div class="absolute left-0 bottom-0 rounded-b-2xl w-full py-3 bg-gradient-to-b via-black/50 from-black/0 to-black/70 font-bold text-center text-white text-sm">{{ $dado['endereco'] }}</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <!-- Fim Report -->

            <div class="flex flex-col px-5 pt-5">
                <a href="nova-denuncia" class="bg-purple-600 py-4 w-full rounded-2xl text-white font-bold text-center">Fazer nova denúncia</a>
            </div>
        </div>
        <div class="text-center text-white py-10">Créditos do WebApp aqui</div>
    </div>
</body>

</html>