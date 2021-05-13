<?php
	define("TITULO", "TELEFONES");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	
	echo '<table class="table table-striped table-bordered">';
		echo '<tr> <th>No</th><th>Telefone</th><th>Cadastro</th><th>Editar</th><th>Excluir</th></tr>';
		
		$telefone = listarTelefone($connect);
		$n = 1;
		echo "Total: ".count($telefone);
		foreach($telefone as $linha){
			echo '<tr>';
			echo '<td>'.$n.'</td>';
			echo '<td>'.$linha["telefone"].'</td>';
			echo '<td><a href="telefone-perfil.php?telefone='.$linha["idtelefone"].'">Ver</a></td>';
			echo '<td><a href="telefone-editar.php?telefone='.$linha["idtelefone"].'">Editar</a></td>';
			echo '<td><a href="telefone-excluir.php?telefone='.$linha["idtelefone"].'">Excluir</td></tr>';
			echo '</tr>';
			$n += 1;
		}
	echo "</table>";
	include "rodape.php";
?>