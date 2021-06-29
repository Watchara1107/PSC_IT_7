<?php 
$number = [10,20,30,10,20,30,10,20,30,40,40];
$fruit = ["ส้ม","มะละกอ","แอปเปิ้ล",
          "กล้วย","ขนุน","น้อยหน่า","กล้วย","องุ่น","แตงโม","ทุเรียน"];
// $total = count($fruit);
//     for($i=1;$i<$total;$i++){
//         echo $fruit[$i]."<br>";
//     }
  //echo $fruit[5];  

print_r(array_count_values($number));

?>