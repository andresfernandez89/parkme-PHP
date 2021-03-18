
<?php
require_once('MainController.php');
require_once('./Models/VendorDAO.php');

class SesionController extends MainController {

    public function login() {
        $vendor = new VendorDAO();
        $vendors = $vendor->getAll();
        $this->getView('Sesion', 'login', $object=NULL);
    }

    public function checkLogin() {
        $inputEmail = isset($_POST['inputEmail'])? ($_POST['inputEmail']) : "";
        $inputPassword = isset($_POST['inputPassword'])? ($_POST['inputPassword']) : "";
        if($inputEmail == "andres_f89@hotmail.com" && $inputPassword == 1234) {
            $_SESSION["user"] = $inputEmail;
            $_SESSION["password"] = $inputPassword;
            $vendor = new VendorDAO();
            $vendors = $vendor->getAll();
            $this->getView('Vendors','list', $vendors);
        }else {
            echo "<h1>USER OR PASSWORD INVALID</h1>";
            $this->login();
        }
    }
}