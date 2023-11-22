<!DOCTYPE html>
<html lang="pt">

<head>
   
</head>

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
                <a class="nav-link active" id="inserir-tab" data-toggle="tab" href="#inserir" role="tab" aria-controls="inserir" aria-selected="true">Inserir Ordem de Produção</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="atualizar-tab" data-toggle="tab" href="#atualizar" role="tab" aria-controls="atualizar" aria-selected="false">Atualizar Ordem de Produção</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="excluir-tab" data-toggle="tab" href="#excluir" role="tab" aria-controls="excluir" aria-selected="false">Excluir Ordem de Produção</a>
            </li>
        </ul>

        <!-- Conteúdo das abas -->
        <div class="tab-content mt-4">
            <!-- Tab de Inserir -->
            <div class="tab-pane fade show active" id="inserir" role="tabpanel" aria-labelledby="inserir-tab">
                <!-- Formulário de Inserir Ordem de Produção -->
                <form action="CRUD/c_op.php" method="post">
                    <div class="form-group">
                        <label for="codigo">Código:</label>
                        <input type="text" class="form-control" name="codigo" required>
                    </div>
                    <div class="form-group">
                        <label for="cliente">Cliente:</label>
                        <input type="text" class="form-control" name="cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="produto">Produto:</label>
                        <input type="text" class="form-control" name="produto" required>
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" class="form-control" name="quantidade" required>
                    </div>
                    <div class="form-group">
                        <label for="local_almox">Local de Armazenagem:</label>
                        <input type="text" class="form-control" name="local_almox" required>
                    </div>
                    <div class="form-group">
                        <label for="cep_destino">CEP de Destino:</label>
                        <input type="text" class="form-control" name="cep_destino" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Inserir</button>
                    
        <!-- Listar Ordens de Produção -->
                    <a class="btn btn-success" href="CRUD/c_op.php?listar=1" data-toggle="modal" data-target="#modallistaop">Listar Odens de Produção</a>
                </form>
            </div>

            <!-- Tab de Atualizar -->
            <div class="tab-pane fade" id="atualizar" role="tabpanel" aria-labelledby="atualizar-tab">
                <!-- Formulário de Atualizar Ordem de Produção -->
                <form action="CRUD/c_op.php" method="post">
                    <div class="form-group">
                        <label for="id">ID da Ordem de Produção:</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="novoCodigo">Novo Código:</label>
                        <input type="text" class="form-control" name="novoCodigo" required>
                    </div>
                    <div class="form-group">
                        <label for="novoCliente">Novo Cliente:</label>
                        <input type="text" class="form-control" name="novoCliente" required>
                    </div>
                    <div class="form-group">
                        <label for="novoProduto">Novo Produto:</label>
                        <input type="text" class="form-control" name="novoProduto" required>
                    </div>
                    <div class="form-group">
                        <label for="novaQuantidade">Nova Quantidade:</label>
                        <input type="number" class="form-control" name="novaQuantidade" required>
                    </div>
                    <div class="form-group">
                        <label for="novoLocalAlmox">Novo Local de Armazenagem:</label>
                        <input type="text" class="form-control" name="novoLocalAlmox" required>
                    </div>
                    <div class="form-group">
                        <label for="novoCepDestino">Novo CEP de Destino:</label>
                        <input type="text" class="form-control" name="novoCepDestino" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Atualizar</button>
                </form>
            </div>

            <!-- Tab de Excluir -->
            <div class="tab-pane fade" id="excluir" role="tabpanel" aria-labelledby="excluir-tab">
                <!-- Formulário de Excluir Ordem de Produção -->
                <form action="CRUD/c_op.php" method="post">
                    <div class="form-group">
                        <label for="idExcluir">ID da Ordem de Produção a ser Excluída:</label>
                        <input type="text" class="form-control" name="idExcluir" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>



    </div>


    <div class="modal fade" id="modallistaop" tabindex="-1" role="dialog" aria-labelledby="modallistaopLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modallistaopLabel">Lista de Ordens de Produção:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Use um iframe para carregar a outra página -->
                    <iframe src="CRUD/c_op.php?listar=1" style="width: 100%; height: 500px; border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <!-- Adicione outros botões conforme necessário -->
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <div id="rodape">
                <?php include "rodape.php";
                ?>            
                               
            </div>

        </div><!--fim da div geral-->  

</body>

</html>
