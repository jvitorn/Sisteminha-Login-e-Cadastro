<?php
    public function Login($login,$senha){
        $sql = "SELECT * FROM tb_usuarios WHERE em_usuarios = '$login' AND pw_usuarios = '$senha'";
        $res = $res = $GLOBALS['connect']->query($sql);
            if ($res->num_rows > 0) {
                // output data of each row
                while($row = $res->fetch_assoc()) {
                    $arr[] = $row;
                }
                echo "Usuario Logado";
            }else{
                    echo "Login ou Senha Invalidos";
            }
        $GLOBALS['connect']->close();
    }