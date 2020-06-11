<?php
    require_once('model\FornecedorDAO.php');
    require_once('model\FornecedorDTO.php');
    require_once('utils\Messages.php');


    $id_fornecedor = $_POST['txt_id_fornecedor'];
    $nome_fornecedor = $_POST['txt_nome_fornecedor'];
    $contato_fornecedor = $_POST['txt_contato_fornecedor'];
    $localizacao = $_POST['txt_localizacao'];
    $data_entrega = $_POST['txt_data_entrega'];


    $dao = new FornecedorDAO();
    $fornecedor = new Fornecedor();

    $fornecedor->set_id_fornecedor($id_fornecedor);
    $fornecedor->set_nome_fornecedor($nome_fornecedor);
    $fornecedor->set_contato_fornecedor($contato_fornecedor);
    $fornecedor->set_localizacao($localizacao);
    $fornecedor->set_data_entrega($data_entrega);

    if($dao->alterar($fornecedor)){
        Messages::sucesso("Fornecedor salvo com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }

?>