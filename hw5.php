<?php
 class User {
     private $name, $age, $email = 'abc@mail.com';

     public function __construct($name, $age){
         $this->setName($name);
         $this->setAge($age);
     }

     public function __call($methods, $args){
         echo "Вызван несуществующий метод '$methods' с аргументом - " . implode(', ', $args). "\n";
     }
     private function setName($name){
         $this->name = $name;
     }
     private function setAge($age){
         $this->age = $age;
     }
     public function getAll(){
         return "Имя - $this->name, Возраст - $this->age, Почта - $this->email";
     }
 }


 $obj = new User('Alex', 24);
 echo $obj->getAll()."<br>";
 $obj->setEmail('test@mail.com');
