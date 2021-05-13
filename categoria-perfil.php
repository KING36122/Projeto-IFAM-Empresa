<?php
	define("TITULO", "PERFIL DAS CATEGORIAS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(isset($_GET['categoria'])){
		$categoria = $_GET["categoria"];
		$categorias = selecionarCategoria($connect, $categoria);
		echo '<table class="table table-bordered">';
		echo "<tr><td>Nome: </td><td>".$categorias["nome"]."</td></tr>";
		echo "<tr><td>Salario: </td><td>R$ ".$categorias["salario"]."</td></tr>";
		echo '</table>';
		echo '<a href="categoria-listar.php"><input type="button" value="voltar" class="btn btn-danger"></a>';
	}else{
		echo "erro";
	}
	include "rodape.php";
?>