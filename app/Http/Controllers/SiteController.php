<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {

        $nome = "Alfredo Camacho";
        $habitos = [
            'Acordar cedo',
            'Exercícios físicos',
            'Meditação',
            'Leitura diária',
        ];
        return view('home', compact('nome', 'habitos'));
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
