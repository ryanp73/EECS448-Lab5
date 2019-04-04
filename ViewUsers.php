<?php

require("DB.php");

$result = $db->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Users</title>
	<link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="container">
		<div id="home"><a href="AdminHome.html">Home</a></div>
        <table>
            <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                        echo'<td>' . $row["user_id"] . '</td>';
                    echo '</tr>';
                }             
            ?>
        </table>        
    </div>
</body>
</html>


