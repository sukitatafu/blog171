-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mar 2018 pada 09.39
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog171`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `blog_ID` char(15) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `user_ID` char(15) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`blog_ID`, `judul`, `isi`, `user_ID`, `tanggal`, `jam`) VALUES
('B-1519883321', 'Petualangan dafing & dafina si kembar di negeri pastry', 'Na …, kayaknya ada penculik beneran, deh!”\r\n\r\n“Hah! Manaaa??” Fina celingak-celinguk. Namun, langsung ditarik Dafin dan dibisiki lagi.\r\n\r\n“Ituuu, di luar pagar. Pakai topi jerami, mukanya kotor bercambang. Dan dia sedang mengawasi kita!”\r\n\r\nSekarang Fina menoleh ke arah yang ditunjukkan Dafin tadi. Dan rupanya memang benar. Ada seorang pria paruh baya bertopi jerami yang tengah mengawasi mereka berdua di luar pagar sekolah. dia mengenakan sebuah celana kodok jeans panjang dengan warna biru kusam dan tampak lusuh. Pria itu tiba-tba berjalan ke arah pintu masuk pagar, dan dia membawa sebuah karung!\r\n\r\n“Dafin! Dia itu penculik anak-anak yang suka memasukkan anak kecil ke dalam karung!” bisik Fina seru.\r\n\r\n“WAAAAAA! LARIIIII!” Dafin pun langsung berteriak dan lari, sementara Fina cepat-cepat ikut lari tanpa memedulikan mobil kayu mereka lagi.\r\n\r\n***\r\n\r\nAduh duh, sedang ngapain, ya, si kembar cowok-cewek Dafin dan Dafina itu? Mereka berdua ini tinggal di Negeri Pastry lho! Sebuah negeri tempat semua makanan kecil yang ada di seluruh dunia dibuat. Sekolahnya saja sudah mengajari mereka untuk bisa dan pandai memasak makanan sendiri sejak kecil. Penasaran dengan petualangan mereka di Negeri Pastry? Yuk, kita baca bukunya!', 'U-adi1517475609', '2018-03-01 06:48:41', '0000-00-00'),
('B-1519883626', ' Lampau oleh Sandy Firly', 'Bercerita tentang Sadayuhun atau biasa dipanggil Ayuh, anak keturunan Balian di daerah Kalimantan Selatan. Balian sendiri dapat dikatakan sebagai “orang pintar” yang bisa mengobati sakit atau kesurupan.\r\n\r\nSebagai anak tunggal, Ayuh diharapkan mengikuti jejak orang tuanya menjadi Balian. Masa kecil Ayuh yang sederhana sebagai anak dari daerah Kalimantan Selatan, Desa Loksado ditunjukkan dengan latar yang kuat. Kenangan-kenangan semasa masih bocah tak pelak membuat pembaca ikut bernostalgia sembari menikmati keasrian daerah Loksado.', 'U-adi1517475609', '2018-03-01 06:53:46', '0000-00-00'),
('B-1519884070', 'Laskar Pelangi oleh Andrea Hirata \'\'', 'Siapa yang belum pernah membaca novel fenomenal ini? Mengambil lokasi di Belitung, Laskar Pelangi memotret tentang kehidupan sebelas anak kecil yang bersekolah di SD Muhammadiyah.\r\n\r\nMimpi dan harapan mereka terekam jelas di lembar demi lembar novel yang tebalnya 534 halaman ini. Nuansa Melayu dibalur keindahan Belitung pun menjadi salah satu daya tarik kuat dalam novel. Hingga akhirnya novel ini diangkat menjadi salah satu film dan keindahan Belitung yang tersembunyi pun terkuak, seperti menemukan mutiara di tengah lautan. Pokoknya sungguh seru dan pembaca dapat masuk kedalam cerita ', 'U-bil1519883922', '2018-03-01 00:00:00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_rating`
--

CREATE TABLE `t_rating` (
  `ipuser` varchar(35) NOT NULL,
  `rate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_ID` char(15) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` char(32) NOT NULL,
  `tgl_registrasi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_ID`, `nama`, `email`, `password`, `tgl_registrasi`) VALUES
('U-adi1517475609', 'adi', 'adi@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-02-01 10:00:09'),
('U-bil1519883922', 'billy', 'billy@gmail.com', '89c246298be2b6113fb10ba80f3c6956', '2018-03-01 06:58:42'),
('U-jes1519956736', 'jessica', 'jessica@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-03-02 03:12:16'),
('U-jes1519956974', 'jessica', 'jessica@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-03-02 03:16:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
