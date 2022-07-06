<?php

use User as GlobalUser;

    class User{
        public $name;
        public function __construct($name){
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }
    }
    class Admini extends User{
        //..
        public function getName(){
            return "Soy $this->name";
        }
    }
    class Jefe extends User{
        //al ponmer final el metodo no se puede sobre escribir despues
        //final -> al metodo o clase
        //no puere herredar
        final public function getName(){
            return "Soy $this->name";
        }
    }
    // class Lider extends Jefe{
    //     //..
    //     final public function getName(){
    //         return "Soy $this->name";
    //     }
    // }
    $admini=new Admini('Cielo');
    echo $admini->getName();
    $admini=new User('Cielo');
    echo $admini->getName();