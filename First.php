<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ayanna's First PHP Page</title>
</head>
<body>

<?php
    // This PHP script is for Assignment 2
    // It prints a short self-introduction using HTML and PHP
    // It demonstrates the use of variables, echo statements, and string concatenation

    // Define two PHP string variables
    $name = "Ayanna Johnson";
    $favoritePlace = "my bed";

    // Print two paragraphs using echo
    echo "<p>Hi, my name is $name. I'm currently learning PHP and building my very first dynamic web page!</p>";
    echo "<p>One of my favorite things to do is watch movies. It's relaxing, entertaining, and a great way to spend time — especially when I'm in $favoritePlace.</p>";

    // Use string concatenation to combine the variables in a sentence
    echo "<p>My name is " . $name . " and my favorite place is " . $favoritePlace . ".</p>";
?>

</body>
</html>
