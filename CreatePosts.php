<?php

require("DB.php");

function insert_post($db, $username, $content)
{
    $stmt = $db->prepare("INSERT INTO posts (content, author_id) SELECT ?, user_id FROM users where user_id = ?"); 
    $stmt->bind_param("ss", $content, $username);
    $result = $stmt->execute();
	var_dump($stmt);

    return $result;
}

$username = $_POST["username"];
$content = $_POST["content"];

$success = insert_post($db, $username, $content) == true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($success ? "Post Created" : "Failure"); ?></title>
	<link rel="stylesheet" href="public/styles.css">
</head>
<body>
   <div class="container">
		<div id="home"><a href="AdminHome.html">Home</a></div>
       <h1>
       <?php
            if ($success) {
                echo "Post by {$username} created successfully!";
            } else {
                echo "Failed to create post.";
            }
        ?>
        </h1>
   </div> 
</body>
</html>
