<?php
session_start();
?>
<?php include("conexao.php")?>
<?php include("restrito/retrito.php")?>
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
    <link rel="stylesheet" href="../css/style.css">

    <!-- JavaScript -->
    <script src="../js/app.js"></script>

    <!-- Titulo -->
    <title>Orçamento Pessoal</title>
    <link rel="shortcut icon" href="../img/title.svg" type="image/x-icon">
	</head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
      <div class="container">
        <a class="navbar-brand" href="../../index.html">
           <img src="../img/logo.png" width="50" height="35" alt="Orçamento pessoal">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse float-left" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="inicio.php">Início</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="registro.php">Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consulta.php">Consulta</a>
            </li>
          </ul>
          <ul class="navbar-nav mr-auto text-right">
                <li class="nav-item">
                  <a href="logout.php" class="nav-link">
                    <i class="fas fa-power-off"></i>
                  </a>
                </li>
              </ul>
          
        </div>
        
      </div>
    </nav>

    <div class="container">
      <form action="registrar_noBanco/registrar_despesa.php" method="post">
        <div class="row">
          <div class="col mb-5">
            <h1 class="display-4">Registro de nova despesa</h1>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-2 ajuste_mobile">
            <!-- ANO -->

            <!-- <select class="form-control" id="ano" name="ano">
              <option value="">Ano</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
            </select> -->
            <input type="text" class="form-control" placeholder="Ano" id="ano" name="ano">
            
          </div>

          <div class="col-md-2 ajuste_mobile">
          <!-- MÊS -->

            <!-- <select class="form-control" id="mes" name="mes">
              <option value="">Mês</option>
              <option value="1">Janeiro</option>
              <option value="2">Fevereiro</option>
              <option value="3">Março</option>
              <option value="4">Abril</option>
              <option value="5">Maio</option>
              <option value="6">Junho</option>
              <option value="7">Julho</option>
              <option value="8">Agosto</option>
              <option value="9">Setembro</option>
              <option value="10">Outubro</option>
              <option value="11">Novembro</option>
              <option value="12">Dezembro</option>
            </select> -->
            <input type="text" class="form-control" placeholder="mes" id="Mês" name="mes">
          </div>
          
          <div class="col-md-2 ajuste_mobile">
            <!-- DIA -->

            <input type="text" class="form-control" placeholder="Dia" id="dia" name="dia">
          </div>

          <div class="col-md-6 ajuste_mobile">
            <!-- TIPO -->

            <!-- <select class="form-control" id="tipo" name="tipo">
              <option value="">Tipo</option>
              <option value="1">Alimentação</option>
              <option value="2">Educação</option>
              <option value="3">Lazer</option>
              <option value="4">Saúde</option>
              <option value="5">Transporte</option>
            </select> -->
            <input type="text" class="form-control" placeholder="Tipo" id="tipo" name="tipo">
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 ajuste_mobile">
            <!-- Descrição -->

            <input type="text" class="form-control" placeholder="Descrição" id="descricao" name="descricao">
          </div>

          <div class="col-md-2 ajuste_mobile">
            <!-- VALOR -->
            
            <input type="text" class="form-control" placeholder="Valor" id="valor" name="valor">
          </div>

          <div class="col-md-2 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary" onclick="cadastrarDespesas()">
              <i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
      </form>
      
    </div>
    <!-- modal -->
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#erroGravacao">
  Launch demo modal
</button> -->

    <!-- Modal  -->
    <div class="modal fade" id="modalGravacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div id="modal_titulo_div">
            <h5 class="modal-title" id="modal_titulo">       </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="modal_texto">
            
          </div>
          <div class="modal-footer">
            <button type="button"  id="modal_botao" data-dismiss="modal"></button>
            
          </div>
        </div>
      </div>
    </div>

    

    <!-- Modal -->
    <div class="modal fade" id="modalsucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  </body>	

</html>
