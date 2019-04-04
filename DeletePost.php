<?php 

require("DB.php");

function delete_post($post_id) {
    $stmt = $db->prepare("DELETE FROM posts WHERE post_id = ?");
    $stmt->bind_param("i", $post_id);
    return $stmt->execute();
}

$post_ids = $_POST["posts"];

$deleted_posts = [];

foreach ($post_ids as $post_id) {
    if (delete_post($post_id) {
        $deleted_posts[] = $post_id;
    } 
}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Post Completed</title>
</head>
<body>
    <div class="container">
        <?php
            foreach ($deleted_posts as $deleted) {
                echo '<p>Post ' . $deleted . ' successfully deleted.;
            }             
        ?>
    </div>
</body>
</html>
