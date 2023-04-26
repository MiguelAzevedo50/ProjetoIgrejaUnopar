<?php

    $dbHost = '';
    $dbUsername = '';
    $dbPassword = '';
    $dbName = '';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //teste conexão banco de dados
    
    // if ($conexao->connect_errno) {
    //     echo "Banco de dados não conectado";
    // }
    // else{
    //     echo "Conexão efetuada com sucesso";
    // }
?>
