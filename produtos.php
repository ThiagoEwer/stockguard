<h1>CRUD de Produtos</h1>

<!-- Formulário para Inserir Produto -->
<h2>Inserir Produto</h2>
<form action="CRUD/c_prod.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>
    <label for="tipo">Tipo:</label>
    <input type="text" name="tipo" required><br>
    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" required><br>
    <label for="local">Local:</label>
    <input type="text" name="local" required><br>
    <label for="validade">Validade:</label>
    <input type="date" name="validade" required><br>
    <input type="submit" value="Inserir">
</form>

<!-- Formulário para Atualizar Produto -->
<h2>Atualizar Produto</h2>
<form action="CRUD/c_prod.php" method="post">
    <label for="id">ID do Produto:</label>
    <input type="text" name="id" required><br>
    <label for="novoNome">Novo Nome:</label>
    <input type="text" name="novoNome" required><br>
    <label for="novoTipo">Novo Tipo:</label>
    <input type="text" name="novoTipo" required><br>
    <label for="novaQuantidade">Nova Quantidade:</label>
    <input type="number" name="novaQuantidade" required><br>
    <label for="novoLocal">Novo Local:</label>
    <input type="text" name="novoLocal" required><br>
    <label for="novaValidade">Nova Validade:</label>
    <input type="date" name="novaValidade" required><br>
    <input type="submit" value="Atualizar">
</form>

<!-- Formulário para Excluir Produto -->
<h2>Excluir Produto</h2>
<form action="CRUD/c_prod.php" method="post">
    <label for="idExcluir">ID do Produto a ser Excluído:</label>
    <input type="text" name="idExcluir" required><br>
    <input type="submit" value="Excluir">
</form>

<!-- Listar Produtos -->
<h2>Listar Produtos</h2>
<a href="CRUD/c_prod.php?listar=1">Listar Produtos</a>