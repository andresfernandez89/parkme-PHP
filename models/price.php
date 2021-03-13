<?php

class Price {

    private $place; // para cuando tengamos cocheras de diferentes lugares
    private $selectedTime;
    private $time;
    public function __set($property, $value) {
        return $this->$property = $value;
    }
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    public function getPrice($time) {
        return $this->selectedTime * $this->$time;
        }
    }



/* $costo = new Price();
$costo->selectedTime = 2;
$time = 'HOUR';
echo $costo->getPrice($time); */