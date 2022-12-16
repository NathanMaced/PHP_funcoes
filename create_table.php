<?php 

$con = mysqli_connect("localhost","root","","db_2HPW2");
$sql = "CREATE TABLE Pessoas(nome CHAR(30), sobrenome CHAR(30), idade INT)";

if(mysqli_query($con,$sql)){
    echo "Tabela criada com sucesso!";
}else{
    echo "Erro: ".mysqli_error($con);
}
mysqli_close($con);


?>