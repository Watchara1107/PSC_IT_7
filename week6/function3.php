<?php 
/*
    รูปแบบฟังก์ชันที่มีการส่งค่าออกมา

    function ชื่อฟังก์ชัน(){
      return กลุ่มคำสั่งต่างๆ;
    }

    ตัวแปร = ชื่อฟังก์ชัน();
    */

    //ตัวแปรแบบGlobal
    $x = 100;
    $y = 10;

    function Address(){
        //ตัวแปรแบบlocal
       global $x ;
       global $y ;
       $GLOBALS["z"] = 500;
       
        echo "ตัวแปร x = ".$x."<br>";
        echo "ตัวแปร y = ".$y."<br>";
        //echo "ตัวแปร z = ".$z."<br>";
        return "นนทบุรี";
    }

    $City = Address();
    echo $City."<br>";
    echo "ตัวแปร z = ".$z."<br>";
    // echo "ตัวแปร y = ".$y."<br>";
?>