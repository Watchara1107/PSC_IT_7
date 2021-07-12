<?php 
    $num = ["A"=>20, "B"=>15, "C"=>30, "D"=>10];
    $city = ["ชลบุรี","ระยอง","นนทบุรี","กรุงเทพ"];

    print_r($city);
    echo "<hr>";
    //shuffle($city); // สลับค่าแบบสุ่ม
   // print_r($city);
    //echo "<hr>";
    $n = array_reverse($city);  //กลับด้าน
    print_r($n); 
    echo "<hr>";

?>