<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discriminant Value</title>
</head>
<body>
    <h1>Discriminant of a quadratic equation</h1>
    <form  method="post">
        <label for="first_number">A</label>
        <input type="text" placeholder="Value of a here" name="first_number">
        <br><br>
        <label for="second_number">B</label>
        <input type="text" placeholder="Value of b here" name="second_number">
        <br><br>
        <label for="third_number">C</label>
        <input type="text" placeholder="Value of c here" name="third_number">
        <br><br>
        <input type="submit" name="submit" Value="Submit">
    </form>
</body>
</html>

<?php
   if (empty($_POST["first_number"]) || empty($_POST["second_number"]) || empty($_POST["third_number"])) {
        echo"<br>Input a number";
    } else {
        if (is_numeric($_POST["first_number"]) && is_numeric($_POST["second_number"]) && is_numeric($_POST["third_number"])) {
            $a = ($_POST["first_number"]);
            $b = ($_POST["second_number"]);
            $c = ($_POST["third_number"]);
            $answer = ($b ** 2) - (4 * $a * $c);
            echo"<br> Discriminant Value: {$answer}";
    } else {
        echo "<br>Invalid Input";
    }}
?>