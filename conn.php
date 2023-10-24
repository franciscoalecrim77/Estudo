<?php
/*
$host = "127.0.0.1";
$user = "francisco";
$password = "weagle";
$db = "teste";
$port = "3306";

$mysqli = new mysqli($host,$user,$password,$db,$port);

if($mysqli->connect_errno){
    echo "falha ao conectado com o banco de dados";
}else{
    echo "conectado com sucesso";
}

*/


function conectar(){

    $host = "127.0.0.1";
    $user = "francisco";
    $password = "weagle";
    $db = "teste";
    $port = "3306";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        $pdo->exec("SET CHARACTER SET utf8");
    } catch (Exception $error) {
        
        echo "Deu o seguinte erro . {$error->getMessage()}";
        
    }
    return $pdo;
}

?>