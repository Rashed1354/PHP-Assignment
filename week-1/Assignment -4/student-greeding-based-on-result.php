<?php
// input section
    $student_name = "Rashed";
    $gender = "male";  // only 'Male' and 'female" allowed
    $number = "79";

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
        $GPA = "F";
    }else if( $number <= 39){
        $GPA = "D";
    }else if( $number <= 49){
        $GPA = "C";
    }else if( $number <= 59){
        $GPA = "B";
    }else if( $number <= 69){
        $GPA = "A-";
    }else if( $number <= 79){
        $GPA = "A";
    }else if( $number <= 100){
        $GPA = "A+";
    }else{
        $not_a_valid_number = true;
    };

    echo $GPA;
// Output section

    if ( $not_a_valid_number == true ){

        echo "Not a valid number";

    }else if( $gender_vaild == false){

        echo " Not a Valid gender";

    }else if( $GPA == "F" ){

        echo "<strong> $student_name </strong> $rel আপনি ফেল করেছেন, ভালো করে পড়াশোনা করেন, শুভকামনা রইলো";

    }else if( $GPA == "G" ){

        echo "<strong> $student_name </strong> $rel আপনি টেনেটুনে পাশ করেছেন, ভালো করে পড়াশোনা করেন, শুভকামনা রইলো";

    }else if( $GPA == "C" ){

        echo "<strong> $student_name </strong> $rel আপনি পাশ করেছেন, ভালো করে পড়াশোনা করেন, আরো ভাল করে পড়তে হবে! শুভকামনা রইলো";

    }else if( $GPA == "B" ){

        echo "<strong> $student_name </strong> $rel আপনি মোটামুটি ভালো করেছেন, তবে আরো ভালো করে পড়াশোনা করেন, শুভকামনা রইলো";

    }else if( $GPA == "A-" ){

        echo "<strong> $student_name </strong> $rel আপনি ভালো করেছেন, আরো ভালো করে পড়াশোনা করেন, আরো ভাল করতে হবে , শুভকামনা রইলো";
    }else if( $GPA == "A" ){

        echo "<strong> $student_name </strong> $rel আপনি ভালো করেছন, আরেকটু ভালো করতে হবে, ভালো করে পড়াশোনা করেন, শুভকামনা রইলো";
    }else if ($number== 100 ){

        echo "<strong> $student_name </strong> $rel সাব্বাশ আপনি ১০০ তে ১০০ পেয়েছেন, আপনাকে খুজছে বাংলাদেশ, আপনি দেশের ভবিষ্যত, অসংখ্য শুভকামনা রইলো";
    }else if( $GPA == "A+" ){

        echo "<strong> $student_name </strong> $rel আপনি অসাধারন করেছেন, ভালো করে পড়াশোনা করেলে তা কখনো বৃথা যায় না, অনেক শুভকামনা রইলো";
    }else{
        echo " undefiend error";
    };


?>