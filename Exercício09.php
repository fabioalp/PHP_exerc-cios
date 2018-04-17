<form action="#" method="post">
		<fieldset>
			<label>Escreva um número:</label>
            <input type="text" name="numero" value="" />
			<input type="submit" value="Enviar" />
        </fieldset>
		</form>
		
<?php
		if(isset($_POST['numero'])){ 
		$numero = $_POST['numero'];
		$i = 0;
		for($i = 0; $i <= 10; $i++){
			echo "$numero * $i = ";
			echo $numero*$i;
			echo "<br>";
		}
		}
?>