<?php include("pag/php/conexao.php")?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    
		<!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- folha de estilo -->
    <link rel="stylesheet" href="pag/css/login.css">

    <!-- JavaScript -->
    <script src="pag/js/app.js"></script>

    <!-- Titulo -->
    <title>Orçamento Pessoal</title>
    <link rel="shortcut icon" href="pag/img/title.svg" type="image/x-icon">
	</head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
      <div class="container">
        <a class="navbar-brand" href="#">
           <img src="pag/img/logo.png" width="50" height="35" alt="Orçamento pessoal">
        </a>
      </div>
    </nav>

    <section class="container">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
            
                <!-- Icon -->
                <div class="fadeIn first p-4">
                  <img src="pag/img/title.svg" width="80" height="45" alt="User Icon" />
                </div>
            
                <!-- Login Form -->
                <form action="pag/php/validar_user.php" method="post">
                  <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
                  <input type="text" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
                  <input type="submit" class="fadeIn fourth bg-primary" value="Entrar">
                </form>
            
                <!-- Remind Passowrd -->
                <div id="formFooter">
                  <a class="underlineHover" href="#">Esqueceu sua senha?</a>
                </div>
        
            </div>
        </div>
    </section>

  </body>	

</html>
