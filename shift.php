<?php
$rokok = ["Samsu", "Esse",
"kretek", "Marlong", "Garpit"];

//menghaps elemen pertama
$awal = array_shift($rokok);
//hasil
echo "rokok yang di hapus : $awal";
echo " array setelah shift <br>";
foreach ($rokok as $r){
    echo"$r <br>";
}
?>