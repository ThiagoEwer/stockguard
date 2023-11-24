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
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
        echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>";
        echo "<form method='post'>";
        echo "<table class='table'>";
        echo "<thead class='thead-light'>";
        echo "<tr>";
        echo "    <th>ID</th>";
        echo "    <th>Código</th>";
        echo "    <th>Nome</th>";
        echo "    <th>Tipo</th>";
        echo "    <th>Quantidade</th>";
        echo "    <th>Local</th>";
        echo "    <th>Validade</th>";
        echo "    <th>Ação</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($produtos as $produto) {
            echo "<tr>";
            echo "    <td>" . $produto['ID'] . "</td>";
            echo "    <td>" . $produto['CODIGO'] . "</td>";
            echo "    <td>" . $produto['NOME'] . "</td>";
            echo "    <td>" . $produto['TIPO'] . "</td>";
            echo "    <td>" . $produto['QUANTIDADE'] . "</td>";
            echo "    <td>" . $produto['LOCAL'] . "</td>";
            echo "    <td>" . $produto['VALIDADE'] . "</td>";
            echo "    <td><button type='submit' class='btn btn-danger' name='idExcluir' value='" . $produto['ID'] . "'><i class='fas fa-trash'></i></button></td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</form>";

        if (isset($_POST["idExcluir"])) {
            $idExcluir = $_POST["idExcluir"];

            $estadoPrd = $conn->prepare("DELETE FROM PRODUTOS WHERE ID = :idExcluir");
            $estadoPrd->bindParam(":idExcluir", $idExcluir);


        }
    }
}


echo "<script>";
echo "    setTimeout(function() { location.reload(true); }, 1000);"; // Recarrega após 1 segundo (1000 milissegundos)
echo "</script>";

?>
