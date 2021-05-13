<?php
	define("TITULO", "CADASTRO DE FUNCIONARIOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<div class="cor">';
	if(isset($_GET['funcionario'])){
		if(!isset($_GET['edita'])){
			$idfuncionario = $_GET["funcionario"];
			$funcionario = selecionarFuncionario($connect, $idfuncionario);
			echo "<p>Edição do cadastro de Funcionario <strong>$funcionario[nome]</strong></p>";
		echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-6">';
					echo '<form action="" method="get" enctype="multipart/form-data">';
					echo '<div class="form-group ff">';
					echo '<label for="nome">';
					echo 'Nome:'; 
					echo '</label>';
					echo '<input id="nome" class="form-control" type="text" name="nome" autocomplete="off" required value="'.$funcionario["nome"].'">';
					echo '</div>';
					echo '<div class="form-group ff">';
					echo '<label for="sobrenome">';
					echo 'Sobrenome:';
					echo '</label>';
					echo '<input id="sobrenome" class="form-control " type="text" name="sobrenome" autocomplete="off" required value="'.$funcionario["sobrenome"].'">';
					echo '</div>';
					echo '<div class="form-group ff">';
					echo '<label>';
					echo 'Telefone: <input class="form-control" type="text" name="telefone1" autocomplete="off" required value="'.$funcionario["telefone1"].'">';
					echo '</label>';
					echo '</div>';
					echo '<div class="form-group ff">';
					echo '<label>';
					echo 'Telefone (opcional): <input class="form-control" type="text" name="telefone2" autocomplete="off" value="'.$funcionario["telefone2"].'">';
					echo '</label>';
					echo '</div>';
					echo '<div class="form-group ff">';
					echo '<label for="email">';
					echo 'Email:';
					echo '</label>';
					echo '<input id="email" class="form-control" type="email" name="email" autocomplete="off" required value="'.$funcionario["email"].'">';
					echo '</div>';
					echo '<div class="form-group ff">';
					echo '<label for="log">';
					echo 'Logradouro:';
					echo '</label>';
					echo '<input id="log" class="form-control" type="text" name="logradouro" autocomplete="off" required value="'.$funcionario["logradouro"].'">';
					echo '</div>';
				echo '</div>';
				echo '<div class="col-sm-6">';
					echo '<div class="form-group ff">';
					echo '<label for="bairro">';
					echo 'Bairro:';
					echo '</label>';
					echo '<input id="bairro" class="form-control" type="text" name="bairro" autocomplete="off" required value="'.$funcionario["bairro"].'">';
					echo '</div>';
					echo '<div class="form-group ff">';
					echo '<label>';
					echo 'Nº: <input class="form-control" type="text" name="numero" autocomplete="off" required value="'.$funcionario["numero"].'">';
					echo '</label>';
					echo '</div>';
					echo '<div class="form-group ff">';
					echo '<label>';
					echo 'CEP: <input class="form-control" type="text" name="cep" autocomplete="off" required value="'.$funcionario["cep"].'">';
					echo '</label>';
					echo '</div>';
					echo '<div class="form-group ff">';
					echo '<label>';
					echo 'ID Categoria: <input class="form-control" type="text" name="categoria" autocomplete="off" required value="'.$funcionario["categoria"].'">';
					echo '</label>';
					echo '</div>';
					echo '<div class="form-group ff">';
					echo '<label>';
					echo 'ID Departamento: <input class="form-control" type="text" name="departamento" autocomplete="off" required value="'.$funcionario["departamento"].'">';
					echo '</label>';
					echo '</div>';
					echo '<input type="hidden" name="edita"><input type="hidden" name="funcionario" value="'.$idfuncionario.'">';
					echo '<input type="submit" class="btn btn-primary" value="Alterar" class="btn btn-primary">';
					echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
				echo '</div>';
				echo '</form>';
	}else{
		$nome = $_GET['nome'];
		$sobrenome = $_GET['sobrenome'];
		$telefone1 = $_GET['telefone1'];
		$telefone2 = $_GET['telefone2'];
		$email = $_GET['email'];
		$logradouro = $_GET['logradouro'];
		$bairro = $_GET['bairro'];
		$numero = $_GET['numero'];
		$cep = $_GET['cep'];
		$categoria = $_GET['categoria'];
		$departamento = $_GET['departamento'];
		$funcionario = $_GET['funcionario'];

		$editar = editarFuncionario($connect, $nome, $sobrenome, $telefone1, $telefone2, $email, $logradouro, $bairro, $numero, $cep, $categoria, $departamento, $funcionario);
		header("Location:funcionario-listar.php?funcionario");
			die();
			
	}
}else{
	echo "Error 404";
}
?>