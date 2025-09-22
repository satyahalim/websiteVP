-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2025 at 04:57 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vocalista`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'HumasVP', 'humascantik123');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int NOT NULL,
  `judul` text NOT NULL,
  `penulis` varchar(45) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `tanggal`, `isi`, `url`) VALUES
(12, 'Diklat PSM Vocalista Paradisso 2025: Temukan Keselarasan Emosi  dalam ‘Journey of Harmonization’ ', ' Dinda Permata Sari', '2025-02-05', 'Seperti tahun-tahun sebelumnya, PSM Vocalista Paradisso kembali menyelenggarakan Pendidikan dan Pelatihan (DIKLAT) untuk angkatan 2024. Diklat 2025 mengangkat tema \"Journey of Harmonization,\" sebuah perjalanan untuk menemukan keselarasan emosi dan mencapai potensi maksimal, baik dalam bermusik maupun dalam kehidupan berorganisasi.  Inspirasi tema ini diambil dari film \"Inside Out\" dan \"Inside Out 2,\" yang secara apik menggambarkan kompleksitas emosi manusia dan pentingnya penyelarasan antara pikiran dan perasaan.  Tema ini juga berkesinambungan dengan 4Event 2024, \"Harmony of the Mind,\" yang menekankan pentingnya harmonisasi pikiran.\r\n\r\nDiklat \"Journey of Harmonization\"  akan menjadi proses pembekalan intensif bagi anggota baru Vocalista Paradisso untuk memperdalam pemahaman mereka tentang paduan suara dan manajemen organisasi. Diklat 2025 akan mengajak peserta untuk menjelajahi dinamika emosi mereka, mendorong mereka keluar dari zona nyaman, dan belajar mengelola emosi sebagai kekuatan pendorong perubahan dan pencapaian. Peserta akan diajak untuk memahami bagaimana emosi dapat memengaruhi tindakan dan bagaimana mengarahkan emosi tersebut untuk menciptakan gerakan yang bermakna, baik secara individual maupun dalam kerja sama tim.\r\n\r\nDiklat ini dilaksanakan pada 1-2 Februari 2025 di Wisma Camelia. Pada hari pertama diisi dengan penyampaian materi dari beberapa pembicara. Sesi pertama adalah sesi sharing bersama Kak Mevia, Kak Farhan, dan Kak Adon selaku alumni dari PSM Vocalista Paradisso. Sesi selanjutnya adalah penyampaian materi dari Mbak Wayan Selaku pemateri undangan. Kemudian sesi selanjutnya penyampaian materi dari Om Tjono selaku pelatih PSM Vocalista Paradisso. Dilanjutkan dengan penampilan yel-yel dan mini choir dari angkatan 2024.\r\n\r\nSampailah di hari  kedua dimana angkatan 2024 sudah resmi menjadi anggota PSM Vocalista Paradisso. Di hari kedua ini diisi dengan berbagai kegiatan seru seperti games, awarding, dan sweet  sheets, yang sekaligus menutup kegiatan Diklat Vocalista Paradisso tahun 2025.\r\n\r\nHarapannya \"Journey of Harmonization\" akan menjadi pengalaman yang berharga dan transformatif bagi para peserta,  membantu mereka untuk tumbuh dan berkembang sebagai individu dan sebagai anggota PSM Vocalista Paradisso yang solid dan berprestasi. \r\n', 'uploads/1758559011_IMG_1157.JPG'),
(13, 'Vocalista Paradisso  Memukau dalam Konser Eunoia “Unveiling the Emotion Within”', ' Dinda Permata Sari', '2025-05-17', 'Yogyakarta, 17 Mei 2025 – Paduan Suara Mahasiswa (PSM) Vocalista Paradisso kembali menggelar konser tahunan New Comers Concert yang bertajuk ”Eunoia: Unveiling the Emotion Within”. Acara yang berlangsung di Performance Hall, Fakultas Bahasa, Seni, dan Budaya UNY ini diadakan untuk menyambut dan memperkenalkan anggota baru Vocalista Paradisso angkatan 2024 kepada para penikmat seni paduan suara di Indonesia, khususnya di Yogyakarta.\r\nMengusung konsep Inside Out, konser ini menghadirkan suasana layaknya diinterpretasikan sebagai sebuah cerita dan emosi yang berbeda. Melalui tema tersebut, PSM Vocalista Paradisso menggambarkan keselarasan dan keharmonisan yang tercipta di antara anggota baru dengan anggota lama meskipun berasal dari latar belakang dan warna suara yang berbeda.\r\nKonser Eunoia dibagi menjadi tiga sesi dengan total 12 lagu. Sesi pertama akan dimulai dengan lagu pembuka “Angele Dei” yang akan dinyanyikan oleh seluruh anggota. Dilanjutkan dengan tiga lagu bertema budaya Indonesia: “Sabilulungan,” “Kacang Koro,” dan “Rhonda Kampung”. Pada sesi kedua, suasana akan berganti dengan alunan lagu-lagu penuh emosi seperti “Remember Me,” “Nuansa Bening,” dan lagu  yang dinyanyikan khusus oleh angkatan  2024 yaitu “What a Wonderful World”. Memasuki sesi ketiga, penonton akan dibawa dalam perjalanan cerita melalui lagu-lagu acapella yaitu Lagu “Jonah, Man on the Run” dan “De Profundis”. Pada Konser ini juga terdapat sesi special performance dari PSM Universitas Diponegoro (UNDIP) yang membawakan lagu \"O Nata Lux\" dan \"Don\'t Stop Me Now\". Tak hanya itu, Konser Eunoia juga berkolaborasi dengan Tranquillo Strings sebagai pengiring instrumen yang memberi sentuhan orkestra pada beberapa lagu yang dibawakan.\r\nKonser Eunoia ditutup dengan penampilan spesial dalam Tribute untuk Ir. Setyo Watjono, atau yang akrab disebut dengan Om Tjono. Sebuah sesi penghormatan kepada Om Tjono yang telah melepas jabatannya sebagai pelatih PSM Vocalista Paradisso. Pada sesi ini, PSM Vocalista Paradisso berkolaborasi dengan PSM Universitas Diponegoro, yang turut tampil menyanyikan beberapa lagu bersama, termasuk “Karena Cinta,” “The Prayer of St Francis,” dan “If We Hold On Together” sebagai penghargaan dan persembahan khusus kepada sang pelatih.\r\nTidak hanya menyuguhkan rangkaian lagu yang penuh makna, konser ini juga menjadi titik tolak bagi anggota baru untuk mulai beradaptasi dengan atmosfer kompetisi paduan suara. Konser Eunoia 2025 diharapkan dapat menjadi bekal pengalaman penting bagi mereka untuk siap berkompetisi di kancah nasional maupun internasional.\r\nMelalui Eunoia: “Unveiling the Emotion Within”, PSM Vocalista Paradisso menunjukkan bahwa meskipun berasal dari berbagai latar belakang dan warna suara, Vocalista Paradisso tetap dapat menyatukan emosi dalam harmoni yang indah.\r\n', 'uploads/1758559142_tentangkami.JPG'),
(14, 'Bhakti Chatra #3 – Konser Pra Kompetisi Vocalista Paradisso Menuju 10th SDGICF 2025', ' Dinda Permata Sari', '2025-08-30', 'Yogyakarta, 30 Agustus 2025 Paduan Suara Mahasiswa UPN “Veteran” Yogyakarta Vocalista Paradiso kembali mempersembahkan konser  bertajuk Bhakti Chatra #3 sebagai rangkaian persiapan menuju ajang internasional 10th Satya Dharma Gita International Choir Festival (SDGICF) 2025. Konser ini diselenggarakan pada Sabtu, 30 Agustus 2025 di Syantikara Youth Center, Yogyakarta.\r\nBhakti Chatra #3 bukan hanya sekadar konser, melainkan juga sebuah momentum untuk memohon doa dan dukungan dari masyarakat, alumni, dan pecinta musik agar Vocalista Paradisso diberi kelancaran dan kekuatan dalam kompetisi mendatang. Selain itu, konser ini menjadi ajang latihan nyata bagi squad untuk mengasah kesiapan tampil di panggung kompetisi.\r\nDalam konser ini, Vocalista Paradisso menampilkan rangkaian karya dari empat kategori utama yang telah dipersiapkan dengan intensif, yaitu Folk Song, Popular Song, Equal Voices, dan Mixed Choir. Seluruh karya dibawakan dengan penuh penghayatan sebagai cerminan perjalanan latihan panjang yang telah dilalui.\r\nKonser Bhakti Chatra #3 menghadirkan tiga sesi utama yang dirancang untuk memperlihatkan keragaman warna vokal PSM Vocalista Paradisso. Sesi pertama dibuka dengan perkenalan squad dan lagu pembuka “O Salutaris Hostia,” kemudian dilanjutkan dengan rangkaian karya penuh harmoni seperti “Danny Boy,” “Nearer My God. To Thee,” “May Love Light Your Days,” “Abendlied,” dan ditutup dengan “Fajar dan Senja.” Memasuki sesi kedua, penonton disuguhkan nuansa berbeda melalui lagu-lagu yang sarat emosi dan energi, yaitu “Mencintaimu,” “Rock This Town,” dan “And I’m Telling You.” Sesi ketiga menampilkan kekayaan budaya Nusantara dengan sajian “Tari Indang,” “Sabilulungan,” dan “Pok Pok Alimpako” yang dibawakan dengan penuh semangat. \r\nKonser ditutup dengan nyanyian penuh semangat If We Hold On Together yang dibawakan secara bersama-sama, menjadi simbol doa, harapan, dan kebersamaan seluruh pendukung. Melalui Bhakti Chatra #3, Vocalista Paradisso berharap dukungan dan doa yang diberikan dapat menjadi kekuatan moral yang akan menemani langkah mereka menuju panggung internasional di SDGICF 2025.\r\n', 'uploads/1758559220_gale1.JPG'),
(15, 'Raih Gelar Grand Champion, PSM Vocalista Paradisso Taklukkan Panggung Kompetisi Berskala Internasional', ' Dinda Permata Sari', '2025-09-15', 'Semarang, 9-13 September 2025 – Paduan Suara Mahasiswa (PSM) Vocalista Paradisso UPN “Veteran” Yogyakarta kembali mengukir prestasi gemilang berskala internasional. Kali ini, Vocalista Paradisso berhasil memperoleh gelar Grand Champion pada ajang bergengsi “The 10th Satya Dharma Gita International Choir Festival 2025” yang diadakan di Semarang, Indonesia.\r\nDalam kompetisi yang diikuti oleh berbagai PSM dari dalam dan luar negeri ini, Vocalista Paradisso sukses membawa pulang empat medali emas serta dua penghargaan khusus dewan juri. Mulai dari Special Jury Award - The Best Choreography, 3rd Place Gold Medal for Folk Song Category (Final Score: 86,46), 1st Place Gold Medal for Mixed Choir Category (Final Score: 88,25), sampai Grand Champion of The 10th Satya Dharma Gita International, dan masih banyak lagi. \r\nKeberhasilan ini tentu tidak datang dengan mudah. Proses panjang latihan intensif, penguatan teknik vokal, serta penyusunan koreografi menjadi bekal penting untuk menghadapi persaingan yang ketat. \r\nBrain Adi selaku General Manager mengungkapkan, “Jujur, saya masih gak percaya kami bisa meraih predikat Grand Champion di ajang bergengsi ini. Perjalanan kami bukan hal yang mudah, banyak sekali tantangan dan pengorbanan yang luar biasa, tapi semua itu terbayar dengan pencapaian ini. Saya ingin menyampaikan terima kasih yang sebesar-besarnya kepada seluruh squad Vocalista Paradisso yang telah bertahan dan berjuang bersama sampai titik ini. Tanpa semangat, dedikasi, dan kekompakan mereka, kami tidak akan berdiri di posisi puncak ini.”\r\nPSM Vocalista Paradisso berharap bahwa capaian gemilang di ajang The 10th Satya Dharma Gita International Choir Festival 2025 ini menjadi pijakan penting untuk terus menorehkan prestasi di kancah internasional. Ke depannya, Vocalista Paradisso berkomitmen untuk terus mengasah kualitas musikal, memperkuat kekompakan tim, serta melahirkan karya-karya terbaik yang dapat mengharumkan nama almamater UPN “Veteran” Yogyakarta dan Indonesia di mata dunia. \r\n“Gelar Grand Champion ini bukan hanya milik satu atau dua orang saja, melainkan milik kita semua, setiap individu yang telah menaruh hati dan jiwanya untuk tim ini.” tambah Brain.\r\nDengan dukungan seluruh pihak, pelatih, pembina, alumni, sponsor, keluarga, sampai sahabat, Vocalista Paradisso yakin dapat terus melangkah lebih jauh, menginspirasi generasi muda, serta membawa budaya Indonesia bersinar di panggung dunia.', 'uploads/1758559482_WhatsApp Image 2025-09-22 at 23.44.21_ed6bd6a6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int NOT NULL,
  `url` varchar(45) NOT NULL,
  `kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `url`, `kategori`) VALUES
(1, 'uploads/1756880324_gale2.JPG', 'Job'),
(2, 'uploads/1756880324_gale3.JPG', 'Job'),
(3, 'uploads/1756880324_gale4.JPG', 'Job'),
(4, 'uploads/1756880324_gale5.JPG', 'Job'),
(5, 'uploads/1757395157_LOS CHICKEN (2).png', 'Konser'),
(6, 'uploads/1757395157_LOS CHICKEN (1).png', 'Konser'),
(7, 'uploads/1757395157_LOS CHICKEN.png', 'Konser'),
(8, 'uploads/1757395166_LOS CHICKEN (2).png', 'Konser'),
(9, 'uploads/1757395166_LOS CHICKEN (1).png', 'Konser'),
(10, 'uploads/1757395166_LOS CHICKEN.png', 'Konser'),
(11, 'uploads/1757395220_Berita.png', 'Job'),
(12, 'uploads/1757395229_pas foto bg merah.jpg', 'Konser'),
(13, 'uploads/1757395238_Beranda.png', 'Konser'),
(14, 'uploads/1757395247_IMG_2060.JPG', 'Kompetisi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
