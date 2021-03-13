<?php

require_once('Vendor.php');

class VendorDAO {
    const VENDORS_FILE = 'Data/Vendors.json';

    public function getPath(){
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

    public function getAll() {
        $vendors_temp = $this->getPath();
        return $this->arrayObjects($vendors_temp);
    }

    public function add($vendor) {
        $vendors_temp = $this->getPath();
        array_push($vendors_temp, $vendor);
        file_put_contents(self::VENDORS_FILE, json_encode($vendors_temp, JSON_PRETTY_PRINT));
    }

    public function delete($vendor_id) {
        $vendors_temp = $this->getPath();
        if(in_array($vendor_id,array_keys($vendors_temp))){
            unset($vendors_temp[$vendor_id]);
            file_put_contents(self::VENDORS_FILE, json_encode($vendors_temp, JSON_PRETTY_PRINT));
        }
    }

    public function order($field_name) {
        $vendors_temp = $this->getPath();
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

    public function search($keywords) {
        $vendors_temp = $this->getPath();
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
        }
        $search = [];
        foreach($search_id as $value) {
            $temp = $vendors_temp[$value];
            array_push($search,$temp);
        }
        return $this->arrayObjects($search);
    }
}