<form action="#" method="POST">
		<fieldset>
			<label>Digite o primeiro número:</label>
            <input type="text" name="valor1" value="" /><br>
			<label>Digite o segundo número:</label>
            <input type="text" name="valor2" value="" /><br>
			<label>Digite o terceiro número:</label>
            <input type="text" name="valor3" value="" /><br>
			<label>Digite o quarto número:</label>
            <input type="text" name="valor4" value="" /><br>
			<label>Digite o quinto número:</label>
            <input type="text" name="valor5" value="" /><br>
			<label>Digite o sexto número:</label>
            <input type="text" name="valor6" value="" /><br>
			<label>Digite o sétimo número:</label>
            <input type="text" name="valor7" value="" /><br>
			<label>Digite o oitavo número:</label>
            <input type="text" name="valor8" value="" /><br>
			<label>Digite o nono número:</label>
            <input type="text" name="valor9" value="" /><br>
			<label>Digite o décimo número:</label>
            <input type="text" name="valor10" value="" /><br>
			<label>Digite o décimo primeiro número:</label>
            <input type="text" name="valor11" value="" /><br>
			<label>Digite o décimo segundo número:</label>
            <input type="text" name="valor12" value="" /><br>
			<label>Digite o décimo terceiro número:</label>
            <input type="text" name="valor13" value="" /><br>
			<label>Digite o décimo quarto número:</label>
            <input type="text" name="valor14" value="" /><br>
			<label>Digite o décimo quinto número:</label>
            <input type="text" name="valor15" value="" /><br>
			<label>Digite o décimo sexto número:</label>
            <input type="text" name="valor16" value="" /><br>
			<label>Digite o décimo sétimo número:</label>
            <input type="text" name="valor17" value="" /><br>
			<label>Digite o décimo oitavo número:</label>
            <input type="text" name="valor18" value="" /><br>
			<label>Digite o décimo nono número:</label>
            <input type="text" name="valor19" value="" /><br>
			<label>Digite o vigésimo número:</label>
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
			}echo "A soma dos numeros positivos é $total_pos e o total de números negativos é $total_neg";
		}
?>