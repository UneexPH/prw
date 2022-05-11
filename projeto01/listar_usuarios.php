<?php
    include('conexao.php');
    $sql = 'SELECT * FROM usuario';
    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Usuários</title>
</head>
<body>
    <h1>Listagem de Usuários</h1>
    <table align="center" border="3" width=500>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>". $row['id_usuario'] . '</td>';
                echo "<td>". $row['nome_usuario'] . '</td>';
                echo "<td>". $row['email_usuario'] . '</td>';
                echo "<td>". $row['telefone_usuario'] . '</td>';
                echo "</tr>";


            }        
        ?>
    </table>

    <br>
    <a href='index.php'> Voltar </a>
    
</body>
</html>