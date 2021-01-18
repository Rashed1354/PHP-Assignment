<?php
//heading
     echo (" <hr><hr><hr><center> Loop Break if divisible </center><hr> <hr> <hr>");
// setting the initial value 

     $i=1;

//loop

    for($i = 1; $i <= 1000; $i+=3){
        if( $i % 11 != 0){
            echo " <center><strong> $i</strong> is not devisible by 11 </center> <br>";
        }
        else if ( $i % 11 == 0 ){
            
            echo (" <hr><hr><hr><center> $i is dibvisible by 11, so code can't run! </center><hr> <hr> <hr>");
            break;
        }
        
    }

?>