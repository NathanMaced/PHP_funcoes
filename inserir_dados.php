<?php 

$con = mysqli_connect("localhost","root","","db_2HPW2");

if(mysqli_connect_errno($con)){
    echo "Erro". mysqli_connect_errno();
else{
    $sql = "INSERT INTO Pessoa VALUES ('$_POST[nome]','$_POST[sobrenome]','$_POST[idade]')";
}

if(mysqli_query($con,$sql)){
    echo "Pessoa inserida com sucesso!";
}else{
    echo "Erro ao inserir: ".mysqli_error($con);
}
mysqli_close($con);
}
?>