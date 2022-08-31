<?php

include './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try {
    $conn = mysqli_connect($_ENV['HOST'], $_ENV['USER'], $_ENV['PASS'], $_ENV['DB']);
} catch (Exception $e) {
    die();
    echo 'Error :- ' . $e->getMessage();
}
function clear($data)
{
    $cls = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    $cls = trim($cls);
    return $cls;
}


?>