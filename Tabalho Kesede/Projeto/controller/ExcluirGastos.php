<?php
    require_once('model\GastosDAO.php');
    require_once('utils\Messages.php');


    $id_gastos = $_GET['id_gastos'];
    $dao = new GastosDAO();

    if($dao->excluir($id_gastos)){
        Messages::sucesso("Gastos Excluido com Sucesso!");
    }
    else{
        Messages::erro("Erro, favor reportar..");
    }
?>