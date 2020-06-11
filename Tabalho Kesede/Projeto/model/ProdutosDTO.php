<?php

class produtos
{
    private $nome_produto;
    private $quantidade;
    private $fornecedor;
    private $preco_compra;
    private $preco_venda;
    private $lucro;
    private $validade;

    function set_nome_produto($nome_produto){
        $this->nome_produto = $nome_produto;
    }
    function get_nome_produto(){
        return $this->nome_produto;
    }

    function set_quantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    function get_quantidade(){
        return $this->quantidade;
    }

    function set_fornecedor($fornecedor){
        $this->fornecedor = $fornecedor;
    }
    function get_fornecedor(){
        return $this->fornecedor;
    }

    function set_preco_compra($preco_compra){
        $this->preco_compra = $preco_compra;
    }
    function get_preco_compra(){
        return $this->preco_compra;
    }

    function set_preco_venda($preco_venda){
        $this->preco_venda = $preco_venda;
    }
    function get_preco_venda(){
        return $this->preco_venda;
    }

    function set_lucro($lucro){
    $this->lucro = $lucro;
    }
    function get_lucro(){
        return $this->lucro;
    }

    function set_validade($validade){
        $this->validade = $validade
    }
    function get_validade(){
        return $this->validade;
    }
}
?>