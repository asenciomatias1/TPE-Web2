<?php
    require_once('libs/Smarty.class.php');

    class LoginView{

        function __construct(){
            $this->smarty = new Smarty();
        }

        function showRegistro(){
            $this->smarty->display('templates/showRegistro.tpl');
        }

        function showLogin($error = ''){
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/showLogin.tpl');
        }

        function showHome(){
            header("Location: ".BASE_URL."home");
        }

        function showAdmin(){
            $this->smarty->display('templates/admin.tpl');
        }

        function redirAdmin(){
            header("Location: ".BASE_URL."admin");
        }
    }
