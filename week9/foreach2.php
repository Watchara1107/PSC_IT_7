<?php 
    $product = array(
        array("Keyboard","แป้นพิมพ์",1500),
        array("Mouse","เมาส์",900),
        array("Speaker","ลำโพง",2500),
    );
    foreach($product as $pro){
        echo "ชื่อสินค้า (EN) = ".$pro[0]."<br>";
        echo "ชื่อสินค้า (TH) = ".$pro[1]."<br>";
        echo "ราคา = ".$pro[2]."<br>";
        echo "<hr>";
    }

?>