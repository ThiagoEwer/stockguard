<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <main>
        <div style="padding: 0 0 0;">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    PRODUTOS COM VALIDADE PRÓXIMA
                </div>
                <div class="card-body ">
                    <?php
                        include_once("../ADMIN/config.inc.php");

                        // Consulta no banco de dados
                        $consulta = $conn->query("SELECT
                          CODIGO AS CODIGO_PRODUTO,
                          NOME AS NOME_PRODUTO,
                          LOCAL AS LOCAL_ARMAZENADO,
                          QUANTIDADE AS QUANTIDADE_PRODUTO,
                          VALIDADE AS DATA_VENCIMENTO
                        FROM 
                          produtos
                        WHERE 
                          VALIDADE >= CURDATE()  -- Garante que a data de vencimento seja maior ou igual ao dia atual
                        ORDER BY 
                          VALIDADE  -- Ordena os resultados pela data de vencimento
                        LIMIT 5;  -- Limita os resultados a 5 registros");

                        // Verifica se há resultados
                        if ($consulta->rowCount() > 0) {
                            echo "<table class='table'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th scope='col'>Código</th>";
                            echo "<th scope='col'>Nome do Produto</th>";
                            echo "<th scope='col'>Local Armazenado</th>";
                            echo "<th scope='col'>Quantidade</th>";
                            echo "<th scope='col'>Data de Vencimento</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";

                            // Loop pelos resultados
                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>{$linha['CODIGO_PRODUTO']}</td>";
                                echo "<td>{$linha['NOME_PRODUTO']}</td>";
                                echo "<td>{$linha['LOCAL_ARMAZENADO']}</td>";
                                echo "<td>{$linha['QUANTIDADE_PRODUTO']}</td>";
                                echo "<td>{$linha['DATA_VENCIMENTO']}</td>";
                                echo "</tr>";
                            }

                            echo "</tbody>";
                            echo "</table>";
                        } else {
                            echo "Nenhum produto próximo do vencimento encontrado.";
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
