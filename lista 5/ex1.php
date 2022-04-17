<?php
//1. (Formulário e Vetor) Fazer um formulário em HTML que permita ao usuário digitar o
//nome de um produto de informática. Um programa em PHP deverá receber o nome
//desse produto e fazer uma busca por esse produto dentro de uma relação de produtos
//de informática em um vetor e localizar a posição (índice) desse produto dentro do vetor.
//O índice corresponde ao código do produto que deve ser impresso para o usuário.

$produtos= array('Inexistente','Processador','Cooler','PlacaMae','PlacaDeVideo','HD','SSD','Monitor','Mouse','Headset');

$produto = $_GET['produto'];
$produto = strtolower($produto);
$codigo = 0;

for ($i = 0; $i < count($produtos); $i++){

    $produtos[$i] = strtolower($produtos[$i]);

    if($produtos[$i]==$produto){

        $codigo = $i;

    } else {



    }

}

echo "<h2>Produto: ".$produtos[$codigo]." <br>Código: 0".$codigo."</h2>";


?>