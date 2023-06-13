@extends('layouts.app')
    @section('title', $viewData['title'])
    @section('subtitle', $viewData['subtitle'])
    @section('content')
<!DOCTYPE html>
<html>
  <header></header>
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <title>Cálculo de Muestra Aleatora Estratificada</title>
    <script>
      function createInputs() {
        // Obtener el número de entradas del menú desplegable
        var numInputs = document.getElementById("numInputs").value;
        // Obtener el div donde se añadirán los campos de entrada
        var inputContainer = document.getElementById("inputContainer");
        // Borrar los campos de entrada existentes
        inputContainer.innerHTML = "";
        // Crear el número especificado de campos de entrada
        for (var i = 0; i < numInputs; i++) {
          var estratoLabel = document.createElement("label")
          estratoLabel.innerHTML = "Estrato " + (i + 1) + ": ";
          inputContainer.appendChild(document.createElement("br"));
          inputContainer.appendChild(estratoLabel);
          inputContainer.appendChild(document.createElement("br"));
          var niLabel = document.createElement("label");
          niLabel.for = "input" + (i + 1) + "_Ni";
          niLabel.innerHTML = "Ni " + (i + 1) + ": ";
          inputContainer.appendChild(niLabel);
          var niInput = document.createElement("input");
          niInput.type = "text";
          niInput.id = "input" + (i + 1) + "_ni";
          niInput.name = "input" + (i + 1) + "_ni";
          inputContainer.appendChild(niInput);
          inputContainer.appendChild(document.createElement("br"));
          var pLabel = document.createElement("label");
          pLabel.for = "input" + (i + 1) + "_p_variable";
          pLabel.innerHTML = "p " + (i + 1) + ": ";
          inputContainer.appendChild(pLabel);
          var pInput = document.createElement("input");
          pInput.type = "text";
          pInput.id = "input" + (i + 1) + "_p_variable";
          pInput.name = "input" + (i + 1) + "_p_variable";
          inputContainer.appendChild(pInput);
          inputContainer.appendChild(document.createElement("br"));
          var qLabel = document.createElement("label");
          qLabel.for = "input" + (i + 1) + "_q_elemento";
          qLabel.innerHTML = "q " + (i + 1) + ": ";
          inputContainer.appendChild(qLabel);
          var qInput = document.createElement("input");
          qInput.type = "text";
          qInput.id = "input" + (i + 1) + "_q_elemento";
          qInput.name = "input" + (i + 1) + "_q_elemento";
          inputContainer.appendChild(qInput);
          inputContainer.appendChild(document.createElement("br"));
          // Crear un nuevo div para los elementos de salida de esta entrada
          var outputDiv = document.createElement("div");
          outputDiv.id = "input" + (i + 1) + "Output";
          inputContainer.appendChild(outputDiv);
        }
      }
    </script>
  </head>
  <body>
    
    <form id="formulario" action="/python/cgi-enabled/formula_MAS_dinamica.py" method="POST"> @method('PUT')
    <div class="row">
      <div class="mb-3 row">
      <label class="col-form-label">B:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
          <input id="lb_B" name="lb_B" type="text" required="required" >
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">Confianza Z2:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
          <input id="lb_confianza_Z2" name="lb_confianza_Z2" type="text" required="required" >
        </div>
      </div>
    </div>
<br>
    
    <label for="numInputs">Número de estratos:</label>
      <select id="numInputs" name="numInputs" onchange="createInputs()">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
      </select>
      <div id="inputContainer">
        <!-- Campos de entrada se añadirán aquí -->
      </div>
      <button type="button" class="send" id="send"> Generar </button>

      
      <div class="row">
      <div class="mb-3 row">
      <label class="col-form-label">Ni total:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_NiTotal" name="lb_NiTotal" for="lb_NiTotal">
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">Ni*raiz total:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_ni_raiz_total" name="lb_ni_raiz_total" for="lb_ni_raiz_total">
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">Numerador:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_numerador" name="lb_numerador" for="lb_numerador">
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">B2:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_B_cuadrada" name="lb_B_cuadrada" for="lb_B_cuadrada">
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">Ni*pi*qi - Total:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_ni_pi_qi_total" name="lb_ni_pi_qi_total" for="lb_ni_pi_qi_total">
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">N2:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_ni_cuadrada" name="lb_ni_cuadrada" for="lb_ni_cuadrada">
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">Denominador</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_denominador" name="lb_denominador" for="lb_denominador">
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">n (redondeado):</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_n_redondeado" name="lb_n_redondeado" for="lb_n_redondeado">
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">n:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_n" name="lb_n" for="lb_n">
        </div>
      </div>
      <div class="mb-3 row">
      <label class="col-form-label">ni - Total:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <output class="resultadoCantidad" id="lb_ni_total" name="lb_ni_total" for="lb_ni_total">
        </div>
      </div>
    </div>
    </form>
    <div>
    
    </div>
    <script>
      $(document).ready(function() {
        $('#send').click(function() {
          // Obtener las entradas y sus valores
          const B_variable = $('[name=lb_B').val();
          const confianza_Z2 = $('[name=lb_confianza_Z2').val();
          var inputs = $("form :input[type='text']");
          var inputData = {};
          console.log("Inputs: " + inputs)
          console.log("Inputs length: " + inputs.length)
          for (var i = 0; i < inputs.length; i++) {
            inputData[inputs[i].name] = inputs[i].value;
            console.log(inputData[inputs[i].name]);
          }
          console.log(inputData);
          // Realizar la llamada AJAX y gestionar la respuesta
          $.ajax({
            url: '/python/cgi-enabled/formula_MAS_dinamica.py',
            method: 'get',
            data: {inputData, B_variable_py : B_variable, confianza_Z2_py : confianza_Z2},
            dataType: 'json',
            success: function(data) {
              console.log(data)
              // Añade los elementos de salida a los divs apropiados
              $("#lb_NiTotal").html(data[0])
              $("#lb_B_cuadrada").html(data[1])
              $("#lb_D").html(data[2])
              $("#lb_ni_cuadrada").html(data[3])
              $("#lb_ni_raiz_total").html(data[4])
              $("#lb_ni_pi_qi_total").html(data[5])
              $("#lb_numerador").html(data[6])
              $("#lb_denominador").html(data[7])
              $("#lb_n_redondeado").html(data[8])
              $("#lb_n").html(data[9])
              $("#lb_ni_total").html(data[10])
            }
          });
        });
      });
    </script>
  </body>
</html>
@endsection