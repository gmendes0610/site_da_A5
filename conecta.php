<?php
$host    = "sql201.infinityfree.com";
$usuario = "if0_43517466";
$senha   = "Clariel0607";
$banco   = "if0_43517466_banco_da_A5";
$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>