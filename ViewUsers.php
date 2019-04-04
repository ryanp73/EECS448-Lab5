<?php

require("DB.php");

$stmt = $db->prepare("SELECT * FROM users");
$result = $stmt->execute();

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
                        echo'<td>' . $row["user_id"] . '</td>';
                    echo '</tr>';
                }             
            ?>
        </table>        
    </div>
</body>
</html>


