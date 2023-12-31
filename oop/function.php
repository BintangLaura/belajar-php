<?php

session_start();

class Connection{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db_name = "pos_shop";
    public $conn;

    public function __construct()  {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
    }
}

class Register extends Connection{
    public function registration($name, $username, $email, $phone_number, $password, $group_id)
    {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM users WHERE username = '$username'");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
            //username has already taken
        } else {
            $query = mysqli_query($this->conn, "INSERT INTO users (name, username, email, phone_number, password, group_id) VALUES ('$name', '$username', '$email', '$phone_number', '$password', '$group_id')");
            return 1;
        }
    }
}

class Login extends Connection{
    public function login($username, $password){
        $result = mysqli_query($this->conn, "SELECT * FROM users WHERE phone_number = '$username'");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password = $row['password']) {
                $this->id = $row['id'];
                return 1;
            } else {
                return 10;
            }
        }
    }

    public function idUser(){
        return $this->id;
    }
}

class Select extends Connection{
    public function selectUserById($id){
        $result = mysqli_query($this->conn, "SELECT * FROM 
        users WHERE id = $id");
        return mysqli_fetch_assoc($result);
    }
}

?>