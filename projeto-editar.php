<?php
	define("TITULO", "EDITAR PROJETOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<div class="cor">';
	if(isset($_GET['projeto'])){
		if(!isset($_GET['edita'])){
			$idprojeto = $_GET["projeto"];
			$projeto = selecionarProjeto($connect, $idprojeto);
			echo "<p>Edição do cadastro do Projeto <strong>$projeto[tipo]</strong></p>";
			echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get" enctype="multipart/form-data">';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Tipo do Projeto: <input class="form-control" type="text" name="tipo" autocomplete="off" required value="'.$projeto["tipo"].'">';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
					echo '<label>';
					echo '<h5>Descrição:<br>';
					echo '<textarea class="form-control" name="desc" required autocomplete="off" value="'.$projeto["descricao"].'"></textarea>';
					echo '</label>';
					echo '</div>';
				echo '<input type="hidden" name="edita"><input type="hidden" name="projeto" value="'.$idprojeto.'">';
				echo '<input type="submit" class="btn btn-primary" value="Alterar" class="btn btn-primary">';
				echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
				echo '</form>';
		}else{
			$tipo 		= $_GET['tipo'];
			$descricao 	= $_GET['descricao'];
			$projeto	= $_GET['projeto'];
			
			$edicao = editarProjeto($connect, $tipo, $descricao, $projeto);
			header("Location:projeto-listar.php?projeto");
			die();
			
	}
}else{
	echo "Error 404";
}
	include "rodape.php";
?>
