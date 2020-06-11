<?php
    require_once('model\ContatoDAO.php');
    require_once('model\ContatoDTO.php');
    require_once('utils\Messages.php');

    $dao = new ContatoDAO();
    $contato = new Contato();

    $contato->set_id_contato($_POST['txt_id_contato']);
    $contato->set_telefone_comercial($_POST['txt_telefone_comercial']);
    $contato->set_telefone_celular($_POST['txt_telefone_celular']);
    $contato->set_email($_POST['txt_email']);


    if($dao->inserir($Contato)){
        Messages::sucesso("Contato incluido com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }
?>