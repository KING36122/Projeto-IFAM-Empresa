<?php
	define("TITULO", "FUNCIONARIOS DESSE DETERMINADO PROJETO");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<table class="table table-striped table-bordered">';
		echo '<tr><th>Nº</th><th>Funcionarios</th></tr>';
		
		$idp = $_GET['projeto'];
		$func = selecionarFuncionarios($connect, $idp);
		$n = 1;
		// echo $idp;
		$buscafuncionario = mysqli_query($connect, "SELECT funcionario from projeto_funcionario where projeto = ".$idp);
		while($proj= mysqli_fetch_assoc($buscafuncionario)){
			echo $proj['funcionario'].' ';
		// $buscanome = mysqli_query($connect, "SELECT nome from funcionario where idfuncionario = ".$buscafuncionario);
		// 	$func= mysqli_fetch_assoc($buscanome);
		// 	echo '<td>'.$func["nome"].'</td>';
		}
?>