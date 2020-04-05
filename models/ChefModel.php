<?php

require_once('DatabaseModel.php');

class ChefModel {
    
    public function register($name, $email, $password, $confirmPassword) {
        $databaseModel = new DatabaseModel;
        $db = $databaseModel->connect();
        if($db) {
            echo 'Success';
            echo '<br>';
            echo $name . ' ' . $email . ' ' . $password . ' ' . $confirmPassword;

            $sql = "INSERT INTO user(first_name, email, username, password) VALUES ('$name', '$email', '$email', '$password')";
            echo $sql;
            mysqli_query($db, $sql);
        }
    }

}