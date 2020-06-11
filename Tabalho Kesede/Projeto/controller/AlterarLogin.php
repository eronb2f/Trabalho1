<?php
    require_once('model\LoginDAO.php');
    require_once('model\LoginDTO.php');
    require_once('utils\Messages.php');


    $id_login = $_POST['txt_id_login'];
    $login = $_POST['txt_login'];
    $senha = $_POST['txt_senha'];


    $dao = new LoginDAO();
    $loginC = new Login();

    $loginC->set_id_login($id_login);
    $loginC->set_login($login);
    $loginC->set_senha($senha);

    if($dao->alterar($loginC)){
        Messages::sucesso("Login salvo com sucesso!");
    }
    else{
        Messages::erro("Ops.. Algo deu errado");
    }
?>