<?php
$laptop = ["Asus", "Lenovo",
 "Dell","realme"];

//menambahkan elemn di awal
array_unshift($laptop, "HP","acer");
//hasil
echo "hasil";
foreach ($laptop as $p){
    echo "<br>".$p;
} 