<?php include "validacao.inc";?>
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
                            <a class="nav-link ml-md-2 itens_nav" href="insercao.php">Inserir livro</a>
                        </li>                    

                        <li class="nav-item">
                            <a class="nav-link ml-md-2 itens_nav" href="">Dashboard</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link ml-md-2 itens_nav" href="logout.php">Logout</a>
                        </li>

                    </ul>
                </div> 
            </nav>
        </div>

        <section class="jumbotron justify-content-center" style="padding-bottom: 0px">
            <div class="justify-content-center">   

                <div class="form-row text-center justify-content-center">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 mt-2">
                        <label for="pokemongo" style="font-weight: bold">Insira o título ou autor do livro</label>
                    </div>
                    <div class="form-group col-lg-4 col-md-12 col-sm-12 mod">
                        <input style="border: solid 2px" id="myInput" onkeyup="meuPedido()"
                        class="form-control form-control-lg fa fa-search" name="oleocorrente" aria-label="Search" placeholder="Buscar produto...">
                    </div>
                </div>
            </div>
        </section>    
        

        <section class="justify-content-center text-center container" style="background: white;">
            <h2 class="text-center justify-content-center my-2">Lista de livros lidos</h2>
            <div class="text-center justify-content-center table-responsive">   
                <table class="table table-striped table-bordered border border-dark text-center justify-content-center" id="tbPedidos" style="width: 100%">
                    <thead style="width: 100%">
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Remoção</th>
                            <th>Edição</th>
                        </tr>
                    </thead>

                    <tbody style="width: 100%">
                        <?php include "conexao.inc"; 
                        $resultado = mysqli_query($conexao,"SELECT * FROM MyBooks");
                        $linhas = mysqli_num_rows($resultado);
                        for($i=0;$i<$linhas;$i++){
                            echo "<tr>";
                                $registro = mysqli_fetch_array($resultado);
                            echo "<td>";
                              echo $registro[1];
                            echo "</td>";

                            echo "<td>";
                              echo $registro[2];
                            echo "</td>";

                            echo "<td>";
                          //require_once 'deletar.php';
                          //href='deletar.php?Corrente=<?php echo ${registro[0]};>Deletar</a>";
                          //echo "<form action='deletar.php' method='POST'>";
                          //echo "<input type='hidden' name='$i'>";
                          //echo "<input type='submit' class='btn btn-primary' name='teste' value='Deletar'/>";
                          //echo "</form>";
                                echo "<a style='text-decoration: none; color: blue' href='apagar.php?apagar=${registro[0]}'>Deletar<i class='fa fa-trash-o'></i></a>";
                          
                            echo "</td>";

                            echo "<td>";

                                echo "<a style='color: blue' href='editar_livro.php?editar=${registro[0]}&editara=${registro[1]}&editarb=${registro[2]}&editarc=${registro[3]}&editard=${registro[4]}&editare=${registro[5]}'>Editar</a>";
                            echo "</td>";

                        }                        
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>
</html>