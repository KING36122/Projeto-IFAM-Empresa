<?php
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	
	
		$idfuncionario = $_GET["funcionario"];
		$funcionario = excluirFuncionario($connect, $idfuncionario);
		
		header("Location:funcionario-listar.php?funcionario");
		die();
	include "rodape.php";
?> 
