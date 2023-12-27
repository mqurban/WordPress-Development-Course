<?php 
    function get_table($number){
        $i = 1;
        while ($i <= 10){
            $result = $number * $i;
            return " $number * $i = $result ";
            $i++;

    }
    get_table(12);
}
?>