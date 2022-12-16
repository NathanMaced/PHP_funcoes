<?php 

$nome = "Aramandinho";

function exibir(){
    $nome = "Josefina";
    echo "Valor da variavel dentro da função " .$nome ."<br/>";
    
}
exibir ();

echo "Valor da variavel fora da função " .$nome;

?>