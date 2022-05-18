<?php

include("conexao.php");

$nome = $_GET['nome'];
$apelido = $_GET['apelido'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$telefone = $_GET['telefone'];
$celular = $_GET['celular'];
$email = $_GET['email'];
$dt_cadastro = date("Y-j-d");


echo "<br>Nome: ".$nome;
echo "<br>Endereço: ".$endereco;
echo "<br>Bairro: ".$bairro;
echo "<br>Cidade: ".$cidade;
echo "<br>Estado: ";$estado;
echo "<br>Telefone: ".$telefone;
echo "<br>Celular: ".$celular;
echo "<br>E-mail: ".$email;
echo "<br>Data do cadastro: ".$dt_cadastro;

$sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)
         VALUES ('".$nome."','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."','".$dt_cadastro."')";

$result = mysqli_query($con, $sql);
if($result)
    echo "<br>\nDados inseridos com sucesso.";
else 
    echo "<br>Erro ao inserir no banco de dados: ".mysqli_error($con);

?>

<br>
<a href='index.php'> Voltar </a>