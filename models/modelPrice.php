<?php

require_once('price.php');

class ModalPrice {

    const PRICES_FILE = '../data/prices.json';

    public function getPathPrices(){
        $temp = file_get_contents(self::PRICES_FILE);
        return $prices = json_decode($temp, true);
    }


    public function getPrices() {
        $prices_temp = $this->getPathVendors();
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