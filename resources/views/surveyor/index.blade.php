<!DOCTYPE html>
<html>
  <header>

  </header>
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    
<meta content="utf-8" http-equiv="encoding">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous" ></script>
  </head>
  <body>
    
  <div class="header">
      <img class="logo" src="/images/d79a16b61de6b8760e0f8ed6c43ec2c0.png" alt="CEOA" style="max-height: 40px;"></h1>
      <a href="/menu">
        <span class="left"></span>
      </a>
      <h1 class="txtheader">SIMULE</h1>
    </div>

    <form id="formulario" action="/python/cgi-enabled/formula_muestra.py" method="POST">
    @method('PUT')
    <ul>
    <li>
      <h2 class="titulo">Calcular muestra de encuestadores</h2>
</li>

<li>

      <span>Error:</span>
      <input id="lb_error" name="lb_error" type="text" required="required" pattern="[0-9]+">

</li>

<li>

      <span>Confiabilidad:</span>

      <input id="lb_confiabilidad" name="lb_confiabilidad" type="text" required="required" pattern="[0-9]+">

</li>

<li>
      <span>Proporción necesaria:</span>

      <input id="lb_p_necesaria" name="lb_p_necesaria" type="text" required="required" pattern="[0-9]+">

</li>

<li>
      <span>Proporción restante:</span>

      <input id="lb_p_restante" name="lb_p_restante" type="text" required="required" pattern="[0-9]+">
</li>
<li>
      <span>Número de estratos:</span>

      <input id="lb_estratos" name="lb_estratos" type="text" required="required" pattern="[0-9]+">
</li>
<li>
      <button type="button" class="send" id="send">
        Generar
    </button>
</li>
<li>
      <span class="h2">Número de encuestadores:</span>

      <output class="resultadoCantidad" id="lb_respuesta" name ="respuesta" for="lb_respuesta"></output>

</li>
  </ul>
      
</form>



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
<style>
.titulo {
      color: #009E60;
}
.titulo2 {
      font-weight: bold;
}
.mujeres {
      color: #DC143C;
      font-weight: bold;
}
.hombres {
      color: #1434A4;
      font-weight: bold;
}

.listatotal{
      font-weight: bold;
      background-color: green;
      color: white;
      font-size: 20px;
      
}
.h2 {
      color: #009E60;
      font-weight: bold;
}
.resultadoCantidad {
  font-weight: bold;
  font-size: 18px;
}
</style>
  </body>
</html>