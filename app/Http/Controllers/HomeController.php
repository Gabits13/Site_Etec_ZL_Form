<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function sobrenos(){
        return view('sobrenos');
    }

    public function contato(){
        return view('contato');
    }

    public function cursos(){
        return view('cursos');
    }

    public function departamentos(){
        return view('departamentos');
    }
}
