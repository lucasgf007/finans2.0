<?php include("conexao.php")?>

<?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $estaLogado = false;


    $sql = "SELECT * FROM despesas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // comparar
    while($row = $result->fetch_assoc()) {
        if($row["email"] == $login && $row["senha"] == sha1($senha)){
            $estaLogado = true;
            header("Location: registro.php?msg=sucesso");

                    //echo "  /Ano: " . $row["ano"]. "  " . "/Mes: " . $row["mes"]. " " . "/Dia: ". $row["dia"]. " " . "/Tipo: ". $row["tipo"]. " " . "/Descrição: ". $row["descricao"]. " " . "/Valor: ". $row["valor"]."<br>";
        } else{
            echo "error";
        }
    }
    } else {
        echo "0 results";
    }
    $conn->close();
?>