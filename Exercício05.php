<form name='form' method='post' action=' '>
Escreva tr�s valores:  <br>
1� valor:  <br>
<input type='text' name='valor1' /><br>
2� valor: <br>
<input type='text' name='valor2' /><br>
3� valor: <br>
<input type='text' name='valor3' /><br>
<input type="submit" value="enviar" />
</form>

<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];

if($valor1 == $valor2 && $valor2 == $valor3){
echo "O tri�ngulo equil�tero!";
}else if(($valor1 == $valor2 && $valor2 <> $valor3) or ($valor1 == $valor3) && ($valor3 <> $valor2)){
echo "O tri�ngulo � is�sceles!";
}else{
echo "O tri�ngulo � escaleno!";
}
?>
