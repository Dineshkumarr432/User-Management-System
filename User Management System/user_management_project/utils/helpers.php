<?php
namespace Utils;
function dataFormatter($data, $validator)
{

    echo "user: " . $data->userName . "<br>";
    echo "username: " . $validator->validateUsername($data->userName) . "<br>";
    echo "email: " . $validator->validateEmail($data->email) . "<br>";
    echo "password: " . $validator->validatePassword($data->password) . "<br>";
    echo "----------------------------------------";
}

?>