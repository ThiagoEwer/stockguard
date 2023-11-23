<?php
include_once("../ADMIN/config.inc.php");

//----------------------------------------------------------------------------

//adiciona
if (isset($_POST["codigo"]) && isset($_POST["nome"]) && isset($_POST["tipo"]) && isset($_POST["quantidade"]) && isset($_POST["local"]) && isset($_POST["validade"])) {
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $quantidade = $_POST["quantidade"];
    $local = $_POST["local"];
    $validade = $_POST["validade"];

    $estadoPrd = $conn->prepare("INSERT INTO PRODUTOS (CODIGO, NOME, TIPO, QUANTIDADE, LOCAL, VALIDADE) VALUES (:codigo, :nome, :tipo, :quantidade, :local, :validade)");
    $estadoPrd->bindParam(":codigo", $codigo);
    $estadoPrd->bindParam(":nome", $nome);
    $estadoPrd->bindParam(":tipo", $tipo);
    $estadoPrd->bindParam(":quantidade", $quantidade);
    $estadoPrd->bindParam(":local", $local);
    $estadoPrd->bindParam(":validade", $validade);

    if ($estadoPrd->execute()) {
        echo "<script>
        alert('Produto inserido com sucesso!');
        window.history.go(-1);
    </script>";
    } 
    /*
    else {
        echo "<script>
        alert('Erro ao inserir o produto.');
        window.history.go(-1);
    </script>";
    }
    */
}

//----------------------------------------------------------------------------

//atualiza
if (isset($_POST["id"]) && isset($_POST["novoCodigo"]) && isset($_POST["novoNome"]) && isset($_POST["novoTipo"]) && isset($_POST["novaQuantidade"]) && isset($_POST["novoLocal"]) && isset($_POST["novaValidade"])) {
    $id = $_POST["id"];
    $novoCodigo = $_POST["novoCodigo"];
    $novoNome = $_POST["novoNome"];
    $novoTipo = $_POST["novoTipo"];
    $novaQuantidade = $_POST["novaQuantidade"];
    $novoLocal = $_POST["novoLocal"];
    $novaValidade = $_POST["novaValidade"];

    $estadoPrd = $conn->prepare("UPDATE PRODUTOS SET CODIGO = :novoCodigo, NOME = :novoNome, TIPO = :novoTipo, QUANTIDADE = :novaQuantidade, LOCAL = :novoLocal, VALIDADE = :novaValidade WHERE ID = :id");
    $estadoPrd->bindParam(":id", $id);
    $estadoPrd->bindParam(":novoCodigo", $novoCodigo);
    $estadoPrd->bindParam(":novoNome", $novoNome);
    $estadoPrd->bindParam(":novoTipo", $novoTipo);
    $estadoPrd->bindParam(":novaQuantidade", $novaQuantidade);
    $estadoPrd->bindParam(":novoLocal", $novoLocal);
    $estadoPrd->bindParam(":novaValidade", $novaValidade);

    if ($estadoPrd->execute()) {
        echo "<script>
        alert('Produto atualizado com sucesso!');
        window.history.go(-1);
    </script>";
    } 
    /*
    else {
        echo "<script>
        alert('Erro ao atualizar o produto.');
        window.history.go(-1);
    </script>";
    }
    */
}

//----------------------------------------------------------------------------

//exclui

if (isset($_POST["idExcluir"])) {
    $idExcluir = $_POST["idExcluir"];

    $estadoPrd = $conn->prepare("DELETE FROM PRODUTOS WHERE ID = :idExcluir");
    $estadoPrd->bindParam(":idExcluir", $idExcluir);

    if ($estadoPrd->execute()) {
        echo "<script>
        alert('Produto excluído com sucesso!');
        window.history.go(-1);
    </script>";
    }
    /*
    else {
        echo "<script>
        alert('Erro ao excluir o produto.');
        window.history.go(-1);
    </script>";
    }
    */
}

//----------------------------------------------------------------------------

//lista

if (isset($_GET["listar"])) {
    $estadoPrd = $conn->query("SELECT * FROM PRODUTOS");
    $produtos = $estadoPrd->fetchAll(PDO::FETCH_ASSOC);

    if ($produtos) {
        echo "<style>";
        echo "    .prod-info {";
        echo "        background-color: #f0f0f0;";
        echo "        padding: 10px;";
        echo "        margin-bottom: 10px;";
        echo "        border: 1px solid #000;";
        echo "        border-radius: 3px;"; 
        echo "    }";
        echo "</style>";





        foreach ($produtos as $produto) {
            echo "<div class='prod-info'>";
            echo "ID: " . $produto['ID'] . "<br>";
            echo "Código: " . $produto['CODIGO'] . "<br>"; // Novo campo
            echo "Nome: " . $produto['NOME'] . "<br>";
            echo "Tipo: " . $produto['TIPO'] . "<br>";
            echo "Quantidade: " . $produto['QUANTIDADE'] . "<br>";
            echo "Local: " . $produto['LOCAL'] . "<br>";
            echo "Validade: " . $produto['VALIDADE'] . "
            <br><br>";
            echo "</div>";
        }
    } 
    /*
    else {
        echo "<script>
        alert('Nenhum produto encontrado.');
        window.history.go(-1);
    </script>";
    }
    */
}

?>
