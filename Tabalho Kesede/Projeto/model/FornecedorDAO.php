<?php
require_once('..\bd\gerenciador_de_conexoes.php');
require_once('FornecedorDTO.php');

class FornecedorDAO
{
    private $con;

	function __construct()
	    {
		$this->con = GerenciadoraDeConexoes::obter_conexao();
        }
    
    function inserir($fornecedor){
        $meu_comando = $this->con->query("INSERT INTO fornecedor(nome_fornecedor,contato_fornecedor,localizacao,data_entrega) VALUES ('".$fornecedor->get_nome_fornecedor()."','".$fornecedor->get_contato_fornecedor()."','".$fornecedor->get_localizacao()."','".$fornecedor->get_data_entrega()."')");
        
        if ($meu_comando->rowCount() > 0){
            return true;
            }
        else{
            return false;
         }
       }
       function alterar($fornecedor){
        $meu_comando = $this->con->query("UPDATE fornecedor SET nome_fornecedor= '" . $fornecedor->get_nome_fornecedor() . "', contato_fornecedor ='" . $fornecedor->get_contato_fornecedor() . "', localizacao = '". $fornecedor->get_localizacao()."', data_entrega= '". $fornecedor->get_data_entrega()."' WHERE (id_fornecedor= " . $fornecedor->get_id_fornecedor(). ")");

        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function excluir($fornecedor){
        $meu_comando = $this->con->query("DELETE FROM fornecedor WHERE (id_fornecedor = '" . $id_fornecedor . "')");

        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function obter($id_fornecedor){
        $meu_comando =$this->con->query("SELECT id_fornecedor, nome_fornecedor, contato_fornecedor, localizacao, data_entrega FROM fornecedor WHERE (id_fornecedor= " . $id_fornecedor. ");");
        $linha = $meu_comando->fetch(PDO::FETCH_ASSOC);

        $fo = new fornecedor();
        $fo->set_id_fornecedor($linha['id_fornecedor']);
        $fo->set_nome_fornecedor($linha['nome_fornecedor']);
        $fo->set_contato_fornecedor($linha['contato_fornecedor']);
        $fo->set_localizacao($linha['localizacao']);
        $fo->set_data_entrega($linha['data_entrega']);

        return $fo;
    }

    function obter_todos(){
        $lista = [];
        $meu_comando = $this->con->query("SELECT id_fornecedor, nome_fornecedor, contato_fornecedor, localizacao, data_entrega FROM fornecedor;");

        while ($linha = $meu_comando->fetch(PDO::FETCH_ASSOC)) {
            $fo = new fornecedor();
            $fo->set_id_fornecedor($linha['id_fornecedor']);
            $fo->set_nome_fornecedor($linha['nome_fornecedor']);
            $fo->set_contato_fornecedor($linha['contato_fornecedor']);
            $fo->set_localizacao($linha['localizacao']);
            $fo->set_data_entrega($linha['data_entrega']);


            array_push($lista, $fo);
        }

        return $lista;
    }
}
