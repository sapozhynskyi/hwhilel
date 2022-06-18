<?php

class User{
    private $id;
    private $password;
    private $email = "sapozhynskyi@gmail.com";

    public function __construct($password,$id)
    {
        $this->setPassword($password);
        $this->setId($id);
    }

    private function setId($id){
        if(gettype($id) == "integer" || gettype($id) == "double"){
            return $this->id = $id;
        } else {
            throw new Exception("Id is not an integer");
        }
    }
    private function setPassword($password){
        if(strlen($password) <= 8){
            return $this->password = $password;
        } else {
            throw new Exception("Password more than 8 symbols");
        }
    }
    public function getUserData(){
        return "id " . $this->id ." - ". "email " . $this->email;
    }
}
try {
    $user = new User(12345678, 154);
    echo $user->getUserData();
} catch (Exception $e){
    die( $e->getFile() . ' => ' . $e->getLine()  . ' => ' . $e->getMessage());
}

