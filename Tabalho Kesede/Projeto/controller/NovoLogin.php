<?php
    require_once('model\LoginDAO.php');
    require_once('model\LoginDTO.php');
    require_once('utils\Messages.php');

    $dao = new LoginDAO();
    $login = new Login();

    $login->set_id_login($_POST['txt_id_login']);
    $login->set_login($_POST['txt_login']);
    $login->set_senha($_POST['txt_senha']);


    if($dao->inserir($login)){
        Messages::sucesso("Login incluido com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }
?>