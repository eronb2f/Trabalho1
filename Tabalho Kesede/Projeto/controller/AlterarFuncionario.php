<?php
    require_once('model\FuncionarioDAO.php');
    require_once('model\FuncionarioDTO.php');
    require_once('utils\Messages.php');

    $id_funcionario = $_POST['txt_id_funcionario'];
    $nome_funcionario = $_POST['txt_nome_funcionario'];
    $contato_funcionario = $_POST['txt_contato_funcionario'];
    $endereco_funcionario = $_POST['txt_endereco_funcionario'];
    $data_nascimento = $_POST['txt_data_nascimento'];
    $rg_funcionario = $_POST['txt_rg_funcionario'];
    $cpf_funcionario = $_POST['txt_cpf_funcionario'];
    $cargo = $_POST['txt_cargo'];
    $salario = $_POST['txt_salario'];

    $dao = new FuncionarioDAO();
    $funcionario = new Funcionario();

    $funcionario->set_id_funcionario($id__funcionario);
    $funcionario->set_nome_funcionario($nome_funcionario);
    $funcionario->set_contato_funcionario($contato_funcionario);
    $funcionario->set_endereco_funcionario($id_endereco_funcionario);
    $funcionario->set_data_nascimento($data_nascimento);
    $funcionario->set_rg_funcionario($rg_funcionario);
    $funcionario->set_cpf_funcionario($id_cpf_funcionario);
    $funcionario->set_cargo($cargo);
    $funcionario->set_salario($salario);

    if($dao->alterar($funcionario)){
        Messages::sucesso("Funcionario salvo com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }

?>