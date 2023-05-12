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
            <div class="text-stone-600 font-bold text-lg px-5 mb-5">Denuncia por: {{ $criadorDaDenuncia->name }}</div>

            <!-- Report -->
            <div class="flex flex-col space-y-5">
                <div class="flex flex-col px-5">
                    <div class="relative">
                        <img class="max-w-full rounded-2xl" src="{{ $denuncia['caminho_foto'] }}?{{ rand(0, 2000000) }}" />
                        <div class="absolute left-0 bottom-0 rounded-b-2xl w-full py-3 bg-gradient-to-b via-black/50 from-black/0 to-black/70 font-bold text-center text-white text-sm">{{ $denuncia['endereco'] }}</div>
                    </div>
                </div>
            </div>
            <!-- Fim Report -->

            <div id="maps" class="w-full h-[300px] bg-gray-200 mt-5"></div>
            <div class="flex flex-col px-5 pt-5">
                <a href="/denuncias" class="bg-purple-600 py-4 w-full rounded-2xl text-white font-bold text-center">Voltar</a>
            </div>
        </div>
        <div class="text-center text-white py-10">Créditos do WebApp aqui</div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=<chave de api aqui>&callback=initMap&v=weekly" defer></script>

    <script>
        let map;
        let geocoder;

        function initMap() {
            geocoder = new google.maps.Geocoder();
            map = new google.maps.Map(document.getElementById("maps"), {
                center: {
                    lat: -12.153764,
                    lng: -46.777885
                },
                zoom: 14,
            });

            codeAddress()
        }

        function codeAddress() {
            var address = "{{ $denuncia['endereco'] }}";

            geocoder.geocode({
                'address': address
            }, function(results, status) {
                if (status == 'OK') {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                } else {
                    alert(`O endereço ${address} não foi encontrado`);
                }
            });
        }

        window.onload = function() {
            initMap();
        }
    </script>
</body>

</html>