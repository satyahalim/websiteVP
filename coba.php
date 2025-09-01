<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocalista Paradisso</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter Bold', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: url('image/CC.JPG') center/cover no-repeat;
            color: white;
            padding: 20px 0;
            position: relative;
            overflow: hidden;
           
        }
        .header .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: 1;
        }
        .header::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.4); /* atur transparansi */
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

        .hero {
            text-align: left;
            padding: 80px 0;
            position: relative;
            z-index: 10;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #0e86d3;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background: #0e86d3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: #667eea;
        }

        /* About Section */
        .about {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-image {
        height: 400px;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
        /* Remove the gradient and flex properties */
        }

        .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* This will fit the image properly without zooming */
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .about-text h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
            color: #055b9d
        }

        .about-text p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        /* Stats Section */
        .stats {
            padding: 60px 0;
            background: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-item {
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-item:nth-child(1) { background: linear-gradient(135deg, #667eea, #764ba2); color: white; }
        .stat-item:nth-child(2) { background: linear-gradient(135deg, #f093fb, #f5576c); color: white; }
        .stat-item:nth-child(3) { background: linear-gradient(135deg, #4facfe, #00f2fe); color: white; }

        .stat-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Achievements Section */
        .achievements {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .section-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 50px;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .achievement-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .achievement-card:hover {
            transform: translateY(-5px);
        }

        .achievement-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .achievement-card:nth-child(1) .achievement-icon { color: #FFD700; }
        .achievement-card:nth-child(2) .achievement-icon { color: #C0C0C0; }
        .achievement-card:nth-child(3) .achievement-icon { color: #CD7F32; }

        .achievement-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .achievement-desc {
            color: #666;
            font-size: 0.9rem;
        }

        /* News Section */
        .news {
            padding: 80px 0;
            background: white;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .news-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
        }

        .news-image {
            height: 200px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }

        .news-content {
            padding: 25px;
        }

        .news-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .news-desc {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* Gallery Section */
        .gallery {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            height: 200px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-item:nth-child(2n) {
            background: linear-gradient(45deg, #f093fb, #f5576c);
        }

        .gallery-item:nth-child(3n) {
            background: linear-gradient(45deg, #4facfe, #00f2fe);
        }

        /* Recruitment Section */
        .recruitment {
            padding: 80px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
        }

        .recruitment h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .recruitment p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
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

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .about-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .achievements-grid,
            .news-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Animation for cards */
        .card-animate {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
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
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#achievements">Prestasi</a></li>
                    <li><a href="#news">Berita</a></li>
                    <li><a href="#gallery">Galeri</a></li>
                    <li><a href="#recruitment">Rekrutmen</a></li>
                </ul>
            </nav>
            
            <div class="hero" id="home">
                <h1 >Vocalista Paradisso</h1>
                <p>Vocalista Paradisso yang berarti "Suara dari Surga" merupakan Unit
Kegiatan Mahasiswa Paduan Suara di Universitas Pembangunan Nasional
“Veteran” Yogyakarta.</p>
                <a href="#about" class="btn">Prestasi</a>
            </div>
        </div>
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
             <path fill="#fff" fill-opacity="1" d="M0,96L80,90.7C160,85,320,75,480,90.7C640,107,800,149,960,138.7C1120,128,1280,64,1360,32L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
    </header>
    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="image/tentangkami.JPG" alt="Tentang Kami">
                </div>
                <div class="about-text">
                    <h2>Tentang Kami</h2>
                    <p>Vocalista Paradisso yang berarti "Suara dari Surga" merupakan Unit Kegiatan Mahasiswa Paduan Suara di Universitas Pembangunan Nasional “Veteran” Yogyakarta.</p>
                    <p>Pada mulanya, unit kegiatan ini merupakan paduan suara gabungan dari UKM Kristen dan UKM Katolik. Dengan meningkatnya animo dari mahasiswa yang ingin mengikuti paduan suara maka terbentuk dan terbukalah “Vocalista Paradisso” untuk seluruh mahasiswa UPN “Veteran” Yogyakarta pada tanggal 15 Desember 1993.</p>
                    <a href="#" class="btn">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item card-animate">
                    <div class="stat-icon">👥</div>
                    <div class="stat-number">50+</div>
                    <div>Anggota Aktif</div>
                </div>
                <div class="stat-item card-animate">
                    <div class="stat-icon">🏆</div>
                    <div class="stat-number">25+</div>
                    <div>Prestasi Diraih</div>
                </div>
                <div class="stat-item card-animate">
                    <div class="stat-icon">🎤</div>
                    <div class="stat-number">100+</div>
                    <div>Pertunjukan</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="achievements" id="achievements">
        <div class="container">
            <h2 class="section-title">Prestasi Terbaru</h2>
            <p class="section-subtitle">Pencapaian membanggakan yang telah diraih oleh Vocalista Paradisso dalam berbagai kompetisi</p>
            
            <div class="achievements-grid">
                <div class="achievement-card card-animate">
                    <div class="achievement-icon">🥇</div>
                    <div class="achievement-title">Juara 1 Nasional</div>
                    <div class="achievement-desc">Meraih juara pertama dalam Kompetisi Vokal Nasional 2024 kategori grup vokal dewasa</div>
                </div>
                <div class="achievement-card card-animate">
                    <div class="achievement-icon">🥈</div>
                    <div class="achievement-title">Juara 2 Internasional</div>
                    <div class="achievement-desc">Meraih juara kedua dalam Festival Vokal Internasional ASEAN 2024</div>
                </div>
                <div class="achievement-card card-animate">
                    <div class="achievement-icon">🥉</div>
                    <div class="achievement-title">Best Performance</div>
                    <div class="achievement-desc">Penghargaan Best Performance dalam Festival Seni Budaya Yogyakarta 2024</div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="#" class="btn">Lihat Prestasi Lainnya</a>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news" id="news">
        <div class="container">
            <h2 class="section-title">Berita</h2>
            <p class="section-subtitle">Update terbaru tentang kegiatan dan pencapaian Vocalista Paradisso</p>
            
            <div class="news-grid">
                <div class="news-card card-animate">
                    <div class="news-image">Foto Kegiatan 1</div>
                    <div class="news-content">
                        <div class="news-title">Workshop Teknik Vokal Bersama Expert</div>
                        <div class="news-desc">Kegiatan workshop intensif bersama pakar vokal internasional untuk meningkatkan kemampuan anggota dalam teknik bernyanyi dan performa panggung.</div>
                    </div>
                </div>
                <div class="news-card card-animate">
                    <div class="news-image">Foto Kegiatan 2</div>
                    <div class="news-content">
                        <div class="news-title">Konser Amal untuk Pendidikan</div>
                        <div class="news-desc">Menyelenggarakan konser amal untuk membantu pendidikan anak-anak kurang mampu di wilayah Yogyakarta dengan antusiasme tinggi dari masyarakat.</div>
                    </div>
                </div>
                <div class="news-card card-animate">
                    <div class="news-image">Foto Kegiatan 3</div>
                    <div class="news-content">
                        <div class="news-title">Kolaborasi dengan Seniman Lokal</div>
                        <div class="news-desc">Berkolaborasi dengan berbagai seniman lokal Yogyakarta untuk menciptakan karya musik yang memadukan tradisi dan modernitas.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <div class="container">
            <h2 class="section-title">Galeri</h2>
            <p class="section-subtitle">Momen-momen berharga dari berbagai kegiatan Vocalista Paradisso</p>
            
            <div class="gallery-grid">
                <div class="gallery-item">Pertunjukan 1</div>
                <div class="gallery-item">Latihan Rutin</div>
                <div class="gallery-item">Kompetisi</div>
                <div class="gallery-item">Workshop</div>
                <div class="gallery-item">Konser</div>
                <div class="gallery-item">Kolaborasi</div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="#" class="btn">Lihat Semua Foto</a>
            </div>
        </div>
    </section>

    <!-- Recruitment Section -->
    <section class="recruitment" id="recruitment">
        <div class="container">
            <h2>Rekrutmen Anggota Baru Sedang Dibuka!</h2>
            <p>Bergabunglah dengan keluarga besar Vocalista Paradisso dan kembangkan potensi vokal Anda bersama kami</p>
            <a href="#" class="btn" style="background: white; color: #667eea;">Daftar Audisi Sekarang</a>
        </div>
    </section>

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
                        <a href="#">📘</a>
                        <a href="#">📷</a>
                        <a href="#">🐦</a>
                        <a href="#">▶️</a>
                        <a href="#">💼</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Vocalista Paradisso. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animate cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = Math.random() * 0.3 + 's';
                    entry.target.classList.add('card-animate');
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.stat-item, .achievement-card, .news-card').forEach(card => {
            observer.observe(card);
        });

        // Add some interactive effects
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1.05)';
                }, 150);
            });
        });

        // Header background parallax effect
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const header = document.querySelector('.header');
            if (header) {
                header.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
    </script>
</body>
</html>