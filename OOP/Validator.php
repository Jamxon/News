<?php

class Validator
{
    private $regex = '/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    public function validateEmail($email)
    {
        if(!preg_match($this->regex, $email)){
            throw new Exception("Invalid email address!");
        }
    }
}