<?php
    $people=[
      [
        'name' => 'Tom',
        'age'  => 10
      ],
      [
        'name' => 'Aby',
        'age'  => 14
      ],
      [
        'name' => 'Arnold',
        'age'  => 20
      ],
      [
        'name' => 'Bae',
        'age'  => 60
      ],
      [
        'name' => 'Catrina',
        'age'  => 40
      ],
      [
        'name' => 'Celina',
        'age'  => 19
      ],
      [
        'name' => 'Gomez',
        'age'  => 20
      ],
      [
        'name' => 'Stark',
        'age'  => 28
      ],
      [
        'name' => 'Hulk',
        'age'  => 66
      ],
      [
        'name' => 'Hank',
        'age'  => 11
      ],
      [
        'name' => 'Roy',
        'age'  => 41
      ],
      [
        'name' => 'Micky',
        'age'  => 46
      ],
      [
        'name' => 'Pew',
        'age'  => 25
      ],
      [
        'name' => 'Troy',
        'age'  => 18
      ],
      [
        'name' => 'Marshal',
        'age'  => 9
      ],
      [
        'name' => 'Bobby',
        'age'  => 19
      ],
      [
        'name' => 'Harry',
        'age'  => 17
      ],
      [
        'name' => 'Jarvis',
        'age'  => 28
      ],
      [
        'name' => 'Olson',
        'age'  => 39
      ],
      [
        'name' => 'Saul',
        'age'  => 30
      ]
    ];

    foreach($people as $person){

      if($person['age'] >= 40){
        echo "Greetings ".$person['name'].", Hope you have a nice day"."<br>";
      }
      elseif($person['age'] >= 18 and $person['age'] <40){
        echo "Welcome ".$person['name']."<br>";
      }
      elseif($person['age'] >= 0 and $person['age'] <18){
        echo "Be attentive towards your studies ".$person['name']."<br>";
      }
      else{
        echo "Invalid input";
      }
    }
  ?>