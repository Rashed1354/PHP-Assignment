<?php

//input section
    $name = " Rashed";
    $credit = 200; // credit = 100( Basic ), credit= 200 ( standard) , credit = 300 (premium)
    $previuos_credit = 100;

//logic section
    $level_update = false;
    $level = "";

// level updte selection
    if ($previuos_credit == $credit){
        $level_update = false;
    }else{
        $level_update = true;
        $previuos_credit = $credit;
    }
// level update
    if($credit == 100){

        $level = "basic";

    }else if( $credit == 200){

        $level = "standard"; 

    }else if( $credit == 300){

        $level = "premium";
    }

// output section

    if($level_update == true){

        echo " congratulation! you have gaind $credit credit and gained access to $level membership 😊";
    }else if($level_update == false){

        echo "Sorry, we can't upadate your level 😢";

    }else{
        echo " undefiend error! ";
    };
?>