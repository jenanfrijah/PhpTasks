<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>
    <?php 
    //Q1


    for($i=0;$i<=10;$i++){
        if($i!=10 )
            echo "$i-";
        else 
            echo "$i";
    }

    echo "<hr>";

    //Q2

    $sum =0;
    for($i=0;$i<=30;$i++){
      $sum +=$i;
    }
    echo "The total sum i s $sum";

    echo "<hr>";

    //Q3


   for($i=0; $i<5; $i++){
     echo "<br>";
      for($j=0 ; $j<5 ; $j++){
        if($i==0)
            echo 'A';
        else if ($i==1 )
       echo ($j<3 ? "A" :  "B") ;
        else if ($i==2)
            echo($j<2 ? "A" : "C");
        else if ($i==3)
            echo($j<1 ? "A" : "D");
        else 
            echo "E";

      }
   }


   //Q4
   echo "<hr>";
   for($i=0; $i<5; $i++){
     echo "<br>";
      for($j=0 ; $j<5 ; $j++){
        if($i==0 )
            echo '1';
        else if ($i==1 )
       echo ($j<3 ? "1" :  "2") ;
        else if ($i==2)
            echo($j<2 ? "1" : "3");
        else if ($i==3)
            echo($j<1 ? "1" : "4");
        else 
            echo "5";

      }
   }

   //Q5



     echo "<hr>";
   for($i=1; $i<=5; $i++){
     echo "<br>";
      for($j=1 ; $j<=5 ; $j++){
        if($i==$j)
            echo $i;
   
        else echo '0';

      }
   }

   //Q6
    echo "<hr>";
   $num =5;
   $fact =1;
   for ($i=1 ; $i<=$num ; $i++){
      $fact*=$i;
   }
 echo $fact;

 //Q7
echo "<hr>";

 $one = 0;
 $two =1;
// $three;
echo $one . " ," . $two ;
 for($i=2 ; $i<10 ; $i++){
    $three = $one + $two;
     echo "," .  $three; 
    $one = $two ;
    $two= $three; 
 }

 //Q8


 
    $text = "Orange Coding Academy";
    $count = substr_count(strtolower($text), "c");//count the num of c

    echo "<hr>";

    //Q9

    echo "<table  border='1'>";
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td>$i * $j = " . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
    

    //Q10
   
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0)
            echo "FizzBuzz ";
        else if ($i % 3 == 0)
            echo "Fizz ";
        else if ($i % 5 == 0)
            echo "Buzz ";
        else
            echo $i . " ";
    }
 
    echo "<hr>";

    //Q11
    
    $num = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
    echo "<hr>";
 

    //Q12
    

    $spaces = 5;
    for ($i = 1; $i <= 5; $i++) {
        $letter = ord("A");
        for ($j = 1; $j <= $spaces; $j++)
            echo "&nbsp &nbsp";

        for ($j = 1; $j <= $i; $j++) {
            echo chr($letter) . "&nbsp &nbsp";
            $letter++;
        }
        $spaces--;
        echo "<br>";
    }
    $spaces = 2;
    for ($i = 1; $i <= 4; $i++) {
        $letter = ord("A");
        for ($j = 1; $j <= $spaces; $j++) {
            echo "&nbsp &nbsp";
        }
        for ($j = 4; $j >= $i; $j--) {
            echo chr($letter) . "&nbsp &nbsp";
            $letter++;
        }
        $spaces++;
        echo "<br>";
    }


    echo "<hr>";
    ?>
   


   


  
</body>
</html>