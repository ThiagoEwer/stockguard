<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>


  <main>
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">BEM-VINDO</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                <div class="card-body d-flex align-items-center">
                <i class="material-icons">shelves</i>
                <span class="ms-2">ESTOQUE</span>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="#" data-toggle="modal" data-target="#modalestoq">Acesso rápido</a>
                        
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    
                <div class="card-body d-flex align-items-center">
                <i class="material-icons">group</i>
                <span class="ms-2">CLIENTES</span>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="#" data-toggle="modal" data-target="#modalcli">Acesso rápido</a>
                        
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                <div class="card-body d-flex align-items-center">
                <i class="material-icons">local_shipping</i>
                <span class="ms-2">ORDENS DE SAIDA</span>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="#" data-toggle="modal" data-target="#modalop">Acesso rápido</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                <div class="card-body d-flex align-items-center">
                <i class="material-icons">dns</i>
                <span class="ms-2">PRODUTOS</span>
            </div>
                    
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#" data-toggle="modal" data-target="#modalprod">Acesso rápido</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="">
                    <div>
                        <iframe id="iframeTabProdVencendo" src="SQL/prod_vencendo.php" width="100%" height="400px" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Incluindo a tabela de Ordens de Saída -->
                <iframe id="iframeOrdensSaida" src="SQL/ordens_atuais.php" width="100%" height="400px" frameborder="0"></iframe>
            </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
        <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <i class="fas fa-table me-1"></i>
            ESTOQUE ATUAL
        </div>
        <!-- Criar a função atualizar tabela (THIAGO)-->
        <button class="btn btn-outline-primary" onclick="atualizarTabela()">
            <i class="fas fa-sync-alt"></i>Atualizar
        </button>
    </div>
    <!-- Outros conteúdos da card aqui -->
</div>


<div class="modal fade" id="modalcli" tabindex="-1" role="dialog" aria-labelledby="modalcliLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalcliLabel">Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Use um iframe para carregar a outra página -->
                    <iframe src="modalcli.php" style="width: 100%; height: 500px; border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <!-- Adicione outros botões conforme necessário -->
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalestoq" tabindex="-1" role="dialog" aria-labelledby="modalestoqLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalestoqLabel">Estoque</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Use um iframe para carregar a outra página -->
                    <iframe src="modalestoq.php" style="width: 100%; height: 500px; border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <!-- Adicione outros botões conforme necessário -->
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="modalop" tabindex="-1" role="dialog" aria-labelledby="modalopLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalopLabel">Ordens de Saída</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Use um iframe para carregar a outra página -->
                    <iframe src="modalop.php" style="width: 100%; height: 500px; border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                   
                    <!-- Adicione outros botões conforme necessário -->
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="modalprod" tabindex="-1" role="dialog" aria-labelledby="modalprodLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalprodLabel">Produtos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Use um iframe para carregar a outra página -->
                    <iframe src="modalprod.php" style="width: 100%; height: 500px; border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    
                    <!-- Adicione outros botões conforme necessário -->
                </div>
            </div>
        </div>
    </div>



    













            <div class="card-body">
                    <iframe src="SQL/estoque_atual.php" width="100%" height="400px" frameborder="0"></iframe>

                </li>
            </div>
        </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</main>
