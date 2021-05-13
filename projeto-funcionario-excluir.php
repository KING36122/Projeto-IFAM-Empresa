<?php
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	
	
		$idprojetofuncionario = $_GET["projeto_funcionario"];
		$projeto_funcionario = excluirProjetoFuncionario($connect, $idprojetofuncionario);
		
		header("Location:projeto-funcionario-listar.php?projeto_funcionario");
		die();
	include "rodape.php";
?> 
