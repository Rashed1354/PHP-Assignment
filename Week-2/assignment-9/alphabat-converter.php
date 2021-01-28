<?php

    function convert_case($text, $hand){
        if($hand=='boro'){
            echo "<h1 style='text-transform:uppercase'>$text</h1>";
          }
          elseif($hand=='choto'){
            echo "<h1 style='text-transform:lowercase'>$text</h1>";
          }else{
            echo "Invalid input";
          }
    }

    convert_case("rashed", "choto")

?>