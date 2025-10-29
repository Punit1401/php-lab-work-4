<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = trim($_POST['csv_data']);
    
    $students = explode("\n", $input);
    
    $results = [];
    
    foreach ($students as $student) {
        // Remove extra spaces or line breaks
        $student = trim($student);
        if (empty($student)) continue;
        
        // Explode each student's CSV string
        $data = explode(",", $student);
        
        // First element is the name
        $name = array_shift($data);
        
        // Convert scores to numbers and calculate average
        $scores = array_map('floatval', $data);
        $average = array_sum($scores) / count($scores);
        
        // Format average to 2 decimal places
        $averageFormatted = number_format($average, 2);
        
        // Create summary string using implode (optional but here for demo)
        $summary = implode(" ", [$name, "-", "Avg:", $averageFormatted]);
        
        $results[] = $summary;
    }
    
    // Display results - each student summary on new line
    echo "<h2>Batch Evaluation Results:</h2>";
    echo "<pre>" . implode("\n", $results) . "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Batch Evaluation</title>
</head>
<body>
    <h1>Enter Student Scores CSV (One per line)</h1>
    <form method="post" action="">
        <textarea name="csv_data" rows="6" cols="40" placeholder="Hardik,85,90,78&#10;Sarah,92,88,84" required></textarea><br><br>
        <input type="submit" value="Evaluate" />
    </form>
</body>
</html>
