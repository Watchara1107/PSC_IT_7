<?php 
    $fruits = [
        "มะละกอ",
        "ฝรั่ง",
        "กล้วย"
    ];
    array_push($fruits,"มะนาว"); //เพิ่มสมาชิก array ในตำแหน่งสุดท้าย
    array_push($fruits,"มะม่วง"); //เพิ่มสมาชิก array ในตำแหน่งสุดท้าย
    print_r($fruits);
    echo "<hr>";

    array_pop($fruits); //ลบสมาชิก array ในตำแหน่งสุดท้าย
    print_r($fruits);
    echo "<hr>";

    array_unshift($fruits,"แตงโม"); //เพิ่มสมาชิก array ในตำแหน่งแรก
    array_unshift($fruits,"น้อยหน่า"); //เพิ่มสมาชิก array ในตำแหน่งแรก
    print_r($fruits);
    echo "<hr>";

    array_shift($fruits); //ลบสมาชิก array ในตำแหน่งแรก
    print_r($fruits);
    echo "<hr>";

    //array_splice(ชื่อตัวแปร array,ตำแหน่งของ index,จำนวนที่ต้องลบ)
    array_splice($fruits,2,1); //ลบค่าสมาชิก array ในตำแหน่งที่ต้องการ
    print_r($fruits);
    echo "<hr>";
    array_splice($fruits,0,0,array("องุ่น","มังคุด"));//เพิ่มค่าสมาชิก array ในตำแหน่งที่ต้องการ
    print_r($fruits);
    echo "<hr>";
    
?>