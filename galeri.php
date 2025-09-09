<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="image/vp.ico">
    <title>Galeri - Vocalista Paradisso</title>
    <style>
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        /* Header */
        .header {
        background: url('image/tentangkami.jpg') center/cover no-repeat;
        color: white;
        padding: 20px 0;
        position: relative;
        overflow: hidden;
        }
        
        .header::before {
        content:"";
        position:absolute; 
        top:0; left:0; right:0; bottom:0;
        background:rgba(0,0,0,0.5); 
        z-index:0;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* Hero Section */
        .hero {
            text-align:center; 
            padding:45px 0; 
            position:relative; 
            z-index:10;
        }

        .hero h1 {
            font-size:85px; 
            font-weight:bold; 
            margin-bottom:5px;
        }

        .hero p {
            font-size:65px; 
            opacity:0.9;
        }
            

        /* Filter Buttons */
        .filter-container {
            max-width: 1200px;
            margin: 4rem auto 2rem;
            text-align: center;
            padding: 0 2rem;
        }

        .filter-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .filter-btn {
        background: transparent;                 /* fully transparent */
        color: #64b5f6;                          /* primary color for text */
        border: 2px solid #64b5f6;               /* outlined border */
        padding: 0.8rem 2rem;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s;
        font-weight: 500;
      }

        /* Hover & active state */
        .filter-btn:hover,
        .filter-btn.active {
            background: #64b5f6;                     /* fill color */
            color: white;                            /* contrast text */
            transform: translateY(-2px);
        }

        /* Gallery Grid */
        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem 4rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .gallery-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .gallery-item-image {
            height: 350px;
            background: linear-gradient(45deg, #2a5298, #64b5f6);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .gallery-item-image img{
            height:100%;
            width: 100%;
            object-fit: cover;
        }


        .gallery-item h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #64b5f6;
        }

        .gallery-item p {
            margin-bottom: 0.5rem;
            opacity: 0.9;
        }

        .gallery-item .date {
            color: #64b5f6;
            font-weight: 500;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }

        .pagination a {
        color: #64b5f6;
        padding: 0.4rem 0.8rem;   /* smaller padding */
        font-size: 0.85rem;       /* slightly smaller text */
        text-decoration: none;
        background: transparent;
        border: 2px solid #64b5f6;
        border-radius: 6px;       /* smaller corner radius */
        transition: all 0.3s;
        font-weight: 500;
         }

        /* Hover & active */
        .pagination a:hover,
        .pagination a.active {
            background: #64b5f6;           /* filled when active/hover */
            color: white;                  /* invert text */
        }

        .pagination .prev,
        .pagination .next {
            background: #64b5f6;
            color: white;
            padding: 0.4rem 0.8rem;   /* smaller */
            font-size: 0.85rem;
            }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.2rem;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .footer-bottom-content {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
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
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="#recruitment">Rekrutmen</a></li>
                </ul>
            </nav>
        <section class="hero">
        <div class="hero-content">
            <h1>GALLERY KEGIATAN</h1>
            <p>VOCALISTA PARADISSO</p>
        </div>
    </section>
    </header>

    <!-- Filter Buttons -->
    <div class="filter-container">
        <div class="filter-buttons">
          <div class="filter-buttons">
            <a href="?category=all" class="filter-btn <?php echo (!isset($_GET['category']) || $_GET['category'] == 'all') ? 'active' : ''; ?>">Semua</a>
            <a href="?category=kompetisi" class="filter-btn <?php echo (isset($_GET['category']) && $_GET['category'] == 'kompetisi') ? 'active' : ''; ?>">Kompetisi</a>
            <a href="?category=konser" class="filter-btn <?php echo (isset($_GET['category']) && $_GET['category'] == 'konser') ? 'active' : ''; ?>">Konser</a>
            <a href="?category=internal" class="filter-btn <?php echo (isset($_GET['category']) && $_GET['category'] == 'internal') ? 'active' : ''; ?>">Internal</a>
            <a href="?category=job" class="filter-btn <?php echo (isset($_GET['category']) && $_GET['category'] == 'job') ? 'active' : ''; ?>">Job Event</a>
         </div>
        </div>
    </div>
   <?php
        include 'koneksi.php';

        // Tentukan jumlah item per halaman
        $limit = 9;

        // Cek halaman aktif (default 1)
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        if ($page < 1) $page = 1;

        // Hitung offset
        $offset = ($page - 1) * $limit;

        //CEK KATEGORI
        $category = isset($_GET['category']) ? $_GET['category']:'all';
        $where = '';
        if($category !='all'){
            $where = "WHERE kategori = '" . $conn->real_escape_string($category) . "'";
        }

        // Ambil total data
        $total_sql = "SELECT COUNT(*) as total FROM galeri $where";
        $total_result = $conn->query($total_sql);
        $total_row = $total_result->fetch_assoc();
        $total_items = $total_row['total'];

        // Hitung total halaman
        $total_pages = ceil($total_items / $limit);

        // Query data dengan LIMIT & OFFSET
        $sql = "SELECT * FROM galeri $where ORDER BY id DESC LIMIT $limit OFFSET $offset";
        $result = $conn->query($sql);
        ?>

        <!-- Gallery Grid -->
        <div class="gallery-container">
            <div class="gallery-grid">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id       = $row['id'];
                        $url      = $row['url'];
                        $kategori = $row['kategori'];
                ?>
                    <div class="gallery-item">
                        <div class="gallery-item-image">
                            <img src="<?php echo $url; ?>" alt="Galeri <?php echo $id; ?>">
                        </div>
                    </div>
                <?php
                    }
                } else {
                    echo "<p>Tidak ada data galeri.</p>";
                }
                ?>
            </div>

             <!-- Pagination -->
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?category=<?php echo $category; ?>&page=<?php echo $page - 1; ?>" class="prev">« Sebelumnya</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="?category=<?php echo $category; ?>&page=<?php echo $i; ?>" class="<?php echo ($i == $page) ? 'active' : ''; ?>">
                        <?php echo $i; ?>
                    </a>
                <?php endfor; ?>

                <?php if ($page < $total_pages): ?>
                    <a href="?category=<?php echo $category; ?>&page=<?php echo $page + 1; ?>" class="next">Selanjutnya »</a>
                <?php endif; ?>
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
        // Filter functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                // Here you would implement actual filtering logic
                console.log('Filter clicked:', this.textContent);
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(42, 82, 152, 0.95)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.1)';
            }
        });
    </script>
</body>
</html>