<?php
session_start();
?>
<?php include("conexao.php")?>
<?php include("restrito/retrito.php")?>

<?php>
$sql = "SELECT * FROM despesas";
     $result = $conn->query($sql);
              
     if ($result->num_rows > 0) {
                      // output data of each row
        while($row = $result->fetch_assoc()) {
          echo " /Ano: " . $row["ano"]. "  " . "/Mes: " . $row["mes"]. " " . "/Dia: ". $row["dia"]. " " . "/Tipo: ". $row["tipo"]. " " . "/Descrição: ". $row["descricao"]. " " . "/Valor: ". $row["valor"]. "  " . "<a href='editar.php?id=". $row["id"]."'> Editar </a>" . "  " . "<a href='remove.php?id=". $row["id"]."'> Excluir </a> <br>";
        }
     } else {
      echo "0 results";
      }
     $conn->close();