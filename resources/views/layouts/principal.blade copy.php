<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Clube')</title>



    

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/style.css', 'resources/js/lib.js'])
    @endif 

    {{-- bootstrap 5.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
</head>
<body>

{{-- TODO: retirei 'bg-body-tertiary' para que o fundo fique transparente --}}
<nav class="navbar navbar-expand-lg fundo_azul text-white ">
    {{-- TODO: 'container', para que o menu fique dentro da área útil do site --}}
    <div class="container-fluid container">
      <!-- Imagem no lado esquerdo -->
      <a class="navbar-brand  " href="#">Navbar</a>

      <!-- Botão para dispositivos menores -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links do menu -->
      {{-- TODO: 'justify-content-end', para colocar o menu do lado direito --}}
      {{-- TODO: 'text-white', para forçar o texto ficar branco --}}

      <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white ms-3" href="#">Sobre</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white ms-3" href="#">Planos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white ms-3" href="#">Contato</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Eventos
            </a>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="#">Para Associados</a></li>
              <li><a class="dropdown-item" href="#">Aberto ao Público</a></li>
            </ul>
          </li>
        </ul>
      </div>

    </div>
</nav>
<main>
    <!-- Conteúdo específico da página -->
    @yield('content')
</main>

<div class="rodape">
    <p>&copy; {{ date('Y') }} Minha Aplicação</p>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>