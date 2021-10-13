<?php
    class CategoriasModel{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos_de_mesa;charset=utf8', 'root', '');
        }

        function getCategorias(){
            $query = $this->db->prepare("SELECT * FROM `categorias`");
            $query->execute();
            $categorias = $query->fetchAll(PDO::FETCH_OBJ);
            return $categorias;
        }

        function getIdCategoria($categoria){
            $query = $this->db->prepare("SELECT `id_categoria`, `nombre` FROM `categorias` WHERE nombre = ?");
            $query->execute(array($categoria));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function agregaCategoria($nombre){
            $query = $this->db->prepare("INSERT INTO `categorias`(`nombre`) VALUES (?)");
            $query->execute(array($nombre));
        }

        function eliminaCategoria($nombre){
            $query = $this->db->prepare("DELETE FROM `categorias` WHERE nombre = ?"); 
            $query->execute(array($nombre));
        }

        function editaCategoria($nombreNuevo,$nombreViejo){
            $query = $this->db->prepare("UPDATE `categorias` SET `nombre`=? WHERE nombre = ?");
            $query->execute(array($nombreNuevo,$nombreViejo));
        }
    }