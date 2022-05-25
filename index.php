<?php
session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Hi There!!!
    </title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>This is the Index page</h1>
    <br>
    Hello, <?php echo $user_data['user_name'] ?>.
</body>
</html>



