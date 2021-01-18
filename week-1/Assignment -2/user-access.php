<?php
//input section
    $name = 'Rahed';
    $age = "18";

//logic section
    $access = True;
    $over_age = false;

//access logic

    if($age <= 19){

        $access = false;

    }else if( $age <= 35 ){

        $access = true;

    }else if( $age > 35){

        $over_age = true;
    }

//output section
     
    if ($over_age == true){

        echo " Sorry, sir you are too old to access this service.😢";

    }else if ( $access == true){

        echo " Congras!, You have successfullly gained access. 😊";

    }else{
        echo (" sorry, we can't give you access. 😢");
    }

?>