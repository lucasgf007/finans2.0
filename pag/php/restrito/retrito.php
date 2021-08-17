<?php

session_start(); // Inicializa a sessão

    if($_SESSION["estaLogado"] == false){
        header("Location: ../../../login.php?msg=desconectado");
        $_SESSION["ID"] = " ";
    }



?>