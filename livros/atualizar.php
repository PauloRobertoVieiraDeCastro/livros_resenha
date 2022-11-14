<?php
  include "conexao.inc";
  if(isset($_POST['livros'])){
    $ident = $_POST["ident"];
    $titulo = $_POST["titulo"];
    $resumo = $_POST["resumo"];
    $compra = $_POST["compra"];
    $autor = $_POST["autor"];
    $fileName = basename($_FILES["imagem"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    
    $allowTypes = array('jpg','png','jpeg','gif','jfif'); 
                //ECHO $api;
    if(in_array($fileType, $allowTypes)){ 
      $image = $_FILES['imagem']['tmp_name']; 
      $imgContent = addslashes(file_get_contents($image)); 
      $sql = "UPDATE MyBooks SET Autor = '$autor', Titulo = '$titulo', Resumo = '$resumo', Compra = '$compra', Imagens = '$imgContent' WHERE Ident = $ident";
                  //echo $sql;//mysqli_query($conexao,"INSERT INTO petroleos VALUES ('$corrente','$tipo','$bacia','$api')");
      //echo " ";
      //echo "<p></p>";
      //echo $sql;
      //echo mysqli_query($conexao,$sql);

      if(mysqli_query($conexao,$sql)){
        mysqli_close($conexao);
        //echo "quero cu";
        header("Location:principal.php");
      }else{
        echo "Erro";
      }
    }else{
      $sql = "UPDATE MyBooks SET Autor = '$autor', Titulo = '$titulo', Resumo = '$resumo', Compra = '$compra' WHERE Ident = $ident";
                  //echo $sql;//mysqli_query($conexao,"INSERT INTO petroleos VALUES ('$corrente','$tipo','$bacia','$api')");
      echo " ";
      echo "<p></p>";
      echo $sql;
      echo mysqli_query($conexao,$sql);

      if(mysqli_query($conexao,$sql)){
        //echo "quero bunda";
        mysqli_close($conexao);
        header("Location:principal.php");
      }else{
        echo "Erro";
      }
    }
                
  }
                 
?>