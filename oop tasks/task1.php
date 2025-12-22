 <?php
    
    echo "<h1>Q1</h1>";
    
    class myClass{
        public function __construct() {
           echo "MyClass class has initialized";
        }   
    }
  
    
     $obj = new myClass() ;
      

    echo "<h1>Q2</h1>";

    class Message {
       public function __construct($name){
        echo "Hello All , I am $name";
       }
    }


     $obj2 = new Message('rola');
    
    echo "<h1>Q3</h1>";

   class Factorial {
    public function calculate ($num){
        $fact = 1; 
        for($i=1;$i<=$num;$i++){
            $fact*=$i;
        }
        return $fact; 
    }
   }


   $obj3= new Factorial();
   echo $obj3 -> calculate(5);


    echo "<h1>Q4</h1>";

    class SortArray {
      
        public function sort1($arr){
            sort($arr);
            return $arr;
        }
   
    }

    $arr1 = array(4,1,5,-2 ,0,7);
    $obj4= new SortArray($arr1);
    print_r($obj4 -> sort1($arr1)) ;

     echo "<h1>Q5</h1>";


    class DateDiff {
        public function TwoDate($date1,$date2){
            $d1 = new DateTime($date1);
            $d2 = new DateTime($date2);
            $diff = date_diff($d1,$d2);
           echo "The Difference: " . $diff->y . " years " , $diff->m ." months " . $diff->d . " days";
        }
    }


    $object = new DateDiff();
    $object-> TwoDate('1981-11-03', '2013-09-04');

    echo "<h1>Q6</h1>";

    $string1 = "12-8-2004";
    
    $date = new DateTime ($string1);

    echo "Date: " .$date ->format('Y-m-d')."<br>" ;

    echo "DateTime : " .$date ->format('Y-m-d  h:i:s')
    ?>
