<?php

namespace App\Http\Controllers;

use App\Models\ListaPorGenero;
use Illuminate\Http\Request;

class ListaPorGeneroController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "SIMULE - CEOA";
        $viewData["subtitle"] = "Cálculo de lista nominal por género";
        $viewData["lista_por_generos"] = ListaPorGenero::all();
        return view('listaporgenero.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $lista_por_generos = ListaPorGenero::findOrFail($id);
        $viewData["title"] = $lista_por_generos->getId()." - Reporte de cálculo de lista nominal por edad.";
        $viewData["subtitle"] = "Detalles";
        $viewData["lista_por_generos"] = $lista_por_generos;
        return view('listaporgenero.show')->with("viewData", $viewData);
    }
    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'lb_municipio' => ['required', 'string', 'max:255'],
            'lb_entidad' => ['required', 'string', 'max:255'],
            'lb_URL_ListaNominal' => ['required', 'string', 'max:255'],
            'lb_ListaNominalCalculada' => ['required', 'string', 'max:255'],
            'lb_ListaNominalMujeres' => ['required', 'string', 'max:255'],
            'lb_ListaNominalHombres' => ['required', 'string', 'max:255']
        ]);
        if (auth()->check()) {
            $user = auth()->user();
            $userName = $user->name;
        }

        // Store the data in the database or perform any desired operations
        // You can access the validated data using $validatedData array

        // Example: Store the data in a Surveyor model
        $listaporgenero = new ListaPorGenero();
        $listaporgenero->entidad = $validatedData['lb_entidad'];
        $listaporgenero->municipio = $validatedData['lb_municipio'];
        $listaporgenero->url_lista_por_genero = $validatedData['lb_URL_ListaNominal'];
        $listaporgenero->lista_mujeres = $validatedData['lb_ListaNominalMujeres'];
        $listaporgenero->lista_hombres = $validatedData['lb_ListaNominalHombres'];
        $listaporgenero->lista_total = $validatedData['lb_ListaNominalCalculada'];
        $listaporgenero->autor = $userName;
        $listaporgenero->save();

        // Return a response or redirect to another page
        return response()->json(['message' => 'Data stored successfully']);
    }
}
