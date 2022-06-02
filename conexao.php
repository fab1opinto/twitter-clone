<?php

$servername = "localhost"; //padrão - server local ou adicionar um remoto
$database = "twitter_clone"; //alterar conforme o nome do banco de dados, local ou remoto
$username = "root"; //padrão root.
$password = ""; //senha da conexão do banco de dados.
//criar conexão
$conexao = mysqli_connect($servername, $username, $password, $database);

?>