@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        Reporte Lista nominal por genero #{{ $viewData['lista_por_edads']->getId() }}
                    </h5>
                    <div class="row">
                        <div class="col">
                            <strong>Entidad:</strong> {{ $viewData['lista_por_edads']->getEntidad() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Municipio:</strong> {{ $viewData['lista_por_edads']->getMunicipio() }}
                        </div>
                        <div class="col">
                            <strong>URL de lista por género:</strong> {{ $viewData['lista_por_edads']->getUrlListaPorGenero() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Lista total:</strong> {{ $viewData['lista_por_edads']->getListaTotal() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Lista de Mujeres 18 a 24:</strong> {{ $viewData['lista_por_edads']->getListaMujeres_18_24() }}
                        </div>
                        <div class="col">
                            <strong>Lista de Hombres 18 a 24:</strong> {{ $viewData['lista_por_edads']->getListaHombres_18_24() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Lista de Mujeres 25 a 34:</strong> {{ $viewData['lista_por_edads']->getListaMujeres_25_34() }}
                        </div>
                        <div class="col">
                            <strong>Lista de Hombres 25 a 34:</strong> {{ $viewData['lista_por_edads']->getListaHombres_25_34() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Lista de Mujeres 35 a 49:</strong> {{ $viewData['lista_por_edads']->getListaMujeres_35_49() }}
                        </div>
                        <div class="col">
                            <strong>Lista de Hombres 35 a 49:</strong> {{ $viewData['lista_por_edads']->getListaHombres_35_49() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Lista de Mujeres 50 a 64:</strong> {{ $viewData['lista_por_edads']->getListaMujeres_50_64() }}
                        </div>
                        <div class="col">
                            <strong>Lista de Hombres 50 a 64:</strong> {{ $viewData['lista_por_edads']->getListaHombres_50_64() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Lista de Mujeres 65 o más:</strong> {{ $viewData['lista_por_edads']->getListaMujeres_65_mas() }}
                        </div>
                        <div class="col">
                            <strong>Lista de Hombres 65 o más:</strong> {{ $viewData['lista_por_edads']->getListaHombres_65_mas() }}
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <strong>Proporción de Mujeres 18 a 24:</strong> {{ $viewData['lista_por_edads']->getProporcionMujeres_18_24() }}
                        </div>
                        <div class="col">
                            <strong>Proporción de Hombres 18 a 24:</strong> {{ $viewData['lista_por_edads']->getProporcionHombres_18_24() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Proporción de Mujeres 25 a 34:</strong> {{ $viewData['lista_por_edads']->getProporcionMujeres_25_34() }}
                        </div>
                        <div class="col">
                            <strong>Proporción de Hombres 25 a 34:</strong> {{ $viewData['lista_por_edads']->getProporcionHombres_25_34() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Proporción de Mujeres 35 a 49:</strong> {{ $viewData['lista_por_edads']->getProporcionMujeres_35_49() }}
                        </div>
                        <div class="col">
                            <strong>Proporción de Hombres 35 a 49:</strong> {{ $viewData['lista_por_edads']->getProporcionHombres_35_49() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Proporción de Mujeres 50 a 64:</strong> {{ $viewData['lista_por_edads']->getProporcionMujeres_50_64() }}
                        </div>
                        <div class="col">
                            <strong>Proporción de Hombres 50 a 64:</strong> {{ $viewData['lista_por_edads']->getProporcionHombres_50_64() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Proporción de Mujeres 65 o más:</strong> {{ $viewData['lista_por_edads']->getProporcionMujeres_65_mas() }}
                        </div>
                        <div class="col">
                            <strong>Proporción de Hombres 65 o más:</strong> {{ $viewData['lista_por_edads']->getProporcionHombres_65_mas() }}
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <strong>Encuestadoras Mujeres 18 a 24:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresMujeres_18_24() }}
                        </div>
                        <div class="col">
                            <strong>Encuestadores Hombres 18 a 24:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresHombres_18_24() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Encuestadoras Mujeres 25 a 34:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresMujeres_25_34() }}
                        </div>
                        <div class="col">
                            <strong>Encuestadores Hombres 25 a 34:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresHombres_25_34() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Encuestadoras Mujeres 35 a 49:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresMujeres_35_49() }}
                        </div>
                        <div class="col">
                            <strong>Encuestadores Hombres 35 a 49:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresHombres_35_49() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Encuestadoras Mujeres 50 a 64:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresMujeres_50_64() }}
                        </div>
                        <div class="col">
                            <strong>Encuestadores Hombres 50 a 64:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresHombres_50_64() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Encuestadores Mujeres 65 o más:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresMujeres_65_mas() }}
                        </div>
                        <div class="col">
                            <strong>Encuestadores Hombres 65 o más:</strong> {{ $viewData['lista_por_edads']->getEncuestadoresHombres_65_mas() }}
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <strong>Autor:</strong> {{ $viewData['lista_por_edads']->getAutor() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Creación:</strong> {{ $viewData['lista_por_edads']->getCreatedAt() }}
                        </div>
                        <div class="col">
                            <strong>Última modificación:</strong> {{ $viewData['lista_por_edads']->getUpdatedAt() }}
                        </div>
                    </div>
                    

                    
                </div>
            </div>
        </div>
    </div>
@endsection
