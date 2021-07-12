<?php 
    $num = ["A"=>20, "B"=>15, "C"=>30, "D"=>10];
    $class = ["room2"=>"ปวช.3/6","room1"=>"ปวช3/5", "room3"=>"ปวช.3/7" ];

    //เรียงลำดับโดย value
    print_r($num);
    echo "<hr>";
    asort($num); //เรียงลำดับจากน้อยไปมาก
    print_r($num);
    echo "<hr>";

    arsort($num); //เรียงลำดับจากมากไปน้อย
    print_r($num);
    echo "<hr>";

    //เรียงลำดับโดย Key
    ksort($class); //เรียงลำดับจากน้อยไปมาก
    print_r($class);
    echo "<hr>";

    krsort($class);
    print_r($class); //เรียงลำดับจากมากไปน้อย
    echo "<hr>";
?>