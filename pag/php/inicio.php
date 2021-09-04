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
    <link rel="stylesheet" href="../css/inicio.css">

    <!-- JavaScript -->
    <script src="../js/app.js"></script>

    <!-- Titulo -->
    <title>Orçamento Pessoal</title>
    <link rel="shortcut icon" href="../img/title.svg" type="image/x-icon">
	</head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        
        
          
            <a class="navbar-brand" href="../../index.html">
              <img src="../img/logo.png" width="50" height="35" alt="Orçamento pessoal">
           </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
            <div class="collapse navbar-collapse text-left" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto text-left">
                <li class="nav-item active">
                  <a class="nav-link" href="inicio.php">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registro.php">Cadastro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="consulta.php">Consulta</a>
                </li>
              </ul>
              <ul class="navbar-nav mr-auto  logout">
                <li class="nav-item text-right">
                  <a href="logout.php" class="nav-link">
                    <i class="fas fa-power-off"></i>
                  </a>
                </li>
              </ul>
              
            </div>
          
        

        
      </div>
    </nav>

    <section class="">
      <div class="container banner">
        <div class="row">
          
          <div class="float-right col-sm text-center ajuste">
            <div class="text-left text-dark">
              <h3 class="font-weight-light finans">Finans</h3>
              <p class="font-weight-light">Onde você pode controlar seus gastos de uma maneira super fácil!</p>
            
            </div>
            <div class="row">
              <div class="col-sm text-left">
                <a href="registro.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">
                  <i class="fab fa-wpforms"></i>
                </a>
                <a href="consulta.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">
                  <i class="fas fa-database"></i>
                </a>
                <a href="dash/dash.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">
                  <i class="fas fa-chart-line"></i>
                </a>
                
              </div>
            </div>
          </div>

          <div class="float-left  col-sm text-white">
            <img class="faturamento" src="../img/analise-rapida.png" alt="">
            
          </div>
        </div>
        
      </div>
      
    </section>

    <div class="container dash">
      <section class="secao">
        <div class="row">
      
          <div class="col-sm-7">
            
              <main role="main" class="col-md-9 ml-sm-auto col-lg-10 ">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <a href="dash/dash.php" class="link"><h1 class="h2 text-dark">Painel de Controle</h1></a>
                </div>
                <canvas class="my-4 w-100" id="myChart" width="400px" height="150px"></canvas>
              </main>
            
          </div>
      
          <div class="col-sm-5">
            <div class="table-responsive">
              <table class="table table-striped table-sm mt-5">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>valor</th>
                    
                  </tr>
                </thead>
                <tbody>
                  
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
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["dia"] . "/" . $row["mes"] . "/" . $row["ano"] . "</td>
                            <td>" . $row["tipo"] . "</td>
                            <td>" . $row["descricao"] . "</td>
                            <td>" . $row["valor"] . "</td>
                          </tr>"
                        ?>
                        <?php
                        
                      }
                    }
                    
                } else {
                  ?>
                  
                <h4 class="text-center font-weight-light"> "Cadastre uma despesa para que possa visualizar na tabela"</h4>

                  <?php
                }
                
          
                $conn->close();
                ?>
                  
                </tbody>
              </table>
              
            </div>
          </div>
      
        </div>
        
      </section>
       
    </div>


    <!-- Footer -->

    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          
          <!-- zap -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://api.whatsapp.com/send?phone=5584996624926&text=Ol%C3%A1%20Lucas%2C%20vim%20atrav%C3%A9s%20do%20seu%20site%20de%20finan%C3%A7as!%20%F0%9F%98%80" target="_blank" role="button">
            <i class="fab fa-whatsapp"></i>
          </a>
    
          <!-- Google -->
          <a class="btn btn-outline-light btn-floating m-1" href="mailto:gabriellucas016@gmail.com" target="_blank" role="button"
            ><i class="fab fa-google"></i
          ></a>
          
    
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/gabrielf_lucass/" target="_blank" role="button"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <!-- Linkedin -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/lucas-gabriel-40a935204/" target="_blank" role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
    
          <!-- Github -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/lucasgf007" target="_blank" role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 - By: Lucas Gabriel 🚀 
        
      </div>
      <!-- Copyright -->
    </footer>

    <!-- Fim do Footer -->
    

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
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>


    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>

  </body>	

</html>









