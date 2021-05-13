<?php
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	
	
		$idtelefone = $_GET["telefone"];
		$telefone = excluirTelefone($connect, $idtelefone);
		
		header("Location:telefone-listar.php?telefone");
		die();
	include "rodape.php";
?> 
