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
        echo "<script>
        alert('Usuário inserido com sucesso!');
        window.history.go(-1);
    </script>";
    }
    /*
     else {
        echo "<script>
        alert('Erro ao inserir o usuário.');
        window.history.go(-1);
    </script>";  
    }
    */
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
        echo "<script>
        alert('Usuário atualizado com sucesso!');
        window.history.go(-1);
    </script>";
        
    }
    /*
    else {
        echo "<script>
        alert('Erro ao atualizar o usuário.');
        window.history.go(-1);
    </script>";
    }
    */
}


//----------------------------------------------------------------------------

if (isset($_POST["idExcluir"])) {
    // Excluir Usuário
    $idExcluir = $_POST["idExcluir"];

    $estadoUsu = $conn->prepare("DELETE FROM USUARIOS WHERE ID = :idExcluir");
    $estadoUsu->bindParam(":idExcluir", $idExcluir);

    if ($estadoUsu->execute()) {
        echo "<script>
        alert('Usuário excluído com sucesso!');
        window.history.go(-1);
    </script>";
    } 
    /*
    else {
        echo "<script>
        alert('Erro ao excluir o usuario');
        window.history.go(-1);
    </script>";
    }
    */
}


//----------------------------------------------------------------------------
if (isset($_GET["listar"])) {
    // Listar Usuários
    $estadoUsu = $conn->query("SELECT * FROM USUARIOS");
    $usuarios = $estadoUsu->fetchAll(PDO::FETCH_ASSOC);

    if (count($usuarios) > 0) {
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
        echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>";

        echo "<form method='post'>";
        echo "<table class='table'>";
        echo "<thead class='thead-light'>";
        echo "<tr>";
        echo "    <th>ID</th>";
        echo "    <th>Nome</th>";
        echo "    <th>Email</th>";
        echo "    <th>Telefone</th>";
        echo "    <th>Ação</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "    <td>" . $usuario['ID'] . "</td>";
            echo "    <td>" . $usuario['NOMES'] . "</td>";
            echo "    <td>" . $usuario['EMAIL'] . "</td>";
            echo "    <td>" . $usuario['TELEFONE'] . "</td>";
            echo "    <td><button type='submit' class='btn btn-danger' name='idExcluir' value='" . $usuario['ID'] . "'><i class='fas fa-trash'></i></button></td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</form>";

        if (isset($_POST["idExcluir"])) {
            // Excluir Usuário
            $idExcluir = $_POST["idExcluir"];

            $estadoUsu = $conn->prepare("DELETE FROM USUARIOS WHERE ID = :idExcluir");
            $estadoUsu->bindParam(":idExcluir", $idExcluir);

        }
    }
}

?>
