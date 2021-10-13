<?php
    class UsuarioModel{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos_de_mesa;charset=utf8', 'root', '');
        }

        function addUsuario($email, $pass){
            $query = $this->db->prepare("INSERT INTO `usuarios`(`email`, `password`) VALUES (?,?)");
            $query->execute(array($email, $pass));
        }

        function getUsuario($email){
            $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
            $query->execute(array($email));
            return $query->fetch(PDO::FETCH_OBJ);
        }
    
    }