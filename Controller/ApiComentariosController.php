<?php
    require_once "./Model/ComentariosModel.php";
    require_once "./View/ApiView.php";

    class ApiComentariosController{
        
        private $model;
        private $view;
        private $data;

        function __construct(){
            $this->model = new ComentariosModel();
            $this->view = new ApiView();
            $this->data = file_get_contents("php://input"); // captura la data raw enviada a la API
        }

        function getComentarios(){
            $comentarios = $this->model->getComentarios();
            return $this->view->response($comentarios, 200);
        }

        function getComentario($params = null){
            $idComentario = $params[":ID"];
            $comentario = $this->model->getComentario($idComentario);
            if ($comentario){
                return $this->view->response($comentario, 200);
            }else {
                return $this->view->response("El comentario con el id=$idComentario no existe", 404);
            }
        }

        function postComentario(){
            $body = $this->getData(); // parsea la data raw a JSON objec

            $mensaje = $body->mensaje;
            $puntaje = $body->puntaje;
            $idJuego = $body->fk_id_juego;
            $idUsuario = $body->fk_id_usuario;

            if ($mensaje != "" && $puntaje != "" && $idJuego != "" && $idUsuario != ""){
                try {
                    $id = $this->model->addComentario($mensaje, $puntaje, $idJuego, $idUsuario);
                    if ($id != 0) {
                        $this->view->response("El comentario se insertó con el id=$id", 200);
                    } else {
                        $this->view->response("El comentario no se pudo insertar", 500);
                    }
                } catch (\Throwable $th) {
                    $this->view->response("Algunos de los campos son invalidos", 404);
                }
            }else{
                $this->view->response("Algunos de los campos son invalidos", 404);
            }
            
        }

        function deleteComentario($params = null){
            $idComentario = $params[":ID"];
            $comentario = $this->model->getComentario($idComentario);
            
            if ($comentario){
                $this->model->deleteComentario($idComentario);
                return $this->view->response("El comentario con el id=$idComentario fue borrado", 200);
            }else {
                return $this->view->response("El comentario con el id=$idComentario no existe", 404);
            }
        }

        function getData(){
            return json_decode($this->data);
        }
    }
    