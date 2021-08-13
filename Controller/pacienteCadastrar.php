<?php
	
	session_start();

	include_once '..\Model\paciente.php';
	include_once '..\Conexao\pacienteDAO.php';
	if (isset($_POST['action'])) {

	
	$nome = $_POST['nome'];

	if (empty($_POST['nome'])) {
		$_SESSION['vazio_nome'] = "Campo Nome é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_nome'] = $_POST['nome'];
	}

	$cpf = $_POST['cpf'];

	if (empty($_POST['cpf'])) {
		$_SESSION['vazio_cpf'] = "Campo CPF é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_cpf'] = $_POST['cpf'];
	}

	$email = $_POST['email'];

	if (empty($_POST['email'])) {
		$_SESSION['vazio_email'] = "Campo Email é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_email'] = $_POST['email'];
	}

	$senha = $_POST['senha'];

	if (empty($_POST['senha'])) {
		$_SESSION['vazio_senha'] = "Campo Senha é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_senha'] = $_POST['senha'];
	}

	$telefone = $_POST['telefone'];

	if (empty($_POST['telefone'])) {
		$_SESSION['vazio_telefone'] = "Campo Telefone é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_telefone'] = $_POST['telefone'];
	}

	$rg = $_POST['rg'];

	if (empty($_POST['rg'])) {
		$_SESSION['vazio_rg'] = "Campo RG é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_rg'] = $_POST['rg'];
	}

	$dataNascimento = $_POST['dataNascimento'];

	if (empty($_POST['dataNascimento'])) {
		$_SESSION['vazio_dataNascimento'] = "Campo Data de Nascimento é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_dataNascimento'] = $_POST['dataNascimento'];
	}

	$logradouro = $_POST['logradouro'];	

	if (empty($_POST['logradouro'])) {
		$_SESSION['vazio_logradouro'] = "Campo Logradouro é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_logradouro'] = $_POST['logradouro'];
	}

	$numero = $_POST['numero'];

	if (empty($_POST['numero'])) {
		$_SESSION['vazio_numero'] = "Campo Número é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_numero'] = $_POST['numero'];
	}

	$cep = $_POST['cep'];

	if (empty($_POST['cep'])) {
		$_SESSION['vazio_cep'] = "Campo CEP é Obrigatório";
		header('location: ../clinica/cadastro.php');
	} else {
		$_SESSION['value_cep'] = $_POST['cep'];
	}
	
	
	//Instanciar o objeto
	$pac = new Paciente($nome, $cpf, $email, $senha, $telefone, $rg, $dataNascimento, $logradouro, $numero, $cep);
	$pacDAO = new PacienteDAO();
	
	//Chamar o método
	
	$pacDAO->Inserir($pac);
	// header("location: ../login.php");
	}

?>