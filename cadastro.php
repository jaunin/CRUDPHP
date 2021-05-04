<?php

include 'conexao.php';

$nome     = $_POST['nome'];
$telefone = $_POST['telefone'];
$email    = $_POST['email'];

$recebendoCadastro = "INSERT INTO dados_cliente VALUES ('', '$nome', '$telefone', '$email')";

$queryCadastros = mysqli_query($connect, $recebendoCadastro);

header ('location: listagem.php');
?>