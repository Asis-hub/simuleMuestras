<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuestraEstratificadaController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "SIMULE - CEOA";
        $viewData["subtitle"] = "Cálculo de muestra aleatoria estratificada";
        //$viewData["surveyors"] = Surveyor::all();
        return view('muestraestratificada.index')->with("viewData", $viewData);
    }
}
