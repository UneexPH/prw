<?php
   echo "<h1> Resultado </h1> ";
   $num1 = $_GET['num1'];
   $num2 = $_GET['num2'];
   $op = $_GET['operacao'];
    

  if($op == 1){
    $res = $num1 * $num2;
    echo $num1." x ".$num2." = ".$res;

  } else if($op == 2 ){
    $res = $num1 / $num2;
    echo $num1." / ".$num2." = ".$res;

  } else if($op == 3){
    $res = $num1 + $num2;
    echo $num1." + ".$num2." = ".$res;

  } else if($op == 4){
    $res = $num1 - $num2;
    echo $num1." - ".$num2." = ".$res;
  }

  
?>