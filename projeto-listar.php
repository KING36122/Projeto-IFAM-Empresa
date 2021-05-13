<?php
	define("TITULO", "PROJETOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<table class="table table-striped table-bordered">';
		echo '<tr> <th>ID</th><th>Tipo</th><th>Cadastro</th><th>Editar</th><th>Excluir</th></tr>';
		
		$projeto = listarProjeto($connect);
		$n = 1;
		// echo "Total: ".count($projeto);
		foreach($projeto as $linha){
			echo '<tr>';
			echo '<td>'.$n.'</td>';
			echo '<td><a href="projeto-funcionario.php?projeto='.$linha["idprojeto"].'">'.$linha["tipo"].'</a></td>';
			echo '<td><a href="projeto-perfil.php?projeto='.$linha["idprojeto"].'">Ver</a></td>';
			echo '<td><a href="projeto-editar.php?projeto='.$linha["idprojeto"].'">Editar</a></td>';
			echo '<td><a href="projeto-excluir.php?projeto='.$linha["idprojeto"].'">Excluir</td></tr>';
			echo '</tr>';
			$n += 1;
		}
	echo "</table>";
	echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a>';
	echo '<a href="projeto-cadastro.php"><input type="button" value="CADASTRO DE UM NOVO PROJETO" class="btn btn-dark"></a><br>';
	include "rodape.php";
?>