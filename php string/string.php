<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>
    <?php

    //Q1
    $string1="welcome to php ";

    echo strtoupper($string1);
    echo "<br>";
    echo strtolower($string1);
    echo "<br>";
    echo  ucfirst($string1);
    echo "<br>";
    echo ucwords($string1);
    echo "<br>";

    echo "<hr>";

    //Q2

    echo date("H:i:s",strtotime("085119"));
    
    echo "<hr>";
    
    //Q3
    
    $string2="I am a full stack developer at orange coding academy";
if(strpos($string2,"orange")!=false) //the index that the word start in
    echo "word found!";
else 
    echo "not found!";

    echo "<hr>";

    //Q4

  echo basename("www.orange.com/index.php");

  echo "<hr>";

    //Q5

  echo strstr("info@orange.com",'@',true);
  
  echo "<hr>";
   //Q6

    //echo strstr("info@orange.com",'.');
     
   echo substr("info@orange.com",-3);
    echo "<hr>";

    //Q7

    $input ="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    echo str_shuffle($input);
 
    echo "<hr>";
    //Q8

   echo str_replace('That','Our',"That new trainee is so genius.");

   echo "<hr>";

   //Q9

//    echo strspn("dragonball","dragonboll");
   

$str1 = "dragonball";
$str2 = "dragonboll";

$pos = strspn($str1 ^ $str2, "\0"); // 
$char1= $str1[$pos];
$char2= $str2[$pos];

print_r("First difference between two strings at position $pos : $char1 vs $char2 " )  ;

  echo "<hr>";

  //Q10
 
  $str3 ="Twinkle, twinkle, little star.";

  $arr1 = array();
//array_push
   $arr1= explode(',',$str3);
    print_r($arr1);

    echo "<hr>";

    //Q11

$str = 'a';
echo ++$str; 

   echo "<hr>";

   //Q12

  $string3 ="The brown fox";
   echo substr_replace($string3," quick ",3,0);
   echo "<hr>";

   //Q13
 
   $sstr = '0000657022.24';
   echo trim($sstr,'0');

   echo "<hr>";

   //Q14
 
   $string4 = "The quick brown fox jumps over the lazy dog";
   $newString = str_replace("fox","",$string4);
   echo $newString;

   echo "<hr>";
   //Q15


  $strr=" The quick brown fox jumps over the lazy dog---";
  echo trim($strr,'-');


  echo "<hr>";


  //Q16
    $string = "\"\1+2/3*2:2-3/4*3";
    $cleanString = preg_replace('/[^0-9]/', '', $string);
    echo $cleanString;

    echo "<hr>";
  //Q17

  $stringTwo = "The quick brown fox jumps over the lazy dog";
   
    
    $arr2 = explode(" ",$stringTwo);

    for($i=0 ; $i<5; $i++){
      echo "$arr2[$i] ";
    }

  

 echo "<hr>";
//Q18

$str5 = '2,543.12';
echo str_replace(",","",$str5);

echo "<hr>";

//Q19


$letters = range('a','z');
foreach( $letters as $x){
    echo "$x ";
}
    ?>
</body>
</html>