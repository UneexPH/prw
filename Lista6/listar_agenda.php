<?php
    include('conexao.php');
    $sql = 'SELECT * FROM agenda';
    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Agendas</title>
</head>
<body>
    <h1>Listagem de Agendas</h1>
    <table align="center" border="3" width=500 >
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereco</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Data</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>". $row['id_agenda'] . '</td>';
                echo "<td><a href='altera_agenda.php?id_agenda=". $row['id_agenda'] ."'>".$row['nome'] . "</a></td>";
                echo "<td>". $row['apelido'] . '</td>';
                echo "<td>". $row['endereco'] . '</td>';
                echo "<td>". $row['bairro'] . '</td>';
                echo "<td>". $row['cidade'] . '</td>';
                echo "<td>". $row['estado'] . '</td>';
                echo "<td>". $row['telefone'] . '</td>';
                echo "<td>". $row['celular'] . '</td>';
                echo "<td>". $row['email'] . '</td>';
                echo "<td>". $row['dt_cadastro'] . '</td>';
                echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";
                echo "</tr>";


            }        
        ?>
    </table>

    <br>
    <a href='index.php'> Voltar </a>

</body>
</html>