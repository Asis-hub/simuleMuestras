<?php

namespace App\Http\Controllers;
use App\Models\ListaPorEdad;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ListaPorEdadExport;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class ListaPorEdadController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "SIMULE - CEOA";
        $viewData["subtitle"] = "Cálculo de lista nominal por edad";
        $viewData["lista_por_edads"] = ListaPorEdad::all();
        return view('listaporedad.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $lista_por_edad = ListaPorEdad::findOrFail($id);
        $viewData["title"] = $lista_por_edad->getId()." - Reporte de cálculo de lista nominal por edad.";
        $viewData["subtitle"] = "Detalles";
        $viewData["lista_por_edads"] = $lista_por_edad;
        return view('listaporedad.show')->with("viewData", $viewData);
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'lb_entidad' => ['required', 'string', 'max:255'],
            'lb_municipio' => ['required', 'string', 'max:255'],
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
            'lb_ProporcionMujeres_35_49' => ['required', 'string', 'max:255'],
            'lb_ProporcionHombres_35_49' => ['required', 'string', 'max:255'],
            'lb_ProporcionMujeres_50_64' => ['required', 'string', 'max:255'],
            'lb_ProporcionHombres_50_64' => ['required', 'string', 'max:255'],
            'lb_ProporcionMujeres_65' => ['required', 'string', 'max:255'],
            'lb_ProporcionHombres_65' => ['required', 'string', 'max:255'],
            'lb_input_numEncuestadores' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres_18_24' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres_18_24' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres_25_34' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres_25_34' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres_35_49' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres_35_49' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres_50_64' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres_50_64' => ['required', 'string', 'max:255'],
            'lb_encuestadoresMujeres_65' => ['required', 'string', 'max:255'],
            'lb_encuestadoresHombres_65' => ['required', 'string', 'max:255']
        ]);
        if (auth()->check()) {
            $user = auth()->user();
            $userName = $user->name;
        }

        $listaporedad = new ListaPorEdad();
        $listaporedad->entidad = $validatedData['lb_entidad'];
        $listaporedad->municipio = $validatedData['lb_municipio'];
        $listaporedad->url_lista_por_edad = $validatedData['lb_URL_ListaPorEdad'];
        $listaporedad->lista_total = $validatedData['lb_ListaNominalCalculada'];
        $listaporedad->lista_mujeres_18_24 = $validatedData['lb_ListaNominalMujeres_18_24'];
        $listaporedad->lista_hombres_18_24 = $validatedData['lb_ListaNominalHombres_18_24'];
        $listaporedad->lista_mujeres_25_34 = $validatedData['lb_ListaNominalMujeres_25_34'];
        $listaporedad->lista_hombres_25_34 = $validatedData['lb_ListaNominalHombres_25_34'];
        $listaporedad->lista_mujeres_35_49 = $validatedData['lb_ListaNominalMujeres_35_49'];
        $listaporedad->lista_hombres_35_49 = $validatedData['lb_ListaNominalHombres_35_49'];
        $listaporedad->lista_mujeres_50_64 = $validatedData['lb_ListaNominalMujeres_50_64'];
        $listaporedad->lista_hombres_50_64 = $validatedData['lb_ListaNominalHombres_50_64'];
        $listaporedad->lista_mujeres_65_mas = $validatedData['lb_ListaNominalMujeres_65'];
        $listaporedad->lista_hombres_65_mas = $validatedData['lb_ListaNominalHombres_65'];
        $listaporedad->proporcion_mujeres_18_24 = $validatedData['lb_ProporcionMujeres_18_24'];
        $listaporedad->proporcion_hombres_18_24 = $validatedData['lb_ProporcionHombres_18_24'];
        $listaporedad->proporcion_mujeres_25_34 = $validatedData['lb_ProporcionMujeres_25_34'];
        $listaporedad->proporcion_hombres_25_34 = $validatedData['lb_ProporcionHombres_25_34'];
        $listaporedad->proporcion_mujeres_35_49 = $validatedData['lb_ProporcionMujeres_35_49'];
        $listaporedad->proporcion_hombres_35_49 = $validatedData['lb_ProporcionHombres_35_49'];
        $listaporedad->proporcion_mujeres_50_64 = $validatedData['lb_ProporcionMujeres_50_64'];
        $listaporedad->proporcion_hombres_50_64 = $validatedData['lb_ProporcionHombres_50_64'];
        $listaporedad->proporcion_mujeres_65_mas = $validatedData['lb_ProporcionMujeres_65'];
        $listaporedad->proporcion_hombres_65_mas = $validatedData['lb_ProporcionHombres_65'];
        $listaporedad->encuestadores_total = $validatedData['lb_input_numEncuestadores'];
        $listaporedad->encuestadores_mujeres_18_24 = $validatedData['lb_encuestadoresMujeres_18_24'];
        $listaporedad->encuestadores_hombres_18_24 = $validatedData['lb_encuestadoresHombres_18_24'];
        $listaporedad->encuestadores_mujeres_25_34 = $validatedData['lb_encuestadoresMujeres_25_34'];
        $listaporedad->encuestadores_hombres_25_34 = $validatedData['lb_encuestadoresHombres_25_34'];
        $listaporedad->encuestadores_mujeres_35_49 = $validatedData['lb_encuestadoresMujeres_35_49'];
        $listaporedad->encuestadores_hombres_35_49 = $validatedData['lb_encuestadoresHombres_35_49'];
        $listaporedad->encuestadores_mujeres_50_64 = $validatedData['lb_encuestadoresMujeres_50_64'];
        $listaporedad->encuestadores_hombres_50_64 = $validatedData['lb_encuestadoresHombres_50_64'];
        $listaporedad->encuestadores_mujeres_65_mas = $validatedData['lb_encuestadoresMujeres_65'];
        $listaporedad->encuestadores_hombres_65_mas = $validatedData['lb_encuestadoresHombres_65'];
        $listaporedad->autor = $userName;
        $listaporedad->save();

        // Return a response or redirect to another page
        return response()->json(['message' => 'Data stored successfully']);
    }

    public function editFields($id)
    {
        $listaporedad = ListaPorEdad::findOrFail($id);

        // Perform any necessary logic for editing the fields

        return view('listaporedad.edit', compact('listaporedad'));
    }

    public function exportToExcel($id)
    {
        $listaporedad = ListaPorEdad::findOrFail($id);
        $fileName = 'reporteListaPorRangosEdadGenero_' . $listaporedad->getId() . '_' . Carbon::parse($listaporedad->getCreatedAt())->format('Ymd_His') . '.xlsx';
    
        return Excel::download(new ListaPorEdadExport($listaporedad), $fileName);
    }
}
