<?php
// Sessão
session_start();
// Conexão
require_once 'functions.php';
//verificando se tiver algo inserido
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$nome  = $_POST['nome'];
	$senha = $_POST['senha'];
	//chamando cadastro 
	$cadastro = new usuarios();
	$cadastro->Cadastro($nome,$email,$senha);
}
else{
	alert('email vazio');
}

