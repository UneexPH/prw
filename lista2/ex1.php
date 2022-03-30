<?php
//Faça um script PHP para somar os números pares < 100

$i = 0;
$total=0;

for($i=0; $i<100; $i++){
    if($i % 2 == 0){

        $total = $total + $i;

    }

}

echo "Soma dos números pares menores que 100: ".$total ;

?>