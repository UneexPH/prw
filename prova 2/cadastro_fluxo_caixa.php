<?php

include("conexao.php");
  
$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];

echo "<br>Data: ".$data;
echo "<br>Tipo: ".$tipo;
echo "<br>Valor: ".$valor;
echo "<br>Histórico: ".$historico;
echo "<br>Cheque: ".$cheque;


$sql = "INSERT INTO fluxo_caixa (data_op , tipo , valor , historico , cheque) 
VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";

$result = mysqli_query($con, $sql);
if($result)
    echo "<br>\nDados inseridos com sucesso.";
else 
    echo "<br>Erro ao inserir no banco de dados: ".mysqli_error($con);

?>

<br>
<a href='index.php'> Voltar </a>