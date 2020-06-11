<html>

<head>
<title>Novo Funcionario</title>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<?php
	include('Menu.php');
?>
<h2><center>Inserir Novo Funcionario</center></h2>
<form class = "container" action="..\controller\NovoFuncionario.php" method="POST">
<div class="form-group">
    <label for="txt_id_funcionario" for="id_funcionario">Código:</label>
    <input readonly type="text" class="form-control" id="txt_id_funcionario" name="txt_id_funcionario">
  </div>
  <div class="form-group">
    <label for="txt_nome_funcionario" for="nome_funcionario">Nome do Funcionário:</label>
    <input type="text" class="form-control" id="txt_nome_funcionario" name="txt_nome_funcionario" >
  </div>
  <div class="form-group">
    <label for="txt_contato_funcionario" for="contato_funcionario">Contato:</label>
    <input type="number" class="form-control" id="txt_contato_funcionario" name="txt_contato_funcionario" >
  </div>
  <div class="form-group">
    <label for="txt_data_nascimento" for="data_nascimento">Data de Nascimento:</label>
    <input type="date" class="form-control" id="txt_data_nascimento" name="txt_data_nascimento">
  </div>
  <div class="form-group">
    <label for="txt_endereco_funcionario" for="endereco_funcionario">Endereço:</label>
    <input type="text" class="form-control" id="txt_endereco_funcionario" name="txt_endereco_funcionario">
  </div>
  <div class="form-group">
    <label for="txt_rg_funcionario" for="rg_funcionario">RG:</label>
    <input type="number" class="form-control" id="txt_rg_funcionario" name="txt_rg_funcionario">
  </div>
  <div class="form-group">
    <label for="txt_cpf_funcionario" for="cpf_funcionario">CPF:</label>
    <input type="number" class="form-control" id="txt_cpf_funcionario" name="txt_cpf_funcionario">
  </div>
  <div class="form-group">
    <label for="txt_cargo" for="cargo">Cargo:</label>
    <input type="text" class="form-control" id="txt_cargo" name="txt_cargo">
  </div>
  <div class="form-group">
    <label for="txt_salario" for="salario">Salário:</label>
    <input type="number" class="form-control" id="txt_salario" name="txt_salario">
  </div>
  <button type="submit" class="btn btn-default">Inserir</button>
</form>
</body>