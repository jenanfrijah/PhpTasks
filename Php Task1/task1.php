<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>
<body>


<?php

echo"
<table border='2' width=20% height=100px;  >
    <tr><th style = 'color:blue'>Salary of Mr. A is </th><th>1000$</th></tr>
    <tr><th style = 'color:blue' >Salary of Mr. B is </th><th>1200$</th></tr>
    <tr><th style = 'color:blue'>Salary of Mr. C is </th><th>1400$</th></tr>
</table>";

echo date("H:i:s",filemtime('task1.php')); 

$text = file("text.txt");
echo "<br>";
echo "The Number of line " .count($text); 





?>





</body>
</html>