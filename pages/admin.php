<?php

require_once "../php/auth.php";

if ($_SESSION["role"] !== "admin") {

    header("Location: dashboard.php");
    exit();

}

?>

<!DOCTYPE html>

<html>

<head>

    <title>Admin Dashboard</title>

</head>

<body>

    <h1>Admin Dashboard</h1>

    <h2>
        Welcome <?php echo htmlspecialchars($_SESSION["name"]); ?>
    </h2>

    <p>
        Only admin users can access this page.
    </p>

    <a href="../php/logout.php">
        Logout
    </a>

</body>

</html>