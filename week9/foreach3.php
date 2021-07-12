<?php 
    $product = array(
        array("EN"=>"Keyboard","TH"=>"แป้นพิมพ์","Price"=>1500),
        array("EN"=>"Mouse","TH"=>"เมาส์","Price"=>900),
        array("EN"=>"Speaker","TH"=>"ลำโพง","Price"=>2500),
    );
    foreach($product as $pro){
        echo "ชื่อสินค้า (EN) = ".$pro["EN"]."<br>";
        echo "ชื่อสินค้า (TH) = ".$pro["TH"]."<br>";
        echo "ราคา = ".$pro["Price"]."<br>";
        echo "<hr>";
    }

?>