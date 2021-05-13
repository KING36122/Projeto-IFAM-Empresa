<?php
	define("TITULO", "DEPARTAMENTOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<table class="table table-striped table-bordered">';
		echo '<tr> <th>ID</th><th>Nome</th><th>Chefe</th><th>Cadastro</th><th>Editar</th><th>Excluir</th></tr>';
		
		$departamento = listarDepartamento($connect);
		$n = 1;
		// echo "Total: ".count($departamento);
		foreach($departamento as $linha){
			echo '<tr>';
			echo '<td>'.$n.'</td>';
			echo '<td>'.$linha["nome"].'</td>';
			echo '<td>'.$linha["chefe"].'</td>';
			echo '<td><a href="departamento-perfil.php?departamento='.$linha["iddepartamento"].'">Ver</a></td>';
			echo '<td><a href="departamento-editar.php?departamento='.$linha["iddepartamento"].'">Editar</a></td>';
			echo '<td><a href="departamento-excluir.php?departamento='.$linha["iddepartamento"].'">Excluir</td></tr>';
			echo '</tr>';
			$n += 1;
		}
	echo "</table>";
	echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a>';
	echo '<a href="departamento-cadastro.php"><input type="button" value="CADASTRO DE UM NOVO DEPARTAMENTO" class="btn btn-dark"></a><br>';
	include "rodape.php";
?>