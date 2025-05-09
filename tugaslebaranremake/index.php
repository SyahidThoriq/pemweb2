<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas Sehat Mandiri | Sistem Manajemen Paramedik</title>
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
            --warning: #fd7e14;
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
        }
        
        /* Header */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            margin-right: 15px;
        }
        
        .logo-text h1 {
            font-size: 1.5rem;
            color: var(--primary);
            font-weight: 700;
        }
        
        .logo-text p {
            font-size: 0.8rem;
            color: var(--dark);
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            margin-left: 2rem;
        }
        
        .nav-menu a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }
        
        .nav-menu a:hover {
            color: var(--primary);
        }
        
        .nav-menu a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .nav-menu a:hover:after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 2px solid var(--primary);
        }
        
        .btn:hover {
            background-color: transparent;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid white;
            margin-left: 1rem;
        }
        
        .btn-outline:hover {
            background-color: white;
            color: var(--primary);
        }
        
        /* Section Styling */
        .section {
            padding: 5rem 5%;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: var(--primary);
            bottom: -10px;
            left: 25%;
        }
        
        .section-title p {
            color: #666;
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        /* Services */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .service-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-img {
            height: 200px;
            overflow: hidden;
        }
        
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .service-card:hover .service-img img {
            transform: scale(1.1);
        }
        
        .service-content {
            padding: 1.5rem;
        }
        
        .service-content h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        
        /* Paramedik Section */
        .paramedik-section {
            background-color: white;
        }
        
        .paramedik-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .paramedik-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .paramedik-table thead tr {
            background-color: var(--primary);
            color: white;
            text-align: left;
        }
        
        .paramedik-table th,
        .paramedik-table td {
            padding: 1rem;
        }
        
        .paramedik-table tbody tr {
            border-bottom: 1px solid #eee;
            transition: all 0.2s ease;
        }
        
        .paramedik-table tbody tr:last-of-type {
            border-bottom: 2px solid var(--primary);
        }
        
        .paramedik-table tbody tr:hover {
            background-color: #f5f5f5;
        }
        
        .action-links a {
            color: var(--primary);
            margin-right: 1rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        
        .action-links a.edit:hover {
            color: var(--warning);
        }
        
        .action-links a.delete:hover {
            color: var(--danger);
        }
        
        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        
        .about-img {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .about-img img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }
        
        .footer-col h3 {
            color: var(--primary);
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }
        
        .footer-col p,
        .footer-col a {
            color: #bbb;
            margin-bottom: 0.8rem;
            display: block;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-col a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .about-content {
                grid-template-columns: 1fr;
            }
            
            .about-img {
                order: -1;
            }
        }
        
        @media (max-width: 768px) {
            .navbar-container {
                flex-direction: column;
                padding: 1rem;
            }
            
            .logo {
                margin-bottom: 1rem;
            }
            
            .nav-menu {
                margin-top: 1rem;
            }
            
            .nav-menu li {
                margin-left: 1rem;
                margin-right: 1rem;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .btn {
                display: block;
                width: 100%;
                margin-bottom: 1rem;
            }
            
            .btn-outline {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <img src="https://via.placeholder.com/50x50?text=PSM" alt="Logo Puskesmas">
                <div class="logo-text">
                    <h1>Puskesmas Sehat Mandiri</h1>
                    <p>Melayani dengan hati, menjaga dengan ilmu</p>
                </div>
            </div>
            <ul class="nav-menu">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#paramedik">Paramedik</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Pelayanan Kesehatan Prima untuk Masyarakat</h1>
            <p>Puskesmas Sehat Mandiri memberikan pelayanan kesehatan terpadu dengan fasilitas modern dan tenaga medis profesional yang siap melayani Anda 24/7.</p>
            <div>
                <a href="#layanan" class="btn">Lihat Layanan Kami</a>
                <a href="#paramedik" class="btn btn-outline">Kelola Paramedik</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="layanan">
        <div class="section-title">
            <h2>Layanan Kami</h2>
            <p>Berbagai layanan kesehatan unggulan yang kami sediakan untuk masyarakat</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-img">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Poli Umum">
                </div>
                <div class="service-content">
                    <h3>Poli Umum</h3>
                    <p>Pelayanan kesehatan dasar untuk semua usia dengan dokter umum berpengalaman.</p>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Poli Gigi">
                </div>
                <div class="service-content">
                    <h3>Poli Gigi</h3>
                    <p>Pelayanan kesehatan gigi dan mulut dengan peralatan modern dan dokter gigi profesional.</p>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="KIA">
                </div>
                <div class="service-content">
                    <h3>KIA</h3>
                    <p>Pelayanan Kesehatan Ibu dan Anak dengan pendekatan ramah keluarga.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Paramedik Section -->
<section class="section paramedik-section" id="paramedik">
    <div class="section-title">
        <h2>Manajemen Paramedik</h2>
        <p>Sistem terpadu pengelolaan data tenaga kesehatan di Puskesmas Sehat Mandiri</p>
    </div>
    
    <div class="container">
        <div class="paramedik-header">
            <h3>Daftar Tenaga Paramedik</h3>
            <a href="tambah_paramedik.php" class="btn">
                <i class="fas fa-plus"></i> Tambah Paramedik
            </a>
        </div>
        
        <?php include 'config.php'; ?>
        <table class="paramedik-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Kategori</th>
                    <th>Unit Kerja</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk mengambil data paramedik beserta nama unit kerjanya
                $sql = "SELECT p.*, u.nama AS unit FROM paramedik p
                        LEFT JOIN unit_kerja u ON p.unitkerja_id = u.id";
                
                $result = mysqli_query($conn, $sql);
                
                if (!$result) {
                    echo "<tr><td colspan='5'>Error: " . mysqli_error($conn) . "</td></tr>";
                } else {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>{$row['nama']}</td>
                                <td>" . ($row['gender'] == 'L' ? 'Laki-laki' : 'Perempuan') . "</td>
                                <td>{$row['kategori']}</td>
                                <td>{$row['unit']}</td>
                                <td class='action-links'>
                                    <a href='edit_paramedik.php?id={$row['id']}' class='edit' title='Edit'>
                                        <i class='fas fa-edit'></i>
                                    </a>
                                    <a href='hapus_paramedik.php?id={$row['id']}' class='delete' title='Hapus'>
                                        <i class='fas fa-trash'></i>
                                    </a>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Tidak ada data paramedik</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

    <!-- About Section -->
    <section class="section" id="tentang">
        <div class="section-title">
            <h2>Tentang Kami</h2>
            <p>Mengenal lebih dekat Puskesmas Sehat Mandiri</p>
        </div>
        <div class="about-content">
            <div class="about-text">
                <h3>Visi dan Misi</h3>
                <p>Puskesmas Sehat Mandiri merupakan unit pelaksana teknis dinas kesehatan yang bertanggung jawab menyelenggarakan pembangunan kesehatan di wilayah kerjanya.</p>
                <p>Kami berkomitmen untuk memberikan pelayanan kesehatan yang bermutu, merata, terjangkau, dan berkesinambungan kepada seluruh masyarakat di wilayah kerja kami.</p>
                <p>Dengan tenaga medis yang profesional dan fasilitas yang memadai, kami siap melayani kebutuhan kesehatan Anda dengan sepenuh hati.</p>
                <a href="#kontak" class="btn">Hubungi Kami</a>
            </div>
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1566669437687-7040a6926753?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Puskesmas Sehat Mandiri">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="kontak">
        <div class="section-title">
            <h2>Kontak Kami</h2>
            <p>Silakan hubungi kami untuk informasi lebih lanjut</p>
        </div>
        <div class="about-content">
            <div class="about-img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8191613506394!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x9cb5e6e7b5e7b5e7!2sPuskesmas%20Sehat%20Mandiri!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="about-text">
                <h3>Informasi Kontak</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Kesehatan No. 123, Jakarta Selatan</p>
                <p><i class="fas fa-phone"></i> (021) 12345678</p>
                <p><i class="fas fa-envelope"></i> info@puskesmas-sehatmandiri.id</p>
                <p><i class="fas fa-clock"></i> Senin-Jumat: 07.00-21.00 WIB</p>
                <p><i class="fas fa-clock"></i> Sabtu-Minggu: 08.00-15.00 WIB</p>
                
                <div class="social-links" style="margin-top: 2rem;">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3>Tentang Kami</h3>
                <p>Puskesmas Sehat Mandiri memberikan pelayanan kesehatan terpadu dengan fasilitas modern dan tenaga medis profesional.</p>
            </div>
            <div class="footer-col">
                <h3>Layanan</h3>
                <a href="#">Poli Umum</a>
                <a href="#">Poli Gigi</a>
                <a href="#">KIA</a>
                <a href="#">Laboratorium</a>
            </div>
            <div class="footer-col">
                <h3>Link Cepat</h3>
                <a href="#home">Beranda</a>
                <a href="#layanan">Layanan</a>
                <a href="#paramedik">Paramedik</a>
                <a href="#tentang">Tentang Kami</a>
                <a href="#kontak">Kontak</a>
            </div>
            <div class="footer-col">
                <h3>Kontak</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Kesehatan No. 123, Jakarta</p>
                <p><i class="fas fa-phone"></i> (021) 12345678</p>
                <p><i class="fas fa-envelope"></i> info@puskesmas-sehatmandiri.id</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Puskesmas Sehat Mandiri. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</body>
</html>