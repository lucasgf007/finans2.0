<?php include("conexao.php")?>
<?php 
// sha1 () deixa a senha criptografada 
        $ano =  $_POST["ano"];
        $mes =  $_POST["mes"];
        $dia =  $_POST["dia"];
        $tipo =  $_POST["tipo"];
        $descricao =  $_POST["descricao"];
        $valor =  $_POST["valor"];
    

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
        
        $sql = "INSERT INTO despesas (nome, email, senha) 
        VALUES ( '".$ano."', '".$mes."', '".$dia."', '".$tipo."', '".$descricao."', '".$valor."')";
        
        if ($conn->query($sql) === TRUE) {
          header("Location: ../registro.php?msg=cadastrou");
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
?>
