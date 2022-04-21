<?php

require_once "./../lib/controller/Controller.php";

class ErrorController extends Controller {

    public function __construct() {

        parent::__construct("../view/error/Error.php");
    }
}