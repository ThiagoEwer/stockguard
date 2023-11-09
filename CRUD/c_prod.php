<?php
include_once("../ADMIN/config.inc.php");

//----------------------------------------------------------------------------

//adiciona
if (isset($_POST["nome"]) && isset($_POST["tipo"]) && isset($_POST["quantidade"]) && isset($_POST["local"]) && isset($_POST["validade"])) {
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $quantidade = $_POST["quantidade"];
    $local = $_POST["local"];
    $validade = $_POST["validade"];

    $estadoPrd = $conn->prepare("INSERT INTO PRODUTOS (NOME, TIPO, QUANTIDADE, LOCAL, VALIDADE) VALUES (:nome, :tipo, :quantidade, :local, :validade)");
    $estadoPrd->bindParam(":nome", $nome);
    $estadoPrd->bindParam(":tipo", $tipo);
    $estadoPrd->bindParam(":quantidade", $quantidade);
    $estadoPrd->bindParam(":local", $local);
    $estadoPrd->bindParam(":validade", $validade);

    if ($estadoPrd->execute()) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro ao inserir o produto.";
    }
}

//----------------------------------------------------------------------------

//atualiza
if (isset($_POST["id"]) && isset($_POST["novoNome"]) && isset($_POST["novoTipo"]) && isset($_POST["novaQuantidade"]) && isset($_POST["novoLocal"]) && isset($_POST["novaValidade"])) {
    $id = $_POST["id"];
    $novoNome = $_POST["novoNome"];
    $novoTipo = $_POST["novoTipo"];
    $novaQuantidade = $_POST["novaQuantidade"];
    $novoLocal = $_POST["novoLocal"];
    $novaValidade = $_POST["novaValidade"];

    $estadoPrd = $conn->prepare("UPDATE PRODUTOS SET NOME = :novoNome, TIPO = :novoTipo, QUANTIDADE = :novaQuantidade, LOCAL = :novoLocal, VALIDADE = :novaValidade WHERE ID = :id");
    $estadoPrd->bindParam(":id", $id);
    $estadoPrd->bindParam(":novoNome", $novoNome);
    $estadoPrd->bindParam(":novoTipo", $novoTipo);
    $estadoPrd->bindParam(":novaQuantidade", $novaQuantidade);
    $estadoPrd->bindParam(":novoLocal", $novoLocal);
    $estadoPrd->bindParam(":novaValidade", $novaValidade);

    if ($estadoPrd->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o produto.";
    }
}


//----------------------------------------------------------------------------

//exclui

if (isset($_POST["idExcluir"])) {
    $idExcluir = $_POST["idExcluir"];

    $estadoPrd = $conn->prepare("DELETE FROM PRODUTOS WHERE ID = :idExcluir");
    $estadoPrd->bindParam(":idExcluir", $idExcluir);

    if ($estadoPrd->execute()) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Erro ao excluir o produto.";
    }
}


//----------------------------------------------------------------------------

//lista

if (isset($_GET["listar"])) {
    $estadoPrd = $conn->query("SELECT * FROM PRODUTOS");
    $produtos = $estadoPrd->fetchAll(PDO::FETCH_ASSOC);

    if ($produtos) {
        echo "<h2>Lista de Produtos:</h2>";
        foreach ($produtos as $produto) {
            echo "ID: " . $produto['ID'] . "<br>";
            echo "Nome: " . $produto['NOME'] . "<br>";
            echo "Tipo: " . $produto['TIPO'] . "<br>";
            echo "Quantidade: " . $produto['QUANTIDADE'] . "<br>";
            echo "Local: " . $produto['LOCAL'] . "<br>";
            echo "Validade: " . $produto['VALIDADE'] . "<br><br>";
        }
    } else {
        echo "Nenhum produto encontrado.";
    }
}

?>
