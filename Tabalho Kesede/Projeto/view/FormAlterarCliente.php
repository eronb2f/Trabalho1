<html>

<head>
<title>Alterar Cliente</title>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<?php
	include('Menu.php');
  require_once("..\model\ClienteDAO.php");
  require_once("..\model\ClitenteDTO.php");

  $id_cliente = $_GET['id_cliente'];
  $dao = new ClienteDAO();
  $cl = $dao->obter($id_cliente);
?>
<h2><center>Alterar Cliente</center></h2>
<form class = "container" action="../controller/AlterarCliente.php" method="POST">
  <div class="form-group">
    <label for="txt_id_cliente" for="id_cliente">Código:</label>
    <input readonly type="text" class="form-control" id="lbl_codigoP" name="lbl_codigoP" value = "<?php echo $cl->get_id_cliente();?>">
  </div>
  <div class="form-group">
    <label for="txt_nome_cliente" for="nome_cliente">Nome do Cliente:</label>
    <input type="text" class="form-control" id="txt_nome_cliente" name="txt_nome_cliente" value = "<?php echo $cl->get_nome_cliente();?>">
  </div>
  <div class="form-group">
    <label for="txt_contato_cliente" for="contato_cliente">Contato:</label>
    <input type="text" class="form-control" id="txt_contato_cliente" name="txt_contato_cliente" value = "<?php echo $cl->get_contato_cliente();?>">
  </div>
  <div class="form-group">
    <label for="txt_endereco_cliente" for="endereco_cliente">Endereço:</label>
    <input type="text" class="form-control" id="txt_endereco_cliente" name="txt_endereco_cliente" value = "<?php echo $cl->get_endereco_cliente();?>">
  </div>
  <div class="form-group">
    <label for="txt_saldo" for="saldo">Saldo:</label>
    <input type="number" class="form-control" id="txt_saldo" name="txt_saldo" value = "<?php echo $cl->get_saldo();?>">
  </div>
  <button type="submit" class="btn btn-default">Alterar</button>
</form>
</body>