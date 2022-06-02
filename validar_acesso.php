<?php

include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";
$inserir = mysqli_query($conexao, $sql);

if($inserir) {
    $dados_usuario = mysqli_fetch_array($inserir);
    var_dump($dados_usuario);
} else {
    echo 'Erro na execução da consulta';
}

?>