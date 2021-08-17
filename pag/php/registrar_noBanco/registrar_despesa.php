<?php include("../conexao.php")?>
<?php
    // Start the session
    session_start();
?>
<?php 
// sha1 () deixa a senha criptografada 
        $ano =  $_POST["ano"];
        $mes =  $_POST["mes"];
        $dia =  $_POST["dia"];
        $tipo =  $_POST["tipo"];
        $descricao =  $_POST["descricao"];
        $valor =  $_POST["valor"];
        $id = $_SESSION["ID"];

        //echo "  /Ano: " . $_POST["ano"]. "  " . "/Mes: " . $_POST["mes"]. " " . "/Dia: ". $_POST["dia"]. " " . "/Tipo: ". $_POST["tipo"]. " " . "/Descrição: ". $_POST["descricao"]. " " . "/Valor: ". $_POST["valor"]."<br>";
    
        
        $sql = "INSERT INTO despesas (ano, mes, dia, tipo, descricao, valor, id_usuario) 
        VALUES ( '".$ano."', '".$mes."', '".$dia."', '".$tipo."', '".$descricao."', '".$valor."', '".$id."')";
        
        if ($conn->query($sql) === TRUE) {
          header("Location: ../registro.php?msg=cadastrou");
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
?>
