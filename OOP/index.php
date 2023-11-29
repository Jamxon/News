<?php
include 'Validator.php';

class User{

    public $name;
    public $email;

    public function save(){
        $validator = new Validator();
        $validator->validateEmail($this->email);
        echo "Saving the user in the database";

        return true;
    }
}