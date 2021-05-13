<?php
	define("TITULO", "CADASTRO DE PROJETOS-FUNCIONARIOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(!isset($_GET['cad'])){	
		echo '<div class="jumbotron jumbotron-fluid">';
		echo '<marquee class="marquee"><h3 class="Sword">CADASTRO DE PROJETOS-FUNCIONARIOS</h3></marquee>';
		// echo '<center><h1>Cadastro de Projetos-Funcionarios</h1></center>';
		echo '</div>';
		echo '<div class="imm container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get" enctype="multipart/form-data">';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'ID do Projeto: <input class="form-control inp" type="text" name="projeto" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'ID do Funcionario: <input class="form-control inp" type="text" name="funcionario" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Data de Início: <input class="form-control inp" type="date" name="data" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Tempo de trabalho: <input class="form-control inp" type="text" name="tempo" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<input type="submit" class="btn btn-primary" value="Cadastrar" name="cad">';
				echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a>';
				echo '</form>';
			echo '</div>';
	}else{
		$projeto = $_GET['projeto'];
		$funcionario = $_GET['funcionario'];
		$data = $_GET['data'];
		$tempo = $_GET['tempo'];

		$cadastro = cadastrarProjetoFuncionario($connect, $projeto, $funcionario, $data, $tempo);
		header("Location:sucesso.php?sucesso");
		}
	include "rodape.php";
?>