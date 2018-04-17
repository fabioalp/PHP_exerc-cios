<form name='form' method='post' action=' '>
Escreva o seu nome:<br>
<input type='text' name='nome' /><br>
Escreva a sua idade: <br>
<input type='text' name='valor' /><br>
masculino
<input type='radio' name='sexo' value="Masculino"><br>
feminino
<input type='radio' name='sexo' value="Feminino">


<br>
<input type="submit" value="enviar" />
</form>

<?php
$valor = $_POST['valor'];
$sexo = $_POST['sexo'];

if (($sexo == Feminino) && ($valor < 25)){
echo "$nome, aceita!";
}else {
echo "$nome, não aceita!";
}
?> 