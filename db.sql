-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table emodule.app_admin
CREATE TABLE IF NOT EXISTS `app_admin` (
  `kode` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '202cb962ac59075b964b07152d234b70',
  `update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `insert` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1,
  UNIQUE KEY `kode` (`kode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table emodule.app_admin: ~2 rows (approximately)
DELETE FROM `app_admin`;
/*!40000 ALTER TABLE `app_admin` DISABLE KEYS */;
INSERT INTO `app_admin` (`kode`, `username`, `name`, `password`, `update`, `insert`, `status`) VALUES
	('mTpk1Y', 'anggi', 'Anggi Syafitri', 'ë’ô¶Z\r¹¼nF!ÁxÒ', '2022-02-23 16:34:33', '2022-02-23 16:34:33', 1),
	('zyadmin', 'azyiva', 'Achmad Zyiva', 'Å2ý!u?ËÑZ,V,òw>ß', '2022-02-23 16:45:08', '2021-07-17 07:52:10', 1);
/*!40000 ALTER TABLE `app_admin` ENABLE KEYS */;

-- Dumping structure for table emodule.data_kategori
CREATE TABLE IF NOT EXISTS `data_kategori` (
  `kode` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `insert` timestamp NULL DEFAULT current_timestamp(),
  `update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 1,
  UNIQUE KEY `kode` (`kode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table emodule.data_kategori: ~2 rows (approximately)
DELETE FROM `data_kategori`;
/*!40000 ALTER TABLE `data_kategori` DISABLE KEYS */;
INSERT INTO `data_kategori` (`kode`, `name`, `insert`, `update`, `status`) VALUES
	('xqWo1Y', 'eModule', '2022-02-23 16:54:44', '2022-02-23 16:54:44', 1),
	('eK_EIa', 'Infografis', '2022-02-23 17:22:45', '2022-02-23 17:22:45', 1),
	('KgfGQ0', 'Panduan dan Praktik Baik', '2022-02-23 17:22:56', '2022-02-23 17:22:56', 1);
/*!40000 ALTER TABLE `data_kategori` ENABLE KEYS */;

-- Dumping structure for table emodule.data_kelas
CREATE TABLE IF NOT EXISTS `data_kelas` (
  `kode` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `insert` timestamp NULL DEFAULT current_timestamp(),
  `update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 1,
  UNIQUE KEY `kode` (`kode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table emodule.data_kelas: ~2 rows (approximately)
DELETE FROM `data_kelas`;
/*!40000 ALTER TABLE `data_kelas` DISABLE KEYS */;
INSERT INTO `data_kelas` (`kode`, `name`, `insert`, `update`, `status`) VALUES
	('y4zQIK', 'X', '2022-02-23 16:56:06', '2022-02-23 17:23:16', 1),
	('e_83ib', 'XI', '2022-02-23 16:56:20', '2022-02-23 17:23:21', 1),
	('UE5vgO', 'XII', '2022-02-23 16:56:25', '2022-02-23 17:23:26', 1);
/*!40000 ALTER TABLE `data_kelas` ENABLE KEYS */;

-- Dumping structure for table emodule.data_kompetensi
CREATE TABLE IF NOT EXISTS `data_kompetensi` (
  `kode` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `insert` timestamp NULL DEFAULT current_timestamp(),
  `update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 1,
  UNIQUE KEY `kode` (`kode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table emodule.data_kompetensi: ~18 rows (approximately)
DELETE FROM `data_kompetensi`;
/*!40000 ALTER TABLE `data_kompetensi` DISABLE KEYS */;
INSERT INTO `data_kompetensi` (`kode`, `name`, `insert`, `update`, `status`) VALUES
	('UtelWu', '3.1', '2022-02-23 15:02:15', '2022-02-23 17:28:50', 1),
	('YD0GB1', '3.10', '2022-02-23 15:03:04', '2022-02-23 17:29:02', 1),
	('GVaDyW', '3.11', '2022-02-23 17:29:10', '2022-02-23 17:29:10', 1),
	('xP6EYj', '3.12', '2022-02-23 17:29:17', '2022-02-23 17:29:17', 1),
	('B0ltYc', '3.13', '2022-02-23 17:29:22', '2022-02-23 17:29:22', 1),
	('op1Hj4', '3.14', '2022-02-23 17:29:28', '2022-02-23 17:29:28', 1),
	('qczKrA', '3.15', '2022-02-23 17:29:33', '2022-02-23 17:29:33', 1),
	('SfTOJW', '3.16', '2022-02-23 17:29:38', '2022-02-23 17:29:38', 1),
	('lv0jzT', '3.17', '2022-02-23 17:29:43', '2022-02-23 17:29:43', 1),
	('OlfRA5', '3.18', '2022-02-23 17:29:49', '2022-02-23 17:29:49', 1),
	('8Cy9Vre', '3.19', '2022-02-23 17:29:54', '2022-02-23 17:29:54', 1),
	('ZsVXfnQ', '3.2', '2022-02-23 17:29:59', '2022-02-23 17:29:59', 1),
	('Pcuri3K', '3.20', '2022-02-23 17:30:05', '2022-02-23 17:30:05', 1),
	('p93x0s7', '3.3', '2022-02-23 17:30:10', '2022-02-23 17:30:10', 1),
	('RrVT7YM', '3.4', '2022-02-23 17:30:19', '2022-02-23 17:30:19', 1),
	('i94MkYA', '3.5', '2022-02-23 17:30:23', '2022-02-23 17:30:23', 1),
	('WbNC83D', '3.6', '2022-02-23 17:30:28', '2022-02-23 17:30:28', 1),
	('p7RcLMn', '3.7', '2022-02-23 17:30:32', '2022-02-23 17:30:32', 1),
	('ct4qmGR', '3.8', '2022-02-23 17:30:36', '2022-02-23 17:30:36', 1),
	('G_iTmD5', '3.9', '2022-02-23 17:30:41', '2022-02-23 17:30:41', 1);
/*!40000 ALTER TABLE `data_kompetensi` ENABLE KEYS */;

-- Dumping structure for table emodule.data_mapel
CREATE TABLE IF NOT EXISTS `data_mapel` (
  `kode` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `insert` timestamp NULL DEFAULT current_timestamp(),
  `update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 1,
  UNIQUE KEY `kode` (`kode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table emodule.data_mapel: ~29 rows (approximately)
DELETE FROM `data_mapel`;
/*!40000 ALTER TABLE `data_mapel` DISABLE KEYS */;
INSERT INTO `data_mapel` (`kode`, `name`, `insert`, `update`, `status`) VALUES
	('vXYTDQ', 'Bahasa Inggris', '2022-02-23 16:53:05', '2022-02-23 16:53:05', 1),
	('CL5_R2', 'Antropologi', '2022-02-23 17:23:52', '2022-02-23 17:23:52', 1),
	('VuN89D', 'Bahasa dan Sastra Arab', '2022-02-23 17:24:03', '2022-02-23 17:24:03', 1),
	('T076nS', 'Bahasa Indonesia', '2022-02-23 17:24:12', '2022-02-23 17:24:12', 1),
	('5p2ix3', 'Bahasa dan Sastra Indonesia', '2022-02-23 17:24:18', '2022-02-23 17:24:18', 1),
	('KWdZDC', 'Bahasa dan Sastra Inggris', '2022-02-23 17:24:24', '2022-02-23 17:24:24', 1),
	('YmBnNo', 'Bahasa dan Sastra Jepang', '2022-02-23 17:24:30', '2022-02-23 17:24:30', 1),
	('bdl9F4', 'Bahasa dan Sastra Jerman', '2022-02-23 17:24:36', '2022-02-23 17:24:36', 1),
	('yGORl8', 'Bahasa dan Sastra Mandarin', '2022-02-23 17:24:41', '2022-02-23 17:24:41', 1),
	('_XydLP', 'Bahasa dan Sastra Perancis', '2022-02-23 17:24:47', '2022-02-23 17:24:47', 1),
	('VYewNkH', 'Biologi', '2022-02-23 17:24:54', '2022-02-23 17:24:54', 1),
	('cXodJFv', 'Ekonomi', '2022-02-23 17:25:00', '2022-02-23 17:25:00', 1),
	('atEeGNM', 'Fisika', '2022-02-23 17:25:05', '2022-02-23 17:25:05', 1),
	('jHOb9MJ', 'Geografi', '2022-02-23 17:25:10', '2022-02-23 17:25:10', 1),
	('lH3mwbs', 'Kimia', '2022-02-23 17:25:16', '2022-02-23 17:25:16', 1),
	('tSkcG4e', 'Matematika (Peminatan)', '2022-02-23 17:25:22', '2022-02-23 17:25:22', 1),
	('iGS9Q8z', 'Matematika (Umum)', '2022-02-23 17:25:29', '2022-02-23 17:25:29', 1),
	('bT2Cfq7', 'Pend. Jasmani Orkes', '2022-02-23 17:25:36', '2022-02-23 17:25:36', 1),
	('OV2HKgU', 'Pendidikan Agama Islam', '2022-02-23 17:25:44', '2022-02-23 17:25:44', 1),
	('_cwaxKh', 'Pendidikan Agama Katolik', '2022-02-23 17:25:50', '2022-02-23 17:25:50', 1),
	('k43P5Kf', 'Pendidikan Agama Kristen', '2022-02-23 17:25:55', '2022-02-23 17:25:55', 1),
	('Qo7Z5un', 'PPKn', '2022-02-23 17:26:04', '2022-02-23 17:26:04', 1),
	('2hAOXBY', 'Prakarya dan Kewirausahaan (PKWU) Kerajinan', '2022-02-23 17:26:10', '2022-02-23 17:26:10', 1),
	('VnI4dhk', 'Prakarya dan Kewirausahaan (PKWU) Pengolahan', '2022-02-23 17:26:17', '2022-02-23 17:26:17', 1),
	('ice1kyF', 'Sejarah', '2022-02-23 17:26:23', '2022-02-23 17:26:23', 1),
	('1BZPzLJ', 'Sejarah Indonesia', '2022-02-23 17:26:28', '2022-02-23 17:26:28', 1),
	('pm6wL2A', 'Seni Budaya (Seni Musik)', '2022-02-23 17:26:34', '2022-02-23 17:26:34', 1),
	('Qg1CXdp', 'Seni Budaya (Seni Rupa)', '2022-02-23 17:26:41', '2022-02-23 17:26:41', 1),
	('5XPBO7y', 'Sosiologi', '2022-02-23 17:26:47', '2022-02-23 17:26:47', 1);
/*!40000 ALTER TABLE `data_mapel` ENABLE KEYS */;

-- Dumping structure for table emodule.data_modul
CREATE TABLE IF NOT EXISTS `data_modul` (
  `kode` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `cover` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `mapel` varchar(50) DEFAULT NULL,
  `kompetensi` varchar(50) DEFAULT NULL,
  `views` double DEFAULT 0,
  `downloads` double DEFAULT 0,
  `insert` timestamp NULL DEFAULT current_timestamp(),
  `update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 1,
  UNIQUE KEY `kode` (`kode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table emodule.data_modul: ~2 rows (approximately)
DELETE FROM `data_modul`;
/*!40000 ALTER TABLE `data_modul` DISABLE KEYS */;
INSERT INTO `data_modul` (`kode`, `name`, `desc`, `cover`, `file`, `kategori`, `kelas`, `mapel`, `kompetensi`, `views`, `downloads`, `insert`, `update`, `status`) VALUES
	('taZMw0', 'Penguatan Literasi dan Numerasi di SMA', 'Salah satu ciri bangsa yang maju adalah bangsa yang mempersiapkan generasi penerus\r\nsebagai elemen penting penerus cita-cita bangsa. Penyiapan generasi muda atau sumber daya\r\nmanusia sangat penting dan menjadi prioritas karena dunia mengalami perubahan yang sangat\r\ncepat dalam segala lini kehidupan. Perubahan ini perlu diantisipasi dengan mempersiapkan\r\ngenerasi penerus yang memiliki kompetensi atau keterampilan berpikir kritis (Critical Thinking),\r\nkreativitas (Creativity), komunikasi (Communcation), dan kolaborasi (Collaborative).\r\n\r\nSalah satu upaya yang harus dilakukan dalam peningkatan ke empat kompetensi atau\r\nketerampilan di atas adalah melalui penguatan literasi. Literasi adalah kemampuan untuk\r\nmemaknai informasi secara kritis sehingga setiap orang dapat mengakses ilmu pengetahuan\r\ndan teknologi sebagai upaya dalam meningkatkan kualitas hidupnya. Terdapat 6 (enam) literasi\r\ndasar yaitu literasi baca tulis, literasi numerasi, literasi sains, literasi digital, literasi finansial,\r\nliterasi budaya dan kewargaan. Pada tahun 2021, pemerintah mulai menyelenggarakan Asesmen\r\nKompetensi Minimum (AKM) sebagai penilaian kompetensi mendasar yang diperlukan oleh\r\nsemua peserta didik untuk mampu mengembangkan kapasitas diri dan berpartisipasi positif pada\r\nmasyarakat. Terdapat dua kompetensi mendasar yang diukur pada AKM yaitu literasi membaca\r\ndan literasi numerasi.\r\n\r\nBuku ini disusun mengacu pada Panduan Penguatan Literasi dan Numerasi di Sekolah yang\r\ndikeluarkan oleh Direktorat Jenderal PAUD, Dikdas dan Dikmen Kementerian Pendidikan dan\r\nKebudayaan Tahun 2021. Pembahasan dalam buku ini didesain lebih spesifik untuk penguatan\r\nliterasi dan numerasi di jenjang Sekolah Menengah Atas (SMA). Buku ini diharapkan menjadi\r\ninspirasi bagi satuan pendidikan dalam mengembangkan literasi dan numerasi sehingga tercipta\r\nbudaya literasi yang bertujuan membentuk peserta didik sebagai pembelajaran sepanjang hayat.\r\nImplementasi dalam penilaian dikembangkan dalam buku lain yaitu Pengembangan Instrumen\r\nPenilaian Berbasis Literasi Membaca di SMA, Pengembangan Instrumen Penilaian Berbasis Literasi\r\nNumerasi di SMA, dan Pengembangan Instrumen Penilaian Berbasis Literasi Sains di SMA.', '202202221505-2-PDF_41180.jpg', '2202221505-2-PDF_58941.pdf', 'KgfGQ0', 'y4zQIK', 'vXYTDQ', 'UtelWu', 2, 1, '2022-02-23 18:45:34', '2022-02-23 22:28:32', 1),
	('eNsM24', 'Penguatan Literasi dan Numerasi di SMA', 'Salah satu ciri bangsa yang maju adalah bangsa yang mempersiapkan generasi penerus\r\nsebagai elemen penting penerus cita-cita bangsa. Penyiapan generasi muda atau sumber daya\r\nmanusia sangat penting dan menjadi prioritas karena dunia mengalami perubahan yang sangat\r\ncepat dalam segala lini kehidupan. Perubahan ini perlu diantisipasi dengan mempersiapkan\r\ngenerasi penerus yang memiliki kompetensi atau keterampilan berpikir kritis (Critical Thinking),\r\nkreativitas (Creativity), komunikasi (Communcation), dan kolaborasi (Collaborative).\r\n\r\nSalah satu upaya yang harus dilakukan dalam peningkatan ke empat kompetensi atau\r\nketerampilan di atas adalah melalui penguatan literasi. Literasi adalah kemampuan untuk\r\nmemaknai informasi secara kritis sehingga setiap orang dapat mengakses ilmu pengetahuan\r\ndan teknologi sebagai upaya dalam meningkatkan kualitas hidupnya. Terdapat 6 (enam) literasi\r\ndasar yaitu literasi baca tulis, literasi numerasi, literasi sains, literasi digital, literasi finansial,\r\nliterasi budaya dan kewargaan. Pada tahun 2021, pemerintah mulai menyelenggarakan Asesmen\r\nKompetensi Minimum (AKM) sebagai penilaian kompetensi mendasar yang diperlukan oleh\r\nsemua peserta didik untuk mampu mengembangkan kapasitas diri dan berpartisipasi positif pada\r\nmasyarakat. Terdapat dua kompetensi mendasar yang diukur pada AKM yaitu literasi membaca\r\ndan literasi numerasi.\r\n\r\nBuku ini disusun mengacu pada Panduan Penguatan Literasi dan Numerasi di Sekolah yang\r\ndikeluarkan oleh Direktorat Jenderal PAUD, Dikdas dan Dikmen Kementerian Pendidikan dan\r\nKebudayaan Tahun 2021. Pembahasan dalam buku ini didesain lebih spesifik untuk penguatan\r\nliterasi dan numerasi di jenjang Sekolah Menengah Atas (SMA). Buku ini diharapkan menjadi\r\ninspirasi bagi satuan pendidikan dalam mengembangkan literasi dan numerasi sehingga tercipta\r\nbudaya literasi yang bertujuan membentuk peserta didik sebagai pembelajaran sepanjang hayat.\r\nImplementasi dalam penilaian dikembangkan dalam buku lain yaitu Pengembangan Instrumen\r\nPenilaian Berbasis Literasi Membaca di SMA, Pengembangan Instrumen Penilaian Berbasis Literasi\r\nNumerasi di SMA, dan Pengembangan Instrumen Penilaian Berbasis Literasi Sains di SMA.', '202202221505-2-PDF_41180.jpg', '2202221505-2-PDF_58941.pdf', 'KgfGQ0', 'y4zQIK', 'vXYTDQ', 'UtelWu', 0, 0, '2022-02-23 18:45:34', '2022-02-23 20:57:55', 1),
	('aASDn34', 'Penguatan Literasi dan Numerasi di SMA', 'Salah satu ciri bangsa yang maju adalah bangsa yang mempersiapkan generasi penerus\r\nsebagai elemen penting penerus cita-cita bangsa. Penyiapan generasi muda atau sumber daya\r\nmanusia sangat penting dan menjadi prioritas karena dunia mengalami perubahan yang sangat\r\ncepat dalam segala lini kehidupan. Perubahan ini perlu diantisipasi dengan mempersiapkan\r\ngenerasi penerus yang memiliki kompetensi atau keterampilan berpikir kritis (Critical Thinking),\r\nkreativitas (Creativity), komunikasi (Communcation), dan kolaborasi (Collaborative).\r\n\r\nSalah satu upaya yang harus dilakukan dalam peningkatan ke empat kompetensi atau\r\nketerampilan di atas adalah melalui penguatan literasi. Literasi adalah kemampuan untuk\r\nmemaknai informasi secara kritis sehingga setiap orang dapat mengakses ilmu pengetahuan\r\ndan teknologi sebagai upaya dalam meningkatkan kualitas hidupnya. Terdapat 6 (enam) literasi\r\ndasar yaitu literasi baca tulis, literasi numerasi, literasi sains, literasi digital, literasi finansial,\r\nliterasi budaya dan kewargaan. Pada tahun 2021, pemerintah mulai menyelenggarakan Asesmen\r\nKompetensi Minimum (AKM) sebagai penilaian kompetensi mendasar yang diperlukan oleh\r\nsemua peserta didik untuk mampu mengembangkan kapasitas diri dan berpartisipasi positif pada\r\nmasyarakat. Terdapat dua kompetensi mendasar yang diukur pada AKM yaitu literasi membaca\r\ndan literasi numerasi.\r\n\r\nBuku ini disusun mengacu pada Panduan Penguatan Literasi dan Numerasi di Sekolah yang\r\ndikeluarkan oleh Direktorat Jenderal PAUD, Dikdas dan Dikmen Kementerian Pendidikan dan\r\nKebudayaan Tahun 2021. Pembahasan dalam buku ini didesain lebih spesifik untuk penguatan\r\nliterasi dan numerasi di jenjang Sekolah Menengah Atas (SMA). Buku ini diharapkan menjadi\r\ninspirasi bagi satuan pendidikan dalam mengembangkan literasi dan numerasi sehingga tercipta\r\nbudaya literasi yang bertujuan membentuk peserta didik sebagai pembelajaran sepanjang hayat.\r\nImplementasi dalam penilaian dikembangkan dalam buku lain yaitu Pengembangan Instrumen\r\nPenilaian Berbasis Literasi Membaca di SMA, Pengembangan Instrumen Penilaian Berbasis Literasi\r\nNumerasi di SMA, dan Pengembangan Instrumen Penilaian Berbasis Literasi Sains di SMA.', '202202221505-2-PDF_41180.jpg', '2202221505-2-PDF_58941.pdf', 'KgfGQ0', 'y4zQIK', 'vXYTDQ', 'UtelWu', 0, 0, '2022-02-23 18:45:34', '2022-02-23 20:57:55', 1);
/*!40000 ALTER TABLE `data_modul` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
