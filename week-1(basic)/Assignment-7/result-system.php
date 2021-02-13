<?php
// input section
    $student_name = "Rashed";
    $gender = "male";  // only 'Male' and 'female" allowed
    $number = "60";

//logic section
    $rel = "";
    $GPA ="";
    $not_a_valid_number = false;
    $gender_vaild = true;
// relation genarator
    if ($gender == "male"){
        $rel="ভাইয়া";

   }else if( $gender == "female"){
       $rel = "আপু";
   }else{
       $gender_vaild = false;
   };
// Grade Calculation   
   if($number < 33){
        $GPA = "F- GPA 0.00";
   }else if( $number <= 39){
    $GPA = "D - GPA 1.00";
   }else if( $number < 50){
    $GPA = "C- GPA 2.00";
   }else if( $number < 60){
    $GPA = "B- GPA 3.00";
   }else if( $number < 70){
    $GPA = "'A-' GPA 3.50";
   }else if( $number < 80){
    $GPA = "A GPA 4.00";
   }else if( $number <= 100){
    $GPA = "'A+' GPA 5.00";
   }else{
       $not_a_valid_number = true;
   };
// Output section

    if ($not_a_valid_number == true){
       echo "Not a valid number";
   }else if( $gender_vaild == false){
       echo " Not a Valid gender";
   }else if($not_a_valid_number == false){

        echo " <strong> $student_name - </strong>". " ". $rel ."  ". "আপনি পেইয়েছেন  ". "(<strong>$GPA</strong>)";

   }else{
       echo " undefiend error";
   };


?>