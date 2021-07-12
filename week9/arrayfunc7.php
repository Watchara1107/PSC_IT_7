<?php 
    $arr1 =["red"=>"สีแดง", "yellow"=>"สีเหลือง","green"=>"สีเขียว"];
    $arr2 = ["A"=>20, "B"=>15, "C"=>30, "B"=>15, "D"=>10, "D"=>10];
    $result = array_merge($arr1,$arr2);
    print_r($result);
    echo "<hr>";

    $result1 = array_merge_recursive($arr1,$arr2);
    print_r($result1);
    echo "<hr>";

    $arr3 = array('green', 'red', 'yellow');
    $arr4 = array('avocado', 'apple', 'banana');
    $result2 = array_combine($arr3,$arr4);
    print_r($result2);

?>