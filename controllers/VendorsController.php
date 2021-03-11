<?php
//implements ADEuser

require_once('mainController.php');
require_once('./models/modelVendor.php');

class vendorsController extends MainController {
    private $model;
    public function __construct() {
        $this->model = new ModelVendor();
    }
    public function list() {
        $vendors = $this->model->getVendors();
        $this-> getView('vendors','list', $vendors);
    }

    public function add() {
        $id = isset($_POST['id']) ? ($_POST['id']) : "";
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
        $this->model->addVendors($vendor_new);
        $this->list();
    }

    public function delete() {
        $vendor_id = isset($_GET['id'])?($_GET['id']):"";
        $this->model->deleteVendors($vendor_id);
        $this->list();
    }

    public function order() {
        $field_name = isset($_GET['order'])?($_GET['order']):"";
        $vendors = $this->model->orderVendor($field_name);
        $this-> getView('vendors','list', $vendors);
    }
}
