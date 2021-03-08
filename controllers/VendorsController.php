<?php
//implements ADEuser

require_once('mainController.php');
require_once('./models/classModelVendor.php');

class vendorsController extends MainController {
    private $model;
    public function __construct() {
        $this-> model = new ModelVendor();
    }
    public function list() {
        $vendors = $this-> model-> getVendors(); // no funciona el objeto cuando quiero incorporarlo en vista
        $this-> getView('vendors','list', $vendors);
    }

    public function add() {
        $vendors = $this-> model-> getVendors(); // ver si se es necesario
        $vendor = 
            [
            $vend = new Vendor(
                isset($_POST['id']) ? ($_POST['id']) : "",
                "https://picsum.photos/id/237/250/150", // despues aplicar upload
                isset($_POST['name']) ? ($_POST['name']) : "",
                isset($_POST['lastname']) ? ($_POST['lastname']) : "",
                isset($_POST['dni']) ? ($_POST['dni']) : "",
                isset($_POST['address']) ? ($_POST['address']) : "",
                isset($_POST['cel']) ? ($_POST['cel']) : "",
                isset($_POST['email']) ? ($_POST['email']) : "",
                isset($_POST['city']) ? ($_POST['city']) : ""),
                $vend -> comision = isset($_POST['comision']) ? ($_POST['comision']) : "",
                $vend -> parkingName = isset($_POST['parkingName']) ? ($_POST['parkingName']) : ""
            ];
        $this-> model-> addVendors($vendor);
    }
}
