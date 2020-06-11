<html>

<head>
<title>Novo Fornecedor</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<?php
    include('Menu.php');
?>
<h2><center>Inserir Novo Fornecedor</center></h2>
<form class = "container" action="..\controller\NovoFornecedor.php" method="POST">
<div class="form-group">
    <label for="txt_id_fonecedor" for="id_fornecedor">Código:</label>
    <input readonly type="text" class="form-control" id="txt_id_fornecedor" name="txt_id_fornecedor">
  </div>
  <div class="form-group">
    <label for="txt_nome_fornecedor" for="nome_fornecedor">Nome do Fornecedor:</label>
    <input type="text" class="form-control" id="txt_nome_fornecedor" name="txt_nome_fornecedor" >
  </div>
  <div class="form-group">
    <label for="txt_contato_fornecedor" for="contato_fornecedor">Contato do Fornecedor:</label>
    <input type="number" class="form-control" id="txt_contato_fornecedor" name="txt_contato_fornecedor" >
  </div>
  <div class="form-group">
    <label for="txt_localizacao" for="localizacao">Localização:</label>
    <input type="text" class="form-control" id="txt_localizacao" name="txt_localizacao">
  </div>
  <div class="form-group">
    <label for="txt_data_entrega" for="data_entrega">Data da Entrega:</label>
    <input type="date" class="form-control" id="txt_data_entrega" name="txt_data_entrega">
  </div>
  <button type="submit" class="btn btn-default">Inserir</button>
</form>
</body>