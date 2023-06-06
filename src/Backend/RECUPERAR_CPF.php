<?php
    include_once 'conexao.php';


    $CPF = $_POST['CPF'];


    //executar uma pesquisa no bd

    $sql = $dbcon ->query("SELECT * FROM CLIENTES where CPF='$CPF'");

    if(mysqli_num_rows($sql)>0){
        echo "CPF_VALIDO";
    } else {
        echo "CPF_INVALIDO";
    }






?>