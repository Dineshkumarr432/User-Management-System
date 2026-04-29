<?php
namespace Utils;
class User
{
    public $userName;
    public $email;
    public $password;

    public function __construct($userName, $email, $password)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
    }

    public function getProfile()
    {
        return "Username: " . $this->userName . ",<br> Email: " . $this->email;
    }


}
?>