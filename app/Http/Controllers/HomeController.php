<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Renderiza a view 'home.blade.php'
    }

    public function eventoDetalhe()
    {
        return view('evento_detalhe'); // Renderiza a view 'home.blade.php'
    }
}
