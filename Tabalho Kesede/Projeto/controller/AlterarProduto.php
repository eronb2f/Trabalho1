<?php
    require_once('model\ProdutoDAO.php');
    require_once('model\ProdutoDTO.php');
    require_once('utils\Messages.php');

    $id_produto = $_POST['txt_id_produto'];
    $nome_produto = $_POST['txt_nome_produto'];
    $quantidade = $_POST['txt_quantidade'];
    $fornecedor= $_POST['txt_fornecedor'];
    $preco_compra = $_POST['txt_preco_compra'];
    $preco_venda = $_POST['txt_preco_venda'];
    $lucro= $_POST['txt_lucro'];
    $validade= $_POST['txt_validade'];

    $dao = new ProdutoDAO();
    $produto = new Produto();

    $produto->set_id_produto($id_produto);
    $produto->set_nome_produto($nome_produto);
    $produto->set_fornecedor($fornecedor);
    $produto->set_preco_compra($preco_compra);
    $produto->set_preco_venda($preco_venda);
    $produto->set_lucro($lucro);
    $produto->set_validade($validade);

    if($dao->alterar($produto)){
        Messages::sucesso("Produto salvo com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }

?>