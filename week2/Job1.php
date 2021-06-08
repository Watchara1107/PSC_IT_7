<?php
    $name = "นายสรรเพชร หอมนวล";
    $no = 1;
    $class = "ระดับชั้น ปวช.3/5";

    echo "ชนิดของข้อมูล <br>";
    echo $name."มีชนิดของข้อมูลเป็น".gettype($name)."<br>";
    echo "เลขที่".$no."มีชนิดของข้อมูลเป็น".gettype($no)."<br>";
    echo $class."มีชนิดของข้อมูลเป็น".gettype($class)."<br>";
?>