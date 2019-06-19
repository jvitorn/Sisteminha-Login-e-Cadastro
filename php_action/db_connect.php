<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "usbw";
$db_name = "sisteminha";
$connect = new mysqli($servername,$username,$password);
//checar erros
if($connect->connect_error){
    die('Conexão Falhou' . $connect->connect_error);
}
?>