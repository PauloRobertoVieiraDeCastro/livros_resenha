<?php
  if(isset($_COOKIE["chave"])){
    $chave = $_COOKIE["chave"];
  }
   if(isset($_COOKIE["senha"])){
    $senha2 = $_COOKIE["senha"];
  }

  $local = "localhost";
  $usuario = "root";
  $senha = "cimento1";
  $db = "oleos";
  $porta = 3306;
  $conexao = mysqli_connect($local,$usuario,$senha,$db);

  if(!(empty($chave)) OR ! (empty($senha2))){
  	

    //$usuario = $_POST['chave'];
    //$senha = $_POST['senha'];
    
    $resultado = mysqli_query($conexao,"SELECT * FROM Usuarios_livros WHERE Chave='$chave'");
    $linhas = mysqli_num_rows($resultado);
    
    if($linhas==1){
    	$s = mysqli_query($conexao,"SELECT Senha FROM Usuarios_livros WHERE Chave='$chave'");
    	
    	$senha_validada = mysqli_fetch_array($s)[0];
    	if($senha2 == md5($senha_validada)){
    		setcookie("chave",$chave,time()+900);
    		setcookie("senha",$senha2,time()+900);
    		echo "<div class='my-3 text-center'>";
    		echo "Seja bem-vindo(a) $chave";
    		echo "</div>";
    		//header("Location:select.php");
    	}else{
    		//echo "cu";
    		header("Location:login.php");
    		
    	}
    }else{
    	//echo 'buc';
    	header("Location:login.php");
    	
    }
  }else{
  	header("Location:session.php");
  }
  //mysqli_close($conexao);

?>