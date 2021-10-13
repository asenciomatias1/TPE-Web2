<?php
    require_once('libs/Smarty.class.php');

    class CategoriasView{

        private $smarty;

        function __construct()
        {
            $this->smarty = new Smarty();
            //$this->smarty->assign('base', BASE_URL);
        }

        function showCategorias($categorias){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/showCategorias.tpl');
        }

        function formAddCategorias($categorias, $error = ''){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/formAddCategorias.tpl');
        }

        function formEditCategoria($categorias, $categoriaVieja){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('categoriaVieja', $categoriaVieja);
            $this->smarty->display('templates/formEditCategorias.tpl');
        }

        function deleteCategoria(){
            $this->smarty->display('templates/deleteCategoria.tpl');
        }

        function showAdminCategorias(){
            header("Location: ".BASE_URL."admin/categorias");
        }

        function showAdminCategoriasError(){
            header("Location: ".BASE_URL."admin/categorias/error");
        }

    }