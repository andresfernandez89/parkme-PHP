<?php

abstract class User{
    protected $id;
    protected $picture;
    protected $name;
    protected $lastname;
    protected $dni;
    protected $addres;
    protected $cel;
    protected $mail;
    protected $city;

    public function __construct($id, $name, $lastname, $addres, $cel, $mail, $picture, $dni, $city) {
        $this -> id = $id; 
        $this -> picture = trim($picture,' '); 
        $this -> name = ucwords($name); 
        $this -> lastname = ucwords($lastname); 
        $this -> dni = str_replace( ' ' , '' ,str_replace( '.' , '' , $dni));
        $this -> addres = ucwords($addres); 
        $this -> cel =  str_replace( ' ' , '' ,str_replace( '.' , '' , $cel));
        $this -> mail = strtolower($mail); 
        $this -> city = ucfirst($city); 
    }
}