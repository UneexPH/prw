<?php

include("conexao.php");

$fotoNome = $_FILES['foto']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$extensions_arr = array("jpg","jpeg","png","gif");

if( in_array($imageFileType,$extensions_arr) ){        
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
        $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
    }
}

$nome = $_GET['nome'];
$apelido = $_GET['apelido'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$telefone = $_GET['telefone'];
$celular = $_GET['celular'];
$email = $_GET['email'];
$dt_cadastro = date("d-j-Y");


echo "<br>Nome: ".$nome;
echo "<br>Endereço: ".$endereco;
echo "<br>Bairro: ".$bairro;
echo "<br>Cidade: ".$cidade;
echo "<br>Estado: ";$estado;
echo "<br>Telefone: ".$telefone;
echo "<br>Celular: ".$celular;
echo "<br>E-mail: ".$email;
echo "<br>Data do cadastro: ".$dt_cadastro;

$sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro, foto_blob, foto_nome)
         VALUES ('".$nome."','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."','".$dt_cadastro."','".$fotoBlob."','".$fotoNome."')";

$result = mysqli_query($con, $sql);
if($result)
    echo "<br>\nDados inseridos com sucesso.";
else 
    echo "<br>Erro ao inserir no banco de dados: ".mysqli_error($con);

?>

<br>
<a href='index.php'> Voltar </a>