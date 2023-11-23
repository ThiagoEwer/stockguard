<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Stockguard - Cadastro</title>
        <link rel="icon" href="icons/logo.png" type="image/png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head> 

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<br><br><br>
					<div class="text-center my-5">
					</div>
					<div class="card shadow-lg">
					<br>
					<div id="loginicons" class="d-flex align-items-center justify-content-center">
						
						<img src="icons/logo.png" width="100px" >

						</div>	
						<div class="card-body p-5">
							
							<h1 class="fs-4 card-title fw-bold mb-4">Registre-se</h1>
							<form action="register.php" method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="usuario">Usuário</label>
									<input id="name" type="text" class="form-control" name="usuario" value="" required autofocus>
									<div class="invalid-feedback">
										Este Usuário é Inválido!	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Endereço de email</label>
									<input id="email" type="email" class="form-control" name="email" value="" required>
									<div class="invalid-feedback">
										Este email é Inválido!
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="senha">Senha</label>
									<input id="password" type="password" class="form-control" name="senha" required>
								    <div class="invalid-feedback">
								    	Esta senha é Inválida!
							    	</div>
								</div>
								
								<p class="form-text text-muted mb-3">
								     Para se registrar você deve concordar com nossos Termos e Condições.
								</p>

								<div class="align-items-center d-flex">
									<button type="submit" class="btn-outline-danger ms-auto">
									<a href="index.php" class="text-dark">Registre-se</a>
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Já tem uma conta ? <a href="index.php" class="text-dark">Login</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; Stockguard 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>
