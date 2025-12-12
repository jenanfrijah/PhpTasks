<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task2</title>
</head>
<body>
    <?php
    //Q1
    $color = array ("red","green","white");

    echo "The memory of that scene for me is like a frame of film forever
     frozen at that moment: the $color[0] carpet, the $color[1] lawn, the $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    //Q2

    echo "
    <ul>
    <li>green</li>
    <li>red</li>
    <li>white</li>
    </ul>";
   //Q3
    $cities = array ('Italy'=> 'Rome' , 'Luxembourg'=> 'Luxembourg', 'Belgium'=>'Brussles' , "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
    asort($cities);
    foreach ($cities as $x=> $y ){
        echo "The Capital of $x is $y";
        echo "<br>";
    }

    //Q4
    $color = array (4 => 'white', 6 => 'green', 11=> 'red');
    echo "<br>";
    print_r($color['4']);

    //Q5

    echo "<br>";
    $arr1 = array (1,2,3,4,5);
    $location = 1;
    $newItem = '$';

       echo $arr1[$location]=$newItem;
       
       foreach ($arr1 as $x){
       print_r($x) ;
       }
      
    //Q6

    //order the array depends on the key value a-z
    echo "<br>";
    $fruits = array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
    asort($fruits);
    foreach($fruits as $x =>$y){   
        
        echo"$x = $y";
        echo "<br>";
    }

    //Q7 
    //avg temp , 5 highest , 5 lowest 
    echo "<br>";
    $temp = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
     //avg
    $sum = 0 ;
    $count = 0 ;
    $avg ;
    foreach($temp as $x){
       $sum+=$x;
       $count++;
    }
     
    $avg = $sum / $count;

    print_r("Average Temperature is: $avg") ;

    // 5 Hightest temp 
     echo "<br>";
    rsort($temp);
    
    $unique = array_unique($temp);
    $top = array_slice($unique,0,5);
    echo"List of 5 Highest temperatures: ";
    foreach($top as $x){
    print_r(" $x  ");
    }

    //5 lowest temp

    echo "<br>";
    sort($temp);
    
    $unique = array_unique($temp);
    $top = array_slice($unique,0,5);
    echo"List of 5 Lowest temperatures: ";
    foreach($top as $x){
    print_r(" $x  ");
    }


    //Q8

     echo "<br>";
    $array1=array("color"=>"red",2,4);
    $array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);

    $array3 =array_merge($array1,$array2);

    print_r($array3);

    
    //Q9
    echo "<br>";
    echo "<br>";
    function upperCase($str) {
       return strtoupper($str);
    }

   $colors =array("red","blue","white","yellow");

   foreach($colors as $x ){
     print_r(upperCase($x));
     echo "<br>";
   }


   //Q10
   echo "<br>";
   echo "<br>";

   

    function lowerCase($str) {
       return strtolower($str);
    }

   $colors2=array("RED","BLUE","WHITE","YELLOW");


   foreach($colors as $x ){
     print_r(lowerCase($x));
     echo "<br>";
   }

  //Q11

  echo "<br>";
  echo "<br>";

  for($i=200;$i<250;$i++){
    if($i%4==0)
        echo "$i  "  ;
  }


  //Q12

   echo "<br>";
  echo "<br>";
  $words = array("abcd","abc","de","hjjj","g","wer");

  $maxLen = strlen($words[0]);
  $minLen = strlen($words[0]);
  $Len ;
  foreach($words as $x){
    $Len = strlen($x);
    if($Len > $maxLen)
        $maxLen = $Len ;
  }

  print_r("The longest array length is   $maxLen");

   echo "<br>";

   foreach($words as $x){
    $Len = strlen($x);
    if($Len < $minLen)
        $minLen = $Len ;
  }

   print_r("The shortest array length is  $minLen");


   //Q13

   // generate random 10 numbers in range 11-20 unique
   echo "<br>";
  

$min = 1;    
$max = 50;   


$numbers = array(); 

while (count($numbers) < 10) {
$rand = rand($min, $max);
 if (!in_array($rand, $numbers)) { 
        $numbers[] += $rand; 
    }
}
for($i=0;$i<count($numbers);$i++)
print_r("$numbers[$i]  ");

//Q14
  echo "<br>";
  echo "<br>";

$array1=array(2, 0, 10, 12, 6);

$min = $array1[0];
foreach($array1 as $x){
    if($min>$x && $x!=0)
        $min=$x;
    
}

foreach($array1 as $x){
  if($x%1==0 && $x!=0 && $x=$min)
     $result= $x;
}
print_r($result);







    ?>
</body>
</html>