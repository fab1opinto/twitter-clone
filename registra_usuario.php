<?php

include 'conexao.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO `usuarios`(`usuario`, `email`, `senha`) VALUES ('$usuario','$email', '$senha')";
$inserir = mysqli_query($conexao, $sql);

?>