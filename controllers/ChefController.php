<?php

require_once('models/ChefModel.php');

class ChefController {

    public function register($request) {
        // print_r($request);
        $chefModel = new ChefModel;
        $name = $request['user_login'];
        $email = $request['user_email'];
        $password = $request['user_password'];
        $cuserPassword = $request['cuser_password'];
        $chefModel->register($name, $email, $password, $cuserPassword);
    }
}