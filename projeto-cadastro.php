<?php
	define("TITULO", "CADASTRO DE PROJETOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(!isset($_GET['cad'])){	
		echo '<div class="jumbotron jumbotron-fluid">';
		echo '<marquee class="marquee"><h3 class="Sword">CADASTRO DE PROJETOS</h3></marquee>';
		// echo '<center><h1>Cadastro de Projetos</h1></center>';
		echo '</div>';
		echo '<div class="imd container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get" enctype="multipart/form-data">';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Tipo do Projeto: <input class="form-control inp" type="text" name="tipo" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
					echo '<label>';
					echo '<h5>Descrição:<br>';
					echo '<textarea class="form-control inp" name="desc" required autocomplete="off"></textarea>';
					echo '</label>';
					echo '</div>';
				echo '<input type="submit" class="btn btn-primary" value="Cadastrar" name="cad">';
				echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
				echo '</form>';
			echo '</div>';
	}else{
		$tipo = $_GET['tipo'];
		$descricao = $_GET['desc'];

		$cadastro = cadastrarProjeto($connect, $tipo, $descricao);
		header("Location:sucesso.php?sucesso");
		}
	include "rodape.php";
?>