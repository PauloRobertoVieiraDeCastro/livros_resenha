<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBooks</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/books.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
  </head>
  <body>
    <!--<script type="text/javascript" src="../static/densi.js"></script>-->
        <div class="super">
            <div class="superinfo-bg"> <!--acima do cabeçalho-->
                <div class="superinfo col text-center d-block">
                   My Books
                </div>
            </div>


            <nav class="navbar navbar-expand-md fixed-top py-3 box-shadow estilo_nav"> <!--expande apos 760 px-->
                <a class="navbar-brand shark"><img style="width: 55px; height: 55px" src="../static/livro.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#781568; font-size:28px;"></i></span>
                </button>

                <div id="navbarText" class="collapse navbar-collapse"><!--O id deve ser esse, pois mostrará todo o conteudo com o toggle button-->
                    <ul class="navbar-nav ml-auto"> <!--gera margem esquerda, levando para direita-->
                        
                       
                        <li class="nav-item">
                            <a class="nav-link ml-md-2 itens_nav" href="principal.php">Home</a>
                        </li>                    

                        <li class="nav-item">
                            <a class="nav-link ml-md-2 itens_nav" href="">Dashboard</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link ml-md-2 itens_nav" href="">Logout</a>
                        </li>

                    </ul>
                </div> 
            </nav>
        </div>


         <section class="my-3 jumbotron justify-content-center py-3" style="margin-top: 100px">
                <div class="table-responsive justify-content-center" style="margin-top:20px">    
                    <form action="atualizar.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                          <?php
                            echo "<input class='form-control' hidden type='number' name='ident' id = 'ident' value='${_GET["editar"]}'>";
                          ?>
                          <div class="form-group">
                            <label for="titulo">Título do livro</label>
                            <?php
                              echo "<input class='form-control' name='titulo' id = 'titulo' value='${_GET["editara"]}' required>";
                            ?>
                          </div>
                          <div class="form-group">
                            <label for="autor">Autor do livro</label>
                            <?php
                              echo "<input class='form-control' name='autor' id = 'autor' value='${_GET["editarb"]}' required>";
                            ?>
                          </div>
                          <div class="form-group">
                            <label for="compra">Link para compra</label>
                            <?php
                              echo "<input class='form-control' name='compra' id = 'compra' value='${_GET["editard"]}'>";
                            ?>
                          </div>
                          <div class="form-group">
                            <label for="resumo">Resumo do livro</label>
                            <?php
                              echo "<textarea class='form-control' name='resumo' id = 'resumo' rows=10>${_GET["editarc"]}</textarea>";
                            ?>
                          </div>

                          <div class="form-group">
                            <label for="imagem">Alterar capa do livro</label>
                            <input type="file" name="imagem">
                            <?php
                              include "conexao.inc"; 
                              $resultado = mysqli_query($conexao,"SELECT * FROM MyBooks WHERE Ident = ${_GET['editar']}");
                              $linhas = mysqli_num_rows($resultado);
                              for($i=0;$i<$linhas;$i++){
                                $registro = mysqli_fetch_array($resultado);
                              }
                              echo '<div id="logo" class="logo-img-container col-lg-3 col-md-3 ml-2">';
                              echo '<img src="data:image/jpeg;base64,'.base64_encode($registro[7]).'"/>';
                              echo '</div>';
                            ?>
                          </div>
                        </fieldset>

                        <div class="my-3">
                          <button type="submit" class="btn btn-primary btn-salvar" name="livros">Salvar dados</button>
                        </div>
                    </form>
                </div>
        </section>
         

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>
</html>