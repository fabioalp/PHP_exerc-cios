<form name='form' method='post' action=' '>
Escreva um valor: <br>
<input type='text' name='valor1' /><br>
Escreva outro valor: <br>
<input type='text' name='valor2' />
<br>
<input type="submit" value="enviar" />
</form>

<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

$soma = $valor1+$valor2;

if($soma>20){
$resp = $soma+8;
echo $resp ;

}else if($soma<=20){
$resp = $soma-5;
echo $resp ;

}
?>