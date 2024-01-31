<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $postId = $_GET['id'];

    $posts = json_decode(file_get_contents('posts.json'), true);

    if (isset($posts[$postId])) {
        $postToEdit = $posts[$postId];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_title']) && isset($_POST['post_content'])) {
    $postId = $_GET['id'];

    $posts = json_decode(file_get_contents('posts.json'), true);

    if (isset($posts[$postId])) {
        $posts[$postId]['title'] = $_POST['post_title'];
        $posts[$postId]['content'] = $_POST['post_content'];

        file_put_contents('posts.json', json_encode($posts));

        header('Location: admin.php');
        exit;
    }
}
?>
