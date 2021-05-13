<?php
	define("TITULO", "EDITAR PROJETOS-FUNCIONARIOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<div class="cor">';
	if(isset($_GET['projeto_funcionario'])){
		if(!isset($_GET['edita'])){
			$idprojetofuncionario = $_GET["projeto_funcionario"];
			$projeto_funcionario = selecionarProjetoFuncionario($connect, $idprojetofuncionario);
			echo "<p>Edição do cadastro do Projeto-Funcionario <strong>$projeto_funcionario[idprojetofuncionario]</strong></p>";
			echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get" enctype="multipart/form-data">';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Projeto: <input class="form-control" type="text" name="projeto" autocomplete="off" required value="'.$projeto_funcionario["projeto"].'">';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Funcionario: <input class="form-control" type="text" name="funcionario" autocomplete="off" required value="'.$projeto_funcionario["funcionario"].'">';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Data de Inicio: <input class="form-control" type="date" name="data" autocomplete="off" required value="'.$projeto_funcionario["inicio"].'">';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Tempo: <input class="form-control" type="text" name="tempo" autocomplete="off" required value="'.$projeto_funcionario["tempo"].'">';
				echo '</label>';
				echo '</div>';
				echo '<input type="hidden" name="edita"><input type="hidden" name="projeto_funcionario" value="'.$idprojetofuncionario.'">';
				echo '<input type="submit" class="btn btn-primary" value="Alterar" class="btn btn-primary">';
				echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
				echo '</form>';
		}else{
			$projeto 		= $_GET['projeto'];
			$funcionario 	= $_GET['funcionario'];
			$data	= $_GET['data'];
			$tempo = $_GET['tempo'];
			$projeto_funcionario = $_GET['projeto_funcionario'];
			
			$edicao = editarProjetoFuncionario($connect, $projeto, $funcionario, $data, $tempo, $projeto_funcionario);
			header("Location:projeto-funcionario-listar.php");
			die();
			
	}
}else{
	echo "Error 404";
}
	include "rodape.php";
?>
