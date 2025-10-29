<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $name = trim($_POST['name']);
    $email = strtolower(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Name</h1>
        <input type="text" name="name">
        <h1>Email</h1>
        <input type="email" name="email">
        <h1>Message</h1>
        <textarea name="message" id=""></textarea> <br> <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>