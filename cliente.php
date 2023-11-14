<h1>Operações do Cliente</h1>

<!-- Formulário para Inserir Cliente -->
<h2>Inserir Cliente</h2>
<form action="CRUD/c_client.php" method="post">
    <label for="cnpj_cpf">CNPJ ou CPF:</label>
    <input type="text" name="cnpj_cpf" required><br>
    <label for="razao_social_nome">Razão Social ou Nome:</label>
    <input type="text" name="razao_social_nome" required><br>
    <label for="cep">CEP:</label>
    <input type="text" name="cep" required><br>
    <input type="submit" value="Inserir">
</form>

<!-- Formulário para Atualizar Cliente -->
<h2>Atualizar Cliente</h2>
<form action="CRUD/c_client.php" method="post">
    <label for="id">ID do Cliente:</label>
    <input type="text" name="id" required><br>
    <label for="novoCnpjCpf">Novo CNPJ ou CPF:</label>
    <input type="text" name="novoCnpjCpf" required><br>
    <label for="novoRazaoSocialNome">Nova Razão Social ou Nome:</label>
    <input type="text" name="novoRazaoSocialNome" required><br>
    <label for="novoCep">Novo CEP:</label>
    <input type="text" name="novoCep" required><br>
    <input type="submit" value="Atualizar">
</form>

<!-- Formulário para Excluir Cliente -->
<h2>Excluir Cliente</h2>
<form action="CRUD/c_client.php" method="post">
    <label for="idExcluir">ID do Cliente a ser Excluído:</label>
    <input type="text" name="idExcluir" required><br>
    <input type="submit" value="Excluir">
</form>

<!-- Listar Clientes -->
<h2>Listar Clientes</h2>
<a href="CRUD/c_client.php?listar=1">Listar Clientes</a>
