<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class="header">
    <h1 >A Simple PHP Calculator</h1>
    </p>

<div class="container">
<form action="index.php" method="POST">
    <p>First Number <input type="number" name="num1"></p>
    <p>Operator <input type="text" name="operator"></p>
    <p>Second Number <input type="number" name="num2"></p>
    <input type="submit" value="Submit">
</form>
</div>
<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operator = $_POST["operator"];

switch($operator){
    case "+":
        echo "The answer is: ", $num1 + $num2;
    break;
    case "-":
        echo "The answer is: ", $num1 - $num2;
    break;
    case "*":
        echo "The answer is: ", $num1 * $num2;
    break;
    case "%":
        echo "The answer is: ", $num1 % $num2;
    break;
    default:
        echo "Error";
}
    
?>
    
</body>
</html>