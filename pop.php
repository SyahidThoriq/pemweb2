<?php
    $siswa = ["Tian", "Asep", "Ahong", "Cipe"];

    //menampilkan data erray awal
    echo "Array awal : <br>";
    print_r($siswa);

    //menghapus elemen terakhir dari array
    $orang_terakhir = array_pop($siswa);

    //menampilkkan element yang dihapus 
    echo "<br> Element yang akan dihapus" . $orang_terakhir . "\n";

    //menampilkan element array setelah penghapusan
    echo "<br>Array setelah penghapusan : <br>";
    print_r($siswa);
?>