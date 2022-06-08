<?php
    include("conexao.php");
  
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    
  
    echo "<br><h1> Alteração de dados </h1>";  
    echo "<br>Histórico: ".$historico;

    $sql = "UPDATE fluxo_caixa SET
                data_op='".$data."',
                tipo='".$tipo."',
                valor='".$valor."',
                historico='".$historico."',
                cheque='".$cheque."'
                WHERE id=".$id;

    $result = mysqli_query($con, $sql);

    if($result)
        echo "<br> Dados alterados com sucesso <br>";
    else 
        echo "Erro ao alterar o banco de dados: ".mysqli_error($con)."<br>";

?>

<br>
<a href='index.php'> Voltar </a>