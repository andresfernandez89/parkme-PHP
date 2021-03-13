<?php
//implements ADEuser

require_once('MainController.php');
require_once('./Models/VendorDAO.php');

class VendorsController extends MainController {
    private $model;
    public function __construct() {
        $this->model = new VendorDAO();
    }
    public function list() {
        $vendors = $this->model->getAll();
        $this-> getView('Vendors','list', $vendors);
    }
    public function validate($id, $vendors) {
        $temp = array_column($vendors, 'id'); // ver pq no toma el array column
        if(!in_array($id, $temp)) {
            return true;
        }else{
            return false;
        }
    }

        
    public function add() {
        $vendors = $this->model->getAll();
        $id = isset($_POST['id']) ? ($_POST['id']) : "";
        if($this->validate($id, $vendors)) {

            $picture = "https://www.fillmurray.com/128/128"; // despues aplicar upload
            $name = isset($_POST['name']) ? ($_POST['name']) : "";
            $lastname = isset($_POST['lastname']) ? ($_POST['lastname']) : "";
            $dni = isset($_POST['dni']) ? ($_POST['dni']) : "";
            $address = isset($_POST['address']) ? ($_POST['address']) : "";
            $cel = isset($_POST['cel']) ? ($_POST['cel']) : "";
            $email = isset($_POST['email']) ? ($_POST['email']) : "";
            $city = isset($_POST['city']) ? ($_POST['city']) : "";
            $comision = 10;
            $parkingName = isset($_POST['parkingName']) ? ($_POST['parkingName']) : "";

            $vendor_new = [
                'id'=> $id,
                'picture'=> $picture,
                'name'=> $name,
                'lastname'=> $lastname,
                'dni'=> $dni,
                'address'=> $address,
                'cel'=> $cel,
                'email'=> $email,
                'city'=> $city,
                'comision'=> $comision,
                'parkingName'=> $parkingName
            ];
            $this->model->add($vendor_new);
            $this->list();
        }else{
            echo "<h1>ERROR, DUPLICADO</h1>";
        }
    }

    public function delete() {
        $vendor_id = isset($_GET['id'])?($_GET['id']):"";
        $this->model->delete($vendor_id);
        $this->list();
    }

    public function order() {
        $field_name = isset($_GET['order'])?($_GET['order']):"";
        $vendors = $this->model->order($field_name);
        $this->getView('Vendors','list', $vendors);
    }

    function search() {
        $keywords = isset($_GET['keywords'])?($_GET['keywords']):"";
        $vendors = $this->model->search($keywords);
        if(count($vendors) != 0) {
            $this->getView('Vendors','list', $vendors);
        }else {
            $this->getView('Vendors','not_search', $vendors);
        }
    }
}
