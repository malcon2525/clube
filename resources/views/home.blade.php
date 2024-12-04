@extends('layouts.principal')

@section('title', 'Página Inicial')
@section('content')


{{--
*
* WELCOME
* 
--}}
{{-- //TODO: 'd-flex flex-column justify-content-center', para centralizar o 'h1' e 'p' --}}
<div class="principal d-flex flex-column justify-content-center">

    {{-- wave top --}}
    <div class="custom-shape-divider-top-1733165555">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    {{-- **OUTRA OPÇÃO : https://www.svgbackgrounds.com/elements/svg-shape-dividers/ --}}
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#3D405B"><path d="M0 1v99c134.3 0 153.7-99 296-99H0Z" opacity=".5"></path><path d="M1000 4v86C833.3 90 833.3 3.6 666.7 3.6S500 90 333.3 90 166.7 4 0 4h1000Z" opacity=".5"></path><path d="M617 1v86C372 119 384 1 196 1h421Z" opacity=".5"></path><path d="M1000 0H0v52C62.5 28 125 4 250 4c250 0 250 96 500 96 125 0 187.5-24 250-48V0Z"></path></svg> --}}
    
    {{-- conteudo --}}

    <div class="welcome d-flex flex-row justify-content-between flex-wrap">
        <div class="mess_pp">       
            <h1>asdfasd</h1>
            <p>Onde lazer, natureza e diversão se encontram!</p>
        </div>

        <div class="home_video">
            <iframe  src="https://www.youtube.com/embed/EYWEprqoLAQ?si=wE9mUrusUCbyiUug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

    </div>

    {{-- wave botton --}}
    <div class="custom-shape-divider-bottom-1733163493">       
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

 


</div>



{{--
*
* MANCHETE
* 
--}}
<div class="manchete container">

    <h2>Sobre o ldslsdl</h2>

    <div>
        <div>
            <h2>Nossa História</h2>
            Since 1984, Tiya is ranked #8 in the top 10 golf courses in the world. Tiya is Bootstrap 5 HTML CSS template for golf clubs. Anyone can modify and use this layout for commercial purposes.

            Tiya Golf Club is 100% free CSS template provided by TemplateMo website. Please tell your friends about our website. Thank you for visiting.
        </div>
        <div>
            <div></div>
            <div></div>
        </div>
       
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non magnam libero, at nisi voluptates saepe quisquam dolores vero iste sunt. Quo at commodi iste eos nobis nihil eius, fuga doloribus.</p>
</div>


@endsection
