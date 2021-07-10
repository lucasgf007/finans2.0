<?php include("conexao.php")?>
<?php 
        $nome =  $_POST["nome"];
        $email =  $_POST["email"];
        $senhaUse =  $_POST["senha"];
        
        
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
          header("Location: registro.php");
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
?>
