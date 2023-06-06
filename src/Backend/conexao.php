<?php

    $host = "localhost";
    $usuario = "u697307348_secureher";
    $senha = "Projetoiot1234";
    $banco = "u697307348_secureher";

    $dbcon = new MySQLi("$host", "$usuario", "$senha", "$banco");

    if($dbcon -> connect_error){
        echo "Erro_de_conexao";
    } /* else {
        echo "conexao_ok";
    } */




?>