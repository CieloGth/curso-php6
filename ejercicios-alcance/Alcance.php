<?php

class User{
    // public --> 
    // protected --> desde afuerna no se hace ninguna modificacion
    // private --> elementos propios de la clase
    public const Paginate=25;

    public $usernamepu;
    protected $usernamepro;
    private $usernamepri;
    public function getUsername(){
        //...
    }
}