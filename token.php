<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    
    $uniqueString = $email . time();
    
    $token = md5($uniqueString);
    
    echo "Generated Token: " . $token . "<br><br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>  Token </title>
</head>
<body>
    <form method="post" action="">
        <h1>Email</h1>
        <input type="email" name="email" placeholder="Enter your email" required />
        <input type="submit" value="Generate Token" />
    </form>
</body>
</html>
