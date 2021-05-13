<?php
	define("TITULO", "CATEGORIAS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<table class="table table-striped table-bordered">';
		echo '<tr> <th>ID</th><th>Nome</th><th>Salario</th><th>Cadastro</th><th>Editar</th><th>Excluir</th></tr>';
		
		$categoria = listarCategoria($connect);
		$n = 1;
		// echo "Total: ".count($categoria);
		foreach($categoria as $linha){
			echo '<tr>';
			echo '<td>'.$n.'</td>';
			echo '<td>'.$linha["nome"].'</td>';
			echo '<td>'.$linha["salario"].'</td>';
			echo '<td><a href="categoria-perfil.php?categoria='.$linha["idcategoria"].'">Ver</a></td>';
			echo '<td><a href="categoria-editar.php?categoria='.$linha["idcategoria"].'">Editar</a></td>';
			echo '<td><a href="categoria-excluir.php?categoria='.$linha["idcategoria"].'">Excluir</td></tr>';
			echo '</tr>';
			$n += 1;
		}
	echo "</table>";
	echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a>';
	echo '<a href="categoria-cadastro.php"><input type="button" value="CADASTRO DE UMA NOVA CATEGORIA" class="btn btn-dark"></a><br>';
	include "rodape.php";
?>