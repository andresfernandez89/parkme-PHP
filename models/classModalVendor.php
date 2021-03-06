<?php

require_once(classVendor.php);

class ModalVendor {
    const VENDORS_FILE = 'data/vendors.json';

    public function getPathVendors(){
        $temp = file_get_contents(self::VENDORS_FILE);
        return $vendors_temp = json_decode($temp, true);
    }

    public function getVendors() {
        getPathVendors();
        $vendors = array();
        foreach ($vendors_temp as $vend) {
            $vendor = new Vendor();
            $vendor -> id = $vend[id];
            $vendor -> picture = $vend[picture];
            $vendor -> name = $vend[name];
            $vendor -> lastname = $vend[lasname];
            $vendor -> dni = $vend[dni];
            $vendor -> address = $vend[address];
            $vendor -> cel = $vend[cel];
            $vendor -> mail = $vend[mail];
            $vendor -> city = $vend[city];
            
            array_push($vendors,$vendor); // ver como meter entidad vendor en el arreglo vendors. pienso en un push
        }
        return $vendors;
    }

    public function addVendors($vendor) {
        getPathVendors();
        array_push($vendors_temp, $vendor);
        file_put_contents(self::VENDORS_FILE, json_encode($vendors_temp));
    }

    public function deleteVendors($vendor) {
        getPathVendors();
        if(in_array($vendors_temp,$vendor)){
            unset($vendor);
            file_put_contents(self::VENDORS_FILE, json_encode($vendors_temp));
        }
    }

}