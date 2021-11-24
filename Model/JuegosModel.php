<?php
    class JuegosModel{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos_de_mesa;charset=utf8', 'root', '');
        }

        function getJuegos(){
            $query = $this->db->prepare("SELECT juegos.*, categorias.nombre as categoria FROM juegos JOIN categorias ON juegos.id_categoria = categorias.id_categoria");
            $query->execute();
            $juegos = $query->fetchAll(PDO::FETCH_OBJ);
            return $juegos;
        }

        function getJuego($id){
            $query = $this->db->prepare("SELECT * FROM `juegos` WHERE id_juego = ?");
            $query->execute(array($id));
            $juego = $query->fetch(PDO::FETCH_OBJ);
            return $juego;
        }

        function getJuegoPorNombre($nombre){
            $query = $this->db->prepare("SELECT * FROM `juegos` WHERE nombre = ?");
            $query->execute(array($nombre));
            $juego = $query->fetch(PDO::FETCH_OBJ);
            return $juego;
        }

        function getJuegosPorCategoria($categoria){
            $query = $this->db->prepare
            ("SELECT juegos.*, categorias.nombre as categoria 
            FROM juegos JOIN categorias ON juegos.id_categoria = categorias.id_categoria WHERE categorias.nombre = ?");
            $query->execute(array($categoria));
            $juegos = $query->fetchAll(PDO::FETCH_OBJ);
            return $juegos;
        }

        function getListaJuegos(){
            $query = $this->db->prepare("SELECT * FROM `juegos`");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function getIdCategoria($categoria){
            $query = $this->db->prepare("SELECT `id_categoria`, `nombre` FROM `categorias` WHERE nombre = ?");
            $query->execute(array($categoria));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function agregaJuego($nombre, $precio, $descripcion, $categoria){
            $query = $this->db->prepare("INSERT INTO `juegos`(`nombre`, `precio`, `descripcion`, `id_categoria`) VALUES (?,?,?,?)");
            $cat = $this->getIdCategoria($categoria);
            $id_categoria = $cat->id_categoria;
            $query->execute(array($nombre, $precio, $descripcion, intval($id_categoria)));
        }

        function modificaJuego($precio, $descripcion, $categoria, $nombre){
            $query = $this->db->prepare("UPDATE `juegos` SET `precio`=?,`descripcion`=?,`id_categoria`=? WHERE nombre = ?");
            $cat = $this->getIdCategoria($categoria);
            //var_dump($categoria);
            $id_categoria = $cat->id_categoria;
            //var_dump($id_categoria);
            $query->execute(array($precio, $descripcion, $id_categoria, $nombre));
        }

        function eliminaJuego($nombre){
            $query = $this->db->prepare("DELETE FROM `juegos` WHERE nombre = ?");
            $query->execute(array($nombre));
        }

    }