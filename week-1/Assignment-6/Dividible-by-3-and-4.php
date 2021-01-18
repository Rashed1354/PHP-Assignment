<?php

//php code: Divisible BY 3 and 4

    echo "<center> <strong> -- Divisible BY 3 and 4 -- </strong></center><hr><hr><hr>";

    // Dividible BY 3 
    echo "<center><strong>--Divisible BY 3--</strong></center><hr> <hr>";
   
    // loop for 3

        $number1 = 0;
        $valid = 0;

        for($i = 1000; $i > 500; $i--){

            $number1++;
            $valid = $number1 % 3;

            if($valid == 0){
                echo "<center> Number <strong>$number1</strong> is Divisible BY 3</center> <br> <hr>";
            }
        }
    // end 1st loop 

    echo "<hr><hr><center><strong>--Divisible BY 4--</strong></center><hr> <hr> <hr>";

    // loop for 4 

        $number1 = 0;
        $valid = 0;

        for($i = 1000; $i > 500; $i--){

            $number1++;
            $valid = $number1 % 4;

            if($valid == 0){
                echo "<center> Number <strong>$number1</strong> is Divisible BY 4</center> <br> <hr>";
            }
        }
?>