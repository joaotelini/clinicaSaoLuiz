<?php
	#Controller\usuarioObj.php
	include_once '..\Model\paciente.php';
	include_once '..\Conexao\pacienteDAO.php';
	
	$id = $_POST['id'];
	$n = $_POST['nome'];
	$e = $_POST['mail'];
	$s = $_POST['pas'];
	
	//Instanciar o objeto
	$usu = new Usuario($id, $n, $e, $s, "S");
	$usuDAO = new UsuarioDAO();
	
	//Chamar o método
	//echo $usu->Listar();
	$usuDAO->Inserir($usu);
	header("location: ..\View\administrativo.php?link=1");
?>