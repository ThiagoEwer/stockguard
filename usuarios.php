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
                    <a class="nav-link active" id="inserir-tab" data-toggle="tab" href="#inserir" role="tab" aria-controls="inserir" aria-selected="true">Inserir Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="atualizar-tab" data-toggle="tab" href="#atualizar" role="tab" aria-controls="atualizar" aria-selected="false">Atualizar Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="excluir-tab" data-toggle="tab" href="#excluir" role="tab" aria-controls="excluir" aria-selected="false">Excluir Usuario</a>
                </li>
            </ul>
        
            <!-- Conteúdo das abas -->
            <div class="tab-content mt-4">
                <!-- Tab de Inserir -->
                <div class="tab-pane fade show active" id="inserir" role="tabpanel" aria-labelledby="inserir-tab">
                    <!-- Formulário de Inserir Usuário -->
                    <form action="CRUD/c_user.php" method="post">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" class="form-control" name="telefone">
                        </div>
                        <button type="submit" class="btn btn-primary">Inserir</button>
                            <!-- Listar Usuários -->
                       <a class="btn btn-success" href="CRUD/c_user.php?listar=1" data-toggle="modal" data-target="#modallistauser">Listar Usuários</a>
                    </form>
                </div>
        
                <!-- Tab de Atualizar -->
                <div class="tab-pane fade" id="atualizar" role="tabpanel" aria-labelledby="atualizar-tab">
                    <!-- Formulário de Atualizar Usuário -->
                    <form action="CRUD/c_user.php" method="post">
                        <div class="form-group">
                            <label for="id">ID do Usuário:</label>
                            <input type="text" class="form-control" name="id" required>
                        </div>
                        <div class="form-group">
                            <label for="novoNome">Novo Nome:</label>
                            <input type="text" class="form-control" name="novoNome" required>
                        </div>
                        <div class="form-group">
                            <label for="novoEmail">Novo Email:</label>
                            <input type="email" class="form-control" name="novoEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="novoTelefone">Novo Telefone:</label>
                            <input type="text" class="form-control" name="novoTelefone">
                        </div>
                        <button type="submit" class="btn btn-warning">Atualizar</button>
                    </form>
                </div>
        
                <!-- Tab de Excluir -->
                <div class="tab-pane fade" id="excluir" role="tabpanel" aria-labelledby="excluir-tab">
                    <!-- Formulário de Excluir Usuário -->
                    <form action="CRUD/c_user.php" method="post">
                        <div class="form-group">
                            <label for="idExcluir">ID do Usuário a ser Excluído:</label>
                            <input type="text" class="form-control" name="idExcluir" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        
            <!-- Listar Usuários -->
          
        
        </div>
        



        <div class="modal fade" id="modallistauser" tabindex="-1" role="dialog" aria-labelledby="modallistauserLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modallistauserLabel">Lista de Usuários:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Use um iframe para carregar a outra página -->
                    <iframe src="CRUD/c_user.php?listar=1" style="width: 100%; height: 500px; border: none;"></iframe>
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
