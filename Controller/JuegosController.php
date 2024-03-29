<?php
    require_once "./Model/JuegosModel.php";
    require_once "./View/JuegosView.php";
    require_once "./Helpers/AuthHelper.php";


    class JuegosController{

        private $model;
        private $view;
        private $authHelper;

        function __construct()
        {
            $this->model = new JuegosModel();
            $this->view = new JuegosView();
            $this->authHelper = new AuthHelper();
        }

        function showHome(){
            //$juegos = $this->model->getJuegos();
            //$this->view->showJuegos($juegos);
            $this->view->showHome();
        }

        function showListaJuegos(){
            $juegos = $this->model->getJuegos();
            $this->view->showJuegos($juegos);
        }

        function showDescripcionJuego($id){
            $juego = $this->model->getJuego($id);
            $estaLogeado = $this->authHelper->estaLogeado();
            $esAdmin = false;
            if ($estaLogeado){
                $esAdmin = $this->authHelper->esAdmin();
            }
            $idUsuario = $this->authHelper->idUsuarioLogeado();
            $this->view->showDescripcionJuego($juego, $estaLogeado, $esAdmin, $idUsuario);
        }

        function showJuegosPorCategoria($nombreCategoria){
            $juegos = $this->model->getJuegosPorCategoria($nombreCategoria);
            $this->view->showJuegos($juegos);
        }

        function showJuegos(){
            $juegos = $this->model->getJuegos();
            $this->view->imprimeArreglo($juegos);
        }

        function addJuego(){
            if (!empty($_POST)){
                $this->model->agregaJuego($_POST['nombreJuego'], $_POST['precioJuego'], 
                $_POST['descripcionJuego'], $_POST['categoriaJuego']);
                $this->view->showAdminJuegos();
            }
        }

        function updateJuego(){
            if (!empty($_POST)){
                $this->model->modificaJuego($_POST['precioJuego'], $_POST['descJuego'],
                 $_POST['categoriaJuego'], $_POST['nombreJuego']);
                $this->view->showAdminJuegos();
            }
        }

        function deleteJuego($nombre){
            $this->model->eliminaJuego($nombre);
            $this->view->showAdminJuegos();
        }

        function formAddJuegos($categorias){
            $juegos = $this->model->getJuegos();
            $this->view->formAddJuegos($categorias, $juegos);
        }

        function formEditJuegos($nombreJuego, $categorias){
            $juegos = $this->model->getJuegos();
            $juegoEditar = $this->model->getJuegoPorNombre($nombreJuego);
            if ($juegoEditar){
                $this->view->formEditJuegos($nombreJuego, $juegos, $categorias);
            }else {
                $this->view->showAdminJuegos();
            }
        }

    }