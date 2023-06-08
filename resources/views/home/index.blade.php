@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <a class="nav-link active" href="{{ route('surveyor.index') }}">Reporte de calculo de encuestadores</a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a class="nav-link active" href="{{ route('listaporgenero.index') }}">Cálculo de lista nominal por género</a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            Botón 3 - Placeholder
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            Botón 4 - Placeholder
        </div>
    </div>
@endsection
