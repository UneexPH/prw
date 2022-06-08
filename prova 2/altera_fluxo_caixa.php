<?php

 include('conexao.php');
 $id = $_GET['id'];
 $sql = 'SELECT * FROM fluxo_caixa where id ='.$id;
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro Fluxo de Caixa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>


<body>
    <fieldset>
    <legend><h1> Cadastro de Fluxo de Caixa</h1></legend>

    <form action="altera_fluxo_caixa_exe.php" method="POST" enctype="multipart/form-data">
    
        <div>
            <label for="">Data: </label>
            <input type="date" name="data">
        </div>
        <br>
        <div>
            <label for="">Tipo: </label>
            <input type=radio name=tipo value="Entrada"> Entrada
            <input type=radio name=tipo value="Saida"> Saída
        </div>
        <br>
        <div>
            <label for="">Valor: </label>
            <input type="text" name="valor" value="<?php echo $row['valor'] ?>" placeholder="Digite o valor">
        </div>
        <br>
        <div>
            <label for="">Histórico: </label>
            <input type="text" name="historico" value="<?php echo $row['historico'] ?>" placeholder="Digite o histórico">
        </div>
        <br>
        <div>
            <label for="">Cheque: </label>
            <select name=cheque>
            <option value=Sim>Sim</option>
            <option value=Nao>Não</option>
            </select>
        </div>
        <br>
        <input name="id" type="hidden" value="<?php echo $row['id']?>">
        <div>
            <button type="submit">Enviar</button>
        </div>
        <br>

    </fieldset>

    <br>
    <div>
        <a href='index.php'> Voltar </a>
    </div>

    </form>
</body>


</html>