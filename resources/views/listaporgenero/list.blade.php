<!DOCTYPE html>
<html>
  <header>
  @extends('layouts.app')
  @section('title', $viewData['title'])
  @section('subtitle', $viewData['subtitle'])
  @section('content')
  </header>
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    
    
    <meta content="utf-8" http-equiv="encoding">

  </head>
  <body>

  <div class="row">
            @foreach ($viewData['lista_por_generos'] as $listaporgenero)
                <div class="col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="{{ route('listaporgenero.show', ['id' => $listaporgenero->getId()]) }}"
                                class="btn bg-primary text-white">Reporte de lista nominal por género:
                                {{ $listaporgenero->getCreatedAt() }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </body>
</html>
@endsection
