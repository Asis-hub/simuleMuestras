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
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'lb_municipio' => ['required', 'string', 'max:255'],
            'lb_entidad' => ['required', 'string', 'max:255'],
            'lb_URL_ListaPorEdad' => ['required', 'string', 'max:255'],
            'lb_ListaNominalCalculada' => ['required', 'string', 'max:255'],
            'lb_ListaNominalMujeres_18_24' => ['required', 'string', 'max:255'],
            'lb_ListaNominalHombres_18_24' => ['required', 'string', 'max:255'],
            'lb_ListaNominalMujeres_25_34' => ['required', 'string', 'max:255'],
            'lb_ListaNominalHombres_25_34' => ['required', 'string', 'max:255'],
            'lb_ListaNominalMujeres_35_49' => ['required', 'string', 'max:255'],
            'lb_ListaNominalHombres_35_49' => ['required', 'string', 'max:255'],
            'lb_ListaNominalMujeres_50_64' => ['required', 'string', 'max:255'],
            'lb_ListaNominalHombres_50_64' => ['required', 'string', 'max:255'],
            'lb_ListaNominalMujeres_65' => ['required', 'string', 'max:255'],
            'lb_ListaNominalHombres_65' => ['required', 'string', 'max:255'],
            'lb_ProporcionMujeres_18_24' => ['required', 'string', 'max:255'],
            'lb_ProporcionHombres_18_24' => ['required', 'string', 'max:255'],
            'lb_ProporcionMujeres_25_34' => ['required', 'string', 'max:255'],
            'lb_ProporcionHombres_25_34' => ['required', 'string', 'max:255'],
            'lb_ProporcionMujeres35_49' => ['required', 'string', 'max:255'],
            'lb_ProporcionHombres35_49' => ['required', 'string', 'max:255'],
            'lb_ProporcionMujeres50_64' => ['required', 'string', 'max:255'],
            'lb_ProporcionHombres50_64' => ['required', 'string', 'max:255'],
            'lb_ProporcionMujeres_65' => ['required', 'string', 'max:255'],
            'lb_ProporcionHombres_65' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres_18_24' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres_18_24' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres_25_34' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres_25_34' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres35_49' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres35_49' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres50_64' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres50_64' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres_65' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres_65' => ['required', 'string', 'max:255'],
        ]);
        if (auth()->check()) {
            $user = auth()->user();
            $userName = $user->name;
        }

        $listaporgenero = new ListaPorEdad();
        $listaporgenero->entidad = $validatedData['lb_entidad'];
        $listaporgenero->municipio = $validatedData['lb_municipio'];
        $listaporgenero->url_lista_por_edad = $validatedData['lb_URL_ListaPorEdad'];
        $listaporgenero->lista_total = $validatedData['lb_ListaNominalHombres'];
        $listaporgenero->lista_mujeres_18_24 = $validatedData['lb_ListaNominalMujeres_18_24'];
        $listaporgenero->lista_hombres_18_24 = $validatedData['lb_ListaNominalHombres_18_24'];
        $listaporgenero->lista_mujeres_25_34 = $validatedData['lb_ListaNominalMujeres_25_34'];
        $listaporgenero->lista_hombres_25_34 = $validatedData['lb_ListaNominalHombres_25_34'];
        $listaporgenero->lista_mujeres_35_49 = $validatedData['lb_ListaNominalMujeres_35_49'];
        $listaporgenero->lista_hombres_35_49 = $validatedData['lb_ListaNominalHombres_35_49'];
        $listaporgenero->lista_mujeres_50_64 = $validatedData['lb_ListaNominalMujeres_50_64'];
        $listaporgenero->lista_hombres_50_64 = $validatedData['lb_ListaNominalHombres_50_64'];
        $listaporgenero->lista_mujeres_65 = $validatedData['lb_ListaNominalMujeres_65'];
        $listaporgenero->lista_hombres_65 = $validatedData['lb_ListaNominalHombres_65'];
        $listaporgenero->proporcion_mujeres_18_24 = $validatedData['lb_ProporcionMujeres_18_24'];
        $listaporgenero->proporcion_hombres_18_24 = $validatedData['lb_ProporcionHombres_18_24'];
        $listaporgenero->proporcion_mujeres_25_34 = $validatedData['lb_ProporcionMujeres_25_34'];
        $listaporgenero->proporcion_hombres_25_34 = $validatedData['lb_ProporcionHombres_25_34'];
        $listaporgenero->proporcion_mujeres_35_49 = $validatedData['lb_ProporcionMujeres_35_49'];
        $listaporgenero->proporcion_hombres_35_49 = $validatedData['lb_ProporcionHombres_35_49'];
        $listaporgenero->proporcion_mujeres_50_64 = $validatedData['lb_ProporcionMujeres_50_64'];
        $listaporgenero->proporcion_hombres_50_64 = $validatedData['lb_ProporcionHombres_50_64'];
        $listaporgenero->proporcion_mujeres_65 = $validatedData['lb_ProporcionMujeres_65'];
        $listaporgenero->proporcion_hombres_65 = $validatedData['lb_ProporcionHombres_65'];
        $listaporgenero->encuestadores_mujeres_18_24 = $validatedData['lb_encuestadoresMujeres_18_24'];
        $listaporgenero->encuestadores_hombres_18_24 = $validatedData['lb_encuestadoresHombres_18_24'];
        $listaporgenero->encuestadores_mujeres_25_34 = $validatedData['lb_encuestadoresMujeres_25_34'];
        $listaporgenero->encuestadores_hombres_25_34 = $validatedData['lb_encuestadoresHombres_25_34'];
        $listaporgenero->encuestadores_mujeres_35_49 = $validatedData['lb_encuestadoresMujeres_35_49'];
        $listaporgenero->encuestadores_hombres_35_49 = $validatedData['lb_encuestadoresHombres_35_49'];
        $listaporgenero->encuestadores_mujeres_50_64 = $validatedData['lb_encuestadoresMujeres_50_64'];
        $listaporgenero->encuestadores_hombres_50_64 = $validatedData['lb_encuestadoresHombres_50_64'];
        $listaporgenero->encuestadores_mujeres_65 = $validatedData['lb_encuestadoresMujeres_65'];
        $listaporgenero->encuestadores_hombres_65 = $validatedData['lb_encuestadoresHombres_65'];
        $listaporgenero->autor = $userName;
        $listaporgenero->save();

        // Return a response or redirect to another page
        return response()->json(['message' => 'Data stored successfully']);
    }
}
