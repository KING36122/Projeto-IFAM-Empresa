<?php
	define("TITULO", "PERFIL DOS DEPARTAMENTOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(isset($_GET['departamento'])){
		$iddepartamento = $_GET["departamento"];
		$departamento = selecionarDepartamento($connect, $iddepartamento);
		echo '<table class="table table-bordered">';
		echo "<tr><td>Nome: </td><td>".$departamento["nome"]."</td></tr>";
		echo "<tr><td>ID do Chefe: </td><td>".$departamento["chefe"]."</td></tr>";
		echo '</table>';
		echo '<a href="departamento-listar.php"><input type="button" value="voltar" class="btn btn-danger"></a>';
	}else{
		echo "erro";
	}
	include "rodape.php";
?>