<?php

require_once('classVendor.php');

class ModelVendor {
    const VENDORS_FILE = 'data/vendors.json';

    public function getPathVendors(){
        $temp = file_get_contents(self::VENDORS_FILE);
        return $vendors_temp = json_decode($temp, true);
    }
    public function getVendors() {
        $vendors_temp = $this->getPathVendors();
        $vendors = array();
        foreach ($vendors_temp as $vend) {
            $vendor = new Vendor($vend['id'], $vend['picture'], $vend['name'], $vend['lastname'], $vend['dni'], $vend['address'], $vend['cel'], $vend['email'], $vend['city']);
            $vendor -> comision = $vend['comision'];
            $vendor -> parkingName= $vend['parkingName'];
            array_push($vendors,$vendor);
        }
        return $vendors;
    }

    public function addVendors($vendor) {
        $vendors_temp = $this->getPathVendors();
        array_push($vendors_temp, $vendor);
        file_put_contents(self::VENDORS_FILE, json_encode($vendors_temp));
    }

    public function deleteVendors($vendor) {
        $this->getPathVendors();
        if(in_array($vendors_temp,$vendor)){
            unset($vendor);
            file_put_contents(self::VENDORS_FILE, json_encode($vendors_temp));
        }
    }

}
