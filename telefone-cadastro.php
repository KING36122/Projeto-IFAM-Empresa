<?php
	define("TITULO", "CADASTRO DE TELEFONES");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(!isset($_GET['cad'])){	
		echo '<div class="jumbotron jumbotron-fluid">';
		echo '<h3>Cadastro de Telefones</h3>';
		echo '</div>';
		echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get" enctype="multipart/form-data">';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Telefone: <input class="form-control" type="text" name="telefone" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Tipo: <input class="form-control" type="text" name="tipo" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'ID do Funcionario: <input class="form-control" type="text" name="idfunc" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<input type="submit" class="btn btn-primary" value="Cadastrar" name="cad">';
				echo '</form>';
			echo '</div>';
	}else{
		$telefone = $_GET['telefone'];
		$tipo = $_GET['tipo'];
		$idfunc = $_GET['idfunc'];

		$cadastro = cadastrarTelefone($connect, $telefone, $tipo, $idfunc);
		}
	include "rodape.php";
?>