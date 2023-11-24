<?php
include_once("../ADMIN/config.inc.php");

if (isset($_POST["codigo"]) && isset($_POST["cliente"]) && isset($_POST["produto"]) && isset($_POST["quantidade"]) && isset($_POST["local_almox"]) && isset($_POST["cep_destino"])) {
    // Inserir Ordem de Produção
    $codigo = $_POST["codigo"];
    $cliente = $_POST["cliente"];
    $produto = $_POST["produto"];
    $quantidade = $_POST["quantidade"];
    $local_almox = $_POST["local_almox"];
    $cep_destino = $_POST["cep_destino"];

    $stmt = $conn->prepare("INSERT INTO ORDENS_DE_PRODUCAO (CODIGO, CLIENTE, PRODUTO, QUANTIDADE, LOCAL_ALMOX, CEP_DESTINO) VALUES (:codigo, :cliente, :produto, :quantidade, :local_almox, :cep_destino)");
    $stmt->bindParam(":codigo", $codigo);
    $stmt->bindParam(":cliente", $cliente);
    $stmt->bindParam(":produto", $produto);
    $stmt->bindParam(":quantidade", $quantidade);
    $stmt->bindParam(":local_almox", $local_almox);
    $stmt->bindParam(":cep_destino", $cep_destino);

    if ($stmt->execute()) {
        echo "<script>
        alert('Ordem de Produção Inserida com sucesso!');
        window.history.go(-1);
    </script>";
    } 
    /*
    else {
        echo "<script>
        alert('Erro ao inserir a Ordem de Produção.');
        window.history.go(-1);
    </script>";
    }
    */
}

if (isset($_POST["id"]) && isset($_POST["novoCodigo"]) && isset($_POST["novoCliente"]) && isset($_POST["novoProduto"]) && isset($_POST["novaQuantidade"]) && isset($_POST["novoLocalAlmox"]) && isset($_POST["novoCepDestino"])) {
    // Atualizar Ordem de Produção
    $id = $_POST["id"];
    $novoCodigo = $_POST["novoCodigo"];
    $novoCliente = $_POST["novoCliente"];
    $novoProduto = $_POST["novoProduto"];
    $novaQuantidade = $_POST["novaQuantidade"];
    $novoLocalAlmox = $_POST["novoLocalAlmox"];
    $novoCepDestino = $_POST["novoCepDestino"];

    $stmt = $conn->prepare("UPDATE ORDENS_DE_PRODUCAO SET CODIGO = :novoCodigo, CLIENTE = :novoCliente, PRODUTO = :novoProduto, QUANTIDADE = :novaQuantidade, LOCAL_ALMOX = :novoLocalAlmox, CEP_DESTINO = :novoCepDestino WHERE ID = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":novoCodigo", $novoCodigo);
    $stmt->bindParam(":novoCliente", $novoCliente);
    $stmt->bindParam(":novoProduto", $novoProduto);
    $stmt->bindParam(":novaQuantidade", $novaQuantidade);
    $stmt->bindParam(":novoLocalAlmox", $novoLocalAlmox);
    $stmt->bindParam(":novoCepDestino", $novoCepDestino);

    if ($stmt->execute()) {
        echo "<script>
        alert('Ordem de Produção atualizada com sucesso!');
        window.history.go(-1);
    </script>";
    }
    /*
    else {
        echo "<script>
        alert('Erro ao atualizar a Ordem de Produção.');
        window.history.go(-1);
    </script>";
    }
    */
}

if (isset($_POST["idExcluir"])) {
    // Excluir Ordem de Produção
    $idExcluir = $_POST["idExcluir"];

    $stmt = $conn->prepare("DELETE FROM ORDENS_DE_PRODUCAO WHERE ID = :idExcluir");
    $stmt->bindParam(":idExcluir", $idExcluir);

    if ($stmt->execute()) {
        echo "<script>
        alert('Ordem de Produção excluída com sucesso!');
        window.history.go(-1);
    </script>";
    } 
    /*
    else {
        echo "<script>
        alert('Erro ao excluir a Ordem de Produção.');
        window.history.go(-1);
    </script>";
    }
    */
}


if (isset($_GET["listar"])) {
    // Listar Ordens de Produção
    $stmt = $conn->query("SELECT * FROM ORDENS_DE_PRODUCAO");
    $ordens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($ordens) > 0) {
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
        echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>";

        echo "<form method='post'>";
        echo "<table class='table'>";
        echo "<thead class='thead-light'>";
        echo "<tr>";
        echo "    <th>ID</th>";
        echo "    <th>Código</th>";
        echo "    <th>Cliente</th>";
        echo "    <th>Produto</th>";
        echo "    <th>Quantidade</th>";
        echo "    <th>Local de Armazenagem</th>";
        echo "    <th>CEP de Destino</th>";
        echo "    <th>Ação</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($ordens as $ordem) {
            echo "<tr>";
            echo "    <td>" . $ordem['ID'] . "</td>";
            echo "    <td>" . $ordem['CODIGO'] . "</td>";
            echo "    <td>" . $ordem['CLIENTE'] . "</td>";
            echo "    <td>" . $ordem['PRODUTO'] . "</td>";
            echo "    <td>" . $ordem['QUANTIDADE'] . "</td>";
            echo "    <td>" . $ordem['LOCAL_ALMOX'] . "</td>";
            echo "    <td>" . $ordem['CEP_DESTINO'] . "</td>";
            echo "    <td><button type='submit' class='btn btn-danger' name='idExcluir' value='" . $ordem['ID'] . "'><i class='fas fa-trash'></i></button></td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</form>";

        if (isset($_POST["idExcluir"])) {
            // Excluir Ordem de Produção
            $idExcluir = $_POST["idExcluir"];

            $stmt = $conn->prepare("DELETE FROM ORDENS_DE_PRODUCAO WHERE ID = :idExcluir");
            $stmt->bindParam(":idExcluir", $idExcluir);

            
        }
    }
}



?>
