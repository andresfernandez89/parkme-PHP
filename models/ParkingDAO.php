<?php

require_once("Parking.php");

class ParkingDAO {

    const PARKINGS_FILE = "../Data/Parkings.json";

    public function getPath(){
        $temp = file_get_contents(self::PARKINGS_FILE);
        return $parkings = json_decode($temp, true);
    }

    public function getAll() {
        $parkings_temp = $this->getPath();
        $parkings = array();
        foreach ($parkings_temp as $park) {
            $parking = new Parking();
            $parking->id = $park['id'];
            $parking->picture = $park['picture'];
            $parking->owner = $park['owner'];
            $parking->address = $park['address'];
            $parking->address = $park['parkingName'];
            array_push($parkings,$parking);
        }
        return $parkings;
    }

}