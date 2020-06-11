<?php
    require_once('model\ClienteDAO.php');
    require_once('model\ClienteDTO.php');
    require_once('utils\Messages.php');


    $id_cliente = $_POST['txt_id_cliente'];
    $nome_cliente = $_POST['txt_nome_cliente'];
    $contato_cliente = $_POST['txt_contato_cliente'];
    $endereco_cliente = $_POST['txt_endereco_cliente'];
    $saldo = $_POST['txt_saldo'];


    $dao = new ClienteDAO();
    $cliente = new Cliente();

    $cliente->set_id_cliente($_POST['txt_id_cliente']);
    $cliente->set_nome_cliente($_POST['txt_nome_cliente']);
    $cliente->set_contato_cliente($_POST['txt_contato_cliente']);
    $cliente->set_endereco_cliente($_POST['txt_endereco_cliente']);
    $cliente->set_saldo($_POST['txt_saldo']);

    if($dao->alterar($cliente)){
        Messages::sucesso("Cliente salvo com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }

?>