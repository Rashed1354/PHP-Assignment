<?php

    function grade ($number = 0){

    // Grade Calculation   
    if($number < 33){

            $GPA = "F- GPA 0.00";
            echo " your GPA - $GPA";

        }else if( $number <= 39){

            $GPA = "D - GPA 1.00";
            echo "your GPA - $GPA";

        }else if( $number < 50){

            $GPA = "C- GPA 2.00";
            echo "your GPA - $GPA";

        }else if( $number < 60){

            $GPA = "B- GPA 3.00";
            echo "your GPA - $GPA";

        }else if( $number < 70){

            $GPA = "'A-' GPA 3.50";
            echo "your GPA - $GPA";

        }else if( $number < 80){

            $GPA = "A GPA 4.00";
            echo "your GPA - $GPA";

        }else if( $number <= 100){

            $GPA = "'A+' GPA 5.00";
            echo "your GPA - $GPA";

        }else{
            $not_a_valid_number = true;
        };
    };

    grade(33)

?>