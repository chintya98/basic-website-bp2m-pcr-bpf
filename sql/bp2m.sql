-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 08:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp2m`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `kategori` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `penulis` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `kategori`, `gambar`, `penulis`, `tanggal`, `isi`, `status`) VALUES
(6, 'Hasil Kolaborasi, Tim PKM PCR Menyerahkan Mesin Produksi untuk Kelompok Nenas Berduri (PONARI) Kampar', 5, 'b1.jpg', 'admin', '2023-01-08', '<p><strong>Pekanbaru (8/9) &ndash;&nbsp;</strong>Dalam rangka mendukung UMKM di Provinsi Riau naik kelas, Sejumlah dosen yang tergabung dalam Tim Pengabdian Kepada Masyarakat (PKM) Politeknik Caltex Riau menyerahkan mesin produksi berupa mesin pemeras buah nenas dan mesin pengaduk dodol nenas kepada Kelompok Masyarakat Nenas Berduri (PONARI), Desa Rimbo Panjang, Kecamatan Tambang, Kabupaten Kampar, Rabu 7 September 2022.</p>\r\n\r\n<p>Kegiatan ini merupakan salah satu bagian dari program Pengabdian kepada Masyarakat Kompetitif Nasional Iptek bagi Masyarakat yang didanai oleh Kementrian Pendidikan dan Kebudayaan tahun 2022.</p>\r\n\r\n<p>Tim PKM yang diketuai oleh Retno Tri Wahyuni, S.T., M.T. beranggotakan Elva Susianti, S.S.T., M.T. dan Rika Perdana Sari, S.T., M.Eng. berkomitmen akan memberikan pendampingan terhadap Pokmas PONARI di bidang produksi, desain kemasan dan pemasaran.</p>\r\n\r\n<p>&ldquo;Mesin produksi ini merupakan hasil kolaborasi tim dosen dan mahasiswa dengan mitra industri yang bergerak di bidang manufaktur mesin produksi yaitu CV. Baja Diva. Kegiatan ini juga melibatkan partisipasi aktif mahasiswa dalam rangka implementasi Kampus Merdeka,&rdquo; ungkap Retno</p>\r\n\r\n<p>Retno juga menambahkan bahwa mesin produksi ini merupakan solusi terhadap permasalahan yang disampaikan oleh Pokmas PONARI pada proses produksi. Kegiatan lain yang akan dilaksanakan adalah berupa pelatihan foto produk, pemasaran produk dan pembuatan desain kemasan</p>\r\n\r\n<p>Kegiatan serah terima yang dilaksanakan di Kantor Desa Rimbo Panjang ini, sekaligus sebagai pembuka serangkaian program PKM yang telah dirancang oleh tim. Selain dihadiri oleh Tim Pokmas PONARI, dalam kegiatan ini dihadiri juga oleh kepala desa Rimbo Panjang Benzainal Arifin, Ketua Badan Pemberdayaan Masyarakat Desa Zulpandri, Koordinator konsultan Pusat Layanan Usaha Terpadu (PLUT) Kampar Muhammad Mukhlis dan juga Ketua Umum Himpunan Pengusaha Muda Indonesia (HIPMI) Kampar Iwan Kurniawan, SH.</p>\r\n\r\n<p>Kepala desa Bapak Benzainal mengucapkan terimakasih sebesar-besarnya kepada Politeknik Caltex Riau dan berharap bantuan ini dapat menambah semangat bagi Pokmas PONARI sehingga dapat meningkatkan kesejahteraan masyarakat.</p>\r\n\r\n<p>Sementara itu, Mukhlis selaku perwakilan PLUT Kampar menyampaikan akan terus memberikan pendampingan agar PONARI dapat menghasilkan produk yang dapat masuk ke pasar yang lebih luas.</p>\r\n\r\n<p>Pada kesempatan tersebut Ketua umum HIPMI juga membidik PONARI karena dianggap potensial untuk dijadikan salah satu UMKM pilihan yang akan diajak untuk bermitra. &ldquo;Kolaborasi antara Politeknik Caltex Riau, PLUT dan HIPMI akan ditindaklanjuti agar dapat mengasilkan produk unggulan Kampar, salah satunya berupa olahan buah nenas yang bahan bakunya banyak tersedia di Kampar,&rdquo; pungkas Iwan</p>\r\n', 1),
(7, 'Tim PkM PSTRK PCR Berikan Pelatihan Programming kepada Siswa SMKN 1 Dumai', 5, 'b2.jpg', 'admin', '2023-01-08', '<p><strong>Pekanbaru (9/9) &ndash;&nbsp;</strong>Dalam rangka meningkatkan kompetensi dan kemampuan para Siswa dan Guru yang ada di sekolah-sekolah Vokasi yang ada di Provinsi Riau, sejumlah dosen dan mahasiswa dari Program Studi Teknologi Rekayasa Komputer (PSTRK) Politeknik Caltex Riau memberikan pelatihan programming kepada siswa SMKN 1 Dumai. Pelatihan ini diselenggarakan pada hari Selasa, 6&nbsp;September 2022.</p>\r\n\r\n<p>Kegiatan pelatihan ini merupakan salah satu kegiatan Pengabdian kepada Masyarakat yang wajib dilakukan sebagai bentuk pemenuhan Tri Dharma Perguruan Tinggi.</p>\r\n\r\n<p>Dosen yang terlibat dalam program pelatihan ini adalah Yuli Fitrisia, S.T., M.T., Mardiah Fadhli, S.T., M.T., Dini Nurmalasari, S.T., M.T., Dr. Eng. Yoanda Alim Syahbana, S.T., M.T., Sugeng Purwantoro E.S.G.S., S.T., M.T., Memen Akbar, S.Si., M.T., dan Wenda Novayani,&nbsp;<a href=\"http://s.st/\" target=\"_blank\">S.ST</a>., M.Eng. Selain itu, mahasiswa yang dilibatkan dalam kegiatan ini adalah Muhammad Imam Akbar.</p>\r\n\r\n<p>&ldquo;Pada pelatihan ini kita memberikan materi terkait Implementasi&nbsp;<em>Fun Learning Dengan Hour of Code</em>&nbsp;Pada Game Minecraft. Kegiatan ini mengajak dan mengajarkan siswa untuk bisa lebih cinta dan senang dengan pemrograman, bahwa memogram ini menyenangkan, sehingga pada kegiatan ini dimodelkan dengan Game Minecraft untuk mendapatkan pemahaman terkait logika dan pemrograman pada suatu kondisi yang diharapkan,&rdquo; ungkap Yuli.</p>\r\n\r\n<p>Yoanda juga menambahkan bahwa kedepannya program-program seperti ini akan terus dilanjutkan dengan menambahkan beberapa tema sehingga nantinya diharapkan dapat meningkatkan kemampuan dan wawasan siswa khususnya pada bidang IT.</p>\r\n\r\n<p>&ldquo;Pada kegiatan pelatihan ini, kita melihat antusias siswa yang luar biasa dalam mengikutinya. Insyaallah kedepannya akan memberikan pelatihan terkait bidang IT seperti Internet of Things (IoT), robotic, keamanan siber dan lainnya,&rdquo; tambahnya.</p>\r\n\r\n<p>Selain memberikan pelatihan, pada kesempatan ini juga dilakukan penandatanganan&nbsp;<em>Memorandum of Understanding&nbsp;</em>(MoU) dan Perjanjian Kerja Sama (PKS) antara Program Studi Teknologi Rekayasa Komputer dan SMKN 1 Dumai. Penandatanganan ini dilakukan langsung oleh Kaprodi PSTRK Dr. Eng. Yoanda Alim Syahbana, S.T., M.Sc. dan Drs. Dian Dini.</p>\r\n\r\n<p>Kepala Sekolah SMKN 1 Dumai Drs. Dian Dini menyambut baik kegiatan yang diberikan oleh PSTRK. Ia berharap kerja sama ini dapat berjalan baik dan kegiatan seperti ini dapat rutin dilakukan sehingga dapat meningkatkan kemampuan siswa vokasi di Riau, khususnya di SMKN 1 Dumai.</p>\r\n', 1),
(9, 'Mekatronika PCR Kolaborasi dengan APP Sinarmas pada MBKM Penelitian Water Management Lahan Gambut pada Hutan Tanaman Industri', 6, 'b3.jpg', 'admin', '2023-01-08', '<p><strong>Pekanbaru (3/10) -&nbsp;</strong>Dalam rangka menerapkan program MBKM, Program Studi Teknologi Rekayasa Mekatronika (PSTRM) Politeknik Caltex Riau berkolaborasi bersama Asia Pulp and Paper (APP) Sinarmas. Kolaborasi MBKM ini dalam bidang penelitian/riset pada bidang water management pada lahan gambut hutan tanaman industri (HTI).&nbsp;</p>\r\n\r\n<p>Pada kegiatan ini juga dilakukan presentasi produk yang telah dibuat oleh Risqi Muhammad dan Team. Presentasi dilakukan pada hari Jumat, 30 September 2022 di Gedung Direktorat R. 203 Politeknik Caltex Riau.</p>\r\n\r\n<p>Produk ini berupa alat deteksi ketinggian muka air dan kelembaban tanah pada lahan gambut. Alat ini memanfaatkan energi terbarukan yaitu panel surya sebagai sumber daya. Alat ini mendapat apresiasi oleh Manajemen APP Sinarmas Hendri Tanjung selaku WM Head Riau Region dan tim.</p>\r\n\r\n<p>Hendri mengatakan produk yang dibuat oleh mahasiswa PSTRM merupakan awal untuk penerapan teknologi di APP Sinarmas dan merupakan produk anak Riau. kedepannya produk ini akan menjadi produk unggulan untuk dapat diproduksi massal untuk seluruh HTI.</p>\r\n\r\n<p>Penelitian ini akan sangat membantu dalam pengelolaan tata air di lahan gambut untuk menjaga kedalaman air tanah optimum dengan mendeteksi ketinggian dan kelembaban air tanah agar tidak banjir pada saat musim hujan dan tidak kekeringan atau sampai kebakaran saat musim kemarau sehingga menjaga kelestarian tanaman dan kematangan tanah. Alat yang telah dibuat ini akan diterapkan langsung di lokasi HTI dan akan diuji performanya untuk kebutuhan riset APP Sinarmas dan Politeknik Caltex Riau.</p>\r\n\r\n<p>Selain itu Hendri juga memberikan masukan dengan alat yang dibuat berdasarkan kondisi dilapangan dan juga menjelaskan teknologi apa saja yang mungkin bisa dikembangkan dengan D4 Teknologi Rekayasa Mekatronika Politeknik Caltex Riau terkait water management.</p>\r\n\r\n<p>Sementara itu, Ketua Program Studi PSTRM Made Rahmawaty menyatakan kegiatan ini diharapkan dapat terus berlanjut, sehingga teknologi yang akan dibuat mahasiswa sesuai dengan kebutuhan industri dan masyarakat dan bisa menjadi produk unggulan, selain itu dengan adanya kegiatan ini dapat membuka wawasan mahasiswa dan dosen.</p>\r\n\r\n<p>PSTRM memiliki kegiatan MBKM asistensi mengajar namuin juga ada kegiatan MBKM penelitian/riset yang merupakan bentuk kegiatan pembelajaran untuk membangun cara berpikir kritis mahasiswa yang memiliki passion menjadi peneliti untuk lebih mendalami, memahami, dan melakukan metode riset secara lebih baik yang sangat dibutuhkan untuk berbagai rumpun keilmuan pada jenjang pendidikan tinggi. Pelaksanaan bentuk kegiatan pembelajaran penelitian dilaksanakan selama 1 semester dan memperoleh pengakuan yang setara dengan 20 sks.</p>\r\n', 1),
(10, 'PCR Serahkan Alat Fermentasi Bawang Hitam versi 2 kepada UKM Bawang Hitam Kadedika', 6, 'b4.jpg', 'admin', '2023-01-08', '<p><strong>Pekanbaru (9/11) &ndash;&nbsp;</strong>Politeknik Caltex Riau (PCR) berikan bantuan alat fermentasi bawang hitam kepada UKM Bawang Hitam Kadedika. Penyerahan alat ini diberikan langsung kepada pemilik UKM Bawang Hitam Kadedika pada hari Senin, 31 Oktober 2022. &nbsp;</p>\r\n\r\n<p>Bantuan mesin ini merupakan bentuk Program Pengabdian kepada Masyarakat (PkM) dari Bagian Penelitian dan Pengabdian Masyarakat (BP2M) PCR yang dilaksanakan oleh Staf dan Mahasiswa Prodi Teknologi Rekayasa Sistem Elektronika (PSTRE). Kegiatan PkM ini diketuai oleh Heri Subagyo, S.T., M.T.</p>\r\n\r\n<p>Heri mengatakan bahwa alat yang diserahkan kali ini merupakan penyempurnaan dari alat sebelumnya yang kita berikan kepada UKM Bawang Hitam.</p>\r\n\r\n<p>&ldquo;Alat fermentasi bawang hitam versi 2 yang kita berikan ini memiliki keunggulan, suara tidak berisik dan pemakaian daya lebih kecil. Hal ini menjadi salah satu bukti dari PSTRE dan PCR sangat mendukung pengembangan UKM di Riau, khususnya di Kota Pekanbaru untuk lebih maju sehingga lebih berdaya saing,&rdquo; katanya</p>\r\n\r\n<p>Ia juga mengucapkan terimakasih kepada UKM Bawang Hitam Kadedika yang bersedia menjadi mitra dalam program ini dan berharap mendapat masukan dari UKM ini terhadap alat fermentasi agar Inovasi dan perbaikan alat ini akan terus dilakukan untuk memenuhi kebutuhan UKM.</p>\r\n\r\n<p>Efariany, pemilik UKM Bawang Hitam Kadedika menyambut baik program ini. &ldquo;Alhamdulillah alatnya sudah sampai, InshaAllah nanti akan kita coba, semoga berhasil. Kami juga mengucapkan terimakasih atas usaha nya untuk penelitian alat Bawang hitam,&rdquo; sambutnya</p>\r\n\r\n<p>Sementara itu, Ruslan selaku pengelola dan pelaksana produksi bawang hitam mengungkapkan bahwa dari percobaan pertama kita melihat alat ini semakin baik dari alat versi sebelumnya.</p>\r\n\r\n<p>&ldquo;Dari uji coba awal saat latihan penggunaan, alat fermentasi yang ini lebih baik daripada yang versi pertama dulu. Tidak ada suara berisik. Akan kami coba pakai untuk produksi selama 14 hari mendatang. Semoga hasilnya lebih baik daripada yang sebelumnya,&rdquo; ungkapnya</p>\r\n\r\n<p>Penyerahan alat ini diberikan langsung perwakilan tim pelaksana PkM yang juga merupakan alumni dari Teknik Elektronika PCR, yaitu Andi Muliya Putra dan Fiama Ryder Sinaga. Penyerahan alat ini dilakukan langsung di Kantor dan pusat produksi UKM Bawang Hitam Kadedika, Perumahan Pesona Beringin Asri Blok G No. 15, Kel. Sungaisibam, Kec. Payung Sekaki, Pekanbaru, Riau.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `judul`, `detail`, `file`, `tanggal`) VALUES
(1, 'test', 'test', 'Kel_2_Record_Data_User_Research.pdf', '2023-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.png',
  `penulis` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `kategori`, `gambar`, `penulis`, `tanggal`, `isi`, `status`) VALUES
(1, 'Pengumuman Penerima Bantuan Dana Penelitian Lanjutan (on-going) Batch 2 Tahun Anggaran 2022', 6, 'default.png', 'admin', '2023-01-02', '<p>Berikut pengumuman pemenang dilampirkan pada file berikut :</p>\r\n\r\n<p>https://simlitabmas.kemdikbud.go.id/</p>\r\n', 1),
(2, 'Pembukaan Program Insentif Kekayaan Intelektual Dosen Vokasi Tahun 2022 Periode 2', 6, 'default.png', 'admin', '2023-01-08', '<p>n</p>\r\n', 1),
(4, 'Test1', 5, 'default.png', 'admin', '2023-01-16', '<p>testest</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(5, 'Pengabdian'),
(6, 'Penelitian');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `subjek`, `pengirim`, `email`, `isi`, `tanggal`) VALUES
(2, 'penelitian', 'chintya', 'chintya@gmail.com', 'Bagaimana saya dapat mengakses buku panduan proposal penelitian 2023?', '2023-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.png',
  `role` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$cLlZlp7zl4EDpwKeGE2v.esUK3/vYX7rWXom0A41rLrsGFNow3HDC', 'default.png', 'admin', '0000-00-00'),
(4, 'chintya', 'chintya@gmail.com', '$2y$10$QLPSTDgOnPkvgWUMJrLYveQcIKOpK76YjVoJ2mHTiLbQNs9psGUmy', 'default.png', 'author', '0000-00-00'),
(5, 'Natalia', 'natalia@gmail.com', '$2y$10$N44ViTu6fArUlOg2.sm6ru..YaTzJnNAkDXs8D26x57scYJTMazQe', 'default.png', 'author', '2023-01-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_ibfk_1` (`kategori`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
