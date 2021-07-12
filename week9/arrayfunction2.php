<?php 
    $number = array(10,2,5,20,15,7,9,6,);

    foreach($number as $num){
        echo "ตัวเลข".$num."\t";
    }
    echo "<br>";
    echo "<hr>";

    sort($number); //เรียงจากน้อยไปมาก
    foreach($number as $num){
        echo $num."\t";
    }
    echo "<br>";
    echo "<hr>";

    rsort($number); //เรียงจากมากไปน้อย
    foreach($number as $num){
        echo $num."\t";
    }
    echo "<br>";
    echo "<hr>";




    $fruits = ["มะละกอ","ฝรั่ง","กล้วย"];
    print_r($fruits);
    echo "<hr>";
    sort($fruits); //เรียงจากพยัญชนะไปสระ
    foreach($fruits as $f){
        echo $f."\t";
    }

    echo "<hr>";
    rsort($fruits); //เรียงจากสระไปพยัญชนะ
    foreach($fruits as $f){
        echo $f."\t";
    }

?>