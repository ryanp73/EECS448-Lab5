<?php

require "DB.php";

function insert_user($db, $username)
{
    $stmt = $db->prepare("INSERT INTO users (user_id) VALUES (?)"); 
    $stmt->bind_param("s", $username);
    $result = $stmt->execute();

    return $result;
}

$username = $_POST["username"];

$success = insert_user($db, $username) == true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($success ? "User Created" : "Failure"); ?></title>
	<link rel="stylesheet" href="public/styles.css">
</head>
<body>
   <div class="container">
		<div id="home"><a href="AdminHome.html">Home</a></div>
       <h1>
       <?php
            if ($success) {
                echo "User {$username} created successfully!";
            } else {
                echo "Failed to create user.";
            }
        ?>
        </h1>
   </div> 
</body>
</html>
