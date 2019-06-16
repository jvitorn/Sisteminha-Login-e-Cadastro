<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        header('Location: ../login.php');
    else:
        $sql = "SELECT em_usuarios FROM tb_usuarios WHERE em_usuarios = '$login'";
        $resultado = mysqli_query($connect, $sql);
        
        if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sql = "SELECT * FROM tb_usuarios WHERE em_usuarios = '$login' AND pw_usuarios = '$senha'";
            $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuarios'] = $dados['id_usuarios'];
                    header('Location: ../home.php');
                else:
                    header('Location: ../login.php');
                endif;

        else:
            header('Location: ../login.php');
        endif;

    endif;

endif;
?>