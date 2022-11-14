<html>
  <head>
    <title>Login MyBooks</title>
      <script src="https://kit.fontawesome.com/133b0d3f9c.js" crossorigin="anonymous"></script>
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
        <!--<link rel="stylesheet" href="get.css">
        <link rel="shortcut icon" href="get3.ico"/>-->
      <script src="https://kit.fontawesome.com/133b0d3f9c.js" crossorigin="anonymous"></script>
  </head>
  <body>
    

    <div class='container text-center my-3'>
        <div class='container text-center my-3'>
        <h3>Iniciar sessão</h3>
        <div class="jumbotron">
          <form method='post' action="user_books.php">
              <div class='form-group'>
                  <label>Chave do usuário</label>
                  <input class='form-control' name='chave' id = "chave" required>
              </div>
              <div class='form-group'>
                  <label>Senha</label>
                  <input class='form-control' name='senha' id = "senha" type="password" required>
              </div>   
              
              <input type='submit' class='btn btn-primary btn-lg' style="background-color: #781568" name='sessao' value='Iniciar'/>
                 
            </form>

        </div>
    </div>

  </body>
</html>