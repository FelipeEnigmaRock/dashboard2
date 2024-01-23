<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type: application/json; charset=utf-8');


$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "Igreja";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);
mysqli_set_charset($conexao,"utf8");
if(mysqli_connect_error()){
echo "Falha na conexão: ".mysqli_connect_error();
}

date_default_timezone_set('America/Sao_Paulo');


 ?>
