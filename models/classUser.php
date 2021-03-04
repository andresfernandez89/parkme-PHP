<?php

require_once('interADEuser.php');
abstract class User implements ADEuser {
    protected $id;
    protected $picture;
    protected $name;
    protected $lastname;
    protected $dni;
    protected $addres;
    protected $cel;
    protected $mail;
    protected $city;

    public function __construct($id, $name, $lastname, $addres, $cel, $mail,$picture, $dni, $city) {
        $this -> id = $id; 
        $this -> picture = $picture; 
        $this -> name = $name; 
        $this -> lastname = $lastname; 
        $this -> dni = $dni; 
        $this -> addres = $addres; 
        $this -> cel = $cel; 
        $this -> mail = $mail; 
        $this -> city = $city; 
    }
    abstract function add();
    abstract function delete();
    abstract function edit();

    //abstract function search();
    
}