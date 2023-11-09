<!DOCTYPE html>
<html>
<head>
    <title>ORDENS DE PRODUCAO</title>
</head>

<body>
    <h1>CRUD de Ordens de Produção</h1>

    <!-- Formulário para Inserir Ordem de Produção -->
    <h2>Inserir Ordem de Produção</h2>
    <form action="CRUD/c_op.php" method="post">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" required><br>
        <label for="cliente">Cliente:</label>
        <input type="text" name="cliente" required><br>
        <label for="produto">Produto:</label>
        <input type="text" name= "produto" required><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required><br>
        <label for="local_almox">Local de Armazenagem:</label>
        <input type="text" name="local_almox" required><br>
        <label for="cep_destino">CEP de Destino:</label>
        <input type="text" name="cep_destino" required><br>
        <input type="submit" value="Inserir">
    </form>

    <!-- Formulário para Atualizar Ordem de Produção -->
    <h2>Atualizar Ordem de Produção</h2>
    <form action="CRUD/c_op.php" method="post">
        <label for="id">ID da Ordem de Produção:</label>
        <input type="text" name="id" required><br>
        <label for="novoCodigo">Novo Código:</label>
        <input type="text" name="novoCodigo" required><br>
        <label for="novoCliente">Novo Cliente:</label>
        <input type="text" name="novoCliente" required><br>
        <label for="novoProduto">Novo Produto:</label>
        <input type="text" name="novoProduto" required><br>
        <label for="novaQuantidade">Nova Quantidade:</label>
        <input type="number" name="novaQuantidade" required><br>
        <label for="novoLocalAlmox">Novo Local de Armazenagem:</label>
        <input type="text" name="novoLocalAlmox" required><br>
        <label for="novoCepDestino">Novo CEP de Destino:</label>
        <input type="text" name="novoCepDestino" required><br>
        <input type="submit" value="Atualizar">
    </form>

    <!-- Formulário para Excluir Ordem de Produção -->
    <h2>Excluir Ordem de Produção</h2>
    <form action="CRUD/c_op.php" method="post">
        <label for="idExcluir">ID da Ordem de Produção a ser Excluída:</label>
        <input type="text" name="idExcluir" required><br>
        <input type="submit" value="Excluir">
    </form>

    <!-- Listar Ordens de Produção -->
    <h2>Listar Ordens de Produção</h2>
    <a href="CRUD/c_op.php?listar=1">Listar Ordens de Produção</a>
</body>
</html>
