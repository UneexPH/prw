<?php

   echo "<h1> SELECIONADOS </h1> ";

   echo "Sua mensagem: " . $_GET["mensagem"];
   echo "<br>"."<br>"."Operação escolhida: ".$_GET["operacao"];
   echo "<br>"."<br>"."Número 1: ".$_GET['num1'];
   echo "<br>"."Número 2: ".$_GET['num2'];

   // Verifica se usuário escolheu algum número
    if(isset($_GET["numeros"]))
    {
    echo " <BR><BR> As cores de sua preferência são:<BR>";

    // Faz loop pelo array dos numeros
    foreach($_GET["numeros"] as $numero)
    {
        echo "- " . $numero . "<BR>";
    }
    }else
    {
    echo "Você não escolheu cor!<br>";
    }

    echo "<BR> Seu nome é: " . $_GET["nome"] . "<BR>";

    // Verifica se usuário escolheu algum livro
    if(isset($_GET["livros"]))
    {
    echo "<BR>Linguagens em que sabe programar:<br>";
    // Faz loop para os livros
    foreach($_GET["linguagens"] as $linguas)
    {
        echo "- " . $linguas . "<br>";
    }
    }
    else
    {
    echo "<BR>Você não sabe nenhuma linguagem";
    }
  
?>