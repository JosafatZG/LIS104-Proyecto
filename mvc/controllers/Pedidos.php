<?php
    Class PedidosController {
        public function __construct(){
            require_once "models/PedidosModel.php";
        }

        public function index(){

			/*$alumnos = new Alumnos_model();
			$data["titulo"] = "Alumnos";
			$data["alumnos"] = $alumnos->get_alumnos();*/
			
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