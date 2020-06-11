<?php

class login
{
    private $login;
    private $senha;

    function set_login($login){
        $this->login = $login;
    }
    function get_login(){
        return $this->login;
    }
    
    function set_senha($senha){
        $this->senha = $senha;
    }
    function get_senha(){
        return $this->senha;
    }
}

?>