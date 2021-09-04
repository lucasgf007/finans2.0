<?php include("conexao.php")?>

<?php
    // Start the session
    session_start();
?>

<?php
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $_SESSION["estaLogado"] = false;
    $_SESSION["ID"];
    
    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // comparar
    while($row = $result->fetch_assoc()) {
        if( $row["nome"] == $email && $row["senha"] == sha1($senha)){

            $_SESSION["estaLogado"] = true;
            header("Location: inicio.php?msg=logado");
            $_SESSION["ID"] = $row["id"];

            
        } else {
            header("Location: ../../login.php?msg=nao_encontrado");
        }
    }
    } else {
        echo "0 results";
    }
    
    $conn->close();
?>