@section('title', $viewData['title'])
@section('content')
    <div class="card">
        <div class="card mb-4">
            <div class="card-header">
                Crear nuevo reporte de muestras
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <ul class="alert alert-danger list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="POST" action="{{ route('admin.user.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Error:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="lb_error" value="{{ old('lb_error') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Confiabilidad:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="lb_confiabilidad" value="{{ old('lb_confiabilidad') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Proporción necesaria:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="lb_p_necesaria" value="{{ old('lb_p_necesaria') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Proporción restante:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="lb_p_restante" value="{{ old('lb_p_restante') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Número de estratos:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="lb_estratos" value="{{ old('lb_estratos') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <button type="button" class="send" id="send">
                        Generar
                        </button>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Número de encuestadores:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <output class="resultadoCantidad" id="lb_respuesta" name ="respuesta" for="lb_respuesta"></output>
                                </div>
                            </div>
                        </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            
            </form>
        </div>
    </div>
    </div>
@endsection

<script>
$(document).ready(function(){
  $('#send').click(function(){

    const error = $('[name=lb_error').val();
      const confiabilidad = $('[name=lb_confiabilidad').val();
      const p_necesaria = $('[name=lb_p_necesaria').val();
      const p_restante = $('[name=lb_p_restante').val();
      const estratos = $('[name=lb_estratos').val();

        $.ajax({
          url : '/python/cgi-enabled/formula_muestra.py',
          method : 'get',
          data : {error_py : error, confiabilidad_py : confiabilidad, p_necesaria_py : p_necesaria, 
          p_restante_py : p_restante, estratos_py : estratos},
          dataType : 'text',
          success : function(data)
          {
            $("#lb_respuesta").html(data)
            console.log(data)
          }
      });    
});
});
</script>
