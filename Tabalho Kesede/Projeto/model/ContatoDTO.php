<?php

class Contato
{

    private $telefone_comercial;
    private $telefone_celular; 
    private $email;

    function set_telefone_comercial($telefone_comercial){
        $this->telefone_comercial = $telefone_comercial;
    }

    function get_telefone_comercial(){
        return $this->telefone_comercial;
    }

    function set_telefone_celular($telefone_celular){
        $this->telefone_celular = $telefone_celular;
    }

    function get_telefone_celular(){
        return $this->telefone_celular;
    }

 function set_email($email){
        $this->email = $email;
    }

    function get_email(){
        return $this->email;
    }

}

?>