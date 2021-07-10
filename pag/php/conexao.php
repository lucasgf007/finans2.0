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
    ?>