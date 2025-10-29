<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $lowercase_name = strtolower($name);
    $names = explode(" ", $lowercase_name);

    foreach ($names as &$name2) {
        $name2 = ucfirst($name2);
    }
    unset($part);

    $formatted_name = implode(" ", $names);
    echo "Formatted Name: " . $formatted_name;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title></title>
</head>
<body>
    <form method="post" action="">
        <h1>Enter Name</h1>
        <input type="text" name="name" >
        <input type="submit" value="submit" />
    </form>
</body>
</html>
