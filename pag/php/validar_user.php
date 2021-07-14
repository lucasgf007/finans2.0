<?php include("conexao.php")?>

<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $estaLogado = false;


    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // comparar
    while($row = $result->fetch_assoc()) {
        if( ($row["email"] == $email || $row["nome"] == $email) && $row["senha"] == sha1($senha)){
            header("Location: registro.php?msg=logado");
        }
    }
    } else {
        echo "0 results";
    }
    
    $conn->close();
?>