<?php   
    require_once "./Model/UsuarioModel.php";
    require_once "./View/UsuarioView.php";
    require_once "./Helpers/AdminHelper.php";

    class UsuarioController{

        private $model;
        private $view;
        private $permisosHelper;

        function __construct()
        {
            $this->model = new UsuarioModel();
            $this->view = new UsuarioView();
            $this->permisosHelper = new AdminHelper();
        }

        function updatePermisosInterfaz(){
            //aca iba un if !empty $post
            $usuarios = $this->model->getUsuarios();
            $this->view->updatePermisosInterfaz($usuarios);
        }

        function editarRol(){
            $email = $_POST['emailUsuario'];
            $rol = $_POST['rolUsuario'];
            if (!empty($email) && !empty($rol)){
                $this->model->editarPermiso($email, $rol);
            }
            $this->updatePermisosInterfaz();
        }

}