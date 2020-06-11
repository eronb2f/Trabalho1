<?php 
$login = $_POST['username'];
$senha = md5($_POST['password']);

           
    $vlogin = 'eronb';
    $vsenha= 'eron2021';

      if (($login == $vlogin) && ($vsenha == $vsenha)){
        setcookie("login",$login);
        header("Location:index.php");
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }
?>