<?php

$dbc = mysqli_connect("localhost", "u697307348_secureher", "Projetoiot1234", "u697307348_secureher");
if(!$dbc) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
exit();
}
$db = "u697307348_secureher";
$dbs = mysqli_select_db($dbc,$db );
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


$query = "Update CLIENTES SET NOME='$NOME', SOBRENOME='$SOBRENOME', DATA_NASC='$DATA_NASC', 
EMAIL='$EMAIL', SENHA='$SENHA', DICA_SENHA='$DICA_SENHA', ENDERECO='$ENDERECO', CELULAR='$CELULAR', 
CTT_EMER1='$CTT_EMER1' WHERE CPF='$CPF' ";




if(mysqli_query($dbc, $query)){
echo "Atualizado com sucesso";
} 
else{
echo "Erro". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);
?>