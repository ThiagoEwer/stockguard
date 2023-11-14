
<?php
/*
//verificar como incluir essa tabela na card de estoque atual

include_once("../ADMIN/config.inc.php");

// Executar a query
$query = "SELECT p.CODIGO AS CODIGO_PRODUTO,
                 p.NOME AS NOME_PRODUTO,
                 a.LOCAL_ARM AS LOCAL_ARMAZENADO,
                 p.QUANTIDADE AS QUANTIDADE_PRODUTO,
                 p.VALIDADE AS DATA_VENCIMENTO
          FROM produtos p
          JOIN almoxarifado a ON p.CODIGO = a.COD_PROD";

$result = $conn->query($query);

// Verificar se a query retornou resultados
if ($result->num_rows > 0) {
    // Exibir a tabela
    echo '<table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Local Armazenado</th>
                    <th>Quantidade</th>
                    <th>Data de Vencimento</th>
                </tr>
            </thead>
            <tbody>';

    // Loop pelos resultados e exibir cada linha da tabela
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['CODIGO_PRODUTO'] . '</td>
                <td>' . $row['NOME_PRODUTO'] . '</td>
                <td>' . $row['LOCAL_ARMAZENADO'] . '</td>
                <td>' . $row['QUANTIDADE_PRODUTO'] . '</td>
                <td>' . $row['DATA_VENCIMENTO'] . '</td>
              </tr>';
    }

    echo '</tbody></table>';
} else {
    echo 'Nenhum resultado encontrado.';
}
*/
?>
