<?php 
    $num = ["A"=>20, "B"=>15, "C"=>30, "B"=>15, "D"=>10, "D"=>10];
    $a = array_keys($num);  //ดึง key ออกมา
    print_r($a);
    echo "<hr>";

    $b = array_values($num); //ดึง value ออกมา
    print_r($b);
    echo "<hr>";

    $c = array_flip($num); //สลับ key และ value
    print_r($c);
    echo "<hr>";
    
    $d = array_unique($num); //ลบค่าที่ซ้ำกันออกไป
    print_r($d);
    echo "<hr>";
?>