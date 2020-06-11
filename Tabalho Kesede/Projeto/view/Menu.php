<?php
echo '
<html>
<head>
  <script src="..\bootstrap\jquery\jquery-213.js"></script>
  <script src="..\bootstrap\js\bootstrap.min.js"></script>
  <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
<a class="navbar-brand" href="/Projeto/View/index.php">Conveniência Speedy</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Produtos
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="/Projeto/View/FormNovoProduto.php">Cadastrar Produto</a>
      <a class="dropdown-item" href="/Projeto/View/FormConsultarProduto.php">Consultar Produto</a>
    </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fornecedores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/Projeto/View/FormNovoFornecedor.php">Cadastrar Fornecedor</a>
          <a class="dropdown-item" href="/Projeto/View/FormTest.php">Consultar Forencedor</a>
        </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Funcionários
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/Projeto/View/FormNovoFuncionario.php">Cadastrar Funcionário</a>
          <a class="dropdown-item" href="/Projeto/View/FormConsultarFuncionario.php">Consultar Funcionário</a>
        </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Clientes
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="/Projeto/View/FormNovoCliente.php">Cadastrar Cliente</a>
        <a class="dropdown-item" href="/Projeto/View/FormConsultarCliente.php">Consultar Cliente</a>
      </div>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Gastos
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="/Projeto/View/FormNovoGastos.php">Cadastrar Gasto</a>
      <a class="dropdown-item" href="/Projeto/View/FormConsultarGastos.php">Consultar Gasto</a>
    </div>
  </li>
  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Contatos
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item" href="/Projeto/View/FormNovoContato.php">Cadastrar Contato</a>
    <a class="dropdown-item" href="/Projeto/View/FormConsultarContato.php">Consultar Contato</a>
  </div>
</li>
    </ul>
  </div>
</nav>  

</body>


<html>
';
?>