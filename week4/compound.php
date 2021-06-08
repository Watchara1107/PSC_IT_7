<?php
    $x = 10; 
    $y = 3;
    

    echo "การบวกเลขแบบปกติ<br>";
    $x = $x + $y;
    echo "$x"."+"."$y". "=" .$x;
    echo "<hr>";

    echo "การบวกเลขแบบCompound Assignment<br>";
    $x+=$y;
    echo $x;
    echo "<hr>";

    echo "การหาร % เลขแบบปกติ<br>";
    $x = $x % $y; //0
    echo $x;
    echo "<hr>";

    echo "การหาร % เลขแบบCompound Assignment<br>";
    $x%=$y;
    echo $x;
    echo "<hr>";
?>