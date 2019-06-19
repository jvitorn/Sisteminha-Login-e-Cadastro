<?php
//include conection 
include_once 'db_connect.php';
    class usuarios{
        public function alert($msg){
            echo '<script>alert("'.$msg.'");</script>';
        }
        //login
        public function Login($login,$senha){
            $sql = "SELECT * FROM tb_usuarios WHERE em_usuarios = '$login' AND pw_usuarios = '$senha'";
            $res = $res = $GLOBALS['connect']->query($sql);
                if ($res->num_rows > 0) {
                    // output data of each row
                    while($row = $res->fetch_assoc()) {
                        $arr[] = $row;
                    }
                    alert("Usuario Logado");
                }else{
                    alert("Login ou Senha Invalidos");
                }
            $GLOBALS['connect']->close();
        }
        //cadastro
        public function Cadastro($nome,$email,$senha){
            $sql = 'select * from tb_usuarios;';
            //$sql = 'SELECT * FROM tb_usuarios WHERE em_usuarios ="'.$email.'";';
            //$sql = 'show tables';
            $res = $GLOBALS['connect']->query($sql);
            echo var_dump($res);
            if(count($res) >= 1){
                echo('Este Email ja foi cadastrado');
            }else{
                $sql = "INSERT INTO tb_usuarios (nm_usuarios,em_usuarios,pw_usuarios ) VALUES('$nome', '$email', '$senha');";
                $res = $GLOBALS['connect']->query($sql);
                if($res){
                    header('location:/home.php');
                    alert("Cadastrado com sucesso");
                }else{
                    alert("Erro ao cadastrar");
                }
            }
            $GLOBALS['connect']->close();
        }
    }