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
    <link rel="stylesheet" href="pag/css/style.css">

    <!-- JavaScript -->
    <script src="pag/js/app.js"></script>

    <!-- Titulo -->
    <title>Orçamento Pessoal</title>
    <link rel="shortcut icon" href="pag/img/title.svg" type="image/x-icon">
	</head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
      <div class="container">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="pag/img/logo.png" width="50" height="35" alt="Orçamento pessoal">
          </a>
        </div>
      </div>
    </nav>

    <section class="container">
        <form action="pag/php/salvar.php" method="post">
            <div class="form-group">
                <label for="exampleInputPassword1">Usuário</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nome" placeholder="Nome">
            </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="nome@exemplo.com">
            <small id="emailHelp" class="form-text text-muted">Suas informações estão seguras.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Concordo com os termos e condições</label>
          </div>
          <button type="submit" class="btn btn-primary" value="cadastrar">Cadastrar</button>
        </form>
    </section>

  </body>	

</html>
