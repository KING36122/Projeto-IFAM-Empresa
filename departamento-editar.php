<?php
	define("TITULO", "EDITAR DEPARTAMENTOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<div class="cor">';
	if(isset($_GET['departamento'])){
		if(!isset($_GET['edita'])){
			$iddepartamento = $_GET["departamento"];
			$departamento = selecionarDepartamento($connect, $iddepartamento);
			echo "<p>Edição do cadastro de Departamento <strong>$departamento[nome]</strong></p>";
			echo '<form action="" method="get">';
				echo 'Nome: <input type="text" name="nome" value="'.$departamento["nome"].'" required class="form-control ff"><br>';
				echo 'ID do Chefe: <input type="text" name="chefe"  value="'.$departamento["chefe"].'" required class="form-control"><br>';
				echo '<input type="hidden" name="edita"><input type="hidden" name="departamento" value="'.$iddepartamento.'">';
				echo '<input type="submit" class="btn btn-primary" value="Alterar">';
				echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';	
			echo '</form>';
		}else{
			$nome 		= $_GET['nome'];
			$chefe 		= $_GET['chefe'];
			$departamento 	= $_GET['departamento'];
			
			$edicao = editarDepartamento($connect, $nome, $chefe, $departamento);
			header("Location:departamento-listar.php?departamento");
			die();
			
	}
}else{
	echo "Error 404";
}
	include "rodape.php";
?>
