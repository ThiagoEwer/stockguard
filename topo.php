<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>StockGuard</title>
    
    
    <!-- headbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <img src="icons/logo.png" alt="Bootstrap" width="30" height="24">
          <a class="navbar-brand" href="#">STOCKGUARD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="material-icons">menu</i>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="painel.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="usuarios.php">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="produtos.php">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cliente.php">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="almoxarifado.php">Almoxarifado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="op.php">Ordens de saida</a>
              </li>
              <li class="nav-item dropdown">
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Sobre</a>
              </li>
            </ul>

            <!-- Alterar o processa_logout para a tela de login -->
            <form action="index.php" method="post">
            <input class="form-control me-2" type="submit" name="btnLogout" value="Sair" aria-label="Logout" style="background-color: red; color: white;">
            </form>

          </div>
        </div>
      </nav>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-XXXXXX" crossorigin="anonymous"></script>

</head>