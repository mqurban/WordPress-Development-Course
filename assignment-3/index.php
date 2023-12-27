<?php 
$number1 = 26;
$number2 = 15;
$number3 = 56;


if ($number1 > $number2 && $number1 > $number3) {
    echo "$number1 is the greatest number";
}
elseif ($number2 > $number1 && $number2 > $number3) {
    echo "$number2 is the greatest number";
}
else {
    echo "$number3 is the greatest number";
}

?>