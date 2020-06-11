<?php

class fornecedor
{
private $nome_fornecedor;
private $contato_fornecedor;
private $localizacao;
private $data_entrega;

    function set_nome_fornecedor($nome_fornecedor){
        $this->nome_fornecedor = $nome_fornecedor;
    }
    function get_nome_fornecedor(){
        return $this->nome_fornecedor;
    }

    function set_contato_fornecedor($contato_fornecedor){
        $this->contato_fornecedor = $contato_fornecedor;
    }
    function get_contato_fornecedor(){
        return $this->contato_fornecedor;
    }

    function set_localizacao($localizacao){
        $this->localizacao = $localizacao;
    }
    function get_localizacao(){
        return $this->localizacao;
    }

    function set_data_entrega($data_entrega){
        $this->data_entrega = $data_entrega;
    }
    function get_data_entrega(){
        return $this->data_entrega;
    }
}

?>