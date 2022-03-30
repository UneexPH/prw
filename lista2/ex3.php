<?php

//Um número é, por definição, primo se ele não tem divisores,
//exceto 1 e ele próprio. Preparar um script PHP para verificar
//números entre 0 e 200 e determinar se cada um dele é primo ou não.

$num = 1;
$div = 1;
$qtd_divs = 0;

for($i=1; $i<200; $i++){
    
    $qtd_divs = 0;

    for($div=1; $div<200; $div++){

        if($i % $div == 1){
            $qtd_divs++;
        }

    }


    if($qtd_divs > 2){

        echo "<br>"."O número ".$i." não é primo."."<br>";

    } else if ($qtd_divs == 2){

        echo "<br>"."O número ".$i." é primo."."<br>";

    }

}

?>
