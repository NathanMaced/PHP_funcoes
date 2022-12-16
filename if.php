<?php 

$nota = 6.0;
if($nota < 00 && $nota >10.0){
    echo "Nota invalida";
}
elseif ($nota>= 7.0){
    echo "Aprovado";
}
else{
    echo "Reprovado";
}

?>