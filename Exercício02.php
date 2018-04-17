<form name='form' method='post' action=' '>
Escreva um valor: <br>
<input type='text' name='valor' /><br>
<br>
<input type="submit" value="enviar" />
</form>

<?php
$valor = $_POST['valor'];

if($valor % 10 == 0){
echo "O valor é divisível por 10!";
}else if($valor % 5 == 0){
echo "O valor é divisível por 5!";
}else if($valor % 2 == 0){
echo "O valor é divisível por 2!";
}else{
echo "O valor não é divisível por 10, 5 ou 2!";
}
?>