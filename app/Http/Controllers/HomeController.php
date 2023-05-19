<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "SIMULE - Centro de Estudios de Opinión y Análisis";
return view('home.index')->with("viewData", $viewData);
}
public function about()
{
    $viewData = [];
    $viewData["title"] = "Acerca de - Centro de Estudios de Opinión y Análisis";
    $viewData["subtitle"] = "Acerca de";
    $viewData["description"] = "Universidad Veracruzana ...";
    $viewData["author"] = "CEOA";
    return view('home.about')->with("viewData", $viewData);
}
}