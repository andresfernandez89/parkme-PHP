<?php

class Parking {

    protected $id;
    protected $picture;
    protected $owner;
    protected $city;
    protected $parkingName;

    public function __set($property, $value) {
        return $this->$property = $value;
    }
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
}