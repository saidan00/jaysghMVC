<?php
  class Pages extends Controller {
    public function __construct() {

    }

    public function index() {
      $data = array(
        "title" => "Welcome to Jay's Playzone"
      );
      $this->view("pages/index", $data);
    }

    public function about() {
      $data = array(
        "title" => "ABOUT"
      );
      $this->view("pages/about");
    }
  }
?>
