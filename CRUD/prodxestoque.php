<?php
include_once("../ADMIN/config.inc.php");

try {
    // Consulta SQL
    $consulta = $conn->query("SELECT p.CODIGO AS CODIGO_PRODUTO,
                                    p.NOME AS NOME_PRODUTO,
                                    a.LOCAL_ARM AS LOCAL_ARMAZENADO,
                                    p.QUANTIDADE AS QUANTIDADE_PRODUTO,
                                    p.VALIDADE AS DATA_VENCIMENTO
                             FROM produtos p
                             JOIN almoxarifado a ON p.CODIGO = a.COD_PROD");

    $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultados) > 0) {
        echo "<table border='1'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Código do Produto</th>";
        echo "<th>Nome do Produto</th>";
        echo "<th>Local Armazenado</th>";
        echo "<th>Quantidade em Estoque</th>";
        echo "<th>Data de Validade</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($resultados as $resultado) {
            echo "<tr>";
            echo "<td>" . $resultado['CODIGO_PRODUTO'] . "</td>";
            echo "<td>" . $resultado['NOME_PRODUTO'] . "</td>";
            echo "<td>" . $resultado['LOCAL_ARMAZENADO'] . "</td>";
            echo "<td>" . $resultado['QUANTIDADE_PRODUTO'] . "</td>";
            echo "<td>" . $resultado['DATA_VENCIMENTO'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>Nenhum produto encontrado no estoque.</p>";
    }
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
