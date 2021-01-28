<?php

    function heading($header, $color){
        
        if($color=='লাল'){
            echo "<h1 style='text-align:center; color:red'>$header</h1>";
          }
          elseif($color=='সবুজ'){
            echo "<h1 style='text-align:center; color:green'>$header</h1>";
          }
          elseif($color=='নিল'){
            echo "<h1 style='text-align:center; color:blue'>$header</h1>";
          }
          elseif($color=='বেগুনি'){
            echo "<h1 style='text-align:center; color:purple'>$header</h1>";
          }
          elseif($color=='কাল'){
            echo "<h1 style='text-align:center; color:black'>$header</h1>";
          }
          else{
            echo "Invalid input";
          } 
    }

    heading("Hello world!", "লাল")
?>