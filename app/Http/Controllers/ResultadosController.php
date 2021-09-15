<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Resultados;

class ResultadosController extends Controller{
    
    public function store(){
        $documento = request('documento');
        $patient = Patient::all()->where('documento',$documento);
        return view('patients.resultados')->with('patient',$patient);
    }
}
