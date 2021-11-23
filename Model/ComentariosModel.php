<?php

    class ComentariosModel{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos_de_mesa;charset=utf8', 'root', '');
        }

        function getComentarios(){
            $query = $this->db->prepare(
                "SELECT comentarios.*,
                usuarios.email AS email_usuario,
                juegos.nombre AS nombre_juego
                FROM comentarios
                JOIN usuarios
                ON comentarios.fk_id_usuario = usuarios.id
                JOIN juegos
                ON comentarios.fk_id_juego = juegos.id_juego");

            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function getComentario($id){
            $query = $this->db->prepare(
                "SELECT comentarios.*,
                usuarios.email AS email_usuario,
                juegos.nombre AS nombre_juego
                FROM comentarios
                JOIN usuarios
                ON comentarios.fk_id_usuario = usuarios.id
                JOIN juegos
                ON comentarios.fk_id_juego = juegos.id_juego
                WHERE id_comentario = ?");
            $query->execute(array($id));
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function addComentario($mensaje, $puntaje, $idJuego, $idUsuario){
            $query = $this->db->prepare("INSERT INTO `comentarios`(`mensaje`,`puntaje`,`fk_id_juego`,`fk_id_usuario`) 
            VALUES (?,?,?,?)");
            $query->execute(array($mensaje, $puntaje, $idJuego, $idUsuario));
            return $this->db->lastInsertId();
        }

        function deleteComentario($idComentario){
            $query = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario = ?");
            $query->execute(array($idComentario));
        }

        function getComentariosPorJuego($idJuego){
            $query = $this->db->prepare(
                "SELECT comentarios.*,
                usuarios.email AS email_usuario
                FROM comentarios
                JOIN usuarios
                ON comentarios.fk_id_usuario = usuarios.id
                JOIN juegos
                ON comentarios.fk_id_juego = juegos.id_juego
                WHERE fk_id_juego = ?");

            $query->execute(array($idJuego));
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function getComentariosAntiguedad($idJuego, $criterio){
            if ($criterio == "desc"){
                $query = $this->db->prepare(
                    "SELECT comentarios.*,
                    usuarios.email AS email_usuario
                    FROM comentarios
                    JOIN usuarios
                    ON comentarios.fk_id_usuario = usuarios.id
                    JOIN juegos
                    ON comentarios.fk_id_juego = juegos.id_juego
                    WHERE fk_id_juego = ?
                    ORDER BY id_comentario
                    DESC"
                );
                $query->execute(array($idJuego));
                return $query->fetchAll(PDO::FETCH_OBJ);
            }else if ($criterio == "asc"){
                return $this->getComentariosPorJuego($idJuego);
            }else {
                return [];
            }
        }

        function getComentariosPuntaje($idJuego, $criterio){
            if ($criterio == "desc"){
                $query = $this->db->prepare(
                    "SELECT comentarios.*,
                    usuarios.email AS email_usuario
                    FROM comentarios
                    JOIN usuarios
                    ON comentarios.fk_id_usuario = usuarios.id
                    JOIN juegos
                    ON comentarios.fk_id_juego = juegos.id_juego
                    WHERE fk_id_juego = ?
                    ORDER BY puntaje
                    DESC"
                );
                $query->execute(array($idJuego));
                return $query->fetchAll(PDO::FETCH_OBJ);
            }else if ($criterio == "asc"){
                $query = $this->db->prepare(
                    "SELECT comentarios.*,
                    usuarios.email AS email_usuario
                    FROM comentarios
                    JOIN usuarios
                    ON comentarios.fk_id_usuario = usuarios.id
                    JOIN juegos
                    ON comentarios.fk_id_juego = juegos.id_juego
                    WHERE fk_id_juego = ?
                    ORDER BY puntaje
                    ASC"
                );
                $query->execute(array($idJuego));
                return $query->fetchAll(PDO::FETCH_OBJ);
            }else {
                return [];
            }
        }
    }