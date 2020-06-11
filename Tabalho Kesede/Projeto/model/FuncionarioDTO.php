<?php

class Funcionario
{

    private $nome_funcionario;
    private $contato_funcionario; 
    private $endereco_funcionario;
    private $data_nascimento;
    private $rg_funcionario;
    private $cpf_funcionario;
    private $cargo;
    private $salario;

    function set_nome_funcionario($nome_funcionario){
        $this->nome_funcionario = $nome_funcionario;
    }

    function get_nome_funcionario(){
        return $this->nome_funcionario;
    }

    function set_contato_funcionario($contato_funcionario){
        $this->contato_funcionario = $contato_funcionario;
    }

    function get_contato_funcionario(){
        return $this->contato_funcionario;
    }

    function set_endereco_funcionario($endereco_funcionario){
        $this->endereco_funcionario = $endereco_funcionario;
    }

    function get_endereco_funcionario(){
        return $this->endereco_funcionario;
    }

    function set_data_nascimento($data_nascimento){
        $this->data_nascimento = $data_nascimento;
    }

    function get_data_nascimento(){
        return $this->data_nascimento;
    }

    function set_rg_funcionario($rg_funcionario){
        $this->rg_funcionario = $rg_funcionario;
    }

    function get_rg_funcionario(){
        return $this->rg_funcionario;
    }

    function set_cpf_funcionario($cpf_funcionario){
        $this->cpf_funcionario = $cpf_funcionario;
    }

    function get_cpf_funcionario(){
        return $this->cpf_funcionario;
    }
     function set_cargo($cargo){
        $this->cargo = $cargo;
    }

    function get_cargo(){
        return $this->cargo;
    }
     function set_salario($salario){
        $this->salario= $salario;
    }

    function get_salario(){
        return $this->salario;
    }
}
?>