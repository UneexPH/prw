<?php

include("conexao.php");

$nome = $_GET['nome'];
$email = $_GET['email'];
$tel = $_GET['tel'];

echo "<br>Nome: ".$nome;
echo "<br>E-mail: ".$email;
echo "<br>Telefone: ".$tel;

$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
         VALUES ('".$nome."','".$email."','".$tel."')";

$result = mysqli_query($con, $sql);
if($result)
    echo "<br>\nDados inseridos com sucesso.";
else 
    echo "<br>Erro ao inserir no banco de dados: ".mysqli_error($con);

?>

<br>
<a href='index.php'> Voltar </a>