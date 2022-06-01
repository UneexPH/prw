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

    <br>
    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>  
    <br>

    <form action="altera_agenda_exe.php" method="POST" enctype="multipart/form-data">
    
        <div>
            <label for="">Nome: </label>
            <input type="text" name="nome"
            value="<?php echo $row['nome'] ?>" placeholder="Digite o nome">
        </div>
        <br>
        <div>
            <label for="">Apelido: </label>
            <input type="text" name="apelido"
            value="<?php echo $row['apelido'] ?>" placeholder="Digite o apelido">
        </div>
        <br>
        <div>
            <label for="">Endereço: </label>
            <input type="text" name="endereco"
            value="<?php echo $row['endereco'] ?>" placeholder="Digite o endereço">
        </div>
        <div>
            <label for="">Bairro: </label>
            <input type="text" name="bairro"
            value="<?php echo $row['bairro'] ?>" placeholder="Digite o bairro">
        </div>
        <div>
            <label for="">Cidade: </label>
            <input type="text" name="cidade"
            value="<?php echo $row['cidade'] ?>" placeholder="Digite a cidade">
        </div>
        <div>
            <label for="">Estado: </label>
            <input type="text" name="estado"
            value="<?php echo $row['estado'] ?>" placeholder="Digite o estado">
        </div>
        <div>
            <label for="">Telefone: </label>
            <input type="text" name="telefone"
            value="<?php echo $row['telefone'] ?>" placeholder="Digite o telefone">
        </div>
        <div>
            <label for="">Celular: </label>
            <input type="text" name="celular"
            value="<?php echo $row['celular'] ?>" placeholder="Digite o celular">
        </div>
        <div>
            <label for="">E-Mail: </label>
            <input type="email" name="email"
            value="<?php echo $row['email'] ?>" placeholder="Digite o email">
        </div>
        </div>
        <div class="form-item">
            <label for="">Alterar Retrato: </label>
            <input type="file" id="foto" name="foto" accept="image/*" />
        </div>   
        <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
        <br>

        <button type="submit">Alterar</button>
    </fieldset>

    <br>
    <a href='index.php'> Voltar </a>

    </form>
</body>


</html>