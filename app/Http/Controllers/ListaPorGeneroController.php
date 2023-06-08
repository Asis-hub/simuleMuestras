<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaPorGeneroController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "SIMULE - CEOA";
        $viewData["subtitle"] = "Cálculo de lista nominal por género";
        //$viewData["surveyors"] = Surveyor::all();
        return view('listaporgenero.index')->with("viewData", $viewData);
    }
    //public function show($id)
    //{
    //    $viewData = [];
    //    $surveyor = Surveyor::findOrFail($id);
    //    $viewData["title"] = $surveyor->getId()." - Reporte de cálculo de encuestadores";
    //    $viewData["subtitle"] = "Detalles";
    //    $viewData["surveyor"] = $surveyor;
    //    return view('surveyor.show')->with("viewData", $viewData);
    //}
}
