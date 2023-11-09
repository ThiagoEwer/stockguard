<?php
include_once("../ADMIN/config.inc.php");

// Inserir Cliente
if (isset($_POST["cnpj_cpf"]) && isset($_POST["razao_social_nome"]) && isset($_POST["cep"])) {
    $cnpj_cpf = $_POST["cnpj_cpf"];
    $razao_social_nome = $_POST["razao_social_nome"];
    $cep = $_POST["cep"];

    $estadoCli = $conn->prepare("INSERT INTO CLIENTES (CNPJ_CPF, RAZAO_SOCIAL_NOME, CEP) VALUES (:cnpj_cpf, :razao_social_nome, :cep)");
    $estadoCli->bindParam(":cnpj_cpf", $cnpj_cpf);
    $estadoCli->bindParam(":razao_social_nome", $razao_social_nome);
    $estadoCli->bindParam(":cep", $cep);

    if ($estadoCli->execute()) {
        echo "Cliente inserido com sucesso!";
    } else {
        echo "Erro ao inserir o cliente.";
    }
}

// Atualizar Cliente
if (isset($_POST["id"]) && isset($_POST["novoCnpjCpf"]) && isset($_POST["novoRazaoSocialNome"]) && isset($_POST["novoCep"])) {
    $id = $_POST["id"];
    $novoCnpjCpf = $_POST["novoCnpjCpf"];
    $novoRazaoSocialNome = $_POST["novoRazaoSocialNome"];
    $novoCep = $_POST["novoCep"];

    $estadoCli = $conn->prepare("UPDATE CLIENTES SET CNPJ_CPF = :novoCnpjCpf, RAZAO_SOCIAL_NOME = :novoRazaoSocialNome, CEP = :novoCep WHERE ID = :id");
    $estadoCli->bindParam(":id", $id);
    $estadoCli->bindParam(":novoCnpjCpf", $novoCnpjCpf);
    $estadoCli->bindParam(":novoRazaoSocialNome", $novoRazaoSocialNome);
    $estadoCli->bindParam(":novoCep", $novoCep);

    if ($estadoCli->execute()) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o cliente.";
    }
}

// Excluir Cliente
if (isset($_POST["idExcluir"])) {
    $idExcluir = $_POST["idExcluir"];

    $estadoCli = $conn->prepare("DELETE FROM CLIENTES WHERE ID = :idExcluir");
    $estadoCli->bindParam(":idExcluir", $idExcluir);

    if ($estadoCli->execute()) {
        echo "Cliente excluído com sucesso!";
    } else {
        echo "Erro ao excluir o cliente.";
    }
}

// Listar Clientes
if (isset($_GET["listar"])) {
    $estadoCli = $conn->query("SELECT * FROM CLIENTES");
    $clientes = $estadoCli->fetchAll(PDO::FETCH_ASSOC);

    if ($clientes) {
        echo "<h2>Lista de Clientes:</h2>";
        foreach ($clientes as $cliente) {
            echo "ID: " . $cliente['ID'] . "<br>";
            echo "CNPJ/CPF: " . $cliente['CNPJ_CPF'] . "<br>";
            echo "Razão Social/Nome: " . $cliente['RAZAO_SOCIAL_NOME'] . "<br>";
            echo "CEP: " . $cliente['CEP'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Nenhum cliente cadastrado, sua empresa vai falir sem clientes.";
    }
}

?>
