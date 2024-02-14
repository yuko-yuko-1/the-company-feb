<?php
    include "../classes/User.php";

    # Instantiate an object
    $user = new  User;

    # Calling the method
    $user->update($_POST, $_FILES);

?>