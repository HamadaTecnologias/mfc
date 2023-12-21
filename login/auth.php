<?php

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    echo " $nome | $senha";

    if($nome == 'login' && $senha == '1234'){
        session_start();
        $_SESSION['nome'] = $nome;
        header('location:../homepage.html');

    }else{

        header('location:../index.html?erro_pass=true');
        exit;
    }

?>