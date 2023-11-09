
    <h1>CRUD de Usuarios</h1>

    <!-- Formulário para Inserir Usuário -->
    <h2>Inserir Usuario</h2>
    <form action="CRUD/c_user.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone"><br>
        <input type="submit" value="Inserir">
    </form>

    <!-- Formulário para Atualizar Usuário -->
    <h2>Atualizar Usuario</h2>
    <form action="CRUD/c_user.php" method="post">
        <label for="id">ID do Usuário:</label>
        <input type="text" name="id" required><br>
        <label for="novoNome">Novo Nome:</label>
        <input type="text" name="novoNome" required><br>
        <label for="novoEmail">Novo Email:</label>
        <input type="email" name="novoEmail" required><br>
        <label for="novoTelefone">Novo Telefone:</label>
        <input type="text" name="novoTelefone"><br>
        <input type="submit" value="Atualizar">
    </form>

    <!-- Formulário para Excluir Usuário -->
    <h2>Excluir Usuario</h2>
    <form action="CRUD/c_user.php" method="post">
        <label for="idExcluir">ID do Usuário a ser Excluído:</label>
        <input type="text" name="idExcluir" required><br>
        <input type="submit" value="Excluir">
    </form>

    <!-- Listar Usuários -->
    <h2>Listar Usuarios</h2>
    <a href="CRUD/c_user.php?listar=1">Listar Usuários</a>
