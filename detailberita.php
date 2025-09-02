<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Paduan Suara</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter Bold', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8fafc;
        }
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

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
            position: relative;
            z-index: 10;
            background: rgba(255, 255, 255, 0.2);  /* transparent white */
            backdrop-filter: blur(10px);           /* adds glass-like blur */
            /* rounded corners */
            border-radius: 40px;
            /* optional: subtle border for contrast */
            border: 1px solid rgba(255, 255, 255, 0.3);
            /* make navbar wrap content */
            padding: 10px 20px;
            height: fit-content;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.7);
        }

        .logo {
           width: 50px;
           height : 50px;
           flex: 0 0 auto;
        }

        .logo img {
            width: 50px;   /* ukuran logo */
            height: auto;  /* biar proporsional */
            object-fit: contain; 
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .nav-links a:hover {
            opacity: 0.8;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Breadcrumb */
        .breadcrumb {
            background: #fff;
            padding: 15px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .breadcrumb-content {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #64748b;
        }
        
        .breadcrumb a {
            color: #3b82f6;
            text-decoration: none;
        }
        
        .breadcrumb-separator {
            color: #cbd5e1;
        }
        
        /* Main Content */
        .main-content {
            padding: 40px 0;
        }
        
        .article-header {
            margin-bottom: 30px;
        }
        
        .article-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        /* Hero Section */
        .hero-section {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 40px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .hero-image {
            width: 100%;
            height: 600px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-image img{
            width: 100%;
            height: 100%;
            object-fit: cover; /* This will fit the image properly without zooming */
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        /*.hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.9) 0%, rgba(37, 99, 235, 0.8) 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
        }*/
        
        .hero-content h2 {
            color: white;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 16px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .hero-content .location {
            color: #e2e8f0;
            font-size: 1.1rem;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .hero-content .conductor {
            color: #fbbf24;
            font-size: 1rem;
            margin-bottom: 12px;
        }
        
        .hero-content .details {
            color: #e2e8f0;
            font-size: 0.95rem;
            line-height: 1.4;
        }
        
        .performance-image {
            width: 100%;
            height: 300px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 300"><rect fill="%23f1f5f9" width="800" height="300"/><g fill="%236b7280"><circle cx="150" cy="150" r="40"/><circle cx="250" cy="130" r="35"/><circle cx="350" cy="170" r="38"/><circle cx="450" cy="140" r="42"/><circle cx="550" cy="160" r="36"/><circle cx="650" cy="135" r="39"/></g><rect fill="%23dc2626" x="350" y="90" width="100" height="120" rx="8"/><text x="400" y="155" text-anchor="middle" fill="white" font-family="Arial" font-size="14">CONDUCTOR</text></svg>') center/cover;
            border-radius: 12px;
            margin: 20px 0;
        }
        
        /* Article Content */
        .article-content {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }
        
        .article-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #475569;
            margin-bottom: 30px;
        }
        
        /* Image Gallery */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .gallery-item {
            background: #f8fafc;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .gallery-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #f1f5f9 25%, transparent 25%), 
                        linear-gradient(-45deg, #f1f5f9 25%, transparent 25%), 
                        linear-gradient(45deg, transparent 75%, #f1f5f9 75%), 
                        linear-gradient(-45deg, transparent 75%, #f1f5f9 75%);
            background-size: 20px 20px;
            background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #94a3b8;
            font-size: 14px;
        }
        
        /* Share Section */
        .share-section {
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
            border-radius: 12px;
            padding: 30px;
            margin: 40px 0;
        }
        
        .share-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #0c4a6e;
            margin-bottom: 20px;
        }
        
        .share-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        
        .share-btn {
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .share-btn.linkedin {
            background: #0077b5;
            color: white;
        }
        
        .share-btn.twitter {
            background: #1da1f2;
            color: white;
        }
        
        .share-btn.instagram {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            color: white;
        }
        
        .share-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        /* Related News */
        .related-news {
            margin-top: 60px;
        }
        
        .related-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 30px;
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
        }
        
        .news-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .news-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .news-image {
            width: 100%;
            height: 180px;
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }
        
        .news-content {
            padding: 20px;
        }
        
        .news-category {
            background: #3b82f6;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 12px;
        }
        
        .news-date {
            color: #64748b;
            font-size: 0.85rem;
            margin-bottom: 8px;
        }
        
        .news-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1e293b;
            line-height: 1.4;
            margin-bottom: 12px;
        }
        
        .news-excerpt {
            color: #64748b;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        /* Footer */
        .footer {
            position : relative;
            background: url("image/footer.JPG") center/cover no-repeat;
            color: white;
            padding: 50px 0 30px;
            overflow: hidden;
        }

        .footer::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(44, 62, 80, 0.9); /* atur transparansi */
            z-index: 0;
        }

        .footer *{
            position: relative;
            z-index:1;

        }
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: #ecf0f1;
        }

        .footer-section p,
        .footer-section a {
            color: #bdc3c7;
            text-decoration: none;
            line-height: 1.8;
        }

        .footer-section a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: #34495e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
        }

        .social-links a:hover {
            background: #667eea;
        }

        .footer-bottom {
            border-top: 1px solid #34495e;
            padding-top: 20px;
            text-align: center;
            color: #bdc3c7;
          
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .article-title {
                font-size: 2rem;
            }
            
            .hero-content h2 {
                font-size: 1.5rem;
            }
            
            .article-content {
                padding: 24px;
            }
            
            .share-section {
                padding: 20px;
            }
            
            .news-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<?php
include 'koneksi.php';
//$id =  isset($_GET['id']) ? intval($_GET['id']) : 0;   
$id = 1;

$sql = "SELECT * FROM artikel WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $judul   = $row['judul'];
    $penulis = $row['penulis'];
    $tanggal = $row['tanggal'];
    $isi     = $row['isi'];
    $url     = $row['url']; // link gambar (Google Drive / lainnya)
} else {
    echo "Berita tidak ditemukan.";
    exit;
}
?>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo">
                   <img src="image/logo.PNG" alt="">
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#achievements">Prestasi</a></li>
                    <li><a href="#news">Berita</a></li>
                    <li><a href="#gallery">Galeri</a></li>
                    <li><a href="#recruitment">Rekrutmen</a></li>
                </ul>
            </nav>
    </header>
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <span class="breadcrumb-tag" style="background: #ddd6fe; color: #0e86d3; padding: 4px 8px; border-radius: 4px; font-size: 12px;">Press Release</span>
                <span class="breadcrumb-separator">•</span>
                 <span><?php echo date("d F Y", strtotime($tanggal)); ?></span>
                <span class="breadcrumb-separator">•</span>
                <a href="#"><?php echo $penulis; ?></a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <main class="main-content">
            <!-- Article Header -->
            <div class="article-header">
                <h1 class="article-title"> <?php echo $judul ?></h1>
            </div>

            <!-- Hero Section -->
            <div class="hero-section">
                <div class="hero-image">
                    <img src="image/header2.JPG" alt="">
                    <div class="hero-overlay">
                    </div>
                </div>
                
            </div>

            <!-- Article Content -->
            <div class="article-content">
                <div class="article-text">
                <p><?php echo nl2br($isi);?></p>

                <!-- Image Gallery -->
                <div class="image-gallery">
                    <div class="gallery-item">
                        <div class="gallery-image">Performance Photo 1</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-image">Performance Photo 2</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-image">Performance Photo 3</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-image">Performance Photo 4</div>
                    </div>
                </div>

                <!-- Share Section -->
                <div class="share-section">
                    <h3 class="share-title">Bagikan Berita</h3>
                    <div class="share-buttons">
                        <a href="#" class="share-btn linkedin">LinkedIn</a>
                        <a href="#" class="share-btn twitter">Twitter</a>
                        <a href="#" class="share-btn instagram">Instagram</a>
                    </div>
                </div>
            </div>

            <!-- Related News -->
            <section class="related-news">
                <h2 class="related-title">Berita Terkait</h2>
                <div class="news-grid">
                    <article class="news-card">
                        <div class="news-image">
                            <span>Group Photo</span>
                        </div>
                        <div class="news-content">
                            <span class="news-category">Berita UKM</span>
                            <div class="news-date">@darsinuriy</div>
                            <h3 class="news-title">Lorem ipsum dolor sit amet. Qui deleniti ratione et similique eaque sunt debitis</h3>
                            <p class="news-excerpt">by dimas budiatra</p>
                        </div>
                    </article>

                    <article class="news-card">
                        <div class="news-image">
                            <span>Group Photo</span>
                        </div>
                        <div class="news-content">
                            <span class="news-category">Berita UKM</span>
                            <div class="news-date">@darsinuriy</div>
                            <h3 class="news-title">Lorem ipsum dolor sit amet. Qui deleniti ratione et similique eaque sunt debitis</h3>
                            <p class="news-excerpt">by dimas budiatra</p>
                        </div>
                    </article>

                    <article class="news-card">
                        <div class="news-image">
                            <span>Group Photo</span>
                        </div>
                        <div class="news-content">
                            <span class="news-category">Berita UKM</span>
                            <div class="news-date">@darsinuriy</div>
                            <h3 class="news-title">Lorem ipsum dolor sit amet. Qui deleniti ratione et similique eaque sunt debitis</h3>
                            <p class="news-excerpt">by dimas budiatra</p>
                        </div>
                    </article>
                </div>
            </section>
        </main>
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
                        <a href="https://www.instagram.com/vocalistaparadisso/" target="_blank" rel="noopener noreferrer">📘</a>
                        <a href="https://www.tiktok.com/@vocalistaparadisso" target="_blank" rel="noopener noreferrer">📷</a>
                        <a href="https://x.com/PsmVP_UPN" target="_blank" rel="noopener noreferrer">🐦</a>
                        <a href="https://www.youtube.com/@VocalistaParadisso" target="_blank" rel="noopener noreferrer" >▶️</a>
                        <a href="https://www.linkedin.com/company/psm-vocalista-paradisso/posts/?feedView=all" target="_blank" rel="noopener noreferrer">💼</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Vocalista Paradisso. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        // Add smooth scrolling and interactive elements
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Share button functionality
        document.querySelectorAll('.share-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const platform = this.textContent.toLowerCase();
                const url = window.location.href;
                const title = document.querySelector('.article-title').textContent;
                
                let shareUrl = '';
                switch(platform) {
                    case 'linkedin':
                        shareUrl = `https://linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`;
                        break;
                    case 'twitter':
                        shareUrl = `https://twitter.com/intent/tweet?text=${encodeURIComponent(title)}&url=${encodeURIComponent(url)}`;
                        break;
                    case 'instagram':
                        // Instagram doesn't support direct sharing, so we'll show a message
                        alert('Copy the link to share on Instagram: ' + url);
                        return;
                }
                
                if (shareUrl) {
                    window.open(shareUrl, '_blank', 'width=600,height=400');
                }
            });
        });

        // News card hover effects
        document.querySelectorAll('.news-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.cursor = 'pointer';
            });
            
            card.addEventListener('click', function() {
                // Simulate navigation to article
                console.log('Navigating to article:', this.querySelector('.news-title').textContent);
            });
        });
    </script>
</body>
</html>