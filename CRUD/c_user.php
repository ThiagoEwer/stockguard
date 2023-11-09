<?php
 include_once("../ADMIN/config.inc.php");


//----------------------------------------------------------------------------

if (isset($_POST["nome"]) && isset($_POST["email"])) {
    // Inserir Usuário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    // A instrução prepare tá sendo usada para evitar o SQL INJECTION
    $estadoUsu = $conn->prepare("INSERT INTO USUARIOS (NOMES, EMAIL, TELEFONE) VALUES (:nome, :email, :telefone)");
    // bindParam é a instrução preparada que atrela o que foi digitado no campo a coluna na tabela.
    $estadoUsu->bindParam(":nome", $nome);
    $estadoUsu->bindParam(":email", $email);
    $estadoUsu->bindParam(":telefone", $telefone);
    // após tudo que for digitado, o metodo execute coloca as informações no banco, ou não.
    if ($estadoUsu->execute()) {
        echo "Usuário inserido com sucesso!";
    } else {
        echo "Erro ao inserir o usuário.";
    }
}

//----------------------------------------------------------------------------

if (isset($_POST["id"]) && isset($_POST["novoNome"]) && isset($_POST["novoEmail"])) {
    // Atualizar Usuário
    $id = $_POST["id"];
    $novoNome = $_POST["novoNome"];
    $novoEmail = $_POST["novoEmail"];
    $novoTelefone = $_POST["novoTelefone"];

    $estadoUsu = $conn->prepare("UPDATE USUARIOS SET NOMES = :novoNome, EMAIL = :novoEmail, TELEFONE = :novoTelefone WHERE ID = :id");
    
    $estadoUsu->bindParam(":id", $id);
    $estadoUsu->bindParam(":novoNome", $novoNome);
    $estadoUsu->bindParam(":novoEmail", $novoEmail);
    $estadoUsu->bindParam(":novoTelefone", $novoTelefone);

    if ($estadoUsu->execute()) {
        echo "Usuário atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o usuário.";
    }
}


//----------------------------------------------------------------------------

if (isset($_POST["idExcluir"])) {
    // Excluir Usuário
    $idExcluir = $_POST["idExcluir"];

    $estadoUsu = $conn->prepare("DELETE FROM USUARIOS WHERE ID = :idExcluir");
    $estadoUsu->bindParam(":idExcluir", $idExcluir);

    if ($estadoUsu->execute()) {
        echo "Usuário excluído com sucesso!";
    } else {
        echo "Erro ao excluir o usuário.";
    }
}


//----------------------------------------------------------------------------
if (isset($_GET["listar"])) {
    // Listar Usuários
    $estadoUsu = $conn->query("SELECT * FROM USUARIOS");
    $usuarios = $estadoUsu->fetchAll(PDO::FETCH_ASSOC);

    if (count($usuarios) > 0) {
        echo "<h2>Lista de Usuários:</h2>";
        foreach ($usuarios as $usuario) {
            echo "ID: " . $usuario['ID'] . "<br>";
            echo "Nome: " . $usuario['NOMES'] . "<br>";
            echo "Email: " . $usuario['EMAIL'] . "<br>";
            echo "Telefone: " . $usuario['TELEFONE'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Nenhum usuário encontrado";
    }
}

?>
