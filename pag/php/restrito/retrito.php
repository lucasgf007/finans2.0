<?php

session_start();
class Auth {

    public static function handleLogin(){
        session_start();
        if (!isset($_SESSION['user'])) {

            header('location: ' . URL);
            exit();
        }
    }
}