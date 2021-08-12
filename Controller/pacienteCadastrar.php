<?php
	
	include_once '..\Model\paciente.php';
	include_once '..\Conexao\pacienteDAO.php';
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$rg = $_POST['rg'];
	$dataNascimento = $_POST['dataNascimento'];
	$logradouro = $_POST['logradouro'];	
	$numero = $_POST['numero'];
	$cep = $_POST['cep'];
	
	
	//Instanciar o objeto
	$pac = new Paciente($nome, $cpf, $email, $senha, $telefone, $rg, $dataNascimento, $logradouro, $numero, $cep);
	$pacDAO = new PacienteDAO();
	
	//Chamar o método
	$pacDAO->Inserir($pac);
	header("location: ../login.php");

?>