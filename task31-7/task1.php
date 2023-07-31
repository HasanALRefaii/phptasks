<!-- Logical Statements and Operators           		         
1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’ -->

<?php
    $year = 2020 ;
   
        if($year%4 !== 0 ){
            echo 'This is not a leap year' ;
        }
        else {
            echo 'this is leap year';
        }

    echo '<hr>' ;


    // 2.	Write a PHP script to check the season depending on the inserted temperature
    //  if the temperature is below 20, we are in winter otherwise the season is summer.
    // Sample Input: 27
    
    $temp = 25 ;
    if ($temp < 20) {
        echo 'We are in winter';
    }
     else {
        echo 'the season is summer';
    }



     echo '<hr>' ;

// 3.Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
// Sample Output: ‘It is summertime!’


 $num1 = 2 ;
 $num2 = 2 ;
 $sum = $num1 + $num2;
    if ($num1 === $num2){
        $result = $sum *3 ;
        echo "($num1+$num2)*3 = $result"  ;
    }
    else {
         echo "($num1+$num2)";
    }



echo '<hr>' ;

// 4.Write PHP to check if the sum of the two given numbers 
// equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’

$number1 = 15 ;
$number2 = 10 ;
    $result = $number1 + $number2 ;
    if ($result == 30){
        echo "$result"  ;
    }
    else {
         echo "false";
    }
echo '<hr>' ;

// 5.	Write in PHP script to check if the given positive number is a multiple of 3.

$numb= 9;
    if ($numb%3 ==0){
        echo "true";

    }
    else {
        echo "false";
   }

echo '<hr>' ;

// 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’

    $ran = 25 ;
    if ($ran >=20 && $ran <=50){
        echo "true";
    }
    else {
        echo "false";
   }


echo '<hr>' ;


// 7.	Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9

   $n1 = 5;
   $n2 = 1;
   $n3 = 9;
    if ($n1 > $n2 && $n1 > $n3){
        echo "$n1" ;
    }
    elseif ($n2 > $n1 && $n2 > $n3){
        echo "$n2" ;
    }

    else{
        echo "$n3" ;
    }

echo '<hr>' ;


// 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit

// Input: Replace this with the actual number of units consumed in a month
$units = 20;

// Calculate the monthly electricity bill according to the given rules
if ($units <= 50) {
     $totalBill = $units * 2.50;
} elseif ($units > 50 && $units <= 150) {
    $totalBill = 50 * 2.50 + ($units - 50) * 5.00;
} elseif ($units > 150 && $units <= 250) {
    $totalBill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
} else {
    $totalBill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
}

// Output: Display the monthly electricity bill
echo "Monthly electricity bill for $units units: " . number_format($totalBill, 2) . " JOD";


// $unit = 50 ;
//     if ($unit <= 50){
//         echo "$unit*2.5" ;
//     }
//     elseif ($unit >= 50 && $unit <=100){
//         echo "$unit*5" ;
//     }

//     elseif ($unit >= 100 && $unit <=200){
//         echo "$unit*6.2" ;
//     }
//     else {
//         echo "$unit*7.5" ;
//     }

echo '<hr>' ;

// 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’

    $age = 15;
    if($age>=18){
        echo "welcome,you can vote" ;
    }
    else {
        echo "is no eligible to vote";
    }

echo '<hr>' ;


// 10) 

    $x = -20 ;
    if($x>0){
        echo "Positive number";
    }
    elseif ($x == 0 ){
        echo "Zero";
    }

    else{
        echo "negative number";
    }


echo '<hr>' ;


// 11.	Write php script to make a calculator, the calculator should contain the four main operations 

// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division
    function addition($a,$b){
        return $a +$b ;
    }
    function Subtraction ($a,$b){
        return $a - $b ;
    }

    function Multiplication ($a,$b){
        return $a * $b ;
    }
    
    function division ($a,$b){
        return $a / $b ;
    }
    echo "addition:" . addition(5,9) ;
    echo "multiplication:" . Multiplication(5,9) ;



    echo '<hr>' ;

// 12.Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$totalSubjects = count($scores);
$totalScore = array_sum($scores);
$averageScore = $totalScore / $totalSubjects;

if ($averageScore >= 90) {
    $grade = 'A';
} elseif ($averageScore >= 80) {
    $grade = 'B';
} elseif ($averageScore >= 70) {
    $grade = 'C';
} elseif ($averageScore >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

echo $grade;



echo "<br>" ;
echo "<hr>" ;
$colors = array('white', 'green', 'red');
sort($colors);
foreach ($colors as $color)  {
echo "$color <br>";
}


echo "<hr>" ;
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities); 

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}

echo "<hr>" ;

//array tasks

$color = array(4 => 'white', 6 => 'green', 11 => 'red');

$firstElement =  $color[4];

echo "Expected Output: $firstElement";

echo "<hr>" ;

$fruits = array("d" => 'lemon', "a" => 'orange', "b" => 'banana', "c" =>'apple');
asort($fruits); 
foreach($fruits as $abc =>$fruit){
echo "$abc : $fruit <br>" ;
};


echo "<hr>" ;


$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$shortestLength = min(array_map('strlen', $words));
$longestLength = max(array_map('strlen', $words));

echo "Shortest string length: $shortestLength<br>";
echo "Longest string length: $longestLength";

echo "<hr>" ;
$temperatureData = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$totalTemperatures = count($temperatureData);
$sumTemperatures = array_sum($temperatureData);
$averageTemperature = $sumTemperatures / $totalTemperatures;

echo "Average Temperature is: " . number_format($averageTemperature, 1);

echo "<hr>" ;

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$arr = $array2 + $array1;
print_r($arr);

echo "<hr>" ;
for($i=200;$i<=250;$i++){
    if ( $i % 4 == 0){
        echo "$i";
    }
    echo "-";
}
echo "<hr>" ;

$array1 = array(2, 0, 10, 12, 6);
echo $array1[0];



// loop tasks
echo "<hr>" ;

$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

echo "Total: $total";

echo "<hr>" ;



for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j) {
            echo $i . " ";
        } else {
            echo "0 ";
        }
    }
    echo "<br>"; 
}

echo "<hr>" ;

$num = '';

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}
