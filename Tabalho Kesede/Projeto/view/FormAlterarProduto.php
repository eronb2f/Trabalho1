<html>

<head>
<title>Alterar Produtos</title>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<?php
    include('Menu.php');
  require_once("..\model\ProdutosDAO.php");
  require_once("..\model\ProdutosDTO.php");

  $id_produtos = $_GET['id_produtos'];
  $dao = new ProdutosDAO();
  $produto = $dao->obter($id_produto);
?>
<h2><center>Inserir Novo Produto</center></h2>
<form class = "container" action="../controller/AlterarProduto.php" method="POST">
<div class="form-group">
    <label for="txt_id_produto" for="id_produto">Código:</label>
    <input readonly type="text" class="form-control" id="txt_id_produto" name="txt_id_produto" value = "<?php echo $produto->get_id_produto();?>">
  </div>
  <div class="form-group">
    <label for="txt_nome_produto" for="nome">Nome do Produto:</label>
    <input type="text" class="form-control" id="txt_nome_produto" name="txt_nome_produto"  value = "<?php echo $produto->get_nome_produto();?>">
  </div>
  <div class="form-group">
    <label for="txt_quantidade" for="quantidade">Quantidade:</label>
    <input type="number" class="form-control" id="txt_quantidade" name="txt_quantidade"  value = "<?php echo $produto->get_quantidade();?>">
  </div>
  <div class="form-group">
    <label for="txt_fornecedor" for="fornecedor">Fornecedor:</label>
    <input type="text" class="form-control" id="txt_fornecedor" name="txt_fornecedor" value = "<?php echo $produto->get_fornecedor();?>">
  </div>
  <div class="form-group">
    <label for="txt_preco_compra" for="preco_compra">Preço de Compra:</label>
    <input type="number" class="form-control" id="txt_preco_compra" name="txt_preco_compra" value = "<?php echo $produto->get_preco_compra();?>">
  </div>
  <div class="form-group">
    <label for="txt_preco_venda" for="preco_venda">Preço de Venda:</label>
    <input type="number" class="form-control" id="txt_preco_venda" name="txt_preco_venda" value = "<?php echo $produto->get_preco_venda();?>">
  </div>
  <div class="form-group">
    <label for="txt_lucro" for="lucro">Lucro:</label>
    <input type="number" class="form-control" id="txt_lucro" name="txt_lucro" value = "<?php echo $produto->get_lucro();?>">
  </div>
  <div class="form-group">
    <label for="txt_validade" for="validade">Validade:</label>
    <input type="date" class="form-control" id="txt_validade" name="txt_validade" value = "<?php echo $produto->get_validades();?>">
  </div>
  <button type="submit" class="btn btn-default">Alterar</button>
</form>
</body>
