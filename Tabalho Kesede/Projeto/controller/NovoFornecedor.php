<?php
    require_once('model\FornecedorDAO.php');
    require_once('model\FornecedorDTO.php');
    require_once('utils\Messages.php');

    $dao = new FornecedorDAO();
    $fornecedor = new Fornecedor();

    $fornecedor->set_id_fornecedor($_POST['txt_id_fornecedor']);
    $fornecedor->set_nome_fornecedor($_POST['txt_nome_fornecedor']);
    $fornecedor->set_contato_fornecedor($_POST['txt_contato_fornecedor']);
    $fornecedor->set_localizacao_fornecedor($_POST['txt_localização_fornecedor']);
    $fornecedor->set_data_entrega($_POST['txt_data_entrega']);


    if($dao->inserir($Fornecedor)){
        Messages::sucesso("Fornecedor incluido com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }
?>