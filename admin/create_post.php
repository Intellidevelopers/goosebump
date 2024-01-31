<?php
// admin/add_post.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $name = $_POST['name'];

    // Validate and sanitize inputs if necessary

    $post = [
        'title' => $title,
        'content' => $content,
        'name' => $name,
    ];

    $posts = json_decode(file_get_contents('../storage/posts.json'), true);
    $posts[] = $post;
    file_put_contents('../storage/posts.json', json_encode($posts));

    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
    <style>
        /* Your styles go here */
        body{
            font-family: 'poppins', sans-serif;
        }
        a{
            background-color: slateblue;
            padding: 10px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        input{
            padding: 10px;
            width: 90%;
        }
        textarea{
            width: 93%;
        }
        input[type="file"]{
            background-color: black;
            color: white;
        }
        input[type="submit"]{
            width: 93%;
            background-color: green;
            border: none;
            border-radius: 5px;
            padding: 10px;
        }
        
    </style>
</head>
<body>
    <h1>Add New Post</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" placeholder="Enter your title here" required><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content" placeholder="Your content goes here" required></textarea><br>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Add Post">
    </form>
    <br>
    <a href="index.php">Back to Admin Panel</a>
</body>
</html>