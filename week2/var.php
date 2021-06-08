<?php

    //comment บรรทัดเดียว
    /*
        Comment หลายบรรทัด

        1. integer เลขจำนวนเต็ม 0-9
        2. Float/bouble เลขทศนิยม 0-9.0-9
        3. String ตัวอักษร ตัวอักขระ ตัวเลข ต้องอยู่ภายใต้เครื่องหมาย""
        4. Boolean ค่าตรรกศาสตร์ มีค่า 2 ค่า คือ True False
        5. Array เก็บค่าหลายๆค่า
        6. object
    */

    //กำหนดตัวแปร
    $name = "vachara";
    $num1 = "200";
    $age = 20;
    $num = 20.50;

    //แสดงค่าตัวแปร
    echo $name."<br>";
    echo $num1."<br>";
    echo $age."<br>";
    echo $num."<br>";

    echo "<hr>";

    //การเช็คชนิดของข้อมูล
    echo gettype($name)."<br>"; 
    echo "ก่อนเปลี่ยนแปลงค่า".gettype($num1)."<br>"; 
    echo "ก่อนเปลี่ยนแปลงค่า".gettype($age)."<br>";
    echo gettype($num)."<br>";

    echo "<hr>";
    //เปลี่ยนแปลงค่า
    settype($num1,"integer");
    echo "หลังเปลี่ยนแปลงค่า".gettype($num1)."<br>";

    settype($age, "double");
    echo "หลังเปลี่ยนแปลงค่า".gettype($age);

    echo "<hr>";
    //การเปลี่ยนแปลงค่าแบบ Casting
    $a = 15.5;
    $b = 20.3;
    $c = $a+$b;
    echo "ก่อนแปลง <br>";
    echo $c."<br>";
    echo gettype($a)."<br>";
    echo gettype($b)."<br>";


    $a = (integer)$a;
    $b = (integer)$b;

    echo "หลังแปลง <br>";
    echo gettype($a)."<br>";
    echo gettype($b)."<br>";
    $c = $a+$b;
    echo $c;

?>