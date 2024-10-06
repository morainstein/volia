<?php 

require_once __DIR__ . DIRECTORY_SEPARATOR ."..". DIRECTORY_SEPARATOR ."config". DIRECTORY_SEPARATOR ."dependencies.php";


$stmt = $PDO->query("SELECT * FROM produtos");

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echoPre($resultado);

?>