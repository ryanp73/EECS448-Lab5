<?php 

include "DB.php";

function delete_post($db, $post_id) {
    return $db->query("DELETE FROM posts WHERE post_id = " . $post_id);
}

$post_ids = $_POST["posts"];
var_dump($post_ids);

$deleted_posts = [];

foreach ($post_ids as $post_id) {
    if (delete_post($db, $post_id) {
        $deleted_posts[] = $post_id;
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Post Completed</title>
	<link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="container">
		<div id="home"><a href="AdminHome.html">Home</a></div>
        <?php
            foreach ($deleted_posts as $deleted) {
                echo '<p>Post ' . $deleted . ' successfully deleted.';
            }             
        ?>
    </div>
</body>
</html>
