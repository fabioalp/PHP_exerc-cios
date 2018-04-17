<form method='post' name='exercicios'  action=''>
Escreva o número que deseja saber o mês:<br>
<input type='text' name='numero' /><br>
<input type='submit' value='enviar' />
</form>

<?php
$numero = $_POST['numero'];
if ($numero == 1){
	echo "janeiro";
}else if($numero == 2){
	echo "Fevereiro";
}else if($numero == 3){
	echo "Março";
}else if($numero == 4){
	echo "Abril";
}else if($numero == 5){
	echo "Maio";
}else if($numero == 6){
	echo "Junho";
}else if($numero == 7){
	echo "Julho";
}else if($numero == 8){
	echo "Agosto";
}else if($numero == 9){
	echo "Setembro";
}else if($numero == 10){
	echo "Outubro";
}else if($numero == 11){
	echo "Novembro";
}else if($numero == 12){
	echo "Dezembro";
}else{
	echo "Não existe mês com este número";
}

?>