<?php
    require_once "./Model/UsuarioModel.php";
    require_once "./View/LoginView.php";


    class LoginController{

        private $model;
        private $view;

        function __construct()
        {
            $this->model = new UsuarioModel();
            $this->view = new LoginView();
        }

        function showRegistro(){
            $this->view->showRegistro();
        }

        function addUsuario(){
            if (!empty($_POST)){
                $user = $_POST['emailUsuario'];
                $pass = $_POST['passUsuario'];
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                $this->model->addUsuario($user, $hash);
                $this->view->showHome();
            }
        }

        function showLogin(){
            $this->view->showLogin();
        }

        function verifyLogin(){
            if (!empty($_POST['emailUsuario']) && !empty($_POST['passUsuario'])) {
                $email = $_POST['emailUsuario'];
                $password = $_POST['passUsuario'];
         
                // Obtengo el usuario de la base de datos
                $user = $this->model->getUsuario($email);
         
                // Si el usuario existe y las contraseñas coinciden
                if ($user && password_verify($password, $user->password)) {
    
                    session_start();
                    $_SESSION["email"] = $email;
                    
                    //$this->view->showAdmin();
                    $this->view->redirAdmin();
                } else {
                    $this->view->showLogin("Acceso denegado");
                }
            }
        }

        function showAdmin(){
            $this->view->showAdmin();
        }

        function logout(){
            session_start();
            session_destroy();
            $this->view->showLogin("Te deslogueaste!");
        }
    
    }