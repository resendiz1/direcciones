<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trabajadorController extends Controller
{
    public function create(){
        return view('gestion.agregar');
    }

    public function store(){
        
    }
}
