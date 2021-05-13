<?php
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	
	
		$idcategoria = $_GET["categoria"];
		$categoria = excluirCategoria($connect, $idcategoria);
		
		header("Location:categoria-listar.php?categoria");
		die();
	include "rodape.php";
?> 
