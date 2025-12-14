<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <form action="task1.php" method="post">
    Name : <input  type="text" name="username" >
    <input type="submit" value="submit">
   </form>
 
    <?php
    //Q1
  

    echo "<br>";
    echo "<br>"; 
    echo "<h1>Q1</h1>";
    $mode = phpversion();
    //$config = phpinfo();//configration information
    echo "The php version is : " . $mode ;

    //Q2
echo "<h1>Q2</h1>";

echo "<br>";   
echo 'Tomorrow I \'ll learn PHP global variables.';
echo "<br>";
echo "This is a bad command : del c:\\*.*" . "\n";
echo "<br>";

//echo htmlspecialchar('Tomorrow I \'ll learn PHP global variables.');


//Q3  

 echo "<h1>Q3</h1>";
if(isset($_POST["username"])){
echo "The user name is ".$_POST["username"];
}
echo "<br>";

//Q4

 echo "<h1>Q4</h1>";

echo "<strong>User IP:</strong> " . $_SERVER['REMOTE_ADDR'] . "<br>";//clinet ip address
echo "<br>";

//Q5
 echo "<h1>Q5</h1>";

echo "<strong>Script Name:</strong> " . $_SERVER['SCRIPT_NAME'] . "<br>";//current file name

//Q6

 echo "<h1>Q6</h1>";

 $url = "https://www.w3schools.com/php/default.asp";

 $components = parse_url($url); //divide the url into parts
 
 echo "Scheme :".$components['scheme']."<br>";
 echo "Host :".$components['host']."<br>";
 echo "Path :".$components['path']."<br>";
 

//Q7
echo "<h1>Q7</h1>";

$string = "PHP Tutorial";

$words = explode(" ", $string);

$firstWord = $words[0];//PHP

$firstChar = $firstWord[0];//P

$rest = substr($firstWord, 1);//print the rest of the word 


echo "<span style='color:red;'>$firstChar</span>$rest ";

//print the other words

for ($i = 1; $i < count($words); $i++) {
    echo $words[$i] . " ";
}

//Q8
echo "<h1>Q8</h1>";

$value = "false";

if($value=='true')
header("Location: https://www.w3schools.com/");

    ?>
    
</body>
</html>