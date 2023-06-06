<?php
    include_once 'conexao.php';

    
    $CPF = $_POST['CPF'];
    $SENHA = $_POST['SENHA'];

    //executar uma pesquisa no bd

    $sql = $dbcon ->query("SELECT * FROM CLIENTES WHERE CPF='$CPF' AND SENHA='$SENHA'");

    if(mysqli_num_rows($sql)>0){
        echo "login_ok";
    } else {
        echo "login_erro";
    }






?>