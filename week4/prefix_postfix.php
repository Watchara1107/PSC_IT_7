<?php
    $a = 5;
    $b = 10;
    
    //เพิ่มค่า prefix รูปแบบการเขียน ++$a
    echo "ค่าเริ่มต้นของตัวแปร a = ".$a."<br>";// 5
    echo "เพิ่มค่าแบบ Prefix = ".(++$a)."<br>"; // 6
    echo "ค่าล่าสุดของ a = ".$a."<br>"; //6
    echo "<hr>";
    //เพิ่มค่า postfix รูปแบบการเขียน $a++
    echo "ค่าเริ่มต้นของตัวแปร a = ".$a."<br>";// 6
    echo "เพิ่มค่าแบบ Postfix = ".($a++)."<br>"; // 6
    echo "ค่าล่าสุดของ a = ".$a."<br>"; //7
    echo "<hr>";

    //ลดค่า prefix รูปแบบการเขียน --$b
    echo "ค่าเริ่มต้นของตัวแปร a = ".$b."<br>";// 10
    echo "ลดค่าแบบ Prefix = ".(--$b)."<br>"; // 9
    echo "ค่าล่าสุดของ b = ".$b."<br>"; //9
    echo "<hr>";
    //ลดค่า postfix รูปแบบการเขียน $b--
    echo "ค่าเริ่มต้นของตัวแปร b = ".$b."<br>";// 9
    echo "ลดค่าแบบ Postfix = ".($b--)."<br>"; // 9
    echo "ค่าล่าสุดของ b = ".$b."<br>"; //8
    echo "<hr>";

?>