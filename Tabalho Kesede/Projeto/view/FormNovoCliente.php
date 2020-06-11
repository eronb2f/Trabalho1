<html>

<head>
<title>Novo Cliente</title>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<?php
	include('Menu.php');
?>
<h2><center>Inserir Novo Cliente</center></h2>
<form class = "container" action="..\controller\NovoCliente.php" method="POST">
<div class="form-group">
    <label for="txt_id_cliente" for="cod">Código:</label>
    <input readonly type="text" class="form-control" id="txt_id_cliente" name="txt_id_cliente">
  </div>
  <div class="form-group">
    <label for="txt_nome_cliente" for="nome">Nome do Cliente:</label>
    <input type="text" class="form-control" id="txt_nome_cliente" name="txt_nome_cliente" >
  </div>
  <div class="form-group">
    <label for="txt_contato_cliente" for="cpf">Contato:</label>
    <input type="text" class="form-control" id="txt_contato_cliente" name="txt_contato_cliente" >
  </div>
  <div class="form-group">
    <label for="txt_endereco_cliente" for="rg">Endereço:</label>
    <input type="text" class="form-control" id="txt_endereco_cliente" name="txt_endereco_cliente">
  </div>
  <div class="form-group">
    <label for="txt_saldo" for="pwd">Saldo:</label>
    <input type="number" class="form-control" id="txt_saldo" name="txt_saldo">
  </div>
  <button type="submit" class="btn btn-default">Inserir</button>
</form>
</body>