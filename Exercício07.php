<form action="#" method="POST">
		<fieldset>
			<label>Nome do Livro:</label>
			<input type='text' name='livro' />
			<label>Usuário:</label>
			<select name="usuario">
			<option value="Professor">Professor</option>
			<option value="Aluno">Aluno</option>
			</select>			
			<input type="submit" value="Enviar" />
        </fieldset>
		</form>
		<?php
		if (count($_POST)>0){
			$total_dias = 10;
			$usuario = $_POST["usuario"];
			$livro = $_POST["livro"];
			if ($usuario == "Aluno"){
				$total_dias = 3;
			}
			echo "O livro $livro deve ser entregue em $total_dias dias</h1>";
		}
?>