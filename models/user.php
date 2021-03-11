<?php

abstract class User{
    protected $id;
    protected $picture;
    protected $name;
    protected $lastname;
    protected $dni;
    protected $address;
    protected $cel;
    protected $email;
    protected $city;

    public function __construct($id, $picture, $name, $lastname, $dni, $address, $cel, $email, $city) {
        $this->id = $id; 
        $this->picture = trim($picture,' '); 
        $this->name = ucwords($name); 
        $this->lastname = ucwords($lastname); 
        $this->dni = str_replace( ' ' , '' ,str_replace( '.' , '' , $dni));
        $this->address = ucwords($address); 
        $this->cel =  str_replace( ' ' , '' ,str_replace( '.' , '' , $cel));
        $this->email = strtolower($email); 
        $this->city = ucfirst($city); 
    }
}