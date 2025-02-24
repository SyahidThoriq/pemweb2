<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Php</title>
</head>
<body>
    <h1>Selamat di phpin</h1>
    <?php
    $_nama ="nurul fikri";
    $_umur = 20;
    $_prodi = "teknik informatika";
    $_ipk = 3.5;


?>
<p>nama : <?php echo $_nama; ?></p>
<p>umur : <?php echo $_umur;?></p>
<p>prodi : <?php echo $_prodi;?></p>
<p>ipk : <?php echo $_ipk;?></p>
    
<hr>
<p><?php= 'nama saya adalah '$_nama.' dan saya berumur 22 tahun'; ?></p>
</body>
</html>