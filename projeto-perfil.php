<?php
	define("TITULO", "PERFIL DOS PROJETOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(isset($_GET['projeto'])){
		$projeto = $_GET["projeto"];
		$projetos = selecionarProjeto($connect, $projeto);
		echo '<table class="table table-bordered">';
		echo "<tr><td>Tipo: </td><td>".$projetos["tipo"]."</td></tr>";
		echo "<tr><td>Descrição: </td><td>".$projetos["descricao"]."</td></tr>";
		echo '</table>';
		echo '<a href="projeto-listar.php"><input type="button" value="voltar" class="btn btn-danger"></a>';
	}else{
		echo "erro";
	}
	include "rodape.php";
?>