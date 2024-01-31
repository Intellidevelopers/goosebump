<?php
$posts = json_decode(file_get_contents('posts.json'), true);

foreach ($posts as $post) {
    echo "<article>";
    echo "<h2>{$post['title']}</h2>";
    echo "<p>{$post['content']}</p>";
    echo "</article>";
}
?>
