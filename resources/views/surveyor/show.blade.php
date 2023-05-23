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
                        {{ $viewData['surveyor']->getId() }} (${{ $viewData['surveyor']->getId() }})
                    </h5>
                    <p class="card-text">{{ $viewData['surveyor']->getId() }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
