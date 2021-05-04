<?php

include 'conexao.php';

$id     = $_POST['id'];
$nome     = $_POST['nome'];
$telefone = $_POST['telefone'];
$email    = $_POST['email'];

$recebendoCadastro = "UPDATE  dados_cliente 
SET nome = '$nome', telefone = '$telefone', 
email = '$email' WHERE id = '$id'";

$queryCadastros = mysqli_query($connect, $recebendoCadastro);

header ('location: listagem.php');
?>