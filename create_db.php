<?php 

$con = mysqli_connect(localhost,root);

if(mysqli_connect_errno($con)){
    echo "<br/> Erro ao conectar com a base de dados". mysqli_connect_errno();
}else{
    $sql = "CREATE DATABASE db_2HPW2";
    if (mysqli_query($con,$sql)){
        echo "Base de daos criada com sucesso!!";
    }else{
        echo "Erro";
    }
    mysqli_close($con);
}

?>