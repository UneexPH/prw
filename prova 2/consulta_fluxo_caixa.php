<?php
    include('conexao.php');
    $tipo = $_POST['consulta'];
    $total = 0;

        if($tipo == 'Entrada'){

            $sql="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";

        } else if ($tipo == 'Saida'){

            $sql="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";

        } else if ($tipo == 'Saldo'){

            $sql="select sum(case when tipo = 'entrada' then valor else 0 end) - 
            sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";

        }

        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($result))
            {
                $total = $total + $row['valor'] ;

            }      

            echo "<h1>Consulta de Fluxo do Caixa</h1>";
            echo "<br><h2>Tipo de Consulta: Total de ".$tipo."</h2><br>";
            echo "<br><h2>Valor: R$ ".$total."</h2>"; 

            echo "<br><a href='index.php'> Voltar </a>";
?>


