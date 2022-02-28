<?php
    Class LoginController {
        public function __construct(){
            require_once "models/LoginModel.php";
        }

        public function index($usernameL = "", $usernameR = ""){
            $data["userL"] = $usernameL;
            $data["userR"] = $usernameR;
			require_once "views/login/login.php";
		}

        public function LoginUser(){
            session_start();
            
            $username = $_POST['usuario_login'];
            $password = $_POST['password_login'];

            $login = new Login_model();
            $usernameL = $login->LogearUsuario($username, $password);
            $this->index($usernameL, "");
        }

        public function RegisterUser(){
            session_start();
            $username = "";
            $username = $_POST['usuario_reg'];
            $password = $_POST['password_reg'];
            
            $register = new Login_model();
            $usernameR = $register->RegistrarUsuario($username, $password);
            $this->index("", $usernameR);
        }
    }
?>