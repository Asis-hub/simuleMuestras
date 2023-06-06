<?php
namespace App\Http\Controllers;

use App\Models\Surveyor;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

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

    public function calculateSurveyor(Request $request)
    {
        $error = $request->input('lb_error');
        $confiabilidad = $request->input('lb_confiabilidad');
        $p_necesaria = $request->input('lb_p_necesaria');
        $p_restante = $request->input('lb_p_restante');
        $estratos = $request->input('lb_estratos');
        
        // Execute the Python script
        $process = new Process(['python', public_path('cgi-enabled/formula_muestra.py')]);
        try {
            $process->mustRun(null, ['error_py' => $error, 'confiabilidad_py' => $confiabilidad, 'p_necesaria_py' => $p_necesaria, 'p_restante_py' => $p_restante, 'estratos_py' => $estratos]);
            $output = $process->getOutput();
            return response()->json(['result' => trim($output)]);
        } catch (ProcessFailedException $exception) {
            return response()->json(['error' => 'An error occurred while running the script.']);
        }
    }
}
