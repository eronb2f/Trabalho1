<?php
    require_once('model\ProdutoDAO.php');
    require_once('utils\Messages.php');

    $id_produto = $_GET['id_produto'];
    $dao = new ProdutoDAO();

    if($dao->excluir($id_produto)){
        Messages::sucesso("Produto Excluido com Sucesso!");
    }
    else{
        Messages::erro("Erro, favor reportar..");
    }
?>