<?php
function cadastrarCategoria($connect, $nome, $salario){
	$query = mysqli_query($connect, "INSERT INTO categorias (nome, salario) VALUES 
				('$nome', '$salario')");
	return $query;
}

function listarCategoria($connect){
	$query = mysqli_query($connect, "SELECT * FROM categorias");
	while($linha = mysqli_fetch_assoc($query)){
		$categoria[] = $linha;
	}
	return $categoria;
}

function selecionarCategoria($connect, $categoria){
	$query = mysqli_query($connect, "SELECT * FROM categorias WHERE idcategoria = ".$categoria);
	$categoria = mysqli_fetch_assoc($query);
	return $categoria;
}

function editarCategoria($connect, $nome, $salario, $categoria){
	$query = mysqli_query($connect, "UPDATE categorias SET nome='{$nome}', salario='{$salario}' WHERE idcategoria = '{$categoria}'");
	return $query;
}

function excluirCategoria($connect, $categoria){
	$query = mysqli_query($connect, "DELETE FROM categorias WHERE idcategoria = '{$categoria}'");
	return $query;
}

function cadastrarDepartamento($connect, $nome, $chefe){
	$query = mysqli_query($connect, "INSERT INTO departamentos (nome, chefe) VALUES 
				('$nome', '$chefe')");
	return $query;
}

function listarDepartamento($connect){
	$query = mysqli_query($connect, "SELECT * FROM departamentos");
	while($linha = mysqli_fetch_assoc($query)){
		$departamento[] = $linha;
	}
	return $departamento;
}

function selecionarDepartamento($connect, $departamento){
	$query = mysqli_query($connect, "SELECT * FROM departamentos WHERE iddepartamento = ".$departamento);
	$departamento = mysqli_fetch_assoc($query);
	return $departamento;
}

function editarDepartamento($connect, $nome, $chefe, $departamento){
	$query = mysqli_query($connect, "UPDATE departamentos SET nome='{$nome}', chefe='{$chefe}' WHERE iddepartamento = '{$departamento}'");
	return $query;
}

function excluirDepartamento($connect, $departamento){
	$query = mysqli_query($connect, "DELETE FROM departamentos WHERE iddepartamento = '{$departamento}'");
	return $query;
}
function cadastrarFuncionario($connect, $nome, $sobrenome, $telefone1, $telefone2, $email, $logradouro, $bairro, $numero, $cep, $categoria, $departamento){
	$query = mysqli_query($connect, "INSERT INTO funcionario (nome, sobrenome, telefone1, telefone2, email, logradouro, bairro, numero, cep, categoria, departamento) VALUES 
				('$nome', '$sobrenome', '$telefone1', '$telefone2', '$email', '$logradouro', '$bairro', '$numero', '$cep', '$categoria', '$departamento')");
	return $query;
}

function listarFuncionario($connect){
	$query = mysqli_query($connect, "SELECT * FROM funcionario");
	while($linha = mysqli_fetch_assoc($query)){
		$funcionario[] = $linha;
	}
	return $funcionario;
}

function selecionarFuncionario($connect, $funcionario){
	$query = mysqli_query($connect, "SELECT * FROM funcionario WHERE idfuncionario = ".$funcionario);
	$funcionario = mysqli_fetch_assoc($query);
	return $funcionario;
}

function selecionarFuncionarios($connect, $funcionario){
	$query = mysqli_query($connect, "SELECT nome FROM funcionario WHERE idfuncionario = ".$funcionario);
	$funcionario = mysqli_fetch_assoc($query);
	return $funcionario;
}

function editarFuncionario($connect, $nome, $sobrenome, $telefone1, $telefone2, $email, $logradouro, $bairro, $numero, $cep, $categoria, $departamento, $funcionario){
	$query = mysqli_query($connect, "UPDATE funcionario SET nome='{$nome}', sobrenome='{$sobrenome}', telefone1='{$telefone1}', telefone2='{$telefone2}', email='{$email}', logradouro='{$logradouro}', bairro='{$bairro}', numero='{$numero}', cep='{$cep}', categoria='{$categoria}', departamento='{$departamento}' WHERE idfuncionario = '{$funcionario}'");
	return $query;
}

function excluirFuncionario($connect, $funcionario){
	$query = mysqli_query($connect, "DELETE FROM funcionario WHERE idfuncionario = '{$funcionario}'");
	return $query;
}

function cadastrarProjeto($connect, $tipo, $descricao){
	$query = mysqli_query($connect, "INSERT INTO projeto (tipo, descricao) VALUES 
				('$tipo', '$descricao')");
	return $query;
}

function listarProjeto($connect){
	$query = mysqli_query($connect, "SELECT * FROM projeto");
	while($linha = mysqli_fetch_assoc($query)){
		$projeto[] = $linha;
	}
	return $projeto;
}

function selecionarProjeto($connect, $projeto){
	$query = mysqli_query($connect, "SELECT * FROM projeto WHERE idprojeto = ".$projeto);
	$projeto = mysqli_fetch_assoc($query);
	return $projeto;
}

function editarProjeto($connect, $tipo, $descricao, $projeto){
	$query = mysqli_query($connect, "UPDATE projeto SET tipo='{$tipo}', descricao='{$descricao}' WHERE idprojeto = '{$projeto}'");
	return $query;
}

function excluirProjeto($connect, $projeto){
	$query = mysqli_query($connect, "DELETE FROM projeto WHERE idprojeto= '{$projeto}'");
	return $query;
}

function cadastrarProjetoFuncionario($connect, $projeto, $funcionario, $data, $tempo){
	$query = mysqli_query($connect, "INSERT INTO projeto_funcionario (projeto, funcionario, inicio, tempo) VALUES 
				('$projeto', '$funcionario', '$data', '$tempo')");
	return $query;
}

function listarProjetoFuncionario($connect){
	$query = mysqli_query($connect, "SELECT * FROM projeto_funcionario");
	while($linha = mysqli_fetch_assoc($query)){
		$projeto_funcionario[] = $linha;
	}
	return $projeto_funcionario;
}

function selecionarProjetoFuncionario($connect, $projeto_funcionario){
	$query = mysqli_query($connect, "SELECT * FROM projeto_funcionario WHERE idprojetofuncionario = ".$projeto_funcionario);
	$projeto_funcionario = mysqli_fetch_assoc($query);
	return $projeto_funcionario;
}

function editarProjetoFuncionario($connect, $projeto, $funcionario, $data, $tempo, $projeto_funcionario){
	$query = mysqli_query($connect, "UPDATE projeto_funcionario SET projeto='{$projeto}', funcionario='{$funcionario}', inicio='{$data}', tempo='{$tempo}' WHERE idprojetofuncionario = '{$projeto_funcionario}'");
	return $query;
}

function excluirProjetoFuncionario($connect, $projeto_funcionario){
	$query = mysqli_query($connect, "DELETE FROM projeto_funcionario WHERE idprojetofuncionario= '{$projeto_funcionario}'");
	return $query;
}

function cadastrarTelefone($connect, $telefone, $tipo, $idfunc){
	$query = mysqli_query($connect, "INSERT INTO telefone (telefone, tipo, funcionario_idfuncionario) VALUES 
				('$telefone', '$tipo', '$idfunc')");
	return $query;
}

function listarTelefone($connect){
	$query = mysqli_query($connect, "SELECT * FROM telefone");
	while($linha = mysqli_fetch_assoc($query)){
		$telefone[] = $linha;
	}
	return $telefone;
}

function selecionarTelefone($connect, $telefone){
	$query = mysqli_query($connect, "SELECT * FROM telefone WHERE idtelefone = ".$telefone);
	$telefone = mysqli_fetch_assoc($query);
	return $telefone;
}

function editarTelefone($connect, $telefone, $tipo, $idfunc, $idtelefone){
	$query = mysqli_query($connect, "UPDATE telefone SET telefone='{$telefone}', tipo='{$tipo}', funcionario_idfuncionario='{$idfunc}' WHERE idtelefone = '{$idtelefone}'");
	return $query;
}

function excluirTelefone($connect, $telefone){
	$query = mysqli_query($connect, "DELETE FROM telefone WHERE idtelefone = '{$telefone}'");
	return $query;
}