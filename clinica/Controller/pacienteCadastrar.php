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
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	
	
	//Instanciar o objeto
	$pac = new Paciente($nome, $cpf, $email, $senha, $telefone, $rg, $dataNascimento, $logradouro, $cidade, $bairro, $estado, $cep);
	$pacDAO = new PacienteDAO();
	
	//Chamar o método
	// print_r($pac);
	$pacDAO->Inserir($pac);
	header("location: ../login.php");

?>