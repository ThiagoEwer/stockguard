<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$dbname = "stockguard";

$conn = new mysqli($host, $usuario, $senha, $dbname);

if ($conn->connect_errno) 
{
  echo "Error";
}
else
{
    echo "Conexão Efetuada com Sucesso";
}
?>

