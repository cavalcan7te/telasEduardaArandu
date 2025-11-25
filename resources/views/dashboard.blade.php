<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOBRE NÓS</title>
</head>
<body>
    <!DOCTYPE html>
  <html lang="pt-BR">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Dashboard Arandu</title>

      @vite(['resources/css/app.css', 'resources/js/app.js'])


    </head>

    <body class="bg-[#F6F6F6] text-gray-800 font-montserrat">

      <header class="flex items-center justify-between px-8 py-2 bg-white shadow">
        <div class="flex items-center space-x-2">
          <img src="{{ asset('images/logo-arandu-verde.png') }}" alt="Logo Arandu verde" class="h-10">
        </div>
        
        <nav class="flex items-center space-x-6 text-sm font-medium text-[#629956]">
          <a href="#" class="hover:text-[#2A4B30]">GALERIA</a>
          <a href="#" class="hover:text-[#2A4B30]">LOGOUT</a>
          <a href="#" class="hover:text-[#2A4B30]">DASHBOARD</a>
          <a href="#" class="hover:text-[#2A4B30]">SOBRE</a>
          <div class="w-10 h-10 rounded-full">
           <a href="{{ route('profile') }}">
            <img src="{{ asset('images/profile.png') }}" class="w-full h-full rounded-full object-cover">
          </a>

          </div>
        </nav>

      </header>

      <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-10 py-5">

            <div class="flex flex-col gap-5">

                <div>
                    <p class="text-sm text-gray-600 mb-1 text-[#46563B]">Fonte: Agência Brasil</p>
                    <img 
                        src="{{ asset('images/incendio1.png') }}" 
                        class="rounded-xl shadow-lg object-cover w-[750px] h-[250px]"
                    >
                </div>

                <div>
                    <p class="text-sm text-gray-600 mb-1 text-[#46563B]">Fonte: O POVO+</p>
                    <img 
                        src="{{ asset('images/lixao1.png') }}" 
                        class="rounded-xl shadow-lg object-cover w-[750px] h-[250px]"
                    >
                </div>

                <div class="mt-4">
                    <div class="flex flex-row items-start gap-2">
                        <img src="{{ asset('images/logo-padrao.png') }}" class="h-[100px]">
                        <p class="text-[30px] italic w-[400px] text-[#213D26]">
                            “Lembrar que por <strong>debaixo</strong>  
                            do <strong>concreto armado</strong>, existe  
                            o <strong>barro ancestral</strong>.”
                        </p>
                    </div>

                    <div class="flex items-center gap-2 mt-4">
                        <img src="{{ asset('images/instagram.svg') }}" class="h-[50px]">
                        <span class="italic text-[30px] text-[#6C0D0E]" >@projarandu</span>
                        <img src="{{ asset('images/email.svg') }}" class="pl-[10px] h-[50px]">
                        <span class="italic text-[30px] text-[#6C0D0E]"> aranduproject@gmail.com</span>
                        
                    </div>
                </div>

            </div>

            <div class="bg-[#629956] text-white p-5 rounded-xl shadow-xl flex flex-col items-center h-[700px]">

                <h1 class="text-4xl font-bold mb-6 text-center w-[800px]">
                    QUEM SOMOS?
                </h1>

                <p class="leading-7 text-lg text-left" >
                    Somos uma equipe de estudantes do curso técnico em Desenvolvimento 
                    de Sistemas da EEEP Jeová Costa Lima, movidas pela paixão por tecnologia 
                    e inovação. Nosso projeto surgiu com o propósito de auxiliar na coleta e 
                    organização de dados sobre duas problemáticas que impactam diretamente 
                    o meio ambiente: os focos de lixo viciado e as queimadas.
                    <br><br>
                    A ideia nasceu a partir do LabGirlsTech, nosso outro projeto, que tem 
                    como objetivo incentivar a presença feminina na área da Tecnologia da 
                    Informação (TI). Inspiradas por essa iniciativa, decidimos unir nossos 
                    conhecimentos para criar uma aplicação funcional capaz de apoiar órgãos 
                    públicos no monitoramento e controle dessas ocorrências em toda a região.
                    <br><br>
                    Assim surgiu o Arandu, um projeto desenvolvido coletivamente após uma 
                    análise detalhada dos dados de queimadas e acúmulo de lixo na cidade de 
                    Russas. A partir desse estudo, estruturamos nossa proposta e iniciamos a 
                    criação dos protótipos do aplicativo. Durante o processo, registramos 
                    todas as reuniões e etapas de desenvolvimento em nosso caderno de campo.
                    <br><br>
                    A programação do app foi realizada na plataforma no-code FlutterFlow, 
                    utilizando o banco de dados Supabase. Após a conclusão do aplicativo 
                    e a vitória na etapa regional do Ceará Científico 2025, expandimos o 
                    projeto com o desenvolvimento de um sistema web para visualização dos 
                    dados coletados, vindos do App. Essa etapa também marcou o início de 
                    uma parceria com um órgão público ambiental, interessado em utilizar 
                    as informações geradas pela aplicação para fortalecer suas ações.
                </p>
            </div>

        </section>
    </div>
</body>
</html>