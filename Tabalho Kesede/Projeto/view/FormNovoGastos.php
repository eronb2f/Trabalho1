<html>

<head>
<title>Novo Gastos</title>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<?php
	include('Menu.php');
?>
<h2><center>Inserir Novo Gasto</center></h2>
<form class = "container" action="..\controller\NovoGastos.php" method="POST">
<div class="form-group">
    <label for="txt_id_gastos" for="id_gastos">Código:</label>
    <input readonly type="text" class="form-control" id="txt_id_gastos" name="txt_id_gastos">
  </div>
  <div class="form-group">
    <label for="txt_tipo" for="tipo">Tipo de Gasto:</label>
    <input type="text" class="form-control" id="txt_tipo" name="txt_tipo" >
  </div>
  <div class="form-group">
    <label for="txt_empresa" for="empresa">Empresa:</label>
    <input type="text" class="form-control" id="txt_empresa" name="txt_empresa" >
  </div>
  <div class="form-group">
    <label for="txt_valor" for="valor">Valor:</label>
    <input type="number" class="form-control" id="txt_valor" name="txt_valor">
  </div>
  <div class="form-group">
    <label for="txt_vencimento" for="status">Vencimento:</label>
    <input type="date" class="form-control" id="txt_vencimento" name="txt_vencimento">
  </div>
  <div class="form-group">
    <label for="txt_status" for="status">Status:</label>
    <input type="text" class="form-control" id="txt_status" name="txt_status">
  </div>
  <button type="submit" class="btn btn-default">Inserir</button>
</form>
</body>