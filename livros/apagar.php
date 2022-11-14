<?php
	$cor =  $_GET['apagar'];
	function deletar($identidade){
		/*$local = "localhost";
        $usuario = "root";
        $senha = "cimento1";
        $db = "oleos";
        $porta = 3306;
        $conexao = mysqli_connect($local,$usuario,$senha,$db);*/
        include "conexao.inc"; 

		$sql = "DELETE FROM MyBooks WHERE Ident = '$identidade'";
		
		if(mysqli_query($conexao,$sql)){
			mysqli_close($conexao);
			header("Location:principal.php");
		}else{
			echo $sql;
			echo "Erro";
		}
		//$resultado =  ;
		//return 
	}
	deletar($cor); 
?>