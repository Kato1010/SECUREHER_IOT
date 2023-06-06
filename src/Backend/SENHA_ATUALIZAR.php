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
$SENHA = mysqli_real_escape_string($dbc, $_GET['SENHA']);


$query = "Update CLIENTES SET SENHA='$SENHA' WHERE CPF='$CPF' ";


if(mysqli_query($dbc, $query)){
echo "senha alterada com sucesso!";
} 
else{
echo "erro". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);



?>