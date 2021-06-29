<?php 
    $animals = [
        "dog"=>"สุนัข",
        "cat"=>"แมว",
        "pig"=>"หมู",
        "rabbit"=>"กระต่าย"
    ];

    while(list($en,$th) = each($animals)){
        echo "คำศัพท์ ".$en." แปลว่า ".$th."<br>";
    }
?>