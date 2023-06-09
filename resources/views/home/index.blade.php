@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <a class="nav-link active" href="{{ route('surveyor.index') }}">Cálculo de cuotas</a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a class="nav-link active" href="{{ route('listaporgenero.index') }}">Cálculo de lista nominal por género</a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a class="nav-link active" href="{{ route('listaporedad.index') }}">Cálculo de lista nominal por rango de edad</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <a class="nav-link active" href="{{ route('listaporedad.index') }}">Cálculo de lista nominal por rango de edad</a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a class="nav-link active" href="{{ route('muestraestratificada.index') }}">Cálculo de la muestra aleatoria estratificada</a>
        </div>
    </div>
    
@endsection
