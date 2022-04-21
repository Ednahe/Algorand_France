<?php

require_once "./../lib/controller/Controller.php";

class HomeController extends Controller {

    public function __construct() {
        parent::__construct("./../view/Home.php");
    }

    public function dateNow() {

        $this->renderView(["dateNow" => new DateTime("now")]);
    }
}