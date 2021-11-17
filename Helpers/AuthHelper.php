<?php

    class AuthHelper{
        
        function __construct(){
            
        }

        function checkLogin(){
            session_start();
            if(!isset($_SESSION["email"])){
                header("Location: ".BASE_URL."login");
            }
        }

        function estaLogeado(){
            session_start();
            if(!isset($_SESSION["email"])){
                return false;
            }else {
                return true;
            }
        }

        function esAdmin(){
            //session_start();
            return $_SESSION['rol'] == "admin";
        }
    }
    