<?php
$posts = json_decode(file_get_contents('posts.json'), true);

// Display and manage posts
foreach ($posts as $key => $post) {
    echo "<div class='post'>";
    echo "<h2>{$post['title']}</h2>";
    echo "<p>{$post['content']}</p>";
    echo "<a href='delete_post.php?id={$key}'>Delete</a>";
    echo "<a href='edit_post.php?id={$key}'>Edit</a>";
    echo "</div>";
}
?>
