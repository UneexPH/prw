<?php

$frase = "Eu estou com sono queria dormir mas estou fazendo a lista de php kk...";

$vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$vogaisparax = str_replace($vogais, "X", $frase);

echo $vogaisparax;

?>