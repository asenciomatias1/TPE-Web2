<?php

    class AdminHelper{

        function __construct(){
            
        }

        function checkIsAdmin(){
        if (($_SESSION['rol']) == "admin") {
            return true;
        } else {
            return false;
        } 
    }

}