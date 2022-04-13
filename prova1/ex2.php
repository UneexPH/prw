<?php

// Efetue um script PHP que a partir de dois valores quaisquer e efetue
//sua multiplicação e apresente o resultado utilizando para isso apenas o operador “+”, visto que:
//• (3 * 5) = 5 + 5 + 5
//• (4 * 12) = 12 + 12 + 12 + 12

$val1 = 13;
$val2 = 9;
$res = 0;

echo "(".$val1." * ".$val2.") = ";

for($cont=1; $cont<=$val2; $cont++ ){

    $res = $res + $val1;

    if($cont<$val2){
        echo $val1."+ "; 
    } else if($cont==$val2){
        echo $val1." = ";
    }
    

}

echo $res;


?>