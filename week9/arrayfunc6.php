<?php 
    $colors =["red"=>"สีแดง", "yellow"=>"สีเหลือง","green"=>"สีเขียว"];
    if(array_key_exists("red",$colors)){
        echo "พบคีย์ yellow ใน array colors";
    }else{
        echo "ไม่พบข้อมูลที่ค้นหา";
    }

    echo "<hr>";
    $color =["red"=>"สีแดง", "yellow"=>"สีเหลือง","green"=>"สีเขียว"];
    if(in_array("สีเขียว",$color)){
        echo "พบข้อมูล";
    }else{
        echo "ไม่พบข้อมูลที่ค้นหา";
    }

?>