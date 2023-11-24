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
        echo "<script>
        alert('Cliente inserido com sucesso!');
        window.history.go(-1);
    </script>";
    } 
    /*
    else {
        echo "<script>
        alert('Erro ao inserir o cliente.');
        window.history.go(-1);
    </script>";
    }
    */
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
        echo "<script>
        alert('Cliente atualizado com sucesso!');
        window.history.go(-1);
    </script>";
    } 
    /*
    else {
        echo "<script>
        alert('Erro ao atualizar o cliente.');
        window.history.go(-1);
    </script>";
    }
    */
}

// Excluir Cliente
if (isset($_POST["idExcluir"])) {
    $idExcluir = $_POST["idExcluir"];

    $estadoCli = $conn->prepare("DELETE FROM CLIENTES WHERE ID = :idExcluir");
    $estadoCli->bindParam(":idExcluir", $idExcluir);

    if ($estadoCli->execute()) {
        echo "<script>
        alert('Cliente excluído com sucesso!');
        window.history.go(-1);
    </script>";
    } 
    /*
    else {
        echo "<script>
        alert('Erro ao excluir o cliente.');
        window.history.go(-1);
    </script>";
    }
    */
}

// Listar Clientes
if (isset($_GET["listar"])) {
    $estadoCli = $conn->query("SELECT * FROM CLIENTES");
    $clientes = $estadoCli->fetchAll(PDO::FETCH_ASSOC);

    if ($clientes) {
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
        echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>";
    
        echo "<form method='post'>";
        echo "<table class='table'>";
        echo "<thead class='thead-light'>";
        echo "<tr>";
        echo "    <th>ID</th>";
        echo "    <th>CNPJ/CPF</th>";
        echo "    <th>Razão Social/Nome</th>";
        echo "    <th>CEP</th>";
        echo "    <th>Ação</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
    
        foreach ($clientes as $cliente) {
            echo "<tr>";
            echo "    <td>" . $cliente['ID'] . "</td>";
            echo "    <td>" . $cliente['CNPJ_CPF'] . "</td>";
            echo "    <td>" . $cliente['RAZAO_SOCIAL_NOME'] . "</td>";
            echo "    <td>" . $cliente['CEP'] . "</td>";
            echo "    <td><button type='submit' class='btn btn-danger' name='idExcluir' value='" . $cliente['ID'] . "'><i class='fas fa-trash'></i></button></td>";
            echo "</tr>";
        }
    
        echo "</tbody>";
        echo "</table>";
        echo "</form>";
    
        if (isset($_POST["idExcluir"])) {
            $idExcluir = $_POST["idExcluir"];
    
            $estadoCli = $conn->prepare("DELETE FROM CLIENTES WHERE ID = :idExcluir");
            $estadoCli->bindParam(":idExcluir", $idExcluir);
    
            if ($estadoCli->execute()) {
                echo "<script>
                alert('Cliente excluído com sucesso!');
                window.location.reload();
                </script>";
            } else {
                echo "<script>
                alert('Erro ao excluir o cliente!');
                </script>";
            }
        }
    }


    
    /*
    else {
        echo "<script>
        alert('Nenhum cliente cadastrado, sua empresa vai falir sem clientes.');
        window.history.go(-1);
    </script>";
    }
    */
}

?>
