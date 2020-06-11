<?php
require_once('..\bd\gerenciador_de_conexoes.php');
require_once('FuncionarioDTO.php');

class FuncionarioDAO
{
    private $con;

    function __construct()
    {
        $this->con = GerenciadoraDeConexoes::obter_conexao();
    }

    function inserir($funcionario){
        $meu_comando = $this->con->query("INSERT INTO funcionario(nome_funcionario,contato_funcionario,endereco_funcionario,data_nascimento,rg_funcionario,cpf_funcionario,cargo,salario) VALUES ('".$funcionario->get_nome_funcionario."','".$funcionario->get_contato_funcionario."','".$funcionario->get_endereco_funcionario."','".$funcionario->get_data_nascimento."',".$funcionario->get_rg_funcionario.",".$funcionario->get_cpf_funcionario.",'".$funcionario->get_cargo."',".$funcionario->get_salario.")")
        if ($meu_comando->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    function alterar($funcionario){
        $meu_comando = $this->con->query("UPDATE funcionario SET nome_funcionario = '".$funcionario->get_nome_funcionario()."', contato_funcionario = '".$funcionario->get_contato_funcionario()."', endereco_funcionario = '".$funcionario->get_endereco_funcionario()."', data_nascimento = '".$funcionario->get_data_nascimento()."', rg_funcionario = ".$funcionario->get_rg_funcionario().", cpf_funcionario = ".$funcionario->get_cpf_funcionario().", cargo = '".$funcionario->get_cargo()."', salario = ".$salario->get_salario()."WHERE (id_funcionario = " . $funcionario->get_id_funcionario(). ")");
    
        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }

    function excluir($funcionario){
        $meu_comando = $this->con->query("DELETE FROM funcionario WHERE (id_funcionario = " . $id_funcionario . ")");

        if ($meu_comando->rowCount() > 0){
               return true;
           }
           else{
               return false;
           }
    }
    function obter($id_funcionario){
        $meu_comando =$this->con->query("SELECT id_funcionario,nome_funcionario,contato_funcionario,endereco_funcionario,data_nascimento,rg_funcionario,cpf_funcionario,cargo,salario FROM funcionario WHERE (id_funcionario = " . $id_funcionario. ");");
        $linha = $meu_comando->fetch(PDO::FETCH_ASSOC);

        $fu = new funcionario();
        $fu->set_id_funcionario($linha['id_funcionario']);
        $fu->set_nome_funcionario($linha['nome_funcionario']);
        $fu->set_contato_funcionario($linha['contato_funcionario']);
        $fu->set_endereco_funcionario($linha['endereco_funcionario']);
        $fu->set_rg_funcionario($linha['rg_funcionario']);
        $fu->set_cpf_funcionario($linha['cpf_funcionario']);
        $fu->set_cargo($linha['cargo']);
        $fu->set_salario($linha['salario']);

        return $fu;
    }

    function obter_todos(){
        $lista = [];
        $meu_comando = $this->con->query("SELECT id_funcionario,nome_funcionario,contato_funcionario,endereco_funcionario,data_nascimento,rg_funcionario,cpf_funcionario,cargo,salario FROM funcionario;");

        while ($linha = $meu_comando->fetch(PDO::FETCH_ASSOC)) {
            $fu = new funcionario();
            $fu->set_id_funcionario($linha['id_funcionario']);
            $fu->set_nome_funcionario($linha['nome_funcionario']);
            $fu->set_contato_funcionario($linha['contato_funcionario']);
            $fu->set_endereco_funcionario($linha['endereco_funcionario']);
            $fu->set_rg_funcionario($linha['rg_funcionario']);
            $fu->set_cpf_funcionario($linha['cpf_funcionario']);
            $fu->set_cargo($linha['cargo']);
            $fu->set_salario($linha['salario']);

            array_push($lista, $fu);
        }

        return $lista;
    }
}


