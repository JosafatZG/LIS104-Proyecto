<?php
    Class PedidosController {
        public function __construct(){
            require_once "models/PedidosModel.php";
        }

        public function index(){
			require_once "views/pedidos/inicio.php";
		}

        public function viewcategorias($id = null){

            $categorias = new Pedidos_model();

            if(isset($id)){
                $data["info"] = $categorias->get_productos($id);
                $data["titulo"] = $categorias->get_namecategoria($id);
            }
            else{
                $data["info"] = $categorias->get_categorias();
                $data["titulo"] = "Categorias";
            }
            
            require_once "views/pedidos/categorias.php";
        }

        public function vieworden(){
            require_once "views/pedidos/orden.php";
        }

        public function viewpedido($id = null){

            $productos = new Pedidos_model();

            $data["info"] = $productos->get_productosod($id);

            require_once "views/pedidos/pedido.php";
        }
        public function viewcontactanos(){
            require_once "views/pedidos/contactanos.php";
        }

        public function viewordencombo(){

            $productos = new Pedidos_model();

            $data["info"] = $productos->get_productosorden();

            require_once "views/pedidos/ordencombo.php";
        }

        public function viewpedido2(){

            $productos = new Pedidos_model();

            $data["info"] = $productos->get_productosor2();

            require_once "views/pedidos/pedido2.php";
        }


    }
?>