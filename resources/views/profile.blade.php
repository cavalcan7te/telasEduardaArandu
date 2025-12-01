<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F6F6F6] text-gray-800 font-montserrat">

    <!-- HEADER -->
    <header class="flex items-center justify-between px-8 py-2 bg-white shadow">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/ARANDUVERMELHO.png') }}" alt="Logo Arandu vermelha" class="h-10">
        </div>

        <nav class="flex items-center space-x-6 text-sm font-medium text-[#6C0D0E]">
            <a href="#" class="hover:text-[#AF6B6C]">GALERIA</a>
            <a href="#" class="hover:text-[#AF6B6C]">LOGOUT</a>
            <a href="#" class="hover:text-[#AF6B6C]">DASHBOARD</a>
            <a href="{{ route('dashboard') }}" class="hover:text-[#AF6B6C]">SOBRE</a>

            <div class="w-10 h-10 rounded-full">
                <a href="{{ route('profile') }}">
                    <img src="{{ asset('images/profile.png') }}" class="w-full h-full rounded-full object-cover">
                </a>

            </div>
        </nav>
    </header>

    

    <!-- CONTAINER PRINCIPAL -->
    <div class="max-w-6xl mx-auto bg-white shadow-xl rounded-xl p-6 mt-6">

        
        <div class="relative bg-[#681616] text-white p-6 rounded-t-xl flex items-center justify-between">
            <h1 class="text-xl font-bold w-[60%] leading-6">
                INSTITUIÇÃO: SECRE. DO MEIO AMBIENTE DE RUSSAS
            </h1>

        </div>


        <!-- CONTEÚDO -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 p-6">

            <!-- COLUNA ESQUERDA -->
            <div class="flex flex-col gap-4 mt-20">

                <div class="bg-[#E8E2DF] px-4 py-3 rounded-md font-bold text-[#681616]">
                    NOME: <span class="font-bold text-[#681616]">Fulana da Silva</span>
                </div>

                <div class="bg-[#E8E2DF] px-4 py-3 rounded-md font-bold text-[#681616]">
                    CARGO: <span class="font-bold text-[#681616]">Secretária</span>
                </div>

                <div class="bg-[#E8E2DF] px-4 py-3 rounded-md font-bold text-[#681616]">
                    TELEFONE: <span class="font-bold text-[#681616]">88 12345678</span>
                </div>

                <div class="bg-[#E8E2DF] px-4 py-3 rounded-md font-bold text-[#681616]">
                    E-MAIL: <span class="font-bold text-[#681616]">sema@gmail.com</span>
                </div>

                <div class="bg-[#E8E2DF] px-4 py-3 rounded-md font-bold text-[#681616]">
                    CIDADE: <span class="font-bold text-[#681616]">Russas</span>
                </div>

            </div>

            <div class="flex flex-col items-center mt-10">

          
            <div class="w-[450px] h-[450px] bg-white rounded-full overflow-hidden shadow-lg border-[6px] border-white -mt-32">
                <img 
                    src="{{ asset('images/fulana.png') }}" 
                    alt="Fulana"
                    class="w-full h-full object-cover"
                >
            </div>

            <!-- NOME IGUAL AO MODELO -->
            <span class="mt-6 text-4xl font-bold text-[#681616] bg-[#EBC6C6] px-14 py-3 rounded-lg shadow">
                Fulana
            </span>
        </div>



    </div>

</body>
</html>
