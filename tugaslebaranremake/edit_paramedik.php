<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Paramedik - Puskesmas Sehat Mandiri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #00a3a6;
            --primary-dark: #008789;
            --secondary: #f8f9fa;
            --dark: #343a40;
            --light: #f8f9fa;
            --success: #28a745;
            --danger: #dc3545;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 30px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .header h2 {
            color: var(--primary);
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(0, 163, 166, 0.2);
            outline: none;
        }
        
        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23343a40' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px 12px;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-back {
            background-color: #6c757d;
            margin-right: 10px;
        }
        
        .btn-back:hover {
            background-color: #5a6268;
        }
        
        .form-row {
            display: flex;
            gap: 20px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2><i class="fas fa-user-edit"></i> Edit Data Paramedik</h2>
            <p>Perbarui informasi paramedik di bawah ini</p>
        </div>
        
        <?php
        // Ambil data paramedik berdasarkan ID
        $id = $_GET['id'];
        $query = "SELECT * FROM paramedik WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $paramedik = mysqli_fetch_assoc($result);
        
        if (!$paramedik) {
            echo "<script>alert('Data paramedik tidak ditemukan'); window.location.href='index.php';</script>";
            exit();
        }
        ?>
        
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $paramedik['id']; ?>">
            
            <div class="form-row">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $paramedik['nama']; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select id="gender" name="gender" class="form-control" required>
                        <option value="L" <?php echo ($paramedik['gender'] == 'L') ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="P" <?php echo ($paramedik['gender'] == 'P') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control" value="<?php echo $paramedik['tmp_lahir']; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?php echo $paramedik['tgl_lahir']; ?>" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="kategori" class="form-control" required>
                        <option value="dokter" <?php echo ($paramedik['kategori'] == 'dokter') ? 'selected' : ''; ?>>Dokter</option>
                        <option value="perawat" <?php echo ($paramedik['kategori'] == 'perawat') ? 'selected' : ''; ?>>Perawat</option>
                        <option value="bidan" <?php echo ($paramedik['kategori'] == 'bidan') ? 'selected' : ''; ?>>Bidan</option>
                        <option value="farmasi" <?php echo ($paramedik['kategori'] == 'farmasi') ? 'selected' : ''; ?>>Farmasi</option>
                        <option value="analis" <?php echo ($paramedik['kategori'] == 'analis') ? 'selected' : ''; ?>>Analis Kesehatan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="unit_kerja_id">Unit Kerja</label>
                    <select id="unit_kerja_id" name="unit_kerja_id" class="form-control" required>
                        <?php
                        $unit_query = mysqli_query($conn, "SELECT * FROM unit_kerja");
                        while ($unit = mysqli_fetch_assoc($unit_query)) {
                            $selected = ($unit['id'] == $paramedik['unitkerja_id']) ? 'selected' : '';
                            echo "<option value='{$unit['id']}' $selected>{$unit['nama']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="tlpon">Nomor Telepon</label>
                    <input type="text" id="tlpon" name="tlpon" class="form-control" value="<?php echo $paramedik['telpon']; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $paramedik['alamat']; ?>" required>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <a href="index.php" class="btn btn-back"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" name="update" class="btn"><i class="fas fa-save"></i> Simpan Perubahan</button>
            </div>
        </form>
        
        <?php
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $nama = mysqli_real_escape_string($conn, $_POST['nama']);
            $gender = mysqli_real_escape_string($conn, $_POST['gender']);
            $tmp_lahir = mysqli_real_escape_string($conn, $_POST['tmp_lahir']);
            $tgl_lahir = mysqli_real_escape_string($conn, $_POST['tgl_lahir']);
            $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
            $telpon = mysqli_real_escape_string($conn, $_POST['tlpon']);
            $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
            $unit_kerja_id = mysqli_real_escape_string($conn, $_POST['unit_kerja_id']);

            $sql = "UPDATE paramedik SET 
                    nama = '$nama',
                    gender = '$gender',
                    tmp_lahir = '$tmp_lahir',
                    tgl_lahir = '$tgl_lahir',
                    kategori = '$kategori',
                    telpon = '$telpon',
                    alamat = '$alamat',
                    unitkerja_id = '$unit_kerja_id'
                    WHERE id = $id";
            
            if (mysqli_query($conn, $sql)) {
                echo "<script>
                    alert('Data paramedik berhasil diperbarui');
                    window.location.href = 'index.php';
                </script>";
            } else {
                echo "<script>
                    alert('Error: " . addslashes(mysqli_error($conn)) . "');
                </script>";
            }
        }
        ?>
    </div>
</body>
</html>