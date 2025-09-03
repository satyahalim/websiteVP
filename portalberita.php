<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Choir Gallery Section</title>
    <style>

        /* Header */
         .header {
            background: url('image/header2.JPG') center/cover no-repeat;
            color: white;
            padding: 50px 0;
            position: relative;
            overflow: visible;
        }
        
        .header::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 48, 95,0.4); /* atur transparansi */
            z-index: 0;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .main-container {
            padding: 30px 0px 20px 0px;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 20px;
        }

        .content-section {
            background: #ffffff;
            border-radius: 10px;
            padding: 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .featured-article {
            position: relative;
            height: 350px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 350"><rect width="600" height="350" fill="%23f0f0f0"/><text x="50%" y="45%" text-anchor="middle" fill="%23666" font-size="14" font-family="Arial">Tokyo International Choir Competition</text><rect x="50" y="200" width="500" height="80" fill="%23333" opacity="0.7"/><text x="70" y="230" fill="white" font-size="12" font-family="Arial">Choir performers on stage</text></svg>') center/cover;
            color: white;
            overflow: hidden;
        }

        .featured-article img{
            width: 100%;
            height: 100%;
            object-fit: cover; /* This will fit the image properly without zooming */
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .featured-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            padding: 30px 20px 20px;
        }

        .featured-title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .featured-description {
            font-size: 13px;
            opacity: 0.9;
            margin-bottom: 15px;
        }

        .learn-more-btn {
            background: #3498db;
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 12px;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .learn-more-btn:hover {
            background: #2980b9;
            transform: translateY(-1px);
        }

        .gallery-section {
            padding: 20px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .gallery-card {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .gallery-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .gallery-image {
            height: 140px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280 140"><rect width="280" height="140" fill="%23e74c3c"/><text x="50%" y="30%" text-anchor="middle" fill="white" font-size="10" font-family="Arial">11th INTERNATIONAL</text><text x="50%" y="45%" text-anchor="middle" fill="white" font-size="10" font-family="Arial">CHOIR FESTIVAL 2023</text><rect x="20" y="60" width="240" height="60" fill="%23333" opacity="0.6"/><text x="50%" y="85%" text-anchor="middle" fill="white" font-size="8" font-family="Arial">Group photo of choir participants</text></svg>') center/cover;
            position: relative;
        }
        .gallery-image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .gallery-content {
            padding: 15px;
        }

        .gallery-description {
            font-size: 13px;
            line-height: 1.4;
            margin-bottom: 8px;
            color: #333333;
        }

        .gallery-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .gallery-author {
            font-size: 11px;
            color: #3498db;
        }

        .gallery-date {
            font-size: 11px;
            color: #999999;
        }

        .gallery-btn {
            background: #3498db;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 11px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-btn:hover {
            background: #2980b9;
            transform: scale(1.05);
        }

        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sidebar-section {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            background: #3498db;
            color: white;
            padding: 12px 15px;
            font-weight: bold;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sidebar-badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 10px;
        }

        .sidebar-content {
            padding: 15px;
        }

        .sidebar-item {
            display: flex;
            gap: 12px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .sidebar-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .sidebar-image {
            width: 60px;
            height: 45px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 45"><rect width="60" height="45" fill="%23e74c3c"/><text x="50%" y="55%" text-anchor="middle" fill="white" font-size="6" font-family="Arial">Choir Event</text></svg>') center/cover;
            border-radius: 5px;
            flex-shrink: 0;
        }

        .sidebar-text-content {
            flex: 1;
        }

        .sidebar-text {
            font-size: 12px;
            line-height: 1.3;
            margin-bottom: 5px;
            color: #333333;
        }

        .sidebar-author {
            font-size: 10px;
            color: #3498db;
            margin-bottom: 8px;
        }

        .sidebar-learn-btn {
            background: #3498db;
            color: white;
            border: none;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .sidebar-learn-btn:hover {
            background: #2980b9;
            transform: scale(1.05);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            padding: 20px;
        }

        .pagination-btn {
            background: #ffffff;
            color: #333333;
            border: 1px solid #ddd;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .pagination-btn:hover {
            background: #f8f9fa;
            border-color: #3498db;
        }

        .pagination-btn.active {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }


        /* Responsive */
        @media (max-width: 768px) {
            .main-container {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
            }
            
            .featured-title {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo">
                   <img src="image/logo.PNG" alt="">
                </div>
                <ul class="nav-links">
                    <li><a href="home.php">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#achievements">Prestasi</a></li>
                    <li><a href="portalberita.php">Berita</a></li>
                    <li><a href="#gallery">Galeri</a></li>
                    <li><a href="#recruitment">Rekrutmen</a></li>
                </ul>
            </nav>
    </header>
   <div class="main-container">
        <!-- Main Content Section -->
        <div class="content-section">
            <!-- Featured Article -->
            <div class="featured-article">
                <img src="image/tentangkami.jpg" alt="Gambar">
                <div class="featured-overlay">
                    <h2 class="featured-title">Portal Berita Vocalista Paradisso</h2>
                    <p class="featured-description">Segala aktivitas UKM kami sajikan dalam berita yang menarik dan berkualitas</p>
                </div>
            </div>
            
            <div class="gallery-section">
                <!-- Gallery Grid -->
                <div class="gallery-grid">
    <?php
    include "koneksi.php";

    // Ambil semua data artikel urut dari terbaru
    $sql = "SELECT * FROM artikel ORDER BY tanggal DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $judul   = $row['judul'];
            $penulis = $row['penulis'];
            $tanggal = $row['tanggal'];
            $isi     = $row['isi'];
            $url     = $row['url']; // link gambar
    ?>
            <!-- Gallery Card -->
            <div class="gallery-card">
                <div class="gallery-image">
                    <img src="<?php echo $url; ?>" alt="artikel">
                </div>
                <div class="gallery-content">
                        <p class="gallery-description"><?php echo $judul; ?></p>
                        <div class="gallery-meta">
                            <p class="gallery-author">by <?php echo $penulis; ?></p>
                            <span class="gallery-date"><?php echo date("d F Y", strtotime($tanggal)); ?></span>
                        </div>
                        <a href="detail.php?id=<?php echo $row['id']; ?>">
                            <button class="gallery-btn">Learn More</button>
                        </a>
                </div>
            </div>
            <?php
                }
            } else {
                echo "<p>Tidak ada berita tersedia.</p>";
            }
            ?>
        </div>

                <!-- Pagination -->
                <div class="pagination">
                    <button class="pagination-btn">« Sebelumnya</button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">3</button>
                    <button class="pagination-btn">Selanjutnya »</button>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-section">
                <div class="sidebar-header">
                    BERITA TERKINI
                    <span class="sidebar-badge">1 BULAN LALU</span>
                </div>
                
                <div class="sidebar-content">
                    <div class="sidebar-item">
                        <div class="sidebar-image"></div>
                        <div class="sidebar-text-content">
                            <p class="sidebar-text">Lorem ipsum dolor sit amet. Qui laudantium ratione et similique accusantium dolores</p>
                            <p class="sidebar-author">by samuel santoso</p>
                            <button class="sidebar-learn-btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Tentang Kami</h3>
                    <p>Vocalista Paradisso yang berarti "Suara dari Surga" merupakan Unit
                        Kegiatan Mahasiswa Paduan Suara di Universitas Pembangunan Nasional
                        “Veteran” Yogyakarta.</p>
                </div>
                <div class="footer-section">
                    <h3>Email</h3>
                    <p>vocalistaparadisso.choir@gmail.com</p>
                  
                    <h3 style="margin-top: 20px;">Narahubung</h3>
                    <p>+62 819 0522 3737 (Kenaya)</p>
                    <p>+62 896 5361 3366 (Rahma)</p>
                </div>
                <div class="footer-section">
                    <h3>Sekretariat UKM</h3>
                    <p>Jl. SWK 104 (Lingkar Utara)<br>
                    Condong Catur, Sleman, Yogyakarta<br></p>
                    
                    <div class="social-links">
                       <a href="https://www.instagram.com/vocalistaparadisso/" target="_blank" rel="noopener noreferrer">
                            <img src="assets/IG.svg" alt="instagram" width="40" height="40">
                        </a>
                        <a href="https://www.tiktok.com/@vocalistaparadisso" target="_blank" rel="noopener noreferrer">
                             <img src="assets/Tiktok.svg" alt="tiktok" width="40" height="40">
                        </a>
                        <a href="https://x.com/PsmVP_UPN" target="_blank" rel="noopener noreferrer">
                             <img src="assets/X.svg" alt="Twitter" width="40" height="40">
                        </a>
                        <a href="https://www.youtube.com/@VocalistaParadisso" target="_blank" rel="noopener noreferrer" >
                             <img src="assets/Ytb.svg" alt="Youtube" width="40" height="40">
                        </a>
                        <a href="https://www.linkedin.com/company/psm-vocalista-paradisso/posts/?feedView=all" target="_blank" rel="noopener noreferrer">
                             <img src="assets/LinkedIn.svg" alt="LinkedIn" width="40" height="40">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Vocalista Paradisso. All rights reserved.</p>
            </div>
        </div>
</footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gallery card interactions
            const galleryCards = document.querySelectorAll('.gallery-card');
            galleryCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.15)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.1)';
                });
            });

            // Pagination functionality
            const paginationBtns = document.querySelectorAll('.pagination-btn');
            paginationBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    paginationBtns.forEach(b => b.classList.remove('active'));
                    
                    // Add active class to clicked button (if it's a number)
                    if (!this.textContent.includes('Sebelumnya') && !this.textContent.includes('Selanjutnya')) {
                        this.classList.add('active');
                    }
                    
                    console.log('Page changed to:', this.textContent);
                });
            });

            // Button click handlers
            const allBtns = document.querySelectorAll('button, .learn-more-btn');
            allBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    if (!this.classList.contains('pagination-btn')) {
                        e.preventDefault();
                        
                        // Add click animation
                        this.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            this.style.transform = '';
                        }, 150);
                        
                        console.log('Button clicked:', this.textContent);
                    }
                });
            });
        });
    </script>
</body>
</html>