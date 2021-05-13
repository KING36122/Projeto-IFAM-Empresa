<?php
	define("TITULO", "EDITAR TELEFONES");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(isset($_GET['telefone'])){
		if(!isset($_GET['edita'])){
			$idtelefone = $_GET["telefone"];
			$telefone = selecionarTelefone($connect, $idtelefone);
			echo "<p>Edição do cadastro do Telefone <strong>$telefone[telefone]</strong></p>";
			echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get" enctype="multipart/form-data">';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Telefone: <input class="form-control" type="text" name="telefone" autocomplete="off" required value="'.$telefone["telefone"].'">';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Tipo: <input class="form-control" type="text" name="tipo" autocomplete="off" required value="'.$telefone["tipo"].'">';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'ID do Funcionario: <input class="form-control" type="text" name="idfunc" autocomplete="off" required value="'.$telefone["funcionario_idfuncionario"].'">';
				echo '</label>';
				echo '</div>';
				echo '<input type="submit" class="btn btn-primary" value="Cadastrar" name="cad">';
				echo '</form>';
		}else{
			$telefone = $_GET['telefone'];
			$tipo = $_GET['tipo'];
			$idfunc = $_GET['idfunc'];

			$editar = editarTelefone($connect, $telefone, $tipo, $idfunc);
			header("Location:categoria-listar.php?categoria");
			die();
			
	}
}else{
	echo "Error 404";
}
	include "rodape.php";
?>
