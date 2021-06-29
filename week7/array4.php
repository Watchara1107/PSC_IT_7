<?php 
    $animals = [
        "dog"=>"สุนัข",
        "cat"=>"แมว",
        "pig"=>"หมู",
        "rabbit"=>"กระต่าย"
    ];

    while($item = each($animals)){
        echo "คำศัพท์ ".$item["key"]." แปลว่า ".$item["value"]."<br>";
    }
?>