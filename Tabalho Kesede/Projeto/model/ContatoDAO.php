<?php
require_once('..\bd\gerenciador_de_conexoes.php');
require_once('ContatoDTO.php');

class ContatoDAO
{
    private $con;

    function __construct()
    {
        $this->con = GerenciadoraDeConexoes::obter_conexao();
    }
    function inserir($contato){
        $meu_comando = $this->con->query("INSERT INTO contato (telefone_comercial, telefone_celular, email) VALUES (" . $contato->get_telefone_comercial() . ", " . $contato->get_telefone_celular() . ", '". $contato->get_email(). "')");

           if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }
    function alterar($contato){
        $meu_comando = $this->con->query("UPDATE contato SET telefone_comercial = " . $contato->get_telefone_comercial() . ", telefone_celular = " . $contato->get_telefone_celular() . ", email = '". $contato->get_email()."' WHERE (id_contato= '" . $contato->get_id_contato(). "')");

        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function excluir($contato){
        $meu_comando = $this->con->query("DELETE FROM contato WHERE (id_contato = '" . $id_contato . "')");

        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }
    function obter($id_contato){
        $meu_comando =$this->con->query("SELECT id_contato, telefone_comercial, telefone_celular, email FROM contato WHERE (id_contato = '" . $id_contato. "');");
        $linha = $meu_comando->fetch(PDO::FETCH_ASSOC);

        $co = new contato();
        $co->set_id_contato($linha['id_contato']);
        $co->set_telefone_comercial($linha['telefone_comercial']);
        $co->set_telefone_celular($linha['telefone_celular']);
        $co->set_email($linha['email']);

        return $co;
    }

    function obter_todos(){
        $lista = [];
        $meu_comando = $this->con->query("SELECT id_contato, telefone_comercial, telefone_celular, email FROM contato;");

        while ($linha = $meu_comando->fetch(PDO::FETCH_ASSOC)) {
            $co = new contato();
            $co->set_id_contato($linha['id_contato']);
            $co->set_telefone_comercial($linha['telefone_comercial']);
            $co->set_telefone_celular($linha['telefone_celular']);
            $co->set_email($linha['email']);

            array_push($lista, $co);
        }

        return $lista;
    }
}

