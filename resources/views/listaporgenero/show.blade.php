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
                        Reporte Lista nominal por género #{{ $viewData['lista_por_generos']->getId() }}
                    </h5>
                    <div class="row">
                        <div class="col">
                            <strong>Entidad:</strong> {{ $viewData['lista_por_generos']->getEntidad() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Municipio:</strong> {{ $viewData['lista_por_generos']->getMunicipio() }}
                        </div>
                        <div class="col">
                            <strong>URL de lista por género:</strong> {{ $viewData['lista_por_generos']->getUrlListaPorGenero() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Lista de Mujeres:</strong> {{ $viewData['lista_por_generos']->getListaMujeres() }}
                        </div>
                        <div class="col">
                            <strong>Lista de Hombres:</strong> {{ $viewData['lista_por_generos']->getListaHombres() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Lista total:</strong> {{ $viewData['lista_por_generos']->getListaTotal() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Creación:</strong> {{ $viewData['lista_por_generos']->getCreatedAt() }}
                        </div>
                        <div class="col">
                            <strong>Última modificación:</strong> {{ $viewData['lista_por_generos']->getUpdatedAt() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Autor:</strong> {{ $viewData['lista_por_generos']->getAutor() }}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="{{ route('listaporgenero.export', $viewData['lista_por_generos']->getId()) }}" class="btn btn-primary">Exportar a Excel</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('listaporgenero.edit', $viewData['lista_por_generos']->getId()) }}" class="btn btn-primary">Editar campos</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
