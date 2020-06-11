<?php
    require_once("model\GastosDAO.php");
    require_once("model\GastosDTO.php");
    require_once("utils\Messages.php");

    $id_gastos = $_POST['txt_id_gastos'];
    $tipo = $_POST['txt_tipo'];
    $empresa = $_POST['txt_empresa'];
    $valor = $_POST['txt_valor'];
    $vencimento = $_POST['txt_vencimento'];
    $status = $_POST['txt_status'];

    $dao = new GastosDAO();
    $gastos = new Gastos();

    $gastos->set_id_gastos($_POST['txt_id_gastos']);
    $gastos->set_tipo($_POST['txt_tipo']);
    $gastos->set_empresa($_POST['txt_empresa']);
    $gastos->set_valor($_POST['txt_valor']);
    $gastos->set_vencimento($_POST['txt_vencimento']);
    $gastos->set_status($_POST['txt_status']);


    if($dao->inserir($Gastos)){
        Messages::sucesso("Gasto incluido com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }
?>