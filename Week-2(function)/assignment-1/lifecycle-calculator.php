<?php

    function lifecycle($age){

        if ($age <= 10){
            echo "আপনি একজন বাচ্চা";
        }else if($age <= 20){
            echo "আপনি একজন টিন এজার";
        }else if($age <= 30){
            echo "আপনি প্রাপ্তবয়স্ক যুবক";
        }
        else if($age <= 40){
            echo "আপনি একজন বেডা";
        }
        else if($age <= 50){
            echo "আপনি একজন মধ্যবয়সি পুরুষ";
        }
        else if($age <= 60){
            echo "আপনি একজন পুরুষ";
        }else if($age <= 70){
            echo "আপনি একজন বয়ষ্ক পুরুষ";
        }else if($age <= 100){
            echo "আপনি একজন বয়ষ্ক পুরুষ";
        }else{
            echo " ওমা, আপনি ১০০ বছরের বেশি বেচে আছেন, গিনেস বুকে আপনার নাম লেখা উচিত!";
        }
    }

    lifecycle(21);

?>