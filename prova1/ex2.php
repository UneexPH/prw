<?php

// Efetue um script PHP que a partir de dois valores quaisquer e efetue
//sua multiplicação e apresente o resultado utilizando para isso apenas o operador “+”, visto que:
//• (3 * 5) = 5 + 5 + 5
//• (4 * 12) = 12 + 12 + 12 + 12

$val1 = 21;
$val2 = 3;
$res = 0;

echo "(".$val1." * ".$val2.") = ";

for($cont=1; $cont<=$val1; $cont++ ){

    $res = $res + $val2;

    if($cont<$val1){
        echo $val2." + "; 
    } else if($cont==$val1){
        echo $val2." = ";
    }
    

}

echo $res;


?>