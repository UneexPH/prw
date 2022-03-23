<?php

$n1 = 21;
$n2 = 26;
$n3 = 15;

if($n1 >= $n2 && $n1 >= $n3){

    if($n2 >= $n3){

        echo $n1." - ".$n2." - ".$n3;

    }else{

        echo $n1." - ".$n3." - ".$n2;

    }

}elseif($n2 >= $n1 && $n2 >= $n3){

    if($n1 >= $n3){

        echo $n2." - ".$n1." - ".$n3;

    }else{

        echo $n2." - ".$n3." - ".$n1;

    }

}elseif($n3 >= $n1 && $n3 >= $n2){

    if($n2 >= $n1){

        echo $n3." - ".$n2." - ".$n1;

    }else{

        echo $n3." - ".$n1." - ".$n2;

    }

}

?>
