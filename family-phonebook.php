<?php

$phoneBook = [

    [
        'name'  => 'Abdul Hakim',
        'phone' => '01928485072'
    ],
    [
        'name' => 'Alif Rahman',
        'phone'  => '01704743456'
    ],
    [
        'name' => 'Hamida Khan',
        'phone'  => '01618252549'
    ],
    [
        'name' => 'Rawshon Ara Begum',
        'phone'  => '01715766164'
    ],


];


	foreach($phoneBook as $phoneNumbers){
    
        echo "Name: " .$phoneNumbers['name'] ."<br>";
        echo "Phone Number: " .$phoneNumbers['phone'] ."<br>";
        echo "<hr>";
}


?>
