<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // List of banned words
        $bannedWords = ['spam', 'hack', 'phish', 'scam'];

        // Get comment input and clean it
        $comment = $_POST['comment'] ?? '';
        $cleanComment = trim($comment);
        $lowerComment = strtolower($cleanComment);

        // Check for banned words
        $flagged = false;
        foreach ($bannedWords as $word) {
            if (strpos($lowerComment, $word) !== false) {
                $flagged = true;
                break;
            }
        }

        // Safely display the comment
        $safeComment = htmlspecialchars($cleanComment);

        if ($flagged) {
            echo '<p class="flagged"> Comment flagged for containing banned words.</p>';
        }

        echo '<div class="safe-comment"><strong>User comment:</strong><br />' . nl2br($safeComment) . '</div>';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Comment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        textarea {
            width: 300px;
            height: 100px;
        }
        .flagged {
            color: red;
            font-weight: bold;
        }
        .safe-comment {
            margin-top: 20px;
            padding: 10px;
            background-color: #eef;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Comment Moderation System</h2>
    <form method="post" action="">
        <label for="comment">Enter your comment:</label><br />
        <textarea id="comment" name="comment" required></textarea><br /><br />
        <button type="submit">Submit Comment</button>
    </form>

   
</body>
</html>
