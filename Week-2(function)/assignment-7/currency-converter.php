<?php

// --------instruction-----
// use "usd" for Ameriacan doller convertation
// Use "cad" for canadian dolar convertation
//  Use "gbp" for pound convertation
// ----- end-----

//updated in 28 jan, 2021; 

    function convert_tk(int $taka, string $currency){

        if($currency=="usd"){

            $usd = $taka * 84.79;

            echo " <strong> $taka </strong> Tk in USD is <strong> $usd</strong>";
        }else if($currency=="cad"){

            $cad = $taka * 66.22;

            echo " <strong> $taka </strong> Tk in Canadian Doller is <strong> $cad</strong>";
        }else if($currency=="gbp"){

            $gbp = $taka * 116.38;

            echo " <strong> $taka </strong> Tk in Pound is <strong> $gbp </strong>";
        }else{
            echo "input error!";
        }
    }

    convert_tk(1, "gbp");


?>