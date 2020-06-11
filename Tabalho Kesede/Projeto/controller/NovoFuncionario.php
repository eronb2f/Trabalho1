<?php
    require_once('model\FuncionarioDAO.php');
    require_once('model\FuncionarioDTO.php');
    require_once('utils\Messages.php');

    $dao = new FuncionarioDAO();
    $funcionario = new Funcionario();

    $funcionario->set_id($_POST['txt_id_funcionario']);
    $funcionario->set_nome($_POST['txt_nome_funcionario']);
    $funcionario->set_contato($_POST['txt_contato_funcionario']);
    $funcionario->set_endereco($_POST['txt_endereco_funcionario']);
    $funcionario->set_data_nascimento($_POST['txt_data_nascimento']);
    $funcionario->set_rg($_POST['txt_rg_funcionario']);
    $funcionario->set_cpf($_POST['txt_cpf_funcionario']);
    $funcionario->set_cargo($_POST['txt_cargo']);
    $funcionario->set_salario($_POST['txt_salario']);

    if($dao->inserir($funcionario)){
        Messages::sucesso("Funcionario incluido com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }
?>