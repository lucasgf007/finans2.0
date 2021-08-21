<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- css -->
    <link rel="stylesheet" href="dashboard.css">


    <!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Titulo -->
    <title>Orçamento Pessoal - Dashboard</title>
    <link rel="shortcut icon" href="../../img/title.svg" type="image/x-icon">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
            <a class="navbar-brand" href="../../index.html">
              <img src="../../img/logo.png" width="50" height="35" alt="Orçamento pessoal">
           </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
            <div class="collapse navbar-collapse text-left" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto text-left">
                <li class="nav-item active">
                  <a class="nav-link" href="../inicio.php">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../registro.php">Cadastro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../consulta.php">Consulta</a>
                </li>
              </ul>
              <ul class="navbar-nav mr-auto  logout">
                <li class="nav-item text-right">
                  <a href="../logout.php" class="nav-link">
                    <i class="fas fa-power-off"></i>
                  </a>
                </li>
              </ul>    
            </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="dash.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="tabela.html">
                  <span data-feather="file"></span>
                  Tabela
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="painel.html">
                  <span data-feather="bar-chart-2"></span>
                  Dash
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <h2>Tabela de Consulta</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
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
                echo "0 results";
                }
                // echo $_SESSION["ID"];
          
                $conn->close();
              ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
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
