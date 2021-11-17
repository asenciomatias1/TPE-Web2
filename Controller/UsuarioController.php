<?php   
    require_once "./Model/UsuarioModel.php";
    require_once "./View/UsuarioView.php";
    require_once "./View/LoginView.php";
    require_once "./Helpers/authHelper.php";

    class UsuarioController{

        private $model;
        private $view;
        private $loginView;
        private $authHelper;

        function __construct()
        {
            $this->model = new UsuarioModel();
            $this->view = new UsuarioView();
            $this->loginView = new LoginView();
            $this->authHelper = new AuthHelper();
        }

        function updatePermisosInterfaz(){
            //aca iba un if !empty $post
            $usuarios = $this->model->getUsuarios();
            $this->view->updatePermisosInterfaz($usuarios);
        }

        function editarRol(){
            if ($this->authHelper->esAdmin()){
                $email = $_POST['emailUsuario'];
                $rol = $_POST['rolUsuario'];
                if (!empty($email) && !empty($rol)){
                    $this->model->editarPermiso($email, $rol);
                }
                $this->updatePermisosInterfaz();
            }else {
                $this->loginView->showAdmin("No tenes permiso de realizar esta accion");
            }
            
        }

        function borrarUsuario($id){
            if ($this->authHelper->esAdmin()){
                if (!empty($id)){
                    $this->model->borrarUsuario($id);
                }
                $this->updatePermisosInterfaz();
            }else {
                $this->loginView->showAdmin("No tenes permiso de realizar esta accion");
            }
        }

}