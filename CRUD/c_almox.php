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
        echo "<script>
        alert('Item inserido no Almoxarifado com sucesso!');
        window.history.go(-1);
    </script>";
    }
    /*
     else {
        echo "<script>
        alert('Erro ao inserir o item no Almoxarifado.');
        window.history.go(-1);
    </script>";
    }
    */
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
        
    }
    /*
    else {
        echo "<script>
        alert('Erro ao atualizar o item no Almoxarifado.');
        window.history.go(-1);
    </script>";
    }
    */
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
    }
    /* 
    else {
        echo "<script>
        alert('Erro ao excluir o item do Almoxarifado.');
        window.history.go(-1);
    </script>";
    }
    */
}

// Listar Itens do Almoxarifado
if (isset($_GET["listar"])) 
    $estadoAlmox = $conn->query("SELECT * FROM ALMOXARIFADO");
    $itens_almoxarifado = $estadoAlmox->fetchAll(PDO::FETCH_ASSOC);

    if (count($itens_almoxarifado) > 0) {
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
        echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>";
        echo "<div style='overflow-x:auto;'>";
        echo "<form method='post'>";
        echo "<table class='table'>";
        echo "<thead class='thead-light' style='position: sticky; top: 0;'>";
        echo "<tr>";
        echo "    <th>ID</th>";
        echo "    <th>Código</th>";
        echo "    <th>Local de Armazenagem</th>";
        echo "    <th>Código do Produto</th>";
        echo "    <th>Total de Produtos</th>";
        echo "    <th>Ação</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
    
        foreach ($itens_almoxarifado as $item) {
            echo "<tr>";
            echo "    <td>" . $item['ID'] . "</td>";
            echo "    <td>" . $item['CODIGO'] . "</td>";
            echo "    <td>" . $item['LOCAL_ARM'] . "</td>";
            echo "    <td>" . $item['COD_PROD'] . "</td>";
            echo "    <td>" . $item['TOTAL_PROD'] . "</td>";
            echo "    <td><button type='submit' class='btn btn-danger' name='idExcluir' value='" . $item['ID'] . "'><i class='fas fa-trash'></i></button></td>";
            echo "</tr>";
        }
    
        echo "</tbody>";
        echo "</table>";
        echo "</form>";
    
        if (isset($_POST["idExcluir"])) {
            $idExcluir = $_POST["idExcluir"];
    
            $estadoAlmox = $conn->prepare("DELETE FROM ALMOXARIFADO WHERE ID = :idExcluir");
            $estadoAlmox->bindParam(":idExcluir", $idExcluir);
    
 
        }
    }


    echo "<script>";
echo "    setTimeout(function() { location.reload(true); }, 1000);";
echo "</script>";
?>
