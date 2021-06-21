<?php
    /*
    รูปแบบฟังก์ชันที่มีการรับค่าและส่งค่า

    function ชื่อฟังก์ชัน(Parameter1, Parameter2...){
      return ค่าที่ส่งออกไป;
    }

    ตัวแปร = ชื่อฟังก์ชัน(อากิวเม้นต์1,อากิวเม้นต์2...);
    */
    
    function Gettotal($slary){
        //echo $slary."<br>";
        $month = 12;
        return $month*$slary;
    }
    $total = Gettotal(30000);
    echo "เงินเดือนของฉัน = ".$total."<br>";

    function show($name,$no="27"){
        echo "ชื่อของฉัน คือ " .$name."<br>";
        echo "เลขที่ของฉัน คือ " .$no."<br>";
    }

    show("มานะ");
    $total = Gettotal(30000);
    echo "เงินเดือนของฉัน = ".$total."<br>";
    $total = Gettotal(30000);
    echo "เงินเดือนของฉัน = ".$total."<br>";
    show("มานะ");

?>