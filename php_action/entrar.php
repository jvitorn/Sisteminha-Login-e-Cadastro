<?php
//include
 include_once 'functions.php';
//init
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	//chamando cadastro 
	$cadastro = new usuarios();
	$cadastro->Login($email,$senha);
}
else{
	alert('login invalido');
}
