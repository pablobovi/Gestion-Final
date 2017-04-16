
<form action="liquidacion_alta_ok.php" method="POST" class="form-inline" role="form" onsumbit="return verificar();" onsubmit="validar();">
	<div>Fecha liquidaci&oacute;n- Seleccione Fecha</div>
	<br>
	<div class="form-group">
		<label class="sr-only" for="">Liquidar/empleado</label>
		<input type="date" class="form-control" id="inputperiodo" name="fechaliquidacion" placeholder="Input field">
	</div>
	<input type="hidden" name="verifica" id="inputverifica" class="form-control" value="">
	<button type="submit" id="enviaform" class="btn btn-info">Liquidar Periodo</button>
	<br><br>
	
</form>


 <script type="text/javascript">
    $(document).ready(function(){
    var inputperiodojs = $('#inputperiodo').val();
    $.post("includes/validarperiodo.php", { inputperiodojs: inputperiodojs }, function(data){
                $("#inputverifica").val(data);
            });
    });

    </script>
    <script type="text/javascript">
    $('#inputperiodo').on('change',function(){
    var inputperiodojs = $('#inputperiodo').val();
    $.post("includes/validarperiodo.php", { inputperiodojs: inputperiodojs }, function(data){
                $("#inputverifica").val(data);
            });
    });
    </script>