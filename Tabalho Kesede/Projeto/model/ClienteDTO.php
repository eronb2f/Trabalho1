<?php

class Cliente 
{

    private $nome_cliente;
    private $contato_cliente; 
    private $endereco_cliente;
    private $saldo;

    function set_nome_cliente($nome_cliente){
        $this->nome_cliente = $nome_cliente;
    }

    function get_nome_cliente(){
        return $this->nome_cliente;
    }

    function set_contato_cliente($contato_cliente){
        $this->contato_cliente = $contato_cliente;
    }

    function get_contato_cliente(){
        return $this->contato_cliente;
    }

 function set_endereco_cliente($endereco_cliente){
        $this->endereco_cliente = $endereco_cliente;
    }

    function get_endereco_cliente(){
        return $this->endereco_cliente;
    }

    function set_saldo($saldo){
        $this->saldo = $saldo;
    }

    function get_saldo(){
        return $this->saldo;
    }
}
?>