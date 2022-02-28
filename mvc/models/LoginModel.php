<?php
    class Login_model {
        private $db;
    
    public function __construct(){
        $this->db = Conectar::conexion();
    }

    public function LogearUsuario($username, $password){

        $errors = array();
        $username = mysqli_real_escape_string($this->db, $username);
        $password = mysqli_real_escape_string($this->db, $password);
        
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM cliente WHERE usuario='$username' AND password='$password'";
            $results = mysqli_query($this->db, $query);
            if (mysqli_num_rows($results) == 1) {
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              header('location: ?c=pedidos');
            }else {
                array_push($errors, "Wrong username/password combination");
                header('location: ?c=login');
                return $username;
            }
        }
        else
        {
            return $username;
        }
    }

    public function RegistrarUsuario($username, $password){

        $errors = array();
         // receive all input values from the form
        $username = mysqli_real_escape_string($this->db, $username);
        $password = mysqli_real_escape_string($this->db, $password);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($username)) { array_push($errors, "Usuario requerido"); }
        if (empty($password)) { array_push($errors, "Contraseña requerida"); }

        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM cliente WHERE usuario='$username' LIMIT 1";
        $result = mysqli_query($this->db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['usuario'] === $username) {
            array_push($errors, "Usuario ya existente");
            }
        }
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password);//encrypt the password before saving in the database
            $query = "INSERT INTO cliente (usuario, password) VALUES('$username', '$password')";
            mysqli_query($this->db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: ?c=pedidos');
        }
        else
        {
            return $username;
        }
    }
}
?>