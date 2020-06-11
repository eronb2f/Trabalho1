<?php
    require_once('model\ClientesDAO.php');
    require_once('model\ClientesDTO.php');
    require_once('utils\Messages.php');


    $dao = new ClienteDAO();
    $cliente = new Cliente();

    $cliente->set_id_cliente($_POST['txt_id_cliente']);
    $cliente->set_nome_cliente($_POST['txt_nome_cliente']);
    $cliente->set_contato_cliente($_POST['txt_contato_cliente']);
    $cliente->set_endereco_cliente($_POST['txt_endereco_cliente']);
    $cliente->set_saldo($_POST['txt_saldo']);


    if($dao->inserir($Cliente)){
        Messages::sucesso("Cliente incluido com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }
?>
