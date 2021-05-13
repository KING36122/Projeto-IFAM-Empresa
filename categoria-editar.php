<?php
	define("TITULO", "EDITAR CATEGORIAS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<div class="cor">';
	if(isset($_GET['categoria'])){
		if(!isset($_GET['edita'])){
			$idcategoria = $_GET["categoria"];
			$categoria = selecionarCategoria($connect, $idcategoria);
			echo "<p>Edição do cadastro da Categoria <strong>$categoria[nome]</strong></p>";
			echo '<div class="col-sm-12">';
				echo '<form action="" method="get" enctype="multipart/form-data">';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Nome da categoria: <input class="form-control inp" type="text" value="'.$categoria["nome"].'" name="nome" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group ff">';
				echo '<label>';
				echo 'Salario da categoria: <input class="form-control inp" type="text" value="'.$categoria["salario"].'" name="salario" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<input type="submit" class="btn btn-primary" value="Cadastrar" name="cad">';
				echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
				echo '</form>';
				echo '</div>';
		}else{
			$nome 		= $_GET['nome'];
			$salario 	= $_GET['salario'];
			$categoria 	= $_GET['categoria'];
			
			$edicao = editarCategoria($connect, $nome, $salario, $categoria);
			header("Location:categoria-listar.php?categoria");
			die();
			
	}
}else{
	echo "Error 404";
}
	include "rodape.php";
?>
