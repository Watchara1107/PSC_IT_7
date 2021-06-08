<?php
    $total1 = null;
    $total2 = "";
    $total3 = 100;
    $total4 = "room7";

    // echo var_dump($total1)."<br>";
    // echo var_dump($total2)."<br>";
    // echo var_dump($total3)."<br>";
    // echo var_dump($total4)."<br>";
    echo "ฟังก์ชัน isset <br>";
    echo "ตัวแปร total1 มีค่าเท่ากับ".isset($total1)."<br>";
    echo "ตัวแปร total2 มีค่าเท่ากับ".isset($total2)."<br>";
    echo "ตัวแปร total3 มีค่าเท่ากับ".isset($total3)."<br>";
    echo "ตัวแปร total4 มีค่าเท่ากับ".isset($total4)."<br>";
    echo "<hr>";
    echo "ฟังก์ชัน unset <br>";
    echo $total4;
    // unset($total4);
    // echo $total4;
    echo "<hr>";
    echo "ฟังก์ชัน empty <br>";
    echo "ตัวแปร total1 มีค่าเท่ากับ".empty($total1)."<br>";
    echo "ตัวแปร total2 มีค่าเท่ากับ".empty($total2)."<br>";
    echo "ตัวแปร total3 มีค่าเท่ากับ".empty($total3)."<br>";
    echo "ตัวแปร total4 มีค่าเท่ากับ".empty($total4)."<br>";
    echo "<hr>";
    echo "ฟังก์ชัน is_null <br>";
    echo "ตัวแปร total1 มีค่าเท่ากับ".is_null($total1)."<br>";
    echo "ตัวแปร total2 มีค่าเท่ากับ".is_null($total2)."<br>";
    echo "ตัวแปร total3 มีค่าเท่ากับ".is_null($total3)."<br>";
    echo "ตัวแปร total4 มีค่าเท่ากับ".is_null($total4)."<br>";
?>