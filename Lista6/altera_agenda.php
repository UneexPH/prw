<?php

 include('conexao.php');
 $id_agenda = $_GET['id_agenda'];
 $sql = 'SELECT * FROM agenda where id_agenda ='.$id_agenda;
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>


<body>
    <fieldset>
    <legend><h1> Alterar informações Agenda</h1></legend>

    <form action="altera_agenda_exe.php" method="GET">
    
        <div>
            <label for="">Nome: </label>
            <input type="text" name="nome">
        </div>
        <br>
        <div>
            <label for="">Apelido: </label>
            <input type="text" name="apelido">
        </div>
        <br>
        <div>
            <label for="">Endereço: </label>
            <input type="text" name="endereco">
        </div>
        <div>
            <label for="">Bairro: </label>
            <input type="text" name="bairro">
        </div>
        <div>
            <label for="">Cidade: </label>
            <input type="text" name="cidade">
        </div>
        <div>
            <label for="">Estado: </label>
            <input type="text" name="estado">
        </div>
        <div>
            <label for="">Telefone: </label>
            <input type="text" name="telefone">
        </div>
        <div>
            <label for="">Celular: </label>
            <input type="text" name="celular">
        </div>
        <div>
            <label for="">E-Mail: </label>
            <input type="email" name="email">
        </div>
        <br>

        <button type="submit">Alterar</button>
    </fieldset>

    <br>
    <a href='index.php'> Voltar </a>

    </form>
</body>


</html>