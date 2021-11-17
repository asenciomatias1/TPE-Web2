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
}