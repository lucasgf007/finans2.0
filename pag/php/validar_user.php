<?php include("conexao.php")?>

<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $estaLogado = false;


    $sql = "SELECT * FROM despesas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // comparar
    while($row = $result->fetch_assoc()) {
        if($row["email"] == $email && $row["senha"] == sha1($senha)){
            $estaLogado = true;
        }
    }
    } else {
        echo "0 results";
    }
    if($estaLogado){
        echo "esta logado";
    } else {
        echo "não esta logado";
    }

    $conn->close();
?>