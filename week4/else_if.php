<?php 
    $score  = 100;
    if($score>=50 && $score<60){
        echo "เกรด D";
    }elseif($score>=60 && $score<70){
        echo "เกรด C";
    }elseif($score>=70 && $score<80){
        echo "เกรด B";
    }elseif($score>=80){
        echo "เกรด A";
    }else{
        echo "เกรด F";
    }

    // ให้ผลลัพธ์แสดง เกรด A แต่ห้ามไปแก้จุดอื่นให้แก้เฉพาพในวงเล็บของเงื่อนไขเท่านั้น
?>