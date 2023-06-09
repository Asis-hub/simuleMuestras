<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaPorEdadController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "SIMULE - CEOA";
        $viewData["subtitle"] = "Cálculo de lista nominal por edad";
        //$viewData["surveyors"] = Surveyor::all();
        return view('listaporedad.index')->with("viewData", $viewData);
    }
}
