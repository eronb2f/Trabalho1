<?php
    require_once('model\FornecedorDAO.php');
    require_once('utils\Messages.php');

    $id_fornecedor = $_GET['id_fornecedor'];
    $dao = new FornecedorDAO();

    if($dao->excluir($id_fornecedor)){
        Messages::sucesso("Fornecedor Excluido com Sucesso!");
    }
    else{
        Messages::erro("Erro, favor reportar..");
    }
?>