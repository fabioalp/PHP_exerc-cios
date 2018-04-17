<form name='form' method='post' action=' '>
Digite 3 valores: <br>
1º valor: <br>
<input type='text' name='valor1' /><br>
2º valor: <br>
<input type='text' name='valor2' /><br>
3º valor: <br>
<input type='text' name='valor3' /><br>
<input type="submit" value="enviar" />
</form>

<?php
	$valor1 = (isset($_POST['valor1']) ? $_POST['valor1'] : null) ;
	$valor2 = (isset($_POST['valor2']) ? $_POST['valor2'] : null);
	$valor3 = (isset($_POST['valor3']) ? $_POST['valor3'] : null);
	if (($valor1<$valor2) && ($valor2<$valor3)) {
		echo "$valor3, $valor2 e $valor1";
	}else if (($valor1<$valor3) && ($valor3<$valor2)) {
		echo "$valor2, $valor3 e $valor1";
	}else if (($valor2<$valor1) && ($valor1<$valor3)) {
		echo "$valor3, $valor1 e $valor2";
	}else if (($valor2<$valor3) && ($valor3<$valor1)) {
		echo "$valor1, $valor3 e $valor2";
	}else if (($valor3<$valor1) && ($valor1<$valor2)) {
		echo "$valor1, $valor3 e $valor2";
	}else if (($valor2<$valor1) && ($valor3<$valor2)) {
		echo "$valor1, $valor2 e $valor3";
	}else if (($valor1<$valor2) && ($valor3<$valor2)) {
		echo "$valor2, $valor1 e $valor3";
	}
?>