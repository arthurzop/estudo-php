<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $bd = 'empresa';

    if($conn = mysqli_connect($server, $user, $pass, $bd)){
        $conexao = 'conectado!';
        
    }
    else{
        $conexao = 'nao conectado!';
        

    }