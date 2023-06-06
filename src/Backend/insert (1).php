<?php


$dbc = mysqli_connect("localhost", "u697307348_secureher", "Projetoiot1234", "u697307348_secureher");
if(!$dbc) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
exit();
}
$db = "u697307348_secureher";
$dbs = mysqli_select_db($dbc, $db);
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($dbc));
exit();
}
    $CPF = mysqli_real_escape_string($dbc, $_GET['CPF']);
    $NOME = mysqli_real_escape_string($dbc, $_GET['NOME']);
    $SOBRENOME = mysqli_real_escape_string($dbc, $_GET['SOBRENOME']);
    $DATA_NASC = mysqli_real_escape_string($dbc, $_GET['DATA_NASC']);
    $EMAIL = mysqli_real_escape_string($dbc, $_GET['EMAIL']);
    $SENHA = mysqli_real_escape_string($dbc, $_GET['SENHA']);
    $DICA_SENHA = mysqli_real_escape_string($dbc, $_GET['DICA_SENHA']);
    $ENDERECO = mysqli_real_escape_string($dbc, $_GET['ENDERECO']);
    $CELULAR = mysqli_real_escape_string($dbc, $_GET['CELULAR']);
    $CTT_EMER1 = mysqli_real_escape_string($dbc, $_GET['CTT_EMER1']);
    


$query = "INSERT INTO CLIENTES(CPF, NOME, SOBRENOME, DATA_NASC, EMAIL, SENHA, DICA_SENHA, ENDERECO, CELULAR, CTT_EMER1) VALUES ('$CPF', '$NOME', '$SOBRENOME',  '$DATA_NASC', '$EMAIL', '$SENHA', '$DICA_SENHA', '$ENDERECO', '$CELULAR', '$CTT_EMER1')";


if(mysqli_query($dbc, $query)){
echo "Cadastrado com sucesso!";
} 
else{
echo "ERRO: Não foi possível cadastrar". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);


?>