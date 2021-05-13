<?php
	define("TITULO", "FUNCIONARIOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<table class="table table-striped table-bordered">';
		echo '<tr> <th>ID</th><th>Nome</th><th>Sobrenome</th><th>Cadastro</th><th>Editar</th><th>Excluir</th></tr>';
		
		$funcionario = listarFuncionario($connect);
		$n = 1;
		// echo "Total: ".count($funcionario);
		foreach($funcionario as $linha){
			echo '<tr>';
			echo '<td>'.$n.'</td>';
			echo '<td>'.$linha["nome"].'</td>';
			echo '<td>'.$linha["sobrenome"].'</td>';
			echo '<td><a href="funcionario-perfil.php?funcionario='.$linha["idfuncionario"].'">Ver</a></td>';
			echo '<td><a href="funcionario-editar.php?funcionario='.$linha["idfuncionario"].'">Editar</a></td>';
			echo '<td><a href="funcionario-excluir.php?funcionario='.$linha["idfuncionario"].'">Excluir</td></tr>';
			echo '</tr>';
			$n += 1;
		}
	echo "</table>";
	echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a>';
	echo '<a href="funcionario-cadastro.php"><input type="button" value="CADASTRO DE UM NOVO FUNCIONARIO" class="btn btn-dark"></a><br>';
	include "rodape.php";
?>