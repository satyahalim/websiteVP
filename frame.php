<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Tentang Kami - Vocalista Paradisso</title>
  <style>
    
    .container {
      max-width:1200px;
      margin:0 auto; 
      padding:0 20px;}

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
      position:absolute; top:0; left:0; right:0; bottom:0;
      background:rgba(0,0,0,0.5); z-index:0;
    }
    .nav {
      display:flex; justify-content:space-between; align-items:center;
      margin-bottom:50px; position:relative; z-index:10;
      background:rgba(255,255,255,0.2); backdrop-filter:blur(10px);
      border-radius:40px; border:1px solid rgba(255,255,255,0.3);
      padding:10px 20px; box-shadow:0 8px 15px rgba(0,0,0,0.7);
    }
    .logo img {width:50px; height:auto;}
    .nav-links {display:flex; list-style:none; gap:30px;}
    .nav-links a {color:white; text-decoration:none;}
    .hero {text-align:center; padding:45px 0; position:relative; z-index:10;}
    .hero h1 {font-size:85px; font-weight:bold; margin-bottom:5px;}
    .hero p {font-size:65px; opacity:0.9;}

   /* About Section */
    .about {
      padding: 60px 0;
      background: #fff;
    }
    .about h2 {
      text-align: center;
      font-size: 30px;
      color: #055b9d;
      margin-bottom: 20px;
    }
    .about p {
      font-size: 18px;
      max-width: 900px;
      margin: 0 auto 40px auto;
      text-align: justify;
      color: #444;
    }

    /* Kepengurusan Section */
    .kepengurusan {
      padding: 40px 0;
      background: #f8f9fa;
    }
    .kepengurusan h3 {
      font-size: 3.5rem;
      color: #055b9d;
      margin-bottom: 20px;
      text-align: center;
    }
    .kepengurusan h4 {
      margin-bottom: 20px;
      text-align: center;
      font-size: 1.5rem;
    }
    .kepengurusan .member {
      display: flex;
      align-items: flex-start;
      background: #fff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .kepengurusan .member img {
      width: 250px;
      height: 250px;
      border-radius: 0%;
      object-fit: cover;
      margin-right: 20px;
      margin-top: 4px; 

    }
    .kepengurusan-info h4 {
      margin-bottom: 10px;
      text-align: left;
      font-size: 2rem;
      color: #055b9d;
    }
    .kepengurusan-info p {
      font-size: 1.1rem;
      color: #555;
    }
    .kepengurusan-info ul {
      margin: 5px 0 0 20px;
      font-size: 1.1rem;
      padding: 0;
      list-style: disc;
      color: #555;
    }

    /* Team Section */
    .team {
      padding: 60px 0;
      background: #f8f9fa;
    }
    .team h3 {
      font-size: 3.5rem;
      font-weight: 700;
      color: #055b9d;
      margin-bottom: 40px;
      text-align: center;
    }
    .team .member {
      display: flex;
      align-items: center;
      background: #fff;
      padding: 25px;
      margin-bottom: 25px;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .member-img img {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      object-fit: cover;
    }
    .member-info {
      flex: 1;
      padding: 0 20px;
    }
    .member-info .badge {
      display: inline-block;
      padding: 5px 12px;
      background: #e9f3ff;
      color: #055b9d;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 20px;
      margin-bottom: 8px;
    }
    .member-info h4 {
      margin-bottom: 12px;
      font-size: 1.5rem;
      font-weight: 700;
      color: #055b9d;
    }
    .member-info p {
      font-size: 1.2rem;
      color: #555;
      line-height: 1.6;
    }

    /* untuk pembina */
    .member.reverse {
      flex-direction: row-reverse; 
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
        </style>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container">
      <nav class="nav">
        <div class="logo"><img src="image/logo.png" alt="Logo"></div>
        <ul class="nav-links">
          <li><a href="home.php">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#achievements">Prestasi</a></li>
          <li><a href="portalberita.php">Berita</a></li>
          <li><a href="#gallery">Galeri</a></li>
          <li><a href="#recruitment">Rekrutmen</a></li>
        </ul>
      </nav>
      <div class="hero">
        <h1>TENTANG KAMI</h1>
        <p>Vocalista Paradisso</p>
      </div>
    </div>
  </header>

  <!-- About -->
  <section class="about">
    <div class="container">
        <p>
        Vocalista Paradisso yang berarti "Suara dari Surga" merupakan Unit
Kegiatan Mahasiswa Paduan Suara di Universitas Pembangunan Nasional
“Veteran” Yogyakarta. Pada mulanya, unit kegiatan ini merupakan paduan
suara gabungan dari UKM Kristen dan UKM Katolik. Dengan meningkatnya
animo dari mahasiswa yang ingin mengikuti paduan suara maka terbentuk
dan terbukalah “Vocalista Paradisso” untuk seluruh mahasiswa UPN
“Veteran” Yogyakarta pada tanggal 15 Desember 1993.

Seiring berjalannya waktu, “Vocalista Paradisso” berkembang dari
yang awalnya hanya bertugas di acara-acara protokoler kampus menjadi
penampil dalam suatu acara sampai mengikuti kompetisi di tingkat regional,
nasional, bahkan internasional. Hal ini juga diikuti dengan peningkatan
kualitas menjadi sebuah paduan suara yang lebih baik. Dalam beberapa
tahun terakhir, UKM Paduan Suara “Vocalista Paradisso” UPN “Veteran”
Yogyakarta tak pernah absen untuk menyumbangkan suaranya dalam
kancah paduan suara, baik mengadakan konser ataupun mengikuti
kompetisi nasional dan internasional.
      </p>
    </div>
  </section>

  <!-- Team Section -->
<section class="team">
  <div class="container">
    <h3>Meet The Team</h3>

    <!-- Pelatih -->
    <div class="member">
      <div class="member-img">
        <img src="image/pelatih.png" alt="Pelatih">
      </div>
      <div class="member-info">
        <span class="badge">Pelatih Kami</span>
        <h4>Romadan Nur Huda</h4>
        <p>
          Romadan Nur Huda, yang akrab kami sapa Kak Adon, telah bersama Vocalista Paradisso meraih prestasi
          selama enam tahun. Pengalaman beliau dalam bidang paduan suara membuat kemampuan conducting dan
          melatih beliau tidak diragukan lagi.
        </p>
      </div>
    </div>

    <!-- Pembina -->
     <div class="member reverse">
      <div class="member-info">
        <span class="badge">Pembina Kami</span>
        <h4>Yudhy Widya Kusumo, S.Sos., M.A.</h4>
        <p>
          Yudhy Widya Kusumo, S.Sos, M.A adalah dosen Fakultas Ilmu Sosial dan Politik (FISIP). 
          Kami biasa menyapanya Mas Wexa. 
          Beliau mendampingi Vocalista Paradisso dengan segala kemurahan hati yang ia miliki.
        </p>
      </div>
      <div class="member-img">
        <img src="image/pembina.png" alt="Pembina">
      </div>
    </div>

  </div>
</section>
    
  <!-- Kepengurusan -->
  <section class="kepengurusan">
    <div class="container">
      <h3>Kabinet Vistara</h3>
      <h4>Kepengurusan Vocalista Paradisso Tahun 2025</h4>

      <div class="member">
        <img src="image/bph.jpg" alt="bph">
        <div class="kepengurusan-info">
          <h4>Badan Pengurus Harian</h4>
          <p>Ketua: Ellena Putri MP Siboro (Teknik Metalurgi, 2022)</p>
          <p>Staff:</p>
          <ul>
            <li>Wakil Ketua: Josep Hasiano Brata Nugroho (Ilmu Komunikasi, 2022)</li>
            <li>Sekretaris 1: Alifya Sekar Ramadhani (Ilmu Komunikasi, 2022)</li>
            <li>Sekretaris 2: Farhan Jul Adhanta (Hubungan Internasional, 2023)</li>
            <li>Sekretaris 3: Rosa Virginia S. Tonbesi (Sistem Informasi, 2022)</li>
            <li>Bendahara 1: Indion Laura Hutauruk (Akuntansi, 2022)</li>
            <li>Bendahara 2: Mahesa Kasih Immanuela (Teknik Kimia, 2023)</li>
          </ul>
        </div>
      </div>

      <div class="member">
        <img src="image/latihan.jpg" alt="latihan">
        <div class="kepengurusan-info">
        <h4>Divisi Latihan</h4>
          <p>Koordinator: Osvaldo Dharma Araujo Da Costa (Hubungan Internasional, 2022)</p>
          <p>Staff:</p>
          <ul>
            <li>Vidy Tulung (Teknik Perminyakan, 2022)</li>
            <li>Akhtar Barzinedin (Manajemen, 2022)</li>
            <li>Christopher Daniel Simbolon (Teknik Geomatika, 2023)</li>
            <li>Yolanda Pebila Sitepu (Akuntansi, 2023)</li>
            <li>Francisca Aurasuci Primastuti Devy (Sistem Informasi, 2023)</li>
            <li>Stephan Sampe Tamauli Pardede (Ilmu Komunikasi, 2023)</li>
            <li>Marcellina Amanda Henrieta (Ilmu Komunikasi, 2023)</li>
            <li>Fransiska Romana Gizele Ratu Candra Alma De Paska (Akuntansi, 2023)</li>
          </ul>
        </div>
      </div>

      <div class="member">
        <img src="image/humas.jpg" alt="humas">
        <div class="kepengurusan-info">
        <h4>Divisi Hubungan Masyarakat</h4>
          <p>Koordinator: Kenaya Chiquita (Ilmu Komunikasi, 2022)</p>
          <p>Staff:</p>
          <ul>
            <li>Theresia Pietra Maharani (Hubungan Internasional, 2022)</li>
            <li>Berlian Ariqa Hanna Aurora (Sistem Informasi, 2022)</li>
            <li>Luthfiyya Nur Rachmi (Informatika, 2023)</li>
            <li>Wahyu Wingit Widjayanti (Hubungan Masyarakat, 2023)</li>
            <li>Clara Meiwati Galuh Asmara (Agroteknologi, 2023)</li>
            <li>Dinda Permata Sari (Ekonomi Pembangunan, 2023)</li>
          </ul>
        </div>
      </div>

      <div class="member">
        <img src="image/insarpras.jpg" alt="insarpras">
        <div class="kepengurusan-info">
        <h4>Divisi Inventaris, Sarana & Prasarana</h4>
          <p>Koordinator: Satyagraha Halim Widiatmojo (Informatika, 2022)</p>
          <p>Staff:</p>
          <ul>
            <li>Mohammad Rafshanjani Tyas N (Akuntansi, 2022)</li>
            <li>Mirfa Mahardika Purnama (Agribisnis, 2023)</li>
            <li>Nailah Salma Hielda (Administrasi Bisnis, 2023)</li>
            <li>Immanuel Ambarita (Manajemen, 2023)</li>
            <li>Yasfina Khalisa Tsani (Teknik Kimia, 2023)</li>
            <li>Benedictus Brain Adi Nugroho (Hubungan Internasional, 2023)</li>
          </ul>
        </div>
      </div>

      <div class="member">
        <img src="image/litbang.jpg" alt="litbang">
        <div class="kepengurusan-info">
        <h4>Divisi Penelitian dan Pengembangan</h4>
          <p>Koordinator: Candra Radhitya Fauzi (Teknik Lingkungan, 2022)</p>
          <p>Staff:</p>
          <ul>
            <li>Atmaning Asih Merpati Cerah Hati (Manajemen, 2022)</li>
            <li>Mutiaralarasati Adhima Widiyati (Agribisnis, 2023)</li>
            <li>Paul Natanael Pardede (Teknik Perminyakan, 2023)</li>
            <li>Rio Benareal Simanjuntak (Akuntansi, 2023)</li>
            <li>Kezia Glaudia Asyria Lifrika (Teknik Lingkungan, 2023)</li>
          </ul>
        </div>
      </div>

      <div class="member">
        <img src="image/danus.jpg" alt="danus">
        <div class="kepengurusan-info">
        <h4>Divisi Dana Usaha</h4>
          <p>Koordinator: Rahma Nafilah (Teknik Kimia, 2022)</p>
          <p>Staff:</p>
          <ul>
            <li>Ilham Maulana (Teknik Perminyakan, 2022)</li>
            <li>Rifqi Auliya (Sistem Informasi, 2022)</li>
            <li>Lu’lu’ul Aulia Hamidah (Hubungan Internasional, 2023)</li>
            <li>Giovanni Natalia Siwi (Akuntansi, 2023)</li>
            <li>Nayla Zahra Shabrina (Teknik Geologi, 2023)</li>
            <li>Lita Christiani Sirait (Administrasi Bisnis, 2023)</li>
          </ul>
        </div>
      </div>

      <div class="member">
        <img src="image/sdm.jpg" alt="sdm">
        <div class="kepengurusan-info">
        <h4>Divisi Sumber Daya Manusia</h4>
          <p>Koordinator: Asi Theresia Siahaan (Hubungan Internasional, 2022)</p>
          <p>Staff:</p>
          <ul>
            <li>Muhammad Annafi’un (Teknik Industri, 2023)</li>
            <li>Nurazizah Sekarningrum (Hubungan Internasional, 2023)</li>
            <li>Tasya Rahma Lintang (Akuntansi, 2023)</li>
            <li>Tia Agustina Putri (Hubungan Masyarakat, 2023)</li>
            <li>Asaf Fortunata Karunia Santoso (Ilmu Komunikasi, 2023)</li>
          </ul>
        </div>
      </div>
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

</body>
</html>
