<?php

session_start();

$timeout = 300; // 5 minutes

// Check whether user is logged in
if (!isset($_SESSION["user_id"])) {

    header("Location: ../pages/login.html");
    exit();
}


// Check session timeout
if (isset($_SESSION["last_activity"])) {

    if (time() - $_SESSION["last_activity"] > $timeout) {

        session_unset();
        session_destroy();

        header("Location: ../pages/login.html?status=timeout");
        exit();
    }
}


// Update activity time
$_SESSION["last_activity"] = time();

?>