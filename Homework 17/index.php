<?php
    require_once "Modules/User.php";

    //DELETE USER
    $deleteUser = new User();
    $deleteUser->deleteUser("testtesttest@example.com");


    //UPDATE USER
    $updateUser = new User();
    $updateUser->updateUser("stefan111@example.com","testtt@example.com", "password123");
