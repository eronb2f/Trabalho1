<html>

<head>
<title>Novo Contato</title>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<?php
    include('Menu.php');
?>
<h2><center>Inserir Novo Contato</center></h2>
<form class = "container" action="..\controller\NovoContato.php" method="POST">
<div class="form-group">
    <label for="txt_id_contato" for="id_contato">Código:</label>
    <input readonly type="text" class="form-control" id="txt_id_contato" name="txt_id_contato">
  </div>
  <div class="form-group">
    <label for="txt_telefone_comercial" for="telefone_comercial">Telefone Comercial:</label>
    <input type="number" class="form-control" id="txt_telefone_comercial" name="txt_telefone_comercial" >
  </div>
  <div class="form-group">
    <label for="txt_telefone_celular" for="telefone_celular">Telefone Celular:</label>
    <input type="number" class="form-control" id="txt_telefone_celular" name="txt_telefone_celular" >
  </div>
  <div class="form-group">
    <label for="txt_email" for="email">Email:</label>
    <input type="text" class="form-control" id="txt_email" name="txt_email">
  </div>
  <button type="submit" class="btn btn-default">Inserir</button>
</form>
</body>