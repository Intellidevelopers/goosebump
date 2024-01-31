<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $postId = $_GET['id'];

    $posts = json_decode(file_get_contents('posts.json'), true);

    if (isset($posts[$postId])) {
        unset($posts[$postId]);

        file_put_contents('posts.json', json_encode(array_values($posts)));

        header('Location: admin.php');
        exit;
    }
}
?>
