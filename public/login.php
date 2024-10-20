<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR .'dependencies.php';

use Volia\Entity\Cliente\Cliente;

// $cliente = new Cliente();

require_once RootPath("/view/login.php");

$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, "password", FILTER_DEFAULT);



?>