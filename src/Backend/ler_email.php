<?php
// Arquivo: lerdados.php

// Configurações de conexão com o banco de dados
$servername = "localhost";  // Nome do servidor do banco de dados
$username = "u697307348_secureher"; // Nome de usuário do banco de dados
$password = "Projetoiot1234";   // Senha do banco de dados
$dbname = "u697307348_secureher"; // Nome do banco de dados

// Criação da conexão com o banco de dados
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Verificação de erros na conexão
if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

// Verificação se o parâmetro CPF foi informado na URL
if (isset($_GET['CPF'])) {
    $cpf = $_GET['CPF'];

    // Consulta SQL para buscar o nome associado ao CPF na tabela CLIENTES
    $sql = "SELECT EMAIL FROM CLIENTES WHERE CPF = '$cpf'";

    // Execução da consulta
    $result = $mysqli->query($sql);

    // Verificação se algum resultado foi encontrado
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $EMAIL = $row['EMAIL'];
        echo $EMAIL;
    } else {
        echo "Nenhum resultado encontrado para o CPF informado.";
    }

    // Fechamento da conexão com o banco de dados
    $mysqli->close();
} else {
    echo "CPF não informado.";
}
