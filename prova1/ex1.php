<?php

//Efetue um script PHP que calcule e imprima o salário reajustado de um funcionário de acordo com a seguinte regra:
//• Salários até 300, reajuste de 50%
//• Salários maiores que 300, reajuste de 30%

$salario = 200; //definir valor do salario

//reajustar salario

if($salario <= 300){

    $novo_salario = $salario + $salario * 0.5;
    echo "Salário antes do reajuste: R$".$salario ; //imprimir salarios
    echo "<br>Valor do salário reajustado em 50%: R$".$novo_salario;

} else if ($salario > 300){

    $novo_salario = $salario + $salario * 0.3;
    echo "Salário antes do reajuste: R$".$salario ; //imprimir salarios
    echo "<br>Valor do salário reajustado em 30%: R$".$novo_salario;

}



?>