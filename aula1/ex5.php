<?php

//data 
echo "Data Atual: ".date('d/m/Y'). "<br>";
echo " Horário: ".date('H:i:s')."<br>" ;

//--------------------------------------------------------------------

$palavra = "  Ciência da Computação ";
echo "A variável contém: " . strlen($palavra) . "caracteres" . "<br>";
$palavra = trim($palavra); //comando para tirar os espaços da palavra
echo "A variável agora contém: " . strlen($palavra) . "caracteres"."<br>";

//----------------------------------------------------------------------

//substituir parte das strings

$data = date("m-d-Y");
$dia = substr($data,3,2);
$mes = substr($data,0,2);
$ano = substr($data,6,4);
$novadata = $dia . "/" . $mes . "/" . $ano;
echo "<br>".$data;
echo "<br>".$novadata."<br>";

//-------------------------------------------------------------------

//separar dados a partir de algum caractere
$data = date("m-d-Y");
$partes = explode("-", $data);
$parte1 = $partes[0];
$parte2 = $partes[1];
$parte3 = $partes[2];
$novadata = $parte2 . "/" . $parte1 . "/" . $parte3;
echo "<br>".$data;
echo "<br>".$novadata."<br>"."<br>";

//-------------------------------------------------------------------------

//Strtoupper converte todos os caracteres contidos em uma string em letras maiúsculas.
//Strtolower converte todos os caracteres contidos em uma string em letras minúsculas.

$A = "EiTa noIS!" ;
$B = strtoupper($A);
$C = strtolower($A);
echo $A ."<br>";
echo $B ."<br>";
echo $C ."<br>";


?>