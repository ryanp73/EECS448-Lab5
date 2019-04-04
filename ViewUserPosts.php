<?php

require("DB.php");

function fetch_user_post($db, $username)
{
  	$result = $db->query("SELECT * FROM posts WHERE author_id = {$username}"); 

    return $result;
}

$username = $_POST["username"];

$result = fetch_user_post($db, $username);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View User Posts</title>
	<link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="container">
		<div id="home"><a href="AdminHome.html">Home</a></div>
        <table>
            <?php
				if ($result)
				{
					while ($row = $result->fetch_assoc()) {
						echo '<tr>';
							echo '<td>' . $row["content"] . '</td>';
						echo '</tr>';
					}             
				}
				else
				{
					echo "<tr><td><h1>No Posts Found</h1></td></tr>";
				}
            ?>
        </table>        
    </div>
</body>
</html>
