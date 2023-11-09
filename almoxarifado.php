<!DOCTYPE html>
<html>
<head>
    <title>ALMOXARIFADO</title>
</head>

<body>
    <h1>CRUD de Almoxarifado</h1>

    <!-- Formulário para Inserir Item no Almoxarifado -->
    <h2>Inserir Item no Almoxarifado</h2>
    <form action="CRUD/c_almox.php" method="post">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" required><br>
        <label for="local_arm">Local de Armazenagem:</label>
        <input type="text" name="local_arm" required><br>
        <label for="cod_prod">Código do Produto:</label>
        <input type="text" name="cod_prod" required><br>
        <label for="total_prod">Total de Produtos:</label>
        <input type="number" name="total_prod" required><br>
        <input type="submit" value="Inserir">
    </form>

    <!-- Formulário para Atualizar Item no Almoxarifado -->
    <h2>Atualizar Item no Almoxarifado</h2>
    <form action="CRUD/c_almox.php" method="post">
        <label for="id">ID do Item no Almoxarifado:</label>
        <input type="text" name="id" required><br>
        <label for="novoCodigo">Novo Código:</label>
        <input type="text" name="novoCodigo" required><br>
        <label for="novoLocalArm">Novo Local de Armazenagem:</label>
        <input type="text" name="novoLocalArm" required><br>
        <label for="novoCodProd">Novo Código do Produto:</label>
        <input type="text" name="novoCodProd" required><br>
        <label for="novoTotalProd">Novo Total de Produtos:</label>
        <input type="number" name="novoTotalProd" required><br>
        <input type="submit" value="Atualizar">
    </form>

    <!-- Formulário para Excluir Item do Almoxarifado -->
    <h2>Excluir Item do Almoxarifado</h2>
    <form action="CRUD/c_almox.php" method="post">
        <label for="idExcluir">ID do Item no Almoxarifado a ser Excluído:</label>
        <input type="text" name="idExcluir" required><br>
        <input type="submit" value="Excluir">
    </form>

    <!-- Listar Itens no Almoxarifado -->
    <h2>Listar Itens no Almoxarifado</h2>
    <a href="CRUD/c_almox.php?listar=1">Listar Itens no Almoxarifado</a>
</body>
</html>
