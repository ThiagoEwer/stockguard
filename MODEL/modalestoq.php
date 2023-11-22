<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Modal com Tabela</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<!-- Botão para acionar o modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meuModal">
  Abrir modal
</button>

<!-- Modal -->
<div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="meuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="meuModalLabel">PRODUTOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Tab -->
        <div class="container mt-5">

        <!-- Abas para Inserir, Atualizar e Excluir -->
        <ul class="nav nav-tabs mt-4" id="myTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="inserir-tab" data-toggle="tab" href="#inserir" role="tab" aria-controls="inserir" aria-selected="true">Inserir no Estoque</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="atualizar-tab" data-toggle="tab" href="#atualizar" role="tab" aria-controls="atualizar" aria-selected="false">Atualizar no Estoque</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="excluir-tab" data-toggle="tab" href="#excluir" role="tab" aria-controls="excluir" aria-selected="false">Excluir no Estoque</a>
            </li>
        </ul>

        <!-- Conteúdo das abas -->
        <div class="tab-content mt-4">
            <!-- Tab de Inserir -->
            <div class="tab-pane fade show active" id="inserir" role="tabpanel" aria-labelledby="inserir-tab">
                <!-- Formulário de Inserir Item no Estoque -->
                <form action="../CRUD/c_almox.php" method="post">
                    <div class="form-group">
                        <label for="codigo">Código:</label>
                        <input type="text" class="form-control" name="codigo" required>
                    </div>
                    <div class="form-group">
                        <label for="local_arm">Local de Armazenagem:</label>
                        <input type="text" class="form-control" name="local_arm" required>
                    </div>
                    <div class="form-group">
                        <label for="cod_prod">Código do Produto:</label>
                        <input type="text" class="form-control" name="cod_prod" required>
                    </div>
                    <div class="form-group">
                        <label for="total_prod">Total de Produtos:</label>
                        <input type="number" class="form-control" name="total_prod" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Inserir</button>
                </form>
            </div>

            <!-- Tab de Atualizar -->
            <div class="tab-pane fade" id="atualizar" role="tabpanel" aria-labelledby="atualizar-tab">
                <!-- Formulário de Atualizar Item no Estoque -->
                <form action="../CRUD/c_almox.php" method="post">
                    <div class="form-group">
                        <label for="id">ID do Item no Estoque:</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="novoCodigo">Novo Código:</label>
                        <input type="text" class="form-control" name="novoCodigo" required>
                    </div>
                    <div class="form-group">
                        <label for="novoLocalArm">Novo Local de Armazenagem:</label>
                        <input type="text" class="form-control" name="novoLocalArm" required>
                    </div>
                    <div class="form-group">
                        <label for="novoCodProd">Novo Código do Produto:</label>
                        <input type="text" class="form-control" name="novoCodProd" required>
                    </div>
                    <div class="form-group">
                        <label for="novoTotalProd">Novo Total de Produtos:</label>
                        <input type="number" class="form-control" name="novoTotalProd" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Atualizar</button>
                </form>
            </div>

            <!-- Tab de Excluir -->
            <div class="tab-pane fade" id="excluir" role="tabpanel" aria-labelledby="excluir-tab">
                <!-- Formulário de Excluir Item no Estoque -->
                <form action="../CRUD/c_almox.php" method="post">
                    <div class="form-group">
                        <label for="idExcluir">ID do Item no Estoque a ser Excluído:</label>
                        <input type="text" class="form-control" name="idExcluir" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>

        <!-- Listar Itens no Estoque -->
        <h2 class="mt-4">Listar Itens no Estoque</h2>
        <a href="../CRUD/c_almox.php?listar=1" class="btn btn-success">Listar Itens no Estoque</a>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery e JS do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
