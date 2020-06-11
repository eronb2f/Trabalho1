<html>

<head>
<title>Alterar Gastos</title>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<?php
    include('Menu.php');
  require_once("..\model\GastosDAO.php");
  require_once("..\model\GastosDTO.php");

  $id_gastos = $_GET['id_gastos'];
  $dao = new GastosDAO();
  $gastos = $dao->obter($id_gastos);
?>
<h2><center>Alterar Gastos</center></h2>
<form class = "container" action="../controller/AlterarGastos.php" method="POST">
  <div class="form-group">
    <label for="txt_id_gastos" for="id_gastos">Código:</label>
    <input readonly type="text" class="form-control" id="txt_id_gastos" name="id_gastos" value = "<?php echo $gastos->get_id_gastos();?>">
  </div>
  <div class="form-group">
    <label for="txt_tipo" for="tipo">Tipo de Gasto:</label>
    <input type="text" class="form-control" id="txt_tipo" name="txt_tipo"  value = "<?php echo $gastos->get_tipo();?>">
  </div>
  <div class="form-group">
    <label for="txt_empresa" for="empresa">Empresa:</label>
    <input type="text" class="form-control" id="txt_empresa" name="txt_empresa"  value = "<?php echo $gastos->get_empresa();?>">
  </div>
  <div class="form-group">
    <label for="txt_valor" for="valor">Valor:</label>
    <input type="number" class="form-control" id="txt_valor" name="txt_valor"  value = "<?php echo $gastos->get_valor();?>">
  </div>
  <div class="form-group">
    <label for="txt_vencimento" for="status">Vencimento:</label>
    <input type="date" class="form-control" id="txt_vencimento" name="txt_vencimento" value = "<?php echo $gastos->get_vencimento();?>">
  </div>
  <div class="form-group">
    <label for="txt_status" for="status">Status:</label>
    <input type="text" class="form-control" id="txt_status" name="txt_status" value = "<?php echo $gastos->get_status();?>">
  </div>
  <button type="submit" class="btn btn-default">Alterar</button>
</form>
</body>
