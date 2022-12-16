<?php 

function exibir(){
    static $ano;
    $ano++;
    echo "<br/>". $ano;
}

echo exibir();
echo exibir();
echo exibir();

?>