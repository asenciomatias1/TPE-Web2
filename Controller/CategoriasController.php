<?php
    require_once "./Model/CategoriasModel.php";
    require_once "./View/CategoriasView.php";
    require_once "./Helpers/AuthHelper.php";


    class CategoriasController{

        private $model;
        private $view;
        private $authHelper;

        function __construct()
        {
            $this->model = new CategoriasModel();
            $this->view = new CategoriasView();
            $this->authHelper = new AuthHelper();
        }

        function showCategorias(){
            $categorias = $this->model->getCategorias();
            $this->view->showCategorias($categorias);
        }

        function getCategorias(){
            return $this->model->getCategorias();
        }

        function addCategoria(){
            if(!empty($_POST['nombreCategoria'])){
                $this->model->agregaCategoria($_POST['nombreCategoria']);
                $this->view->showAdminCategorias();
            }
        }

        function deleteCategoria($nombreCategoria){
            try {
                $this->model->eliminaCategoria($nombreCategoria);
                $this->view->showAdminCategorias();
            } catch (\Throwable $th) {
                //throw $th;
                // No se puede borrar: la categoria tiene juegos asociados
                $this->view->showAdminCategoriasError();
            }
        }

        function updateCategoria(){
            if (!empty($_POST['categoriaNueva']) && !empty($_POST['categoriaVieja'])) {
                $this->model->editaCategoria($_POST['categoriaNueva'],$_POST['categoriaVieja']);
                $this->view->showAdminCategorias();
            }
        }

        function formAddCategorias($error = ''){
            $categorias = $this->model->getCategorias();
            $this->view->formAddCategorias($categorias, $error);
        }

        function formDeleteCategoria(){
            $this->view->deleteCategoria();
        }

        function formEditCategoria($categoriaVieja){
            $categorias = $this->model->getCategorias();
            $this->view->formEditCategoria($categorias, $categoriaVieja);
        }

    }