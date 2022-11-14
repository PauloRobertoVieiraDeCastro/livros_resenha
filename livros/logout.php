<?php
	setcookie('chave', null, -1, '/');
	setcookie('senha', null, -1, '/');
	header("Location:login.php");
?>