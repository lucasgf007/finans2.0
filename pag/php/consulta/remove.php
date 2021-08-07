<?php
session_start();
?>
<?php include("conexao.php")?>
<?php include("restrito/retrito.php")?>

<?php
    // sql to delete a record
$sql = "DELETE FROM despesas WHERE id='".$_GET['id']."'";

echo $_GET['id'];

if ($conn->query($sql) === TRUE) {
  header('Location: ../consulta.php?msg=removeSucess');
  
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>