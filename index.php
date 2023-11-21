<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<?php
require_once("admin/config.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["usuario"])) {
    
    
	} else {
		// Faça algo se a chave "usuario" não estiver definida
		echo "A chave 'usuario' não está definida no array POST.";
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   if (isset($_POST["senha"])) {
	}
	} else {
		// Faça algo se a chave "senha" não estiver definida
		echo "A chave 'senha' não está definida no array POST.";
	}
  
    // Consulta SQL para verificar as credenciais
    $sql = "SELECT usuario,senha FROM stockguard WHERE clientes = '$usuario' AND password = '$senha' = ? LIMIT 1";
   
    $stmt = $conn->prepare($sql);

    $conn->close();

    // Vinculando parâmetros
    $stmt->bind_param("s", $usuario);

    // Executando a consulta
    $stmt->execute();

    // Associando variáveis aos resultados
    $stmt->bind_result( $db_usuario, $db_senha);

    // Buscando o resultado
    $stmt->fetch();
    


        if (password_verify($senha, $db_senha)) {
            // Credenciais válidas, inicia a sessão e redireciona para a página principal
            session_start();
            $_SESSION["senha"] = $db_senha;
            $_SESSION["usuario"] = $db_usuario;
            header("Location: pagina.php");
            exit;
        } else {
            echo "<p>Credenciais inválidas. Tente novamente.</p>";
        }

        $stmt->close();
    }

?>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<a href="https://ibb.co/NSXQSNw"><img src="https://i.ibb.co/L5Mb5g4/stockguardlogo.jpg" alt="stockguardlogo" borde="0" alt="logo" width="100" /></a>
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="text-muted" for="usuario">Usuário</label>
									<input id="name" type="text" class="form-control" name="usuario" value="" required autofocus>
									<div class="invalid-feedback">
										Usuário Inválido!
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Senha</label>
										<a href="forgot.php" class="float-end">
										    Esqueceu sua senha ?
										</a>
                                        
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Senha Inválida!
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Relembrar-me</label>
									</div>
									<button onclick="redirecionarParaLogin()" type="submit" class="btn-outline-danger ms-auto">
										Login
									</button>
                                    <script>
                                        function redirecionarParaLogin() {
                                            window.location.href = "pagina.php"
                                        }
                                        </script>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Não possui uma conta? <a href="register.php" class="text-dark">Crie uma!</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; STOCKGUARD
                        
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/login.js"></script>
</body>




