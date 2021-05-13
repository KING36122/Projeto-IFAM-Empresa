<?php
	define("TITULO", "CADASTRO DE DEPARTAMENTOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(!isset($_GET['cad'])){
		echo '<div class="jumbotron jumbotron-fluid">';
		echo '<marquee class="marquee"><h3 class="Sword">CADASTRO DE DEPARTAMENTOS</h3></marquee>';
		// echo '<center><h1>Cadastro de Departamentos</h1></center>';
		echo '</div>';
		echo '<div class="imgg container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get" enctype="multipart/form-data">';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Nome do departamento: <input class="form-control inp" type="text" name="nome" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'ID do Chefe: <input class="form-control inp" type="text" name="chefe" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<input type="submit" class="btn btn-primary" value="Cadastrar" name="cad">';
				echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
				echo '</form>';
			echo '</div>';
	}else{
		$nome = $_GET['nome'];
		$chefe = $_GET['chefe'];

		$cadastro = cadastrarDepartamento($connect, $nome, $chefe);
		header("Location:sucesso.php?sucesso");
		}
	include "rodape.php";
?>