<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            overflow-y: auto;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container-fluid {
            text-align: center;
        }

        .modal-body {
            max-height: 60vh;
            overflow-y: auto;
        }
    </style>
    <title>Bootstrap Modal Example</title>
</head>
<body>

    <main>
        <!-- Seu conteúdo vai aqui -->
    </main>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; STOCKGUARD INC</div>
                <div>
                    <!-- Adicione um ID ao link para referência no JavaScript -->
                    <a href="#" id="privacyLink" data-toggle="modal" data-target="#privacyModal">Política de Privacidade</a>
                    &middot;
                    <!-- Adicione um novo link para Termos & Condições -->
                    <a href="#" id="termsLink" data-toggle="modal" data-target="#termsModal">Termos &amp; Condições</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal para Política de Privacidade -->
    <div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyModalLabel">Política de Privacidade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <p>Última atualização: 17/11/2023</p>
                    <p>A Stockguard está comprometida em proteger a sua privacidade. Esta Política de Privacidade explica como coletamos, usamos e protegemos as informações que você fornece ao usar nosso site de controle de estoque.</p>
                    <p>1. Informações Coletadas</p>
                    <p>1.1 Informações Pessoais:
                    Coletamos informações pessoais quando você se registra em nossa plataforma, faz pedidos, preenche formulários ou interage de alguma forma conosco. As informações pessoais podem incluir, mas não estão limitadas a, nome, endereço, e-mail, número de telefone e informações de pagamento.</p>
                    <p>1.2 Informações de Uso:
                    Registramos informações sobre como você utiliza nosso site, incluindo páginas visitadas, data e hora de acesso, tempo gasto no site, e outras estatísticas relacionadas ao uso.</p>  
                    <p>2. Uso das Informações</p>
                    <p>2.1 Melhoria do Serviço:
                    Utilizamos as informações coletadas para melhorar a qualidade de nossos serviços, entender as necessidades dos usuários e aprimorar a experiência de uso.</p>
                    <p>2.2 Processamento de Pedidos:
                    Utilizamos as informações fornecidas durante o processo de compra para processar seus pedidos, enviar atualizações sobre o status do pedido e responder a suas perguntas relacionadas ao serviço.</p>
                    <p>2.3 Comunicações:
                    Podemos usar seu endereço de e-mail para enviar informações importantes sobre sua conta, alterações em nossos serviços, e atualizações de políticas. Você pode optar por não receber essas comunicações a qualquer momento.</p>
                    <p>3. Compartilhamento de Informações</p>  
                    <p>3.1 Parceiros de Negócios:
                    Podemos compartilhar informações com parceiros de negócios, como processadores de pagamento, para facilitar transações e melhorar a eficiência do serviço.</p>   
                    <p>3.2 Exigências Legais:
                    Reservamo-nos o direito de compartilhar informações quando exigido por lei ou para proteger nossos direitos legais.</p>   
                    <p>4. Segurança

                    Implementamos medidas de segurança para proteger as informações pessoais que coletamos. No entanto, nenhum método de transmissão pela Internet ou armazenamento eletrônico é 100% seguro, e não podemos garantir a segurança absoluta dos dados.</p>
                    <p>5. Cookies e Tecnologias Semelhantes

                    Nosso site utiliza cookies e tecnologias semelhantes para melhorar a experiência do usuário e coletar informações sobre o uso do site. Você pode configurar seu navegador para recusar cookies, mas isso pode afetar a funcionalidade do site.</p>
                    <p>6. Seus Direitos

                    Você tem o direito de acessar, corrigir ou excluir suas informações pessoais. Para exercer esses direitos, entre em contato conosco através das informações fornecidas no final desta política.</p>
                    <p>7. Alterações na Política de Privacidade

                    Reservamo-nos o direito de modificar esta Política de Privacidade a qualquer momento. A versão mais recente estará sempre disponível em nosso site.

                    Ao usar nosso site, você concorda com os termos desta Política de Privacidade. Se você não concorda com esses termos, por favor, não use nosso site.</p>
                    <p>Contato:</p>
                    <p>4002-8922</p>
                    <p>Obrigado por confiar em nós para gerenciar suas informações. Estamos comprometidos em proteger sua privacidade e garantir uma experiência segura em nosso site de controle de estoque.</p>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Termos & Condições -->
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Termos & Condições</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <p>1. Ao utilizar nosso serviço, você concorda em cumprir todos os termos estabelecidos nesta política.</p>
                <p>2. Você é responsável por manter a confidencialidade de sua conta e senha.</p>
                    <p>3. Reservamo-nos o direito de modificar ou encerrar o serviço a qualquer momento.</p>
                    <p>4. Você concorda em usar o serviço por sua própria conta e risco.</p>
                    <p>5. Estes termos podem ser alterados a qualquer momento sem aviso prévio.</p>
                    <p>6. Ao continuar a usar o serviço após as alterações, você aceita os novos termos.</p>
                    <p>7. O não cumprimento destes termos pode resultar na rescisão de sua conta.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts JavaScript do Bootstrap (jQuery e Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Script personalizado para mostrar os modais ao clicar nos links -->


</body>
