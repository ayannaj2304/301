<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thanks for the Feedback!</title>
</head>
<body>

<?php
    // Get values from the form
    $name = $_POST["name"];
    $genre = $_POST["genre"];
    $comments = $_POST["comments"];

    // Show the submitted info
    echo "<h2>Hi $name, thanks for your review!</h2>";
    echo "<p>You watched a <strong>$genre</strong> movie.</p>";
    echo "<p>Your comments:</p>";
    echo "<blockquote>$comments</blockquote>";
?>

</body>
</html>
