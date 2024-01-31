<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contactDetails = [
        'email' => $_POST['contact_email'],
        'address' => $_POST['contact_address'],
        'about_us' => $_POST['about_us_content'],
    ];

    file_put_contents('contact_details.json', json_encode($contactDetails));

    header('Location: admin.php');
    exit;
}
?>
