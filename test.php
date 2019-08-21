<?php 

// function fun1($v) 
// { 
// return ($v + 7);     // add 7 
// } 

// function fun2($v1,$v2) 
// { 
//     if ($v1 == $v2) return 1;    
//     else return 0; 
// } 

// $arr1 = array(1, 2, 3, 4, 5); 
// $arr2 = array(1, 3, 3, 4, 8); 

// print_r(array_map("fun1", $arr1)); 

// print_r(array_map("fun2", $arr1, $arr2)); 


?> 

<?php
/*
$a = 12345; // decimal number
var_dump($a);
echo "<br>";
 
$b = -12345; // a negative number
var_dump($b);
echo "<br>";
 
$c = 0x12A; // hexadecimal number
var_dump($c);
echo "<br>";
 
$d = 012345; // octal number
var_dump($d);
*/

// $primes = array();
// $is_prime_no = false;
// for ($i = 2; $i<100; $i++) {
//      $is_prime_no = true; 
//         for ($j = 2; $j<=($i/2); $j++) {
//                 if ($i%$j==0) {
//                           $is_prime_no = false;
//                                   break;
//                                 }
//                    }
//         if ($is_prime_no) {
//                array_push($primes,$i);
//                   }
//         if (count($primes)==100) {
//                break;
//                   }
// }
// echo array_sum($primes)."\n";



// function remove_duplicate_values($list){
//     $array_unique = sort(array_values(array_unique($list)));
    
//     return $array_unique;
// }

// $array = array(44,578,44,22,22,33,44,44,);
// print_r(remove_duplicate_values($array));

/*
class dragonBall{
  private $ballCount;

  public function __construct(){
    $this->ballCount=0;
  }

  public function iFoundaBall(){
    $this->ballCount++;
    if($this->ballCount===7){
      echo "You can ask for your wish.";
      $this->ballCount=0;
    }
  }
}
*/

/*
$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;
*/
// $x = 0;

/*
for($x=1; $x<=10; $x++)
{
    if($x<10){
        echo "$x"."-";
    }else{
        echo "$x";
    }
 
}
*/
/*
$x=5;
for($i=1; $i<=$x; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo ' * ';
    }
    echo '</br>';
}
for($i=$x; $i>=1; $i--)
{
    for($j=1; $j<=$i; $j++)
    {
        echo ' * ';
    }
    echo '</br>';
}
*/
// PHP code to get the factorial of a number 
// function to get factorial in iterative way 


?>


<!-- <form action="" method="post">
    <input type="text" name="number" value="">
    <input type="submit" name="submit" value="Submit">
</form> -->

<?php
/*
function Factorial($num){ 
    $factorial = 1; 
    for ($i = 1; $i <= $num; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 
  
// Driver Code 
if (isset($_POST['submit'])) {
    $number = $_POST['number']; 
    $fact = Factorial($number); 
    echo "Factorial of $number is = $fact"; 
}*/

/*
$fruits = array('mango' , 'banana' , 'apple', 'orange');

sort($fruits);
echo "<ul>";
foreach ($fruits as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
*/

/*
$original_array = array( '1','2','4','5' );
echo 'Original array :';
foreach ($original_array as $x) 
{
    echo "$x ";
}
$inserted = '3';
array_splice( $original_array, 2, 0, $inserted ); 
echo " </br> After inserting '3' the array is : ";
foreach ($original_array as $x) 
{
    echo "$x ";
}
*/

/*
function array_change_value_case($input, $ucase)
{
    $case = $ucase;
    $narray = array();
    if (!is_array($input))
    {
        return $narray;
    }
    foreach ($input as $key => $value)
    {
        if (is_array($value))
        {
            $narray[$key] = array_change_value_case($value, $case);
            continue;
        }
        $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
    }
    return $narray;
}
    $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    echo 'Actual array ';
    print_r($Color);
    echo 'Values are in lower case.';
    $myColor = array_change_value_case($Color,CASE_LOWER);
    print_r($myColor);
    echo 'Values are in upper case.';
    $myColor = array_change_value_case($Color,CASE_UPPER);
    print_r($myColor);
    */

    // $n=range(11,20);
    // shuffle($n);
    // for ($x=0; $x< 10; $x++)
    // {
    // echo $n[$x].' ';
    // }

?>

<!-- <script type="text/javascript">
     $(document).ready(function(){

      var location = {
        "Dhaka":{
          "Gazipur" : ["Mouna","Tongi"]
        },
        "Mymensingh":{
          "Mymensingh" : ["Muktagachha","fulbaria","trishal","fulpur"],
          "Jamalpur" : ["sorishabari"]
        },
      };
      console.log(location);
  });
</script> -->



 <!DOCTYPE html>
 <html>
 <head>
     <title>chess</title>
 </head>
 <body>
    <table width="370px" cellspacing="0" cellpadding="0" border="1px">
        <?php 
        for ($i=0; $i <=7 ; $i++) 
        { 
            echo "<tr>";    
            for ($j=0; $j <=7 ; $j++) 
            { 
                $sum = $i+$j;

                if ($sum%2 == 0) 
                {
                    echo "<td height='40px' width='40px' bgcolor='FFFFFF'></td>";
                }else
                {
                    echo "<td height='40px' width='40px' bgcolor='000000'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table><br>
 </body>
 </html>

 <?php
 function Reverse($str1){
    return strrev(strtoupper($str1));
 }

 $str1 = "mobarak";
 echo Reverse($str1);
 ?>

<?php
 function missing_number($num_list)
{
 // construct a new array
$new_arr = range($num_list[0],max($num_list));                                                    
// use array_diff to find the missing elements 
return array_diff($new_arr, $num_list);

}
print_r(missing_number(array(1,2,3,6,7,8)));
print_r(missing_number(array(10,11,12,14,15,16,17)));
echo "</br>";
?>



<?php
$marks1 = array(360,310,310,330,313,375,456,111,256); 
$marks2 = array(350,340,356,330,321); 
$marks3 = array(630,340,570,635,434,255,298);

$max_marks = max(max($marks1),max($marks2),max($marks3));
$min_marks = min(min($marks3),min($marks2),min($marks1));

echo "Max Marks is: ".$max_marks;
echo "</br>";
echo "Min Marks is: ".$min_marks;
?>







