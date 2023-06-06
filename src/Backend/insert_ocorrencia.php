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
    $IDOCORRENCIA = mysqli_real_escape_string($dbc, $_GET['IDOCORRENCIA']);
    $HORA = mysqli_real_escape_string($dbc, $_GET['HORA']);
    $ENDERECO_OCORRENCIA = mysqli_real_escape_string($dbc, $_GET['ENDERECO_OCORRENCIA']);
    $FK_CLIENTES = mysqli_real_escape_string($dbc, $_GET['FK_CLIENTES']);

    $query = "INSERT INTO OCORRENCIA(IDOCORRENCIA, HORA, ENDERECO_OCORRENCIA, FK_CLIENTES) VALUES ('NULL', '$HORA', '$ENDERECO_OCORRENCIA', '$FK_CLIENTES')";
    if(mysqli_query($dbc, $query)){
echo "oK";
} 
else{
echo "ERRO". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);
?>