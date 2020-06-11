<?php
require_once('..\bd\gerenciador_de_conexoes.php');
require_once('ProdutoDTO.php');

class ProdutoDAO
{
    private $con;

    function __construct()
        {
        $this->con = GerenciadoraDeConexoes::obter_conexao();
        }
        function inserir($produto){
            $meu_comando = $this->con->query("INSERT INTO produto (nome_produto, quantidade, fornecedor, preco_compra, preco_venda, lucro, validade) VALUES ('" . $produto->get_nome_produto() . "', '" . $produto->getquantidade() . "', '". $produto->get fornecedore(). "','". $produto->get_preco_compra(). "', '". $produto->get_preco_venda()."','".$produto->get_lucro()."', '".$produto->get_validade(). "')");
    
               if ($meu_comando->rowCount() > 0){
                   return true;
               }
               else{
                   return false;
               }
        }

        function alterar($produto){
            $meu_comando = $this->con->query("UPDATE produto SET nome_produto = '" . $produto->get_nome_produto() . "', quantidade = " . $produto->get_quantidade() . ", fornecedor = '" .$produto->get_fornecedor(). "', preco_compra = ".$produto->get_preco_compra().", preco_venda = ".$produto->get_preco_venda().", lucro = ".$produto->get_lucro().", validade = '".$produto->get_validade()."' WHERE (id_produto = " . $produto->get_id_produto(). ")");
    
            if ($meu_comando->rowCount() > 0){
                   return true;
               }
               else{
                   return false;
               }
        }

        function excluir($produto){
            $meu_comando = $this->con->query("DELETE FROM produto WHERE (id_produto = " . $id_produto . ")");
    
            if ($meu_comando->rowCount() > 0){
                   return true;
               }
               else{
                   return false;
               }
        }
        function obter($produto){
            $meu_comando =$this->con->query("SELECT id_produto,nome_produto,quantidade,fornecedor,preco_compra,preco_venda,lucro,validade FROM produto WHERE (id_produto = " . $id_produto . ");");
            $linha = $meu_comando->fetch(PDO::FETCH_ASSOC);
    
            $p = new Produto();
            $p->set_id_produto($linha['id_produto']);
            $p->set_nome_produto($linha['nome_produto']);
            $p->set_quantidade($linha['quantidade']);
            $p->set_fornecedor($linha['fornecedor']);
            $p->set_preco_compra($linha['preco_compra']);
            $p->set_preco_venda($linha['preco_venda']);
            $p->set_lucro($linha['lucro']);
            $p->set_validade($linha['validade']);
    
            return $p;
        }
    

    function obter_todos(){
        $lista = [];
        $meu_comando = $this->con->query("SELECT id_produto, nome_produto, quantidade,fornecedor,preco_compra,preco_venda,lucro,validade FROM produto;");
 
        while ($linha = $meu_comando->fetch(PDO::FETCH_ASSOC)) {
            $p = new Produto();
            $p->set_id_produto($linha['id_produto']);
            $p->set_nome_produto($linha['nome_produto']);
            $p->set_quantidade($linha['quantidade']);
            $p->set_fornecedor($linha['fornecedor']);
            $p->set_preco_compra($linha['preco_compra']);
            $p->set_preco_venda($linha['preco_venda']);
            $p->set_lucro($linha['lucro']);
            $p->set_validade($linha['validade']);
            array_push($lista, $p);
        }

        return $lista;
    }
}

