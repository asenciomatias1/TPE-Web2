<?php
     require_once('libs/Smarty.class.php');

     class UsuarioView{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
            
        }

        function updatePermisosInterfaz($usuarios){
            $this->smarty->assign('usuarios', $usuarios);
            $this->smarty->display('templates/updatePermisosInterfaz.tpl');
        }

     }