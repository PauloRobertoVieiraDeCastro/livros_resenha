<?php
	$local = "localhost";
	$usuario = "root";
    $senha = "cimento1";
    $db = "oleos";
    $porta = 3306;
    $conexao = mysqli_connect($local,$usuario,$senha,$db);

    $chave = $_POST['chave'];
    $senha2 = md5($_POST['senha']); //criptografando a senha

    $resultado = mysqli_query($conexao,"SELECT * FROM Usuarios_livros WHERE Chave='$chave'");
    $linhas = mysqli_num_rows($resultado);
    

    if($linhas==0){
    	header("Location:login.php");
    }else{
    	$s = mysqli_query($conexao,"SELECT Senha FROM Usuarios_livros WHERE Chave='$chave'");
    	$senha_validada = mysqli_fetch_array($s)[0];
    	//echo $senha_validada == $senha2;
    	if($senha2 == md5($senha_validada)){
    		//echo "buc";
    		setcookie("chave",$chave,time()+600);
    		setcookie("senha",$senha2,time()+600);
    		header("Location:principal.php");
    	} //senha
    	else{
    		//echo "cu";
    		header("Location:login.php");
    	}
    }
?>