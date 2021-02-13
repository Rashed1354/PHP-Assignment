<?php

//head
    
    echo "<hr><hr><center><strong> Multiplication Table for 2,3,4,5</strong></center><hr><hr>";

// setting inetial value
  $i=1;

//multipliaction table for 2

    echo "<hr><hr><center><strong> Multiplication Table for 2</strong></center><hr><hr>";

    for($i=1; $i<=10; $i++){
        $re = $i*2;
        echo "<center> 2 X  $i = $re <br> </center>";
    }
//multipliaction table for 3
    echo "<hr><hr><center><strong> Multiplication Table for 3</strong></center><hr><hr>";
    for($i=1; $i<=10; $i++){
        $re = $i*3;
        echo "<center> 3 X  $i = $re <br> </center>";
    }
//multipliaction table for 4
    echo "<hr><hr><center><strong> Multiplication Table for 4</strong></center><hr><hr>";
    for($i=1; $i<=10; $i++){
        $re = $i*4;
        echo "<center> 4 X  $i = $re <br> </center>";
    }
//multipliaction table for 5
    echo "<hr><hr><center><strong> Multiplication Table for 5</strong></center><hr><hr>";
    for($i=1; $i<=10; $i++){
        $re = $i*5;
        echo "<center> 5 X  $i = $re <br> </center>";
    }

    echo "<hr> <hr>"

    ?>