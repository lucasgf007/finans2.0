<?php
session_start();
?>
<?php include("conexao.php")?>
<?php include("restrito/retrito.php")?>

<?php
    // sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id='".$_GET['id']."'";

if ($conn->query($sql) === TRUE) {
  header('Location: ../consulta.php?msg=remove');
  die();
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>