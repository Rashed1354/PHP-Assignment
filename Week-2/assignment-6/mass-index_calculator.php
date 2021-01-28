<?php

    function bmi(int $weight, int $height){

        $bodymass = $weight / ($height*$height);
        echo " your Weight is <strong>$weight</strong> and height is <strong>
        $height </strong>  and BMI is <strong> $bodymass </strong> KG/M<sup>2</sup>";
    };

    bmi(85, 5.9)
?>