<?php
	define("TITULO", "PERFIL DOS DEPARTAMENTOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	if(isset($_GET['funcionario'])){
		$idfuncionario = $_GET["funcionario"];
		$funcionario = selecionarFuncionario($connect, $idfuncionario);
		echo '<table class="table table-bordered">';
		echo "<tr><td>Nome: </td><td>".$funcionario["nome"]."</td></tr>";
		echo "<tr><td>Sobrenome: </td><td>".$funcionario["sobrenome"]."</td></tr>";
		echo "<tr><td>Telefone: </td><td>".$funcionario["telefone1"]."</td></tr>";
		echo "<tr><td>Telefone (opcional): </td><td>".$funcionario["telefone2"]."</td></tr>";
		echo "<tr><td>Email: </td><td>".$funcionario["email"]."</td></tr>";
		echo "<tr><td>Logradouro: </td><td>".$funcionario["logradouro"]."</td></tr>";
		echo "<tr><td>Bairro: </td><td>".$funcionario["bairro"]."</td></tr>";
		echo "<tr><td>Nº: </td><td>".$funcionario["numero"]."</td></tr>";
		echo "<tr><td>CEP: </td><td>".$funcionario["cep"]."</td></tr>";
		echo "<tr><td>ID Categoria: </td><td>".$funcionario["categoria"]."</td></tr>";
		echo "<tr><td>ID Departamento: </td><td>".$funcionario["departamento"]."</td></tr>";
		echo '</table>';
		echo '<a href="funcionario-listar.php"><input type="button" value="voltar" class="btn btn-danger"></a>';
	}else{
		echo "erro";
	}
	include "rodape.php";
?>