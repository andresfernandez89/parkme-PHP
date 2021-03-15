<?php

require_once('Vendor.php');

class VendorDAO {
    const VENDORS_FILE = 'Data/Vendors.json';

    public function getPath(){
        $temp = file_get_contents(self::VENDORS_FILE);
        return $vendors_temp = json_decode($temp, true);
    }

    public function getObj($vendors_temp) {
        //$vendors_temp = $this->getPath();
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
        asort($vendors_temp);
        return $this->getObj($vendors_temp);
    }

    public function validate($param1, $vendors) {
        $temp = array_column($vendors, 'id'); // ver parametro cuando es objeto
        if(!in_array($param1, $temp)) {
            return true;
        }else{
            return false;
        }
    }

    public function add($id,$vendor) {
        $vendors_temp = $this->getPath();
        if($this->validate($id, $vendors_temp)){
            array_push($vendors_temp, $vendor);
            file_put_contents(self::VENDORS_FILE, json_encode($vendors_temp, JSON_PRETTY_PRINT));
        }else {
            echo "<h1>ID DUPLICADO</h1>";
        }
    }

    function edit($vendor_id) {
        //tengo q terminarlo
    }

    public function delete($vendor_id) {
        $vendors_temp = $this->getPath();
        $tempId = array_search($vendor_id, array_column($vendors_temp, 'id'));
        if(in_array($tempId,array_keys($vendors_temp))){
            unlink($vendors_temp[$tempId]['picture']);
            unset($vendors_temp[$tempId]);
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
        return $this->getObj($vendors);
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
        return $this->getObj($search);
    }

    public function uploadImg() {
        if ($_FILES["picture"]["error"] == UPLOAD_ERR_OK) {
            $dir = 'Assets/Uploads/Pictures/';
            $name_tmp = $_FILES["picture"]["tmp_name"];
            $name_doc = $dir . basename($_FILES["picture"]["name"]);
            $name_new = isset($_POST['id']) ? $dir . strtoupper($_POST['id']) : "";
            if (isset($name_new)) {
                $type_doc = strtolower(pathinfo($name_doc, PATHINFO_EXTENSION));
                $name_new .= '.' . $type_doc;
                if($type_doc === "jpg" || $type_doc === "png") {
                    if(move_uploaded_file($name_tmp, $name_doc)) {
                        rename($name_doc, $name_new);
                        return $name_new;
                    }else {
                        return $msj='Hubo un error en la subida del archivo';
                    }
                } else {
                    return $msj='Solo se admiten archivos jpg o png';
                }
            } else {
                return $msj = "No se encontraron archivos.";
            }
        }
    }
}