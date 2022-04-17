<?php

//Crie um formulário contendo Nome do Cliente, Estado (Menu
//Suspenso), CPF, RG, Sexo (Botão de Opção), Saldo do Cartão de Crédito e Total da Compra e um script em
//PHP capaz de validar esses campos da seguinte forma:
//• Nome do Cliente, CPF, RG não podem estar em branco;
//• O saldo do cartão de crédito deve ser maior que o total da compra, se o saldo for menor que o total
//apresentar a mensagem “Saldo Insuficiente para Concluir Compra!” na cor Vermelho, senão deverá
//apresentar uma mensagem contendo o novo saldo, ou seja, saldo – total da compra.
//• Antes da validação deverá mostrar todos os dados cadastrados

$nome = $_GET["nome"];
$estado = $_GET["estado"];
$CPF = $_GET["cpf"];
$RG = $_GET["rg"];
$sexo = $_GET["sexo"];
$saldo = $_GET["saldo"];
$total = $_GET["total"];

echo "<h2>Informações Cadastro</h2>";

if(empty($RG) || empty($CPF) || empty($nome)){

    echo "<br><h3>Campo do Nome, RG ou CPF vazio, favor preencher novamente.</h3>";

} else {

echo "<BR>Nome do Cliente: ".$nome;
echo "<BR>Estado: ".$estado;
echo "<BR>CPF: ".$CPF;
echo "<BR>RG: ".$RG;
echo "<BR>Sexo: ".$sexo;
echo "<BR>Saldo do Cartão de Crédito: R$".$saldo;
echo "<BR>Total da compra efetuada: R$".$total;

if($saldo < $total){

    echo "<br><br>Saldo Insuficiente Para Concluir a Compra!";

} else if ($saldo >= $total){

    $novosaldo=$saldo-$total;
    echo "<br><br>Saldo do Cartão de Crédito após a compra: R$".$novosaldo;

}

}



   



?>