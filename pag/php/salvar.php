<?php
session_start();
?>
<?php include("conexao.php")?>
<?php 
// sha1 () deixa a senha criptografada 
        $nome =  $_POST["nome"];
        $email =  $_POST["email"];
        $senhaUse = sha1($_POST["senha"]);
        $_SESSION["ID"] = " ";
        
        
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
        
        $sql = "INSERT INTO usuario (nome, email, senha) 
        VALUES ( '".$nome."', '".$email."', '".$senhaUse."')";

        if ($conn->query($sql) === TRUE) {
          //$_SESSION["estaLogado"] = true;
          //header("Location: inicio.php?msg=sucesso");
          header("Location: ../../login.php");
          //$_SESSION["email"] = $email;
          //$_SESSION["senha"] = $senhaUse;
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
?>
