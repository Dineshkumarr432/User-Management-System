<?php
// require_once for including files that are crucial and ensures no duplicate imports
require_once 'data/users.php';
require_once 'utils/User.php';
require_once 'utils/Validator.php';

// include_once for including files that are not crucial
include_once 'utils/helpers.php';
// use internally maps namespaces to avoid conflict and give aliases
use utils\User;
use utils\Validator as UserValidator;
use function utils\dataFormatter;
$users = getUsers();

foreach ($users as $user) {
    $newUser = new User(
        $user['username'],
        $user['email'],
        $user['password']
    );

    echo "<br>";

    $validator = new UserValidator();
    // echo $newUser->getProfile() . "<br>";
    dataFormatter($newUser, $validator);

}

?>