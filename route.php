<?php 
    require_once "./Controller/JuegosController.php";
    require_once "./Controller/CategoriasController.php";
    require_once "./Controller/LoginController.php";
    require_once "./Controller/UsuarioController.php";
    require_once "./Helpers/AuthHelper.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if (!empty($_GET["action"])){
        //echo "esta seteado";
        $action = $_GET["action"];
        //var_dump($action);
    }else {
        //echo "no esta seteado";
        $action = "home";
    };
  
    $nombreCategoria = "TCG";
    $params = explode('/', $action);

    $juegosController = new JuegosController();
    $categoriasController = new CategoriasController();
    $loginController = new LoginController();
    $usuarioController = new UsuarioController();
    $authHelper = new AuthHelper();

    switch ($params[0]) {
        case 'home':
            //$categoriasController->formCategorias();
            $juegosController->showHome();
            //$categoriasController->formDeleteCategoria();
            //$controller->showJuegosPorCategoria($nombreCategoria);
            break;

        case 'categorias':
            if (!empty($params[1])){
                $juegosController->showJuegosPorCategoria($params[1]);
            }else {
                $categoriasController->showCategorias();
            }
            break;

        case 'juegos':
            if (!empty($params[1])){
                if ($params[1] == 'todos') {    
                    $juegosController->showListaJuegos();
                }else{
                    $juegosController->showDescripcionJuego($params[1]);
                }
            }else{
                echo "ESTA VACIO - ARREGLAR";
            }
            break;

        case 'admin':
            $authHelper->checkLogin();
            if (!empty($params[1])){
                if ($params[1] == 'categorias'){
                    if (!empty($params[2])){
                        switch ($params[2]) {
                            case 'agregar':
                                $categoriasController->addCategoria();
                                break;
                            case 'borrar':
                                $categoriasController->deleteCategoria($params[3]);
                                break;
                            case 'editar':
                                if (!empty($params[3])){
                                    $categoriasController->formEditCategoria($params[3]);
                                }else if (!isset($params[3])){
                                    $categoriasController->updateCategoria();
                                }
                                break;
                            case 'error':
                                $categoriasController->formAddCategorias("No se puede borrar: la categoria tiene juegos asociados");
                                break;
                            default:
                                //$categoriasController->formAddCategorias();
                                break;
                        }
                    }else {
                        $categoriasController->formAddCategorias();
                    }

                }else if ($params[1] == 'juegos'){
                    if (!empty($params[2])){
                        switch ($params[2]) {
                            case 'agregar':
                                $juegosController->addJuego();
                                break;

                            case 'borrar':
                                $juegosController->deleteJuego($params[3]);
                                break;

                            case 'editar':
                                if (!empty($params[3])){
                                    $juegosController->formEditJuegos($params[3], $categoriasController->getCategorias());
                                }else {
                                    $juegosController->updateJuego();
                                }
                                //$juegosController->formEditJuegos($params[3]);
                                break;
                            
                            default:
                                $juegosController->formAddJuegos($categoriasController->getCategorias());
                                break;
                        }
                        
                    }else {
                        $juegosController->formAddJuegos($categoriasController->getCategorias());
                    }
                }else if($params[1] == 'permisos'){
                    if (!empty($params[2])){
                        switch ($params[2]) {
                            case 'editar':
                                //admin/permisos/editar/id me lleva a la interfaz para editar un usuario
                                //$usuarioController->updatePermisosInterfaz();
                                $usuarioController->editarRol();
                                break;
                            case 'borrar':
                                if (!empty($params[3])){
                                    $usuarioController->borrarUsuario($params[3]);
                                }else {
                                    $usuarioController->updatePermisosInterfaz();
                                }
                                break;
                            default:
                                $usuarioController->updatePermisosInterfaz();
                                break;
                        }
                    }else{
                        $usuarioController->updatePermisosInterfaz();
                    }
                }
            }else {
                //$authHelper->checkLogin();
                $loginController->showAdmin();
            }
            break;
        
        case 'registro':
            if (!empty($params[1])){
                $loginController->addUsuario();
            }else {
                $loginController->showRegistro();
            }
        break;

        case 'login':
            if (!empty($params[1])){
                $loginController->verifyLogin();
            }else {
                if ($authHelper->estaLogeado()){
                    $loginController->showAdmin();
                }else {
                    $loginController->showLogin();
                }
            }
            break;

        case 'logout':
            $loginController->logout();
            break;

        default:
            # code...
            break;
    }