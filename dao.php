<?php

class Dao{
    private $host = "us-cdbr-iron-east-03.cleardb.net";
    private $db = "heroku_2c840141b9e40fc";
    private $user = "bfac0b5af9494b";
    private $pass = "b98f73a9";

    public function getConnection(){
        echo "in connection";
        try {
           $connection = new PDO("mysql:host={$this->host};dbname={$this->db}", 
               $this->user, $this->pass);
        } catch (Exception $e) {
            echo print_r($e,1);
        }
        echo "returns connection";
        return $connection;
    }
    
    public function isValidUser($user, $pass){
        echo "in isValidUser";
        $conn = $this->getConnection();
        echo "before select stmt";
        $stmt = "SELECT * from login where username = :username AND 
        password = :password";
        $newUser = filter_var($user, FILTER_SANITIZE_STRING);
        $newPass = filter_var($pass, FILTER_SANITIZE_STRING);
        echo "past select stmt";

       if($q = $conn->prepare($stmt)){
            echo "in if statement";

            $q->bindParam(':username', $newUser);
            $q->bindParam(":password", $newPass);
            echo "past bind_param user";

            $q->execute();
            echo "past execute";
           
            if ($q->fetch(PDO::FETCH_ASSOC)) {

              return true;
            } else {
               return false;
            }
       }
    }

    public function existingUsername($username){
        $conn = $this->getConnection();
        $stmt = "SELECT * from login where username = :username";
        $newUser = filter_var($user, FILTER_SANITIZE_STRING);
        if($q = $conn->prepare($stmt)){
            $q->bindParam(':username', $newUser);
            $q->execute();
            if ($q->fetch(PDO::FETCH_ASSOC)) {

                return true;
              } else {
                 return false;
              }
        }
    }

    public function createUser($username, $password, $email){
        $conn = $this->getConnection();
        $stmt = "INSERT into Login(username, password, email) values ((:username), (:password), (:email));";
        $q = $conn->prepare($stmt);
        $q->bindParam(":username", $username);
        $q->bindParam(":password", $password);
        $q->bindParam(":email", $email);
        $q->execute();
    }
}

?>