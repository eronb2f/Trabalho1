<?php

class Gastos
{

    private $tipo;
    private $empresa; 
    private $valor;
    private $vencimento;
    private $status;

    function set_tipo($tipo){
        $this->tipo = $tipo;
    }

    function get_tipo(){
        return $this->tipo;
    }

    function set_empresa($empresa){
        $this->empresa = $empresa;
    }

    function get_empresa(){
        return $this->empresa;
    }

 function set_valor($valor){
        $this->valor = $valor;
    }

    function get_valor(){
        return $this->valor;
    }

    function set_vencimento($vencimento){
        $this->vencimento = $vencimento;
    }

    function get_vencimento(){
        return $this->vencimento;
    }

    function set_status($status){
        $this->status = $status;
    }

    function get_status(){
        return $this->status;
    }
}
?>