<?php

class Messages
{	
	
	public static function sucesso($msg){
		include('../view/Menu.php');
		echo "<script src='../bootstrap/js/bootstrap.min.js'></script><link href='../bootstrap/css/bootstrap.min.css' rel='stylesheet'/><div class='alert alert-success'><strong>Sucesso!</strong> " . $msg ."</div>";
	}

	public static function erro($msg){
		include('../view/Menu.php');
		echo "<script src='../bootstrap/js/bootstrap.min.js'></script><link href='../bootstrap/css/bootstrap.min.css' rel='stylesheet'/><div class='alert alert-danger'><strong>Erro!</strong> " . $msg . "</div>";
	}
}


?>