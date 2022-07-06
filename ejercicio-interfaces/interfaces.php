<?php

use Admin as GlobalAdmin;
//contrato de implementacion creando la logica necesaria de las clases
interface Person{
    public function getName();
}
class Admin implements Person{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
$ad=new Admin('Administrador');
echo $ad->getName();