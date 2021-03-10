<?php

$picnicMembers = [

    [
        'name'      => 'Abdul Hakim',
        'address'   => 'Uttara',
        'phone'     => '01928485072',
        'donation'  => 500
    ],
    [
        'name' => 'Alif Rahman',
        'address'   => 'Mirpur',
        'phone'  => '01704743456',
        'donation'  => 1000

    ],
    [
        'name' => 'Hamida Khan',
        'address'   => 'Tongi',
        'phone'  => '01618252549',
        'donation'  => 1500

    ],
    [
        'name' => 'Rawshon Ara Begum',
        'address'   => 'Banani',
        'phone'  => '01715766164',
        'donation'  => 2000

    ],

    
];


	foreach($picnicMembers as $members){
    
        echo "Name: " .$members['name'] ."<br>";
        echo "Address: " .$members['address'] ."<br>";
        echo "Phone Number: " .$members['phone'] ."<br>";
        echo "Donation Amount: " .$members['donation'] ."<br>";


        echo "<hr>";
};


$sum = 0;
foreach ($picnicMembers as $total) {
    $sum += $total['donation'];
};
echo "Total Donation Amount = " .$sum;


?>
