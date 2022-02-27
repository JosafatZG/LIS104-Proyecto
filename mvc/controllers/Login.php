<?php
    Class LoginController {
        public function __construct(){
            require_once "models/LoginModel.php";
        }

        public function index(){

			/*$alumnos = new Alumnos_model();
			$data["titulo"] = "Alumnos";
			$data["alumnos"] = $alumnos->get_alumnos();*/
			
			require_once "views/login/login.php";
		}
    }
?>