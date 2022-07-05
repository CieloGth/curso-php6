<?php
    class Persona{
        public function greet(){
            return "Hola $this->name";
        }
    }
    class Usuario{
        public $type;
    }
    class Admin extends Persona{
        public $name="Administrador";
    }
    
    $user= new Usuario;
    $user -> type = new Admin;
    echo $user->type->greet();