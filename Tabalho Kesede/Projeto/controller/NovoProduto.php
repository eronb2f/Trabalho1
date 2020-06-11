<?php
    require_once('model\ProdutoDAO.php');
    require_once('model\ProdutoDTO.php');
    require_once('utils\Messages.php');

    $dao = new ProdutoDAO();
    $produto = new Produto();

    $produto->set_id_produto($_POST['txt_id_produto']);
    $produto->set_nome_produto($_POST['txt_nome_produto']);
    $produto->set_quantidade($_POST['txt_quantidade']);
    $produto->set_fornecedor($_POST['txt_fornecedor']);
    $produto->set_preco_compra($_POST['txt_preco_compra']);
    $produto->set_preco_venda($_POST['txt_preco_venda']);
    $produto->set_lucro($_POST['txt_lucro']);
    $produto->set_validade($_POST['txt_validade']);


    if($dao->inserir($produto)){
        Messages::sucesso("Produto incluido com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }
?>