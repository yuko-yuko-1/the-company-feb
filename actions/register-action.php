<?php
    include "../classes/User.php";

    # Instantiate an object
    $user = new User;

    # Call the register method
    # Note: The $_POST -> holds the data coming from the form (register.php)
    $user->store($_POST);
?>