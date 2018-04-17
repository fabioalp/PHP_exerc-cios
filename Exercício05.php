<form name='form' method='post' action=' '>
Escreva três valores:  <br>
1º valor:  <br>
<input type='text' name='valor1' /><br>
2º valor: <br>
<input type='text' name='valor2' /><br>
3º valor: <br>
<input type='text' name='valor3' /><br>
<input type="submit" value="enviar" />
</form>

<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];

if($valor1 == $valor2 && $valor2 == $valor3){
echo "O triângulo equilátero!";
}else if(($valor1 == $valor2 && $valor2 <> $valor3) or ($valor1 == $valor3) && ($valor3 <> $valor2)){
echo "O triângulo é isósceles!";
}else{
echo "O triângulo é escaleno!";
}
?>
