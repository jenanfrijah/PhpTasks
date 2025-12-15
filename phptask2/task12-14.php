<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task12-14</title>
</head>
<body>

<!--Q1--->
<h1>Q1</h1>

<form action="form.php" method="post">
 Email: <input type="email" name="email" style="display:block;" > <br>
 Password: <input type="password" name="password" style="display:block" > <br>
 <input type="submit">
</form>

<!--Q2--->
<h1>Q2</h1>

<form action="https://github.com/">
Search here:<input type="text" name="search" value="https://github.com/" style="display:block"> <br>
<input type="submit" value="GO"> <br>
</form>

<!--Q3--->
<h1>Q3</h1>

<?php
$operator = '*';
$num1=4;
$num2=3;
switch ($operator){
    case '+':
      echo "$num1 + $num2 =" . $num1+$num2;
         break;
    case '-':
      echo "$num1 - $num2 =" .  $num1-$num2;
         break;
    case '*':
      echo "$num1 * $num2 =" .$num1*$num2;
         break;
    case '/':
      echo "$num1 / $num2 =" . $num1/$num2;   
         break;   
    default :
    echo "pleases enter a valid operator";
}
?>

<!--Q4--->
<h1>Q4</h1>
<h2>To Do list</h2>
<form action="tasks.php" method="post" >
   New Task : <input type="text" style="display:block;" name="task"> <br>
   <input type="submit" value="Add"> <br>
   <input type="button" value="delete" name="del"> <br>
</form>


<!--Q5--->
<h1>Q5</h1>

<?php

echo "The project name is " . $_SERVER['PHP_SELF'] . "<br>";
echo "The Script name is " . $_SERVER['SCRIPT_NAME'] . "<br>";

?>


<!--Q6--->
<h1>Q6</h1>

<form action="page.php" method="post">
    <input type="submit">
</form>

<!--Q7--->
<h1>Q7</h1>

<form action="page2.php">
   Counter is: <input type="submit">
</form>


<!--Q8--->
<h1>Q8</h1>

<?php

$file_name = "vistors.txt"; 

if(!isset($_COOKIE["vistor"])){
       $count = file_get_contents($file_name);
       $count++;
       setcookie("visited", "yes", time() + (86400), "/");
}
else {
     $count = file_get_contents($file_name);
}

echo "count of visitors is ".$count;
?>

<!--Q9--->
<h1>Q9</h1>

<?php
   //setcookie(cookie_name, cookie_value , expire_time, cookie_path, domain , secure , httponly)
    setcookie("cookie1", "one", time() + 3600 , "/" ,"",false,true);
    setcookie("cookie2", "two", time() + 3600 , "/" ,"",false,true);
    
    if(!empty($_COOKIE)){
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>;";
    }
    else 
        echo "no cookies found";

    foreach ($_COOKIE as $name => $value){
        setcookie($name, $value, time() - 3600 , "/" ,"",false,true);
    }

        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>;";
     
?>

</body>
</html>