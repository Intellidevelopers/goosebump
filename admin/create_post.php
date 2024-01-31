<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPost = [
        'title' => $_POST['post_title'],
        'content' => $_POST['post_content'],
    ];

    $posts = json_decode(file_get_contents('posts.json'), true);
    $posts[] = $newPost;

    file_put_contents('posts.json', json_encode($posts));

    header('Location: admin.php');
    exit;
}
?>
