<?php

   echo "<h1> SELECIONADOS </h1> ";

   echo "Sua mensagem: " . $_GET["mensagem"];
   echo "<br>"."<br>"."Operação escolhida: ".$_GET["operacao"];
   echo "<br>"."<br>"."Número 1: ".$_GET['num1'];
   echo "<br>"."Número 2: ".$_GET['num2'];

   // Verifica se usuário escolheu algum número
    if(isset($_GET["numeros"]))
    {
    echo " <BR> As cores de sua preferência são:<BR>";

    // Faz loop pelo array dos numeros
    foreach($_GET["numeros"] as $numero)
    {
        echo "- " . $numero . "<BR>";
    }
    }else
    {
    echo "Você não escolheu cor!<br>";
    }

    echo "Seu nome é: " . $_GET["nome"] . "<BR>";

    // Verifica se usuário escolheu algum livro
    if(isset($_GET["livros"]))
    {
    echo "O(s) livro(s) que você deseja comprar:<br>";
    // Faz loop para os livros
    foreach($_GET["livros"] as $livro)
    {
        echo "- " . $livro . "<br>";
    }
    }
    else
    {
    echo "Você não escolheu nenhum livro!";
    }
  
?>