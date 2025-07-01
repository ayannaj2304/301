<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ayanna's Movie Budget</title>
</head>
<body>

<?php
    // This script calculates a movie night budget
    // It uses price, quantity, and tax rate variables
    // The result is formatted to 2 decimal places

    // Define numeric variables
    $ticketPrice = 12.50;
    $snackCost = 8.25;
    $taxRate = 0.06;

    // Calculate total cost with tax
    $subtotal = $ticketPrice + $snackCost;
    $tax = $subtotal * $taxRate;
    $totalCost = $subtotal + $tax;

    // Format total cost
    $formattedTotal = number_format($totalCost, 2);

    // Display the result
    echo "<p>For a movie night with tickets and snacks, your total cost including tax is: $$formattedTotal</p>";
?>

</body>
</html>
