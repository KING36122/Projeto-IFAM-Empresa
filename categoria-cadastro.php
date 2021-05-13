<?php
	define("TITULO", "CADASTRO DE CATEGORIAS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(!isset($_GET['cad'])){	
		echo '<div class="jumbotron jumbotron-fluid">';
		echo '<marquee class="marquee"><h3 class="Sword">CADASTRO DE CATEGORIAS</h3></marquee>';
		// echo '<center><h1>Cadastro de Categorias</h1></center>';
		echo '</div>';
		echo '<div class="imh container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get" enctype="multipart/form-data">';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Nome da categoria: <input class="form-control inp" type="text" name="nome" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Salario da categoria: <input class="form-control inp" type="text" name="salario" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<input type="submit" class="btn btn-primary" value="Cadastrar" name="cad">';
				echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
				echo '</form>';
				echo '</div>';
			echo '</div>';
			echo '</div>';
	}else{
		$nome = $_GET['nome'];
		$salario = $_GET['salario'];

		$cadastro = cadastrarCategoria($connect, $nome, $salario);
		header("Location:sucesso.php?sucesso");
		}
	include "rodape.php";
?>