
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ORDENS DE SAÍDAS
                </div>
                <div class="card-body">
                    <?php
                        include_once("../ADMIN/config.inc.php");

                        // Consulta no banco de dados
                        $consulta = $conn->query("SELECT
                          CODIGO,
                          CLIENTE,
                          PRODUTO,
                          QUANTIDADE,
                          LOCAL_ALMOX AS LOCAL_DE_ARMAZENAGEM,
                          CEP_DESTINO
                        FROM 
                          ordens_de_producao");

                        // Verifica se há resultados
                        if ($consulta->rowCount() > 0) {
                            echo "<table class='table'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th scope='col'>Código</th>";
                            echo "<th scope='col'>Cliente</th>";
                            echo "<th scope='col'>Produto</th>";
                            echo "<th scope='col'>Quantidade</th>";
                            echo "<th scope='col'>Local de Armazenagem</th>";
                            echo "<th scope='col'>CEP Destino</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";

                            // Loop pelos resultados
                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>{$linha['CODIGO']}</td>";
                                echo "<td>{$linha['CLIENTE']}</td>";
                                echo "<td>{$linha['PRODUTO']}</td>";
                                echo "<td>{$linha['QUANTIDADE']}</td>";
                                echo "<td>{$linha['LOCAL_DE_ARMAZENAGEM']}</td>";
                                echo "<td>{$linha['CEP_DESTINO']}</td>";
                                echo "</tr>";
                            }

                            echo "</tbody>";
                            echo "</table>";
                        } else {
                            echo "Nenhuma ordem de produção encontrada.";
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
