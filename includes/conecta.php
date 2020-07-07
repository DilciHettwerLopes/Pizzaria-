<?php
//error_reporting(0);
$link = mysqli_connect("127.0.0.1", "root", "", "pizzaria");
if (!$link) {
    echo "Falha ao conectar o servidor de banco de dados." . PHP_EOL;
    exit;
}

$chave = 'senac2020!';