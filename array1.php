<?php 
    $ar_buah = ["Semangka", "Duren", "Mangga", "Pisang"];
    echo "buah ke 2 adalah $ar_buah[2]";

    echo "<br> Jumlah array" . count($ar_buah);


    //mencetak seluruh buah
    echo '<ol>';
    foreach ($ar_buah as $buah) {
        echo '<li>' . $buah . '</li>';
    };

    echo '</ol>';

    //menambah buah index ke 1
    $ar_buah[]="Nanas";

    //menghapus buah index ke 1
    unset($ar_buah[1]);

    //ubah index ke 4 menjadi melon
    $ar_buah[4]="Melon";

    //mencetak seluruh buah dengan indexnya
    echo '<ul>';
    foreach ($ar_buah as $ak => $av) {
        echo '<li>Index: ' . $ak . '- nama buah: ' . $av . '</li>';
    }
    echo '</ul>';


?>