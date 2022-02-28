<?php
    class Pedidos_model {
        private $db;

        public function __construct(){
            $this->db = Conectar::conexion();
        }
    }
?>