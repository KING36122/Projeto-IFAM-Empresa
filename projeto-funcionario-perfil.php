<?php
	define("TITULO", "PERFIL DOS PROJETOS-FUNCIONARIOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(isset($_GET['projeto_funcionario'])){
		$projetofuncionario = $_GET["projeto_funcionario"];
		$projetos_funcionarios = selecionarProjetoFuncionario($connect, $projetofuncionario);
		echo '<table class="table table-bordered">';
		echo "<tr><td>Projeto: </td><td>".$projetos_funcionarios["projeto"]."</td></tr>";
		echo "<tr><td>Funcionario: </td><td>".$projetos_funcionarios["funcionario"]."</td></tr>";
		echo "<tr><td>Data de Início: </td><td>".$projetos_funcionarios["inicio"]."</td></tr>";
		echo "<tr><td>Tempo: </td><td>".$projetos_funcionarios["tempo"]." meses</td></tr>";
		echo '</table>';
		echo '<a href="funcionario-listar.php"><input type="button" value="voltar" class="btn btn-danger"></a>';
	}else{
		echo "erro";
	}
	include "rodape.php";
?>