<?php
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	
	
		$iddepartamento = $_GET["departamento"];
		$departamento = excluirDepartamento($connect, $iddepartamento);
		
		header("Location:departamento-listar.php?departamento");
		die();
	include "rodape.php";
?> 
