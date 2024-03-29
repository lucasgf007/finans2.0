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

  <body >
  <!-- onload="carregaLitsaDespesas()" -->

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
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Cadastro</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="consulta.php">Consulta</a>
            </li>

          </ul>
          <ul class="navbar-nav mr-auto text-right logout">
                <li class="nav-item">
                  <a href="logout.php" class="nav-link" >
                    <i class="fas fa-power-off"></i>
                  </a>
                </li>
              </ul>
          
        </div>
        
        
      </div>
    </nav>

    <div class="container">
      <div class="row mb-5">
        <div class="col">
          <h1 class="display-4">Consulta de despesas</h1>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-2 ajuste_mobile">
          <select class="form-control" id="ano">
            <option value="">Ano</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
          </select>
        </div>

        <div class="col-md-2 ajuste_mobile">
          <select class="form-control" id="mes">
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
          </select>
        </div>
        
        <div class="col-md-2 ajuste_mobile">
          <input type="text" class="form-control" placeholder="Dia" id="dia" />
        </div>

        <div class="col-md-6 ajuste_mobile">
          <select class="form-control" id="tipo">
            <option value="">Tipo</option>
            <option value="1">Alimentação</option>
            <option value="2">Educação</option>
            <option value="3">Lazer</option>
            <option value="4">Saúde</option>
            <option value="5">Transporte</option>
          </select>
        </div>
      </div>

      <div class="row  mb-5">
        <div class="col-md-8 ajuste_mobile">
          <input type="text" class="form-control" placeholder="Descrição" id="descricao" />
        </div>

        <div class="col-md-2 ajuste_mobile">
          <input type="text" class="form-control" placeholder="Valor" id="valor" />
        </div>

        <div class="col-md-2 d-flex justify-content-end">
          <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Em Breve" >
          <!-- onclick="pesquisarDespesa()" -->
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <table class="table" > <!--tabela-->
            <thead>
              <tr>
                <th>Data</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th></th>
              </tr>
            </thead>
              
            <tbody  id="lista_despesas">
              <?php
                
                $sql = "SELECT * FROM despesas";
                $result = $conn->query($sql);
                        
                if ($result->num_rows > 0) {
                                // output data of each row
                    $_SESSION["ID"];
                    $cont = 0;
                  
                    while($row = $result->fetch_assoc()) {
                      if($row["id_usuario"] == $_SESSION["ID"]){
          
                        //echo "<table><tbody> <tr><td>". $row["ano"]."</td><td>". $row["mes"]."</td><td>". $row["dia"]. "</td><td>". $row["tipo"].  "</td><td>". $row["descricao"]."</td><td>". $row["valor"]. "</td><td>". "<a href='consulta/remove.php?id=". $row["id"]."'> Excluir </a>" "</td></tr></tbody></table>";
                        //echo " /Ano: " . $row["ano"]. "  " . "/Mes: " . $row["mes"]. " " . "/Dia: ". $row["dia"]. " " . "/Tipo: ". $row["tipo"]. " " . "/Descrição: ". $row["descricao"]. " " . "/Valor: ". $row["valor"]. "  " . "<a href='consulta/remove.php?id=". $row["id"]."'> Excluir </a> <br>";
                        if($row["mes"] === "Junho"){
                          $row["mes"] = "06";
                        } else if($row["mes"] === "Janeiro"){
                          $row["mes"] = "01";
                        } else if($row["mes"] === "Fevereiro"){
                          $row["mes"] = "02";
                        } else if($row["mes"] === "Março"){
                          $row["mes"] = "03";
                        } else if($row["mes"] === "Abril"){
                          $row["mes"] = "04";
                        } else if($row["mes"] === "Maio"){
                          $row["mes"] = "05";
                        } else if($row["mes"] === "Julho"){
                          $row["mes"] = "07";
                        } else if($row["mes"] === "Agosto"){
                          $row["mes"] = "08";
                        } else if($row["mes"] === "Setembro"){
                          $row["mes"] = "09";
                        } else if($row["mes"] === "Outubro"){
                          $row["mes"] = "10";
                        } else if($row["mes"] === "Novembro"){
                          $row["mes"] = "11";
                        } else if($row["mes"] === "Dezembro"){
                          $row["mes"] = "12";
                        }
                        ?>
                        <?=
                          "<tr>
                            <td>" . $row["dia"] . "/" . $row["mes"] . "/" . $row["ano"] . "</td>
                            <td>" . $row["tipo"] . "</td>
                            <td>" . $row["descricao"] . "</td>
                            <td>" . $row["valor"] . "</td>
                            <td> <a href='consulta/remove.php?id=" . $row["id"]. "'> <i class='far fa-times-circle sair'></i> </a> </td>
                          </tr>"
                        ?>
                        <?php
                        $cont = $row["valor"] + $cont;
                      }
                    }
                    
                } else {
                  
                  ?>
                    
                    <h4 class="text-center font-weight-light"> "Cadastre uma despesa para que possa visualizar na tabela"</h4>
                    
                  <?php

                }
                // echo $_SESSION["ID"];
          
                $conn->close();
              ?>
            </tbody>
          </table>
          <div class="mt-4 text-right total">
                <p class="font-weight-bold pt-2">
                  <?="Gastos Totais = " . $cont ?>
                </p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal  -->
    <div class="modal fade" id="modalGravacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div id="modal_titulo_div">
            <h5 class="modal-title" id="modal_titulo">   <i class="far fa-frown fa-2x"></i>    </h5>
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

    <script type="text/javascript">
      var total = "<? $cont ?>"
      console.log(total);
    </script>

  </body>	

</html>
