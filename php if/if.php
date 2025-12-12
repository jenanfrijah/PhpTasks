<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if </title>
</head>
<body>

    <?php

    //Q1
    
    $y = 2013;
    if (($y % 4 == 0 && $y % 100 != 0) || ($y % 400 == 0)) {
        echo "This year is a leap year";
    } else {
        echo "This year is not a leap year";
    }
    //Q2
    echo "<hr>";
   $temp = 23;
    if($temp<20)
        echo "its winter season";
    else 
        echo "its summsesr season";

    //Q3
    echo "<hr>";
    $x=2; 
    $z=2;
    $result ;
    if ($x==$z){
      $result =   ($x+$z)*3;
      echo $result;
    }
    else 
        echo $x+$y;

    //Q4
    echo "<hr>";
    $num1= 10;
    $num2= 10;
    if($num1+$num2!=30)
        echo 'false';
    else 
        echo $num1+$num2;

    //Q5
    echo "<hr>";
    $number = 30;
    if($number%3 == 0)
        echo "true";
    else 
        echo "false";


    //Q6
     echo "<hr>";
     $value=50 ;
     if($value>=30 && $value<=50)
      echo "ture";
    else 
        echo "false";



    //Q7
   $arr =array (1, 5, 9);
   $max = $arr[0];
   
   foreach($arr as $x){
    if($x>$max)
        $max=$x;
   }

   echo "the largest num is $max ";
    
    echo "<hr>";
  
    //Q8
    $result ;
   $unit =280;
    if($unit<=50)
     $result = 2.5*$unit;
    else if($unit>=50  &&  $unit<=100)
      $result = (2.5*50)+($unit-50)*5;
     else if ($unit>=100 && $unit<=200)
      $result = (2.5*50)+(5*100)+($unit-100)*6.20;
    else if($unit>250)
        $result  = (2.5*50)+(5*100)+(100*6.20)+($unit-250)*7.50;
     
   
    echo $result;

        echo "<hr>";

    //Q9

    $operator = '+';
    $num1 = 9; 
    $num2 = 3;
    if($operator=='+')
        echo $num1+$num2;//12
    else if ($operator=='-')
        echo $num1-$num2;//6
    else if ($operator=='*')
        echo $num1*$num2;//27
    else if ($operator=='/')
        echo $num1/$num2;//2

     echo "<hr>";

     //Q10
     
     $age = 14;
     if($age>=18)
        echo "you can vote";
    else 
        echo "is no eligible to vote";

    //Q11
    echo "<hr>";
     $number1 = -60 ;
      
     if($number1 < 0)
        echo "Negative";
    else if($number1>0)
        echo "Positive";
    else 
        echo "zero";

    //Q12
      echo "<hr>";
    $sum =0;
    $avg ;
    $marks = array(60,86,95,63,55,74,79,62,50);


    for($i=0;$i<count($marks);$i++){
        $sum += $marks[$i];
    }

    $avg = $sum / count($marks);
    

    if($avg<=60)
        echo 'F';
    else if ($avg>60 && $avg<=70)
        echo "D";

     else if ($avg>70 && $avg<=80)
        echo "C";

     else if ($avg>80 && $avg<=90)
        echo "B";
    else if ($avg>90 && $avg<=100)
         echo "A";









    ?>


</body>
</html>