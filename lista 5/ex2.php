<?php
//2.(Formulário e Vetor)Repetir o exercício anterior, mas dessa vez deve ter 2 vetores, um
//com os nomes dos produtos e outro com os preços desses produtos, que devem ser
//impressos após a localização do mesmo.

$produtos= array('Inexistente','Processador','Cooler','PlacaMae','PlacaDeVideo','HD','SSD','Monitor','Mouse','Headset');
$precos= array('0','457.99','150.39','322.98','857.89','230.02','350.00','760.25','55.99','110.50');

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

echo "<h2>Produto: ".$produtos[$codigo]." <br>Código: 0".$codigo."<br>Preço: R$".$precos[$codigo]."</h2>";


?>