@extends('layouts.app')@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">
    Reporte encuestadores ID: {{ $viewData['surveyor']->getId() }}
</h5>
<div class="row">
    <div class="col">
        <strong>Error:</strong> {{ $viewData['surveyor']->getError() }}
    </div>
</div>
<div class="row">
    <div class="col">
        <strong>Proporción Necesaria:</strong> {{ $viewData['surveyor']->getProporcionNecesaria() }}
    </div>
    <div class="col">
        <strong>Proporción Restante:</strong> {{ $viewData['surveyor']->getProporcionRestante() }}
    </div>
</div>
<div class="row">
    <div class="col">
        <strong>Estratos:</strong> {{ $viewData['surveyor']->getEstratos() }}
    </div>
    <div class="col">
        <strong>Encuestadores:</strong> {{ $viewData['surveyor']->getEncuestadores() }}
    </div>
</div>
<div class="row">
    <div class="col">
        <strong>Creación:</strong> {{ $viewData['surveyor']->getCreatedAt() }}
    </div>
    <div class="col">
        <strong>Última modificación:</strong> {{ $viewData['surveyor']->getUpdatedAt() }}
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
@endsection
