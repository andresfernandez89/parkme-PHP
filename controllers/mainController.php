<?php
abstract class MainController {

  protected function getData($table) {
    $temp = file_get_contents("data/$table.json");
    return json_decode($temp, true);
  }

  protected function setData($table, $array) {
    file_put_contents("data/$table.json", json_encode($array));
  }

  protected function getView($controller, $template = NULL) {
    require_once("views/$controller/$template.php");
  }
}

?>