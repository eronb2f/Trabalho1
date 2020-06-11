<?php
require_once('..\bd\gerenciador_de_conexoes.php');
require_once('GastosDTO.php');

class GastosDAO
{
    private $con;

    function __construct()
    {
        $this->con = GerenciadoraDeConexoes::obter_conexao();
    }

    function inserir($gastos){
        $meu_comando = $this->con->query("INSERT INTO gastos (tipo, empresa, valor, vencimento, status ) VALUES ('" . $gastos->get_tipo() . "', '" . $gastos->get_empresa() . "', ". $gastos->get_valor(). ",'". $gastos->get_vencimento(). "')");

           if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function alterar($gastos){
		$meu_comando = $this->con->query("UPDATE gastos SET tipo = '".$gastos->get_tipo()."', empresa = '".$gastos->get_empresa()."', valor = ".$gastos->get_valor().", vencimento = '".$produto->get_vencimento()."'WHERE (id_gastos = " . $gastos->get_id_gastos(). ")");
    
        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function excluir($gastos){
        $meu_comando = $this->con->query("DELETE FROM gastos WHERE (id_gastos = " . $id_gastos . ")");

        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function obter($gastos){
        $meu_comando =$this->con->query("SELECT id_gastos,tipo,empresa,valor,vencimento FROM gastos WHERE (id_gastos = " . $id_gastos . ");");
        $linha = $meu_comando->fetch(PDO::FETCH_ASSOC);

        $g = new Gastos();
        $g->set_id_gastos($linha['id_gastos']);
        $g->set_tipo($linha['tipo']);
        $g->set_empresa($linha['empresa']);
        $g->set_valor($linha['valor']);
        $g->set_vencimento($linha['vencimento']);

        return $g;
    }

    function obter_todos(){
        $lista = [];
        $meu_comando = $this->con->query("SELECT id_gastos, tipo, empresa, valor, vencimento FROM gastos;");
 
        while ($linha = $meu_comando->fetch(PDO::FETCH_ASSOC)) {
        $g = new Gastos();
        $g->set_id_gastos($linha['id_gastos']);
        $g->set_tipo($linha['tipo']);
        $g->set_empresa($linha['empresa']);
        $g->set_valor($linha['valor']);
        $g->set_vencimento($linha['vencimento']);
        array_push($lista, $g);
        }

        return $lista;
    }
}
