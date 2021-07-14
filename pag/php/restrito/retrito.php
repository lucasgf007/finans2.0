<?php
session_start();
// Se o usuário não está logado, manda para página de login.
if (!isset($_SESSION['user'])) header("Location: ../../../login.php");
exit; // Encerra a execução do script