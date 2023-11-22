<!DOCTYPE html>
<html lang="pt">


<head>
    
</head>

<!-- Conteudo -->
<body>
<div id="geral">

    <div class="text-center mt-4" st>
            <!-- Substitua "caminho_para_sua_imagem" pelo caminho real para sua imagem -->
            <img src="icons/logo.png" alt="Logo" class="img-fluid" width="60px">
        </div>


        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <div class="container mt-5">

        <!-- Abas para Inserir, Atualizar e Excluir -->
        <ul class="nav nav-tabs mt-4" id="myTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="inserir-tab" data-toggle="tab" href="#inserir" role="tab" aria-controls="inserir" aria-selected="true">Inserir Produto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="atualizar-tab" data-toggle="tab" href="#atualizar" role="tab" aria-controls="atualizar" aria-selected="false">Atualizar Produto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="excluir-tab" data-toggle="tab" href="#excluir" role="tab" aria-controls="excluir" aria-selected="false">Excluir Produto</a>
            </li>
        </ul>

        <!-- Conteúdo das abas -->
        <div class="tab-content mt-4">
            <!-- Tab de Inserir -->
            <div class="tab-pane fade show active" id="inserir" role="tabpanel" aria-labelledby="inserir-tab">
                <!-- Formulário de Inserir Produto -->
                <form action="CRUD/c_prod.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <input type="text" class="form-control" name="tipo" required>
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" class="form-control" name="quantidade" required>
                    </div>
                    <div class="form-group">
                        <label for="local">Local:</label>
                        <input type="text" class="form-control" name="local" required>
                    </div>
                    <div class="form-group">
                        <label for="validade">Validade:</label>
                        <input type="date" class="form-control" name="validade" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Inserir</button>
                </form>
            </div>

            <!-- Tab de Atualizar -->
            <div class="tab-pane fade" id="atualizar" role="tabpanel" aria-labelledby="atualizar-tab">
                <!-- Formulário de Atualizar Produto -->
                <form action="CRUD/c_prod.php" method="post">
                    <div class="form-group">
                        <label for="id">ID do Produto:</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="novoNome">Novo Nome:</label>
                        <input type="text" class="form-control" name="novoNome" required>
                    </div>
                    <div class="form-group">
                        <label for="novoTipo">Novo Tipo:</label>
                        <input type="text" class="form-control" name="novoTipo" required>
                    </div>
                    <div class="form-group">
                        <label for="novaQuantidade">Nova Quantidade:</label>
                        <input type="number" class="form-control" name="novaQuantidade" required>
                    </div>
                    <div class="form-group">
                        <label for="novoLocal">Novo Local:</label>
                        <input type="text" class="form-control" name="novoLocal" required>
                    </div>
                    <div class="form-group">
                        <label for="novaValidade">Nova Validade:</label>
                        <input type="date" class="form-control" name="novaValidade" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Atualizar</button>
                </form>
            </div>

            <!-- Tab de Excluir -->
            <div class="tab-pane fade" id="excluir" role="tabpanel" aria-labelledby="excluir-tab">
                <!-- Formulário de Excluir Produto -->
                <form action="CRUD/c_prod.php" method="post">
                    <div class="form-group">
                        <label for="idExcluir">ID do Produto a ser Excluído:</label>
                        <input type="text" class="form-control" name="idExcluir" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

        </div><!--fim da div geral-->  
</body>

</html>
