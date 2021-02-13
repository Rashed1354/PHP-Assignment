<?php

    function age(int $birthyear){

        $age_total = date("Y") - $birthyear;
        echo "<hr> <hr> <hr> <center> your age is <strong> $age_total </strong></center> <hr> <hr> <hr>";
    }

    age(2007);

?>