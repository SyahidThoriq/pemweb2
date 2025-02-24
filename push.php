<?php
    //array_push
    $komponen = ["mobo", "CPU", "RAM", "SSD", "GPU"];

    //menambahkan element di akhir array
    array_push($komponen, "PSU", "Cassing");


    echo "setelah Push<br>";
    foreach ($komponen as $k) {
        echo $k . "<br>";
    }
?>