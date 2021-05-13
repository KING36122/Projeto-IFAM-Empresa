<?php
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	
	
		$idprojeto = $_GET["projeto"];
		$projeto = excluirProjeto($connect, $idprojeto);
		
		header("Location:projeto-listar.php?projeto");
		die();
	include "rodape.php";
?> 
