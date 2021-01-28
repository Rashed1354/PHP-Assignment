<?php

    function area( $length = 0, $width=0, $rad=0, $which=''){

        if($which=='rectangle'){

            $ar= $length*$width;

            echo "The area of the rectangle is $ar.";

          }elseif($which=='square'){

            $ar= $length*$length;
            echo "The area of the square is $ar.";

          } elseif($which=='circle'){

            $ar=3.1416*$rad;
            echo "The area of the circle is $ar.";

          }else{
            echo "Invalid input.";
          };

        };

        area(0,0,5,'circle');


?>