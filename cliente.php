<!DOCTYPE html>
<html lang="pt">

<head>
    
</head>
<!-- Conteudo -->
<body>
    <div id="geral">

        <div id="topo">
            <?php include "topo.php";
            ?>
        </div>

    <div class="container mt-5">

        <!-- Abas para Inserir, Atualizar e Excluir -->
        <ul class="nav nav-tabs mt-4" id="myTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="inserir-tab" data-toggle="tab" href="#inserir" role="tab" aria-controls="inserir" aria-selected="true">Inserir Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="atualizar-tab" data-toggle="tab" href="#atualizar" role="tab" aria-controls="atualizar" aria-selected="false">Atualizar Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="excluir-tab" data-toggle="tab" href="#excluir" role="tab" aria-controls="excluir" aria-selected="false">Excluir Cliente</a>
            </li>
        </ul>

        <!-- Conteúdo das abas -->
        <div class="tab-content mt-4">
            <!-- Tab de Inserir -->
            <div class="tab-pane fade show active" id="inserir" role="tabpanel" aria-labelledby="inserir-tab">
                <!-- Formulário de Inserir Cliente -->
                <form action="CRUD/c_client.php" method="post">
                    <div class="form-group">
                        <label for="cnpj_cpf">CNPJ ou CPF:</label>
                        <input type="text" class="form-control" name="cnpj_cpf" required>
                    </div>
                    <div class="form-group">
                        <label for="razao_social_nome">Razão Social ou Nome:</label>
                        <input type="text" class="form-control" name="razao_social_nome" required>
                    </div>
                    <div class="form-group">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control" name="cep" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Inserir</button>
                </form>
            </div>

            <!-- Tab de Atualizar -->
            <div class="tab-pane fade" id="atualizar" role="tabpanel" aria-labelledby="atualizar-tab">
                <!-- Formulário de Atualizar Cliente -->
                <form action="CRUD/c_client.php" method="post">
                    <div class="form-group">
                        <label for="id">ID do Cliente:</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="novoCnpjCpf">Novo CNPJ ou CPF:</label>
                        <input type="text" class="form-control" name="novoCnpjCpf" required>
                    </div>
                    <div class="form-group">
                        <label for="novoRazaoSocialNome">Nova Razão Social ou Nome:</label>
                        <input type="text" class="form-control" name="novoRazaoSocialNome" required>
                    </div>
                    <div class="form-group">
                        <label for="novoCep">Novo CEP:</label>
                        <input type="text" class="form-control" name="novoCep" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Atualizar</button>
                </form>
            </div>

            <!-- Tab de Excluir -->
            <div class="tab-pane fade" id="excluir" role="tabpanel" aria-labelledby="excluir-tab">
                <!-- Formulário de Excluir Cliente -->
                <form action="CRUD/c_client.php" method="post">
                    <div class="form-group">
                        <label for="idExcluir">ID do Cliente a ser Excluído:</label>
                        <input type="text" class="form-control" name="idExcluir" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>

        <!-- Listar Clientes -->
        <h2 class="mt-4">Listar Clientes</h2>
        <a href="CRUD/c_client.php?listar=1" class="btn btn-success">Listar Clientes</a>

    </div>

    <!-- Adicione os scripts do Bootstrap no final do corpo -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <div id="rodape">
                <?php include "rodape.php";
                ?>            
                               
            </div>

        </div><!--fim da div geral-->    

</body>
