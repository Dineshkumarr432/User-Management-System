<?php

namespace Utils;

class Validator
{

    public function validateUsername($username)
    {
        if (strlen($username) < 5) {
            return "username too short";
        }
        return "valid username";

    }

    public function validatePassword($password)
    {
        if (strlen($password) <= 8) {
            return "weak password";
        }
        return "strong password";

    }

    public function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return "invalid email";
        }
        return "valid email";

    }
}

?>