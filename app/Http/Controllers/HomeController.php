<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Resultados;

class HomeController extends Controller{

    public function __invoke(){
        return view('home');
    }
    
    public function store(Request $request)
    {
        $documento = $request->get('documento');
        return view('patients.resultados')->with('documento',$documento);
    }
}