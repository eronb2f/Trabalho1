<?php
    require_once('model\FuncionarioDAO.php');
    require_once('utils\Messages.php');

    $id_funcionario = $_GET['id_funcionario'];
    $dao = new FuncionarioDAO();

    if($dao->excluir($id_funcionario)){
        Messages::sucesso("Funcionario Excluido com Sucesso!");
    }
    else{
        Messages::erro("Erro, favor reportar..");
    }
?>