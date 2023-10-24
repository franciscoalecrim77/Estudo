<?php

$host = "127.0.0.1";
$user = "francisco";
$password = "weagle";
$db = "teste";

$conexão = new mysqli($host, $user, $password, $db);

if (mysqli_connect_errno()){
    echo "Não é possivel conectar ao banco de dados.";
}else {
    echo "conectado com sucesso.";
}

?>