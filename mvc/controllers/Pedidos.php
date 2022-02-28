<?php
    Class PedidosController {
        public function __construct(){
            require_once "models/PedidosModel.php";
        }

        public function index(){
			require_once "views/pedidos/inicio.php";
		}

        public function viewcategorias(){
            require_once "views/pedidos/categorias.php";
        }

        public function vieworden(){
            require_once "views/pedidos/orden.php";
        }
    }
?>