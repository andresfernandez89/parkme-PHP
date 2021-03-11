<?php

require_once('vendor.php');

class ModelVendor {
    const VENDORS_FILE = 'data/vendors.json';

    public function getPathVendors(){
        $temp = file_get_contents(self::VENDORS_FILE);
        return $vendors_temp = json_decode($temp, true);
    }

    public function arrayObjects($vendors_temp) {
        $vendors = array();
        foreach ($vendors_temp as $vend) {
            $vendor = new Vendor($vend['id'], $vend['picture'], $vend['name'], $vend['lastname'], $vend['dni'], $vend['address'], $vend['cel'], $vend['email'], $vend['city']);
            $vendor->comision = $vend['comision'];
            $vendor->parkingName= $vend['parkingName'];
            array_push($vendors,$vendor);
        }
        return $vendors;
    }

    public function getVendors() {
        $vendors_temp = $this->getPathVendors();
        return $this->arrayObjects($vendors_temp);
    }

    public function addVendors($vendor) {
        $vendors_temp = $this->getPathVendors();
        array_push($vendors_temp, $vendor);
        file_put_contents(self::VENDORS_FILE, json_encode($vendors_temp, JSON_PRETTY_PRINT));
    }

    public function deleteVendors($vendor_id) {
        $vendors_temp = $this->getPathVendors();
        if(in_array($vendor_id,array_keys($vendors_temp))){
            unset($vendors_temp[$vendor_id]);
            file_put_contents(self::VENDORS_FILE, json_encode($vendors_temp, JSON_PRETTY_PRINT));
        }
    }

    public function orderVendor($field_name) {
        $vendors_temp = $this->getPathVendors();
        $fields = array_column($vendors_temp, $field_name);
        asort($fields);
        $orderKeys = array_keys($fields);
        $newVendors = [];
        foreach ($orderKeys as $value) {
            array_push($newVendors, $vendors_temp[$value]);
        }
        $vendors = array_replace($vendors_temp, $newVendors);
        return $this->arrayObjects($vendors);
    }

    public function searchVendors($keywords) {
        $vendors_temp = $this->getPathVendors();
        $name = array_column($vendors_temp, 'name');
        $lastname = array_column($vendors_temp, 'lastname');
        $city = array_column($vendors_temp, 'city');
        $search_id = [];
        $keywords = explode(" ", strtolower($keywords));
        foreach ($keywords as $key => $keyword) {
            $search_name = array_keys($name, $keyword);
            $search_lastname = array_keys($lastname,$keyword);
            $search_city = array_keys($city,$keyword);
            if (count($search_name) != 0) {
                $search_id = array_merge($search_id, $search_name);
            }
            if (count($search_lastname) != 0) {
                $search_id = array_merge($search_id, $search_lastname);
            }
            if (count($search_city) != 0) {
                $search_id = array_merge($search_id, $search_city);
            }
        };
        //$_SESSION['search_id'] = $search_id;
    }
}
