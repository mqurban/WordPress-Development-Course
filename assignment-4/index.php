<?php 
$number = 11; // store a 11 in variable name number

if ($number == 11) {  // check if the number is 11 
    echo "The number is $number";  // print the number
} 
else if ($number == 12) {  // if above condition false this condtion will executes
    echo "The number is $number"; // if this condtion true, it will print the number
} 
else  // if both above conditions false 
{echo "The number is $number";}  // this will executes and print the number


// With Switch Statement



$number1 = 25;
switch ($number1) {
    case 20:
        echo "The number is {$number1}";
        break;
    case 21:
        echo "The number is {$number1}";
        break;
    case 22:
        echo "The number is {$number1}";
        break;
    default:
        echo "The number is {$number1}";
}


// table printing

$number2 = 2;
echo "Table of 2 :<br>";
for ($i = 1; $i <= 10; $i++) {
    $result = $number2 * $i;
    echo "$number2*$i = $result <br>";
}

?>
