<?php 
    function get_table($number){
        $i = 1; // Initializing the iterator variable $i
        while($number >= 10){
            $result = $i * $number;
            echo "$i * $number = $result<br>"; // Using echo to display the table
            $i++;
        } // Closing the while loop
    } // Closing the function
    
    get_table(12); // Calling the function
?>
