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

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  
    
  
  </head>
  <body>

  <div class="row">
            @foreach ($viewData['lista_por_edads'] as $listaporedad)
                <div class="col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="{{ route('listaporedad.show', ['id' => $listaporedad->getId()]) }}"
                                class="btn bg-primary text-white">Reporte de lista nominal por edades:
                                {{ $listaporedad->getCreatedAt() }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </body>

</html>
@endsection
