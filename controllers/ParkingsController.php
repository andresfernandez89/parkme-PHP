<?php
require_once('MainController.php');
require_once('./Models/ParkingDAO.php');

class ParkingsController extends MainController{
    private $model;
    public function __construct() {
        $this->model = new ParkingDAO();
    }
    public function list() {
        $parkings = $this->model->getAll();
        $this-> getView('Parkings','list', $parkings);
    }
}