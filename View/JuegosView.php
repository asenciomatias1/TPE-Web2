<?php
    require_once('libs/Smarty.class.php');
    
    class JuegosView{

        private $smarty;

        function __construct()
        {
            $this->smarty = new Smarty();
            //$this->smarty->assign('base', BASE_URL);
        }

        function showJuegos($juegos){
            $this->smarty->assign('juegos' , $juegos);
            //$this->smarty->assign('base' , BASE_URL);
            $this->smarty->display('templates/showJuegos.tpl');
        }

        function showDescripcionJuego($juego){
            $this->smarty->assign('juego', $juego);
            $this->smarty->display('templates/showDescripcionJuego.tpl');
        }

        function imprimeArreglo($arreglo){
            echo '<pre>'; print_r($arreglo); echo '</pre>';
        }

        //hacer una funcion le doy una categoria(string) y devuelve el id de la categoria
        function formAddJuegos($categorias, $juegos){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('juegos', $juegos);
            $this->smarty->display('templates/formAddJuegos.tpl');
        }

        function showHome(){
            $this->smarty->display('templates/home.tpl');
        }

        function formEditJuegos($nombreJuego, $juegos, $categorias){
            $this->smarty->assign('juegos', $juegos);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('nombreJuego', $nombreJuego);
            $this->smarty->display('templates/formEditJuegos.tpl');
        }

        function showAdminJuegos(){
            header("Location: ".BASE_URL."admin/juegos");
        }
    

    }