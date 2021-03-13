<?php
abstract class MainController {

  protected function getView($controller, $template = NULL, $object) {
    require_once("Views/$controller/$template.php");
  }
}
