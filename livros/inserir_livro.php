<?php 
	include "conexao.inc";
	if(isset($_POST['livros'])){
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $compra = $_POST["compra"];
        $resumo = $_POST["resumo"];
        $fileName = basename($_FILES["imagem"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
       
        echo $fileName;
        echo $fileType;
        $allowTypes = array('jpg','png','jpeg','gif','jfif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['imagem']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 

        

            //echo $imgContent;
            $sql = "INSERT INTO MyBooks (Titulo, Autor, Compra, Resumo, Imagens) VALUES ('$titulo','$autor','$compra','$resumo','$imgContent')";//mysqli_query($conexao,"INSERT INTO petroleos VALUES ('$corrente','$tipo','$bacia','$api')");


            
            if(mysqli_query($conexao,$sql)){
                mysqli_close($conexao);
                //echo "quero bunda";
                header("Location:principal.php");
            }else{
                echo "Erro na conexão";
            }
        }else{
            //echo 'quero cu';
            $sql = "INSERT INTO MyBooks (Titulo, Autor, Compra, Resumo) VALUES ('$titulo','$autor','$compra','$resumo')";//
            if(mysqli_query($conexao,$sql)){
                mysqli_close($conexao);
                //echo "quero cu";
                header("Location:principal.php");
            }else{
                echo "Erro na conexão";
            }
        }                
    }
?>