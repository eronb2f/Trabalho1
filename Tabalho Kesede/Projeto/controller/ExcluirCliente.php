<?php
    require_once('model\ClienteDAO.php');
    require_once('utils\Messages.php');


    $id_cliente = $_GET['id_cliente'];
    $dao = new ClienteDAO();

    if($dao->excluir($id_cliente)){
        Messages::sucesso("Cliente Excluido com Sucesso!");
    }
    else{
        Messages::erro("Erro, favor reportar..");
    }
?>