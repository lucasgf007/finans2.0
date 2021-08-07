<?php
session_start();
?>
<?php include("conexao.php")?>
<?php include("restrito/retrito.php")?>

<?php

$id = $_GET['id'];  
    // sql to delete a record
$sql = "DELETE FROM despesas WHERE id = '7'";

if ($conn->query($sql) === TRUE) {
  header('Location: ../consulta.php?msg=removeSucess');
  
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>