<?php

require("DB.php");

function fetch_user_post($username)
{
    $stmt = $db->prepare("SELECT * FROM posts WHERE user_id = ?"); 
    $stmt->bind_param("s", $username);
    $result = $stmt->execute();

    return $result;
}

$username = $_POST["username"];

$result = fetch_user_post($username);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div class="container">
        <table>
            <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                        echo '<td>' . $row["user_id"] . '</td>';
                    echo '</tr>';
                }             
            ?>
        </table>        
    </div>
</body>
</html>
