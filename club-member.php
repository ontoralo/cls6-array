<?php

$clubMembers = [

    [
        'name' => 'Abdul Hakim',
        'age'  => 45
    ],
    [
        'name' => 'Rayhan Chowdhury',
        'age'  => 25
    ],
    [
        'name' => 'Ria Akter',
        'age'  => 15
    ],
    [
        'name' => 'Laboni Rahman',
        'age'  => 60
    ],


];


	foreach($clubMembers as $members){
    
        if($members['age']<18){
        echo "Hi, " .$members['name'] ." " ."You are Child, please be more attentive to your study". "<br>";
        }
        elseif($members['age']>=18 && $members['age']<=40){
        echo "Congratulations " .$members['name'] .". " .  "You became our honorable Club Member". "<br>";
        }
        elseif($members['age']>40){
        echo "Welcome to our club " .$members['name'] .".". "<br>";
        }
        else{
        echo "Sorry Invalid Input";
        }
		echo "<hr>";
      
}


?>
