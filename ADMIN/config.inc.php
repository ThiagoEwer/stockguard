<?php
$host = "localhost";
$dbname = "stockguard";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

/* If de validação de conexão.
if (is_object($conn)) {
    echo "Conexão estabelecida com sucesso";
} else {
    echo "Houve algum erro na conexão";
}
*/

?>

