<?php
require_once('MainController.php');
require_once('./Models/VendorDAO.php');

class VendorsController extends MainController implements ADEuser, SecondaryF{
    private $model;
    public function __construct() {
        $this->model = new VendorDAO();
    }
    public function list() {
        $vendors = $this->model->getAll();
        $this-> getView('Vendors','list', $vendors);
    }
        
    public function add() {
        $id = isset($_POST['id']) ? ($_POST['id']) : "";
        $picture = $this->model->uploadImg();
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
        $this->model->add($id,$vendor_new);
        $this->list();
        
    }
    function edit() { //tengo q terminar la funcionalidad
        if(isset($_POST['id'])) {
            $vendor_id = $_POST['id'];
            $$vendors_temp = $this->model->getPath();
            $tempId = array_search($vendor_id, array_column($vendors_temp, 'id'));
                $vendors_temp[$tempId]['id'] = $_POST['id']; 
                $vendors_temp[$tempId]['picture'] = [uploadImg()]; 
                $vendors_temp[$tempId]['name'] = [isset($_POST['name']) ? ($_POST['name']) : ""];
                $vendors_temp[$tempId]['lastname'] = [isset($_POST['lastname']) ? ($_POST['lastname']) : ""];
                $vendors_temp[$tempId]['dni'] = [isset($_POST['dni']) ? ($_POST['dni']) : ""];
                $vendors_temp[$tempId]['address'] = [isset($_POST['address']) ? ($_POST['address']) : ""];
                $vendors_temp[$tempId]['cel'] = [isset($_POST['cel']) ? ($_POST['cel']) : ""];
                $vendors_temp[$tempId]['email'] = [isset($_POST['email']) ? ($_POST['email']) : ""];
                $vendors_temp[$tempId]['city'] = [isset($_POST['city']) ? ($_POST['city']) : ""];
                $vendors_temp[$tempId]['comision'] = 10;
                $vendors_temp[$tempId]['parkingName'] = $vendor[isset($_POST['parkingName']) ? ($_POST['parkingName']) : ""];
            $this->model->edit($vendors_temp[$tempId]);
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
