<?php

//Criar um formulário para pedir o peso e altura de uma
//pessoa, efetuar o cálculo do IMC (Índice de Massa Corporal) e depois mostrar o resultado do cálculo e a
//mensagem de acordo com a tabela abaixo:
//É simples calcular o seu IMC, Por exemplo, se o seu peso é 80kg e a sua altura é 1,80m, a fórmula
//para calcular o IMC ficará:
//IMC = peso ÷ altura^2
//IMC = 80 ÷ 1,802
//IMC = 80 ÷ 3,24
//IMC = 24,69

//coletar informações
echo "<h1> Cálculo IMC </h1> ";
$peso = $_GET["peso"];
$altura = $_GET["altura"];

//calcular e exibir imc
$IMC = $peso / ($altura * $altura);
$eIMC = substr($IMC,0,5);
echo "<br><h3> Valor do IMC: ".$eIMC."</h3>";

//situação imc
if($IMC<17){

echo "<br><h3>Situação: Muito Abaixo do Peso</h3>";

} else if( $IMC>=17 && $IMC<=18.49){

    echo "<br><h3>Situação: Abaixo do Peso</h3>";

} else if( $IMC>=18.5 && $IMC<=24.99){

    echo "<br><h3>Situação: Peso Normal</h3>";

} else if( $IMC>=25 && $IMC<=29.99){

    echo "<br><h3>Situação: Acima do Peso</h3>";

} else if( $IMC>=30 && $IMC<=34.99){

    echo "<br><h3>Situação: Obesidade I</h3>";

} else if( $IMC>=35 && $IMC<=39.99){

    echo "<br><h3>Situação: Obesidade II (severa)</h3>";

} else if( $IMC>40 ){

    echo "<br><h3>Situação: Obesidade III (mórbida)</h3>";

}

   



?>