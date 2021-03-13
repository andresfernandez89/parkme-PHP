<?php

require_once('Price.php');

class PriceDAO {

    const PRICES_FILE = '../Data/Prices.json';

    public function getPath(){
        $temp = file_get_contents(self::PRICES_FILE);
        return $prices = json_decode($temp, true);
    }

    public function getAll() {
        $prices_temp = $this->getPath();
        $prices = array();
        foreach ($prices_temp as $time) {
            $price = new Price();
            $price->place = $place;
            $price->time = $time;
            $price->selectedTime = $selectedTime;
            $price->halfhour = $time['HALFHOUR']; // estas variables se van a setear cuando llamemos a la funcion
            $price->hour = $time['HOUR']; // estas variables se van a setear cuando llamemos a la funcion
            $price->day = $time['DAY']; // estas variables se van a setear cuando llamemos a la funcion
            $price->month= $time['MONTH']; // estas variables se van a setear cuando llamemos a la funcion
            array_push($prices,$price);
        }
        return $prices;
    }
}