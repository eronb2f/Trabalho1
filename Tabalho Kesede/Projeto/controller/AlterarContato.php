<?php
    require_once('model\ContatoDAO.php');
    require_once('model\ContatoDTO.php');
    require_once('utils\Messages.php');

    $id_contato = $_POST['txt_id_contato'];
    $telefone_comercial = $_POST['txt_telefone_comercial'];
    $telefone_celular = $_POST['txt_telefone_celular'];
    $email = $_POST['txt_email'];

    $dao = new ContatoDAO();
    $contato = new Contato();

    $contato->set_id_contato($id_contato);
    $contato->set_telefone_comercial($telefone_comercial);
    $contato->set_telefone_celular($telefone_celular);
    $contato->set_email($set_email);

    if($dao->alterar($contato)){
        Messages::sucesso("Contato salvo com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }

?>