<?php
    require_once('model\ContatoDAO.php');
    require_once('utils\Messages.php');

    $id_contato = $_GET['id_contato'];
    $dao = new ContatoDAO();

    if($dao->excluir($id_contato)){
        Messages::sucesso("Contato Excluido com Sucesso!");
    }
    else{
        Messages::erro("Erro, favor reportar..");
    }
?>