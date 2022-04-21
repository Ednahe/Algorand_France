<?php

require_once './../lib/controller/Controller.php';
require_once './../src/repository/UserRepository.php';

class ConnexionController extends Controller {

    public function __construct() {
        parent::__construct("./../view/connexion.php");
    }

    public function index() {

        $responseType = "";
        if(!empty($_POST)) {
            
            $responseType = "error";
            
            $userRepository = new UserRepository("user");
            $user = $userRepository->findOneByUsername($_POST["username"]);
            
            
            if (!empty($user) && password_verify($_POST["password"], $user->getPassword())) {
                $responseType = "Connexion effectué avec succès";
                $_SESSION['user_is_connect'] = true;
            }
        
        }
        return $this->renderView(["responseType" => $responseType]);
    }
}