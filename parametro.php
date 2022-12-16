<?php 

$ano = 2020;

function exibir($parametro){
    $parametro = $parametro + 4;
    return $parametro;
}
echo "Estamos em ". $ano ." e daqui a 4 anos estaremos em ". exibir($ano);

?>