<?php
    class Pedidos_model {
        private $db;
        private $info;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->info = array();
        }

        public function get_categorias(){
            $sql = "SELECT * FROM categorias";
            $resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->info[] = $row;
			}
			return $this->info;
        }

        public function get_productos($id = null){

            $sql = "SELECT * FROM producto WHERE categoria='$id'";
            $resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->info[] = $row;
			}
			return $this->info;
        }
    }
?>