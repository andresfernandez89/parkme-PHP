<?php

class Price {
    private const HALFHOUR = 50;
    private const HOUR = 100;
    private const DAY = 500;
    private $time;


    public function getTime() {

    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function getTime() {
        return $this->time;
    }

    public function __set($property, $value) {
        return $this -> $property = $value;
    }

    public function __get($property) {
        if ( property_exists($this, $property)) {
            return $this -> $property;
        }
    }



}