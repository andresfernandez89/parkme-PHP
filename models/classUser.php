<?php

require_once('interADEuser.php');
abstract class User implements ADEuser {
    protected $id;
    protected $name;
    protected $lastname;
    protected $addres;
    protected $cel;
    protected $mail;
    protected $picture;
    protected $dni;
    protected $city;

    public function __construct($id, $name, $lastname, $addres, $cel, $mail,$picture, $dni, $city) {
        $this -> id = $id; 
        $this -> name = $name; 
        $this -> lastname = $lastname; 
        $this -> addres = $addres; 
        $this -> cel = $cel; 
        $this -> mail = $mail; 
        $this -> picture = $picture; 
        $this -> dni = $dni; 
        $this -> city = $city; 
    }
    abstract function add();
    abstract function delete();
    abstract function edit();

    //abstract function search();
    
}