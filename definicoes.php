<?php

include ("conn.php");

$pdo = conectar();

print_r($pdo);

$id = 2;

$stmt = $pdo->prepare('SELECT * FROM Clientes where id_clientes = ' . $id);
$stmt->execute();

$resultado = $stmt->fetchAll();

foreach ($resultado as $key) {
    $consulta = $key[1];
    echo "<pre>";
    print_r($consulta);
}




?>