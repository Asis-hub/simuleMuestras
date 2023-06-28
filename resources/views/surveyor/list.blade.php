<!DOCTYPE html>
<html>
<header>
</header>

<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
</head>

<body>
    @extends('layouts.app')
    @section('title', $viewData['title'])
    @section('subtitle', $viewData['subtitle'])
    @section('content')
        <div class="row">
            @foreach ($viewData['surveyors'] as $surveyor)
                <div class="col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="{{ route('surveyor.show', ['id' => $surveyor->getId()]) }}"
                                class="btn bg-primary text-white">Reporte de cuotas:
                                {{ $surveyor->getCreatedAt() }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </body>

</html>
@endsection
