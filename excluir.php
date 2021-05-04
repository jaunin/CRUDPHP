<?php

include 'conexao.php';

$id = $_POST['id'];

$recebendoCadastro = "DELETE FROM dados_cliente WHERE id = '$id'";

$queryCadastros = mysqli_query($connect, $recebendoCadastro);

header ('location: listagem.php');
?>