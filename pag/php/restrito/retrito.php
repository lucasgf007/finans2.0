<?php

session_start(); // Inicializa a sessão

    if($_SESSION["estaLogado"] == false){
        header("Location: ../../../index.html?msg=desconectado");
        $_SESSION["ID"] = " ";
    }



?>