<?php

class Price {
    const HALFHOUR = 50;
    const HOUR = 100;
    const DAY = 500;
    const MONTH = 500;
    private $SelectedTime;
    static $time;

    public function __set($property, $value) {
        return $this -> $property = $value;
    }

    public function __get($property) {
        if ( property_exists($this, $property)) {
            return $this -> $property;
        }
    }

    public function getPrice($time) {
        return $this->selectedTime * self::$time;
        }
    }
