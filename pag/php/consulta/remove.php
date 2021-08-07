<?php
session_start();
?>
<?php include("conexao.php")?>
<?php include("restrito/retrito.php")?>

<?php

    $host = "localhost";
    $usuario = "u158397775_meu_banco";
    $senha = "1A2b3c4d@";
    $bd = "u158397775_banco_finans";
    
    // Create connection
    $conn = new mysqli($host, $usuario, $senha, $bd); 

    // Check connection
    if ($conn->connect_error) {
        
        echo "Falha na conexão: (".$conn->connect_error.") ".$conn->connect_error;
    }

$id = $_GET['id'];  
    // sql to delete a record
$sql = "DELETE FROM despesas WHERE id=7";

if ($conn->query($sql) === TRUE) {
  header('Location: ../consulta.php?msg=removeSucess');
  
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>