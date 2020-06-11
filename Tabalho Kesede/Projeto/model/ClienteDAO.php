<?php
require_once('..\bd\gerenciador_de_conexoes.php');
require_once('ClienteDTO.php');

class ClienteDAO
{
    private $con;

    function __construct()
    {
        $this->con = GerenciadoraDeConexoes::obter_conexao();
    }

    function inserir($cliente){
        $meu_comando = $this->con->query("INSERT INTO cliente (nome_cliente, contato_cliente, endereco_cliente, saldo) VALUES ('" . $cliente->get_nome_cliente() . "', '" . $cliente->get_contato_cliente() . "', '". $cliente->get_endereco_cliente(). "','". $cliente->get_saldo(). "')");

           if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function alterar($cliente){
        $meu_comando = $this->con->query("UPDATE cliente SET nome_cliente = '" . $cliente->get_nome_cliente() . "', contato_cliente = '" . $cliente->get_contato_cliente() ."', endereco_cliente = '". $cliente->get_endereco_cliente()."' WHERE (id_cliente = " . $cliente->get_id_cliente(). ")");

        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function excluir($cliente){
        $meu_comando = $this->con->query("DELETE FROM cliente WHERE (id_cliente = " . $id_cliente . ")");

        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }
    function obter($id_cliente){
        $meu_comando =$this->con->query("SELECT id_cliente, nome_cliente, contato_cliente, endereco_cliente, saldo FROM cliente WHERE (id_cliente = " . $id_cliente. ");");
        $linha = $meu_comando->fetch(PDO::FETCH_ASSOC);

        $cl = new cliente();
        $cl->set_id_cliente($linha['id_cliente']);
        $cl->set_nome_cliente($linha['nome_cliente']);
        $cl->set_contato_cliente($linha['contato_cliente']);
        $cl->set_endereco_cliente($linha['endereco_cliente']);
        $cl->set_saldo($linha['saldo']);

        return $cl;
    }

    function obter_todos(){
        $lista = [];
        $meu_comando = $this->con->query("SELECT id_cliente, nome_cliente,contato_cliente, endereco_cliente, saldo FROM cliente;");

        while ($linha = $meu_comando->fetch(PDO::FETCH_ASSOC)) {
            $cl = new cliente();
            $cl->set_id_cliente($linha['id_cliente']);
            $cl->set_nome_cliente($linha['nome_cliente']);
            $cl->set_contato_cliente($linha['contato_cliente']);
            $cl->set_endereco_cliente($linha['endereco_cliente']);
            $cl->set_saldo($linha['saldo']);

            array_push($lista, $cl);
        }

        return $lista;
    }
}