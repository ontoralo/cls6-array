<?php

$studentData = [

    [
        'name'      => 'MD. RANVEEN ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Mirpur'
    ],
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Mirpur'
    ],
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Banani'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Banani'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Banani'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Mirpur'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Mirpur'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Banani'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Banani'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Banani'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Uttara'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Uttara'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Mirpur'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Uttara'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Mirpur'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Uttara'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Gulshan'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Gulshan'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Gulshan'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Mirpur'
    ],    
    [
        'name'      => 'ARAF',
        'id'        => '17020028',
        'phone'     => '01928485072',
        'area'      => 'Gulshan'
    ],

    
];


	foreach($studentData as $students){
        if($students['area']=='Mirpur' ||$students['area']=='Banani')
        {
            echo "Name: " .$students['name'] ."<br>";
            echo "ID NO: " .$students['id'] ."<br>";
            echo "Phone Number: " .$students['phone'] ."<br>";
            echo "Location: " .$students['area'] ."<br>";
    
    
            echo "<hr>";
        } else {
            echo "Sorry Your Location is Outside of Banani or Mirpur";
        }
    
      
        echo "<hr>";
};



?>
