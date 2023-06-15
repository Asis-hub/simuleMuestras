<?php

namespace App\Http\Controllers;
use App\Models\ListaPorEdad;
use Illuminate\Http\Request;

class ListaPorEdadController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "SIMULE - CEOA";
        $viewData["subtitle"] = "Cálculo de lista nominal por edad";
        $viewData["lista_por_edad"] = ListaPorEdad::all();
        return view('listaporedad.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $lista_por_edad = ListaPorEdad::findOrFail($id);
        $viewData["title"] = $lista_por_edad->getId()." - Reporte de cálculo de lista nominal por genero.";
        $viewData["subtitle"] = "Detalles";
        $viewData["lista_por_edad"] = $lista_por_edad;
        return view('listaporedad.show')->with("viewData", $viewData);
    }
    
}
