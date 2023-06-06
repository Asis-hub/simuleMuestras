<!DOCTYPE html>
<html>
<header>
    </header>
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
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
                                class="btn bg-primary text-white">{{ $surveyor->getId() }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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
                    <form id="formulario" action="/python/cgi-enabled/formula_muestra.py" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Error:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                <input id="lb_error" name="lb_error" type="text" required="required" pattern="[0-9]+">                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Confiabilidad:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                <input id="lb_confiabilidad" name="lb_confiabilidad" type="text" required="required"
                                    pattern="[0-9]+">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Proporción necesaria:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                <input id="lb_p_necesaria" name="lb_p_necesaria" type="text" required="required"
                                    pattern="[0-9]+">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Proporción restante:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                <input id="lb_p_restante" name="lb_p_restante" type="text" required="required" pattern="[0-9]+">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Número de estratos:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                <input id="lb_estratos" name="lb_estratos" type="text" required="required" pattern="[0-9]+">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <button type="button" class="send" id="send">
                                    Generar
                                </button>
                                <label class="col-form-label">Número de encuestadores:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                <output class="resultadoCantidad" id="lb_respuesta" name="respuesta"
                                    for="lb_respuesta"></output>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <script>
                        $(document).ready(function() {
                            $('#send').click(function() {

                                const error = $('[name=lb_error').val();
                                const confiabilidad = $('[name=lb_confiabilidad').val();
                                const p_necesaria = $('[name=lb_p_necesaria').val();
                                const p_restante = $('[name=lb_p_restante').val();
                                const estratos = $('[name=lb_estratos').val();

                                $.ajax({
                                    url: '/python/cgi-enabled/formula_muestra.py',
                                    method: 'get',
                                    data: {
                                        error_py: error,
                                        confiabilidad_py: confiabilidad,
                                        p_necesaria_py: p_necesaria,
                                        p_restante_py: p_restante,
                                        estratos_py: estratos
                                    },
                                    dataType: 'text',
                                    success: function(data) {
                                        $("#lb_respuesta").html(data)
                                        console.log(data)
                                    }
                                });
                            });
                        });
                    </script>
    </body>

    </html>
