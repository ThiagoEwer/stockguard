<?php
include_once("../ADMIN/config.inc.php");

// Inserir Item no Almoxarifado
if (isset($_POST["codigo"]) && isset($_POST["local_arm"]) && isset($_POST["cod_prod"]) && isset($_POST["total_prod"])) {
    $codigo = $_POST["codigo"];
    $local_arm = $_POST["local_arm"];
    $cod_prod = $_POST["cod_prod"];
    $total_prod = $_POST["total_prod"];

    $estadoAlmox = $conn->prepare("INSERT INTO ALMOXARIFADO (CODIGO, LOCAL_ARM, COD_PROD, TOTAL_PROD) VALUES (:codigo, :local_arm, :cod_prod, :total_prod)");
    $estadoAlmox->bindParam(":codigo", $codigo);
    $estadoAlmox->bindParam(":local_arm", $local_arm);
    $estadoAlmox->bindParam(":cod_prod", $cod_prod);
    $estadoAlmox->bindParam(":total_prod", $total_prod);

    if ($estadoAlmox->execute()) {
        echo "Item inserido no Almoxarifado com sucesso!";
    } else {
        echo "Erro ao inserir o item no Almoxarifado.";
    }
}

// Atualizar Item no Almoxarifado
if (isset($_POST["id"]) && isset($_POST["novoCodigo"]) && isset($_POST["novoLocalArm"]) && isset($_POST["novoCodProd"]) && isset($_POST["novoTotalProd"])) {
    $id = $_POST["id"];
    $novoCodigo = $_POST["novoCodigo"];
    $novoLocalArm = $_POST["novoLocalArm"];
    $novoCodProd = $_POST["novoCodProd"];
    $novoTotalProd = $_POST["novoTotalProd"];

    $estadoAlmox = $conn->prepare("UPDATE ALMOXARIFADO SET CODIGO = :novoCodigo, LOCAL_ARM = :novoLocalArm, COD_PROD = :novoCodProd, TOTAL_PROD = :novoTotalProd WHERE ID = :id");
    $estadoAlmox->bindParam(":id", $id);
    $estadoAlmox->bindParam(":novoCodigo", $novoCodigo);
    $estadoAlmox->bindParam(":novoLocalArm", $novoLocalArm);
    $estadoAlmox->bindParam(":novoCodProd", $novoCodProd);
    $estadoAlmox->bindParam(":novoTotalProd", $novoTotalProd);

    if ($estadoAlmox->execute()) {
        echo "<script>
        alert('Item no Almoxarifado atualizado com sucesso!');
        window.history.go(-1);
    </script>";
        
    } else {
        echo "<script>
        alert('Erro ao atualizar o item no Almoxarifado.');
        window.history.go(-1);
    </script>";
    }
}

// Excluir Item do Almoxarifado
if (isset($_POST["idExcluir"])) {
    $idExcluir = $_POST["idExcluir"];

    $estadoAlmox = $conn->prepare("DELETE FROM ALMOXARIFADO WHERE ID = :idExcluir");
    $estadoAlmox->bindParam(":idExcluir", $idExcluir);

    if ($estadoAlmox->execute()) {
        echo "<script>
        alert('Item do Almoxarifado excluído com sucesso!');
        window.history.go(-1);
    </script>";
    } else {
        echo "<script>
        alert('Erro ao excluir o item do Almoxarifado.');
        window.history.go(-1);
    </script>";
    }
}

// Listar Itens do Almoxarifado
if (isset($_GET["listar"])) {
    $estadoAlmox = $conn->query("SELECT * FROM ALMOXARIFADO");
    $itens_almoxarifado = $estadoAlmox->fetchAll(PDO::FETCH_ASSOC);

    if (count($itens_almoxarifado) > 0) {

        echo "<style>";
        echo "    .almox-info {";
        echo "        background-color: #f0f0f0;";
        echo "        padding: 10px;";
        echo "        margin-bottom: 10px;";
        echo "        border: 1px solid #000;";
        echo "        border-radius: 3px;"; 
        echo "    }";
        echo "</style>";




        foreach ($itens_almoxarifado as $item) {
            echo "<div class='almox-info'>";
            echo "ID: " . $item['ID'] . "<br>";
            echo "Código: " . $item['CODIGO'] . "<br>";
            echo "Local de Armazenagem: " . $item['LOCAL_ARM'] . "<br>";
            echo "Código do Produto: " . $item['COD_PROD'] . "<br>";
            echo "Total de Produtos: " . $item['TOTAL_PROD'] . "<br>";
            echo "</div>";
            echo "<br>";
        }
    } else {
        echo "<script>
        alert('Nenhum produto no almoxarifado, cadastre primeiro');
        window.history.go(-1);
    </script>";
    }
}

?>
