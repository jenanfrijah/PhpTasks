<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
     //Q1
     echo"<h1> Q1</h1>";
    
     function isPrime ($num){
      $count=0;
     for ($i=2;$i<$num;$i++){
        if($num%$i==0)
            $count++;
     }
      if ($count>0)
     echo "$num  is not a prime number";
    else 
        echo "$num is a prime number";
     }

    echo isPrime(15);

    //Q2
    echo"<h1>Q2</h1>";

    function reverseStr ($str){
       return strrev($str);
    }

    echo reverseStr("remove");

    //Q3
    echo"<h1>Q3</h1>";

     function isLowerCase($str){
          if($str==strtolower($str))
            return 'Your String is ok';
        else
            return "not in lower case ";
     }


      echo  isLowerCase("remove");

    //Q4
    echo"<h1>Q4</h1>";

    function swap ($x,$y){
        $z ;
        $z=$x;
        $x=$y;
        $y=$z;
        return "x= $x , y=$y";
    }

    echo swap(9,4);

    //Q5
    echo"<h1>Q5</h1>";
    
 function armstrong ($num){

    $n = strlen((string)$num);

    if(pow(($num % 10), $n) +pow((($num / 10) % 10), $n) + pow((($num / 100) % 10), $n) == $num)
        return "its a armstrong num";
    else 
        return "not a armstrong num ";
}

echo armstrong(407);


  //Q6
  echo"<h1>Q6</h1>";

  function palindrome ($str){

      $str2= str_replace($str,'?'||','||'#'||'@'||' ',"");

     if(strtolower($str2)==strtolower(strrev($str2)))
        return "its a palindrome";   
    else 
       return 'its not a palindrome';
   }

$str = "Eva, can I see bees in a cave?";

echo palindrome($str);

//Q7 
  echo"<h1>Q7</h1>";

  function removeDuplicated ($arr){
    return array_unique($arr);
  }

  $array1=array(2,4,7,4,8,4);
  print_r(removeDuplicated($array1));






    ?>
</body>
</html>