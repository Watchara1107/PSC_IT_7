<?php 
    $product = array(
        array("Keyboard","แป้นพิมพ์",1500),
        array("Mouse","เมาส์",900),
        array("Speaker","ลำโพง",2500),
        array("Speaker","ลำโพง",2500),
        array("Mouse","เมาส์",900),
    );
   // echo $product[index ของแถว][index ของคอลัมน์];

    for($row=0;$row<count($product);$row++){
       
        for($column=0;$column<count($product[$row]);$column++){
            echo $product[$row][$column]."<br>";
        }
        echo "<hr>";
    }
?>