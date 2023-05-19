<?php
namespace App\Http\Controllers;

use App\Models\Surveyor;
use Illuminate\Http\Request;

class SurveyorController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "SIMULE - CEOA";
        $viewData["subtitle"] = "Lista de reportes de calculo de encuestadores";
        $viewData["surveyors"] = Surveyor::all();
        return view('surveyor.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $surveyor = Surveyor::findOrFail($id);
        $viewData["title"] = $surveyor->getId()." - Reporte de cálculo de encuestadores";
        $viewData["subtitle"] = "Detalles";
        $viewData["surveyor"] = $surveyor;
        return view('surveyor.show')->with("viewData", $viewData);
    }
}
