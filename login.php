<?php
//conexão
require_once 'db_conect.php';

//seção
session_start();

//botão enviar
if(isset($_POST['btn_entrada'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login = 'login'";

endif;
endif;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/style_login.css">
    <title>Meu Repositório</title>
</head>
<body>


    <section class="area-login">
        <video src="assets/homem-93077.mp4" type="video/mp4" autoplay muted loop class="bg"></video>
        <div class="login">
            
            <div class="logo">
                <img src="" alt="">
            </div>

            <h2>Login</h2>

            <?php

            if(!empty($erros)):
                foreach($erros as $erro):
                    echo "erro";
                endforeach;
            endif;

      