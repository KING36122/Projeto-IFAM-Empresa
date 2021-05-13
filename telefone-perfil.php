<?php
	define("TITULO", "PERFIL DOS TELEFONES");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(isset($_GET['telefone'])){
		$telefone = $_GET["telefone"];
		$telefones = selecionarTelefone($connect, $telefone);
		
		echo "Telefone: ".$telefones["telefone"]."<br>";
		echo "Tipo: ".$telefones["tipo"]."<br>";
		echo "ID do Funcionario: ".$telefones["funcionario_idfuncionario"]."<br>";
	}else{
		echo "erro";
	}
	include "rodape.php";
?>