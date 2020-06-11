<?php
require_once('..\bd\gerenciador_de_conexoes.php');
require_once('LoginDTO.php');

class LoginDAO
{
    private $con;

	function __construct()
	{
		$this->con = GerenciadoraDeConexoes::obter_conexao();
	}
    function inserir($login){
        $meu_comando = $this->con->query("INSERT INTO login(login, senha) VALUES ('" . $login->get_login() . "', '" . $cliente->get_senha() . "')");

           if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function alterar($login){
		$meu_comando = $this->con->query("UPDATE login SET login = '" . $login->get_nome() . "', senha = '" . $login->get_senha() . "' WHERE (id_login = " . $login->get_id_login(). ")");

		if ($meu_comando->rowCount() > 0){
   			return true;
   		}
   		else{
   			return false;
   		}
	}

	function excluir($login){
        $meu_comando = $this->con->query("DELETE FROM login WHERE (id_login = " . $id_login . ")");

        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function obter($login){
        $meu_comando =$this->con->query("SELECT id_login,login, senha FROM cliente WHERE (id_login = " . $id_login . ");");
        $linha = $meu_comando->fetch(PDO::FETCH_ASSOC);

        $l = new Login();
        $l->set_id_login($linha['id_login']);
        $l->set_login($linha['login']);
        $l->set_senha($linha['senha']);

        return $l;
    }

    function obter_todos(){
        $lista = [];
        $meu_comando = $this->con->query("SELECT id_login, login, senha FROM login;");
 
        while ($linha = $meu_comando->fetch(PDO::FETCH_ASSOC)) {
            $l = new Login();
            $l->set_id_login($linha['id_login']);
            $l->set_login($linha['login']);
            $l->set_senha($linha['senha']);
            array_push($lista, $l);
        }

        return $lista;
    }
}