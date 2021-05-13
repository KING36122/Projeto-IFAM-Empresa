<?php
	define("TITULO", "PROJETOS-FUNCIONARIOS");
	include "cabecalho.php";
	include_once "connect/connect.php";
	include "funcoes.php";
	echo '<table class="table table-striped table-bordered">';
		echo '<tr> <th>ID</th><th>Projeto que está envolvido</th><th>Funcionario</th><th>Cadastro</th><th>Editar</th><th>Excluir</th></tr>';
		
		$projeto_funcionario = listarProjetoFuncionario($connect);
		$n = 1;
		// echo "Total: ".count($projeto_funcionario);
		foreach($projeto_funcionario as $linha){
			echo '<tr>';
			echo '<td>'.$n.'</td>';
			$buscproj = mysqli_query($connect, "SELECT tipo from projeto where idprojeto = ".$linha["projeto"]);
			$proj= mysqli_fetch_assoc($buscproj);
			echo '<td>'.$proj["tipo"].'</td>';
			$buscanome = mysqli_query($connect, "SELECT nome from funcionario where idfuncionario = ".$linha["funcionario"]);
			$func= mysqli_fetch_assoc($buscanome);
			echo '<td>'.$func["nome"].'</td>';
			echo '<td><a href="projeto-funcionario-perfil.php?projeto_funcionario='.$linha["idprojetofuncionario"].'">Ver</a></td>';
			echo '<td><a href="projeto-funcionario-editar.php?projeto_funcionario='.$linha["idprojetofuncionario"].'">Editar</a></td>';
			echo '<td><a href="projeto-funcionario-excluir.php?projeto_funcionario='.$linha["idprojetofuncionario"].'">Excluir</td></tr>';
			echo '</tr>';
			$n += 1;
		}
	echo "</table>";
	echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a>';
	echo '<a href="projeto-funcionario-cadastro.php"><input type="button" value="CADASTRO DE UM NOVO PROJETO-FUNCIONARIO" class="btn btn-dark"></a><br>';
	include "rodape.php";
?>