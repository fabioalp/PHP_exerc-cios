<form action="#" method="POST">
		<fieldset>
			<label>Digite o primeiro n�mero:</label>
            <input type="text" name="valor1" value="" /><br>
			<label>Digite o segundo n�mero:</label>
            <input type="text" name="valor2" value="" /><br>
			<label>Digite o terceiro n�mero:</label>
            <input type="text" name="valor3" value="" /><br>
			<label>Digite o quarto n�mero:</label>
            <input type="text" name="valor4" value="" /><br>
			<label>Digite o quinto n�mero:</label>
            <input type="text" name="valor5" value="" /><br>
			<label>Digite o sexto n�mero:</label>
            <input type="text" name="valor6" value="" /><br>
			<label>Digite o s�timo n�mero:</label>
            <input type="text" name="valor7" value="" /><br>
			<label>Digite o oitavo n�mero:</label>
            <input type="text" name="valor8" value="" /><br>
			<label>Digite o nono n�mero:</label>
            <input type="text" name="valor9" value="" /><br>
			<label>Digite o d�cimo n�mero:</label>
            <input type="text" name="valor10" value="" /><br>
			<label>Digite o d�cimo primeiro n�mero:</label>
            <input type="text" name="valor11" value="" /><br>
			<label>Digite o d�cimo segundo n�mero:</label>
            <input type="text" name="valor12" value="" /><br>
			<label>Digite o d�cimo terceiro n�mero:</label>
            <input type="text" name="valor13" value="" /><br>
			<label>Digite o d�cimo quarto n�mero:</label>
            <input type="text" name="valor14" value="" /><br>
			<label>Digite o d�cimo quinto n�mero:</label>
            <input type="text" name="valor15" value="" /><br>
			<label>Digite o d�cimo sexto n�mero:</label>
            <input type="text" name="valor16" value="" /><br>
			<label>Digite o d�cimo s�timo n�mero:</label>
            <input type="text" name="valor17" value="" /><br>
			<label>Digite o d�cimo oitavo n�mero:</label>
            <input type="text" name="valor18" value="" /><br>
			<label>Digite o d�cimo nono n�mero:</label>
            <input type="text" name="valor19" value="" /><br>
			<label>Digite o vig�simo n�mero:</label>
            <input type="text" name="valor20" value="" /><br>			
			<input type="submit" value="Enviar" />
        </fieldset>
		</form>
		
<?php
		$total_neg = 0;
		$total_pos = 0;
		if (count($_POST)>0){
			for ($i=0; $i<20; $i++){
				$valor=$_POST["valor$i"];
				if ($valor < 0) {
					$total_neg=$total_neg+1;
				}else{
					$total_pos=$total_pos+$valor;
				}
			}echo "A soma dos numeros positivos � $total_pos e o total de n�meros negativos � $total_neg";
		}
?>