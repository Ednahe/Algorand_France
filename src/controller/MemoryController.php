<?php
require_once "./../lib/controller/Controller.php";

class MemoryController extends Controller {

    public function __construct() {

        parent::__construct("./../view/memory.php");
    }
}