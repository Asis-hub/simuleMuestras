<?php
namespace App\Http\Controllers;

use App\Models\Surveyor;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\JsonResponse;

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
    $error = $request->input('error_py');
    $confiabilidad = $request->input('confiabilidad_py');
    $p_necesaria = $request->input('p_necesaria_py');
    $p_restante = $request->input('p_restante_py');
    $estratos = $request->input('estratos_py');
    dd($error, $confiabilidad, $p_necesaria, $p_restante, $estratos);


    // Execute the Python script
    $process = new Process(['python', public_path('/python/cgi-enabled/formula_muestra.py')]);
    try {
        // Pass the input variables as command line arguments
        $process->mustRun(null, [$error, $confiabilidad, $p_necesaria, $p_restante, $estratos]);
        $output = $process->getOutput();
        return response()->json(['result' => trim($output)]);
    } catch (ProcessFailedException $exception) {
        return response()->json(['error' => 'An error occurred while running the script.']);
    }
}

public function calculateFormula(Request $request)
{
    $error = $request->input('error_py');
    $confiabilidad = $request->input('confiabilidad_py');
    $p_necesaria = $request->input('p_necesaria_py');
    $p_restante = $request->input('p_restante_py');
    $estratos = $request->input('estratos_py');

    // Construct the command to execute the Python script
    $command = "/usr/bin/python3.9 " . public_path('formula_muestra.py') . " $error $confiabilidad $p_necesaria $p_restante $estratos";

    // Execute the command and capture the output
    $output = shell_exec($command);
    print($output);

    // Process the output if needed
    $resultado = trim($output);

    // Prepare the JSON response
    $response = [
        'resultado' => $resultado
    ];

    return new JsonResponse($response);
}
}
