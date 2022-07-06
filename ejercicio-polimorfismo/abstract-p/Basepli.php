<?php
    abstract class Basepli{
        protected $name;
        private function getClassName(){
            return get_called_class();
        }

        public function login(){
            return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
        }
    }
    class Adm extends Basepli{
        public function __construct($name){
            $this->name = $name;
        }
    }
    class Usu extends Basepli{
        public function __construct($name){
            $this->name = $name;
        }
    }
    class Guest extends Basepli{
        protected $name='Invitado';
    }

    $guest=new Guest();
    echo $guest->login();
    echo "<br>";
    
    $user=new Usu('Cielo');
    echo $user->login();  
    echo "<br>";

    $adm=new Adm('Maria');
    echo $adm->login();
    echo "<br>";
