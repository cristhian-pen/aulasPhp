<?php

    //Trabalhando com sessoes;
    //Startando a sessao
    session_start();

    //Atribuindo valor a sessao
    $_SESSION['nome'] = 'Guilherme';

    //Validando a sessão
    //Função isset quer dizer -> Se existe
    if (!isset($_SESSION['nome'])) {
        $_SESSION['nome'] = 'Guilherme';
    }else{
        echo 'Já existe ';
    }
    //Exbindo
    echo $_SESSION['nome'];



?>