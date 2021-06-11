<?php
	#Controller\usuarioObj.php
	include_once '..\Model\paciente.php';
	include_once '..\Conexao\pacienteDAO.php';
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf']
	$email = $_POST['email'];
	// $senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$rg = $_POST['rg'];
	$dataNascimento = $POST['dataNascimento'];
	$cep = $_POST['cep'];
	
	
	//Instanciar o objeto
	$usu = new Usuario($id, $n, $e, $s, "S");
	$usuDAO = new UsuarioDAO();
	
	//Chamar o método
	//echo $usu->Listar();
	$usuDAO->Inserir($usu);
	header("location: ..\View\administrativo.php?link=1");
?>