-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2019 pada 00.37
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrcodescan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mentor` varchar(50) DEFAULT NULL,
  `nama_mentor` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_masuk` time NOT NULL,
  `waktu_pulang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`id_absen`, `nama`, `mentor`, `nama_mentor`, `tanggal`, `waktu_masuk`, `waktu_pulang`) VALUES
(1, 'jsbsb', 'Big Data', 'Ersa pratiwi', '2019-09-22', '06:59:37', '00:00:00'),
(2, 'deden yoshua odie a', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '07:00:15', '00:00:00'),
(3, 'Hari Akbar Ramadhan', 'Designer', 'julianto', '2019-09-22', '07:00:50', '00:00:00'),
(4, 'Hari Akbar Ramadhan', 'Designer', 'julianto', '2019-09-22', '07:01:09', '00:00:00'),
(5, 'Hari Akbar Ramadhan', 'Designer', 'julianto', '2019-09-22', '08:18:46', '00:00:00'),
(6, 'M Nur Baharudin', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:34:15', '00:00:00'),
(7, 'Muhammad Siska', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:34:36', '17:14:25'),
(8, 'Anis Khaerunissa', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:35:08', '17:14:55'),
(9, 'Zeril Rizal Ekowiono', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:35:18', '17:14:35'),
(10, 'Nurjana Adi Wijaya', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:35:26', '17:14:38'),
(11, 'Muhammad Egi Wahyudi', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:35:30', '17:19:01'),
(12, 'Muhammad Egi Wahyudi', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:35:32', '17:19:01'),
(13, 'Muhammad Zulfikri', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:35:38', '17:16:18'),
(14, 'Aldi Setiawan', 'Developer', 'monur', '2019-09-22', '08:35:38', '00:00:00'),
(15, 'mohamad djazuli', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:35:41', '00:00:00'),
(16, 'Muhammad Zulfikri', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:35:43', '17:16:18'),
(17, 'Deka Setiadi', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:35:58', '17:15:01'),
(18, 'HANA NATASIA', 'Robotics', 'jefri pramono', '2019-09-22', '08:36:05', '00:00:00'),
(19, 'aldi hidayah', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:36:08', '00:00:00'),
(20, 'Safrullah Hidayat', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:36:09', '00:00:00'),
(21, 'Farid Purnama', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:36:11', '17:16:51'),
(22, 'Saroji', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:36:15', '17:14:28'),
(23, 'M Farhan Faturahman', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:36:25', '00:00:00'),
(24, 'M Farhan Faturahman', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:36:27', '00:00:00'),
(25, 'Agung Saepudin', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:36:30', '00:00:00'),
(26, 'Agung Saepudin', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:36:32', '00:00:00'),
(27, 'Hamzah Zain Al Bahri', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:36:32', '00:00:00'),
(28, 'Delisah A', 'Robotics', 'jefri pramono', '2019-09-22', '08:36:34', '00:00:00'),
(29, 'Ditto Julianto', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:36:35', '00:00:00'),
(30, 'Ditto Julianto', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:36:37', '00:00:00'),
(31, 'Taufik Hidayat', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:36:45', '00:00:00'),
(32, 'rifcki aziz faturachman', 'Robotics', 'jefri pramono', '2019-09-22', '08:36:48', '00:00:00'),
(33, 'Irvandi', 'Designer', 'julianto', '2019-09-22', '08:36:52', '00:00:00'),
(34, 'M Sulaim Maulidi', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:36:53', '00:00:00'),
(35, 'auliya', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:36:57', '00:00:00'),
(36, 'Alfin Maulana', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:36:58', '17:17:03'),
(37, 'Rizki Ramadhan', 'Designer', 'julianto', '2019-09-22', '08:37:01', '00:00:00'),
(38, 'Carnoto', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:37:04', '00:00:00'),
(39, 'sasha dwi agustin', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:37:20', '00:00:00'),
(40, 'Raul Wanandi', 'Robotics', 'jefri pramono', '2019-09-22', '08:37:23', '00:00:00'),
(41, 'muhammad aziz rafi', 'Designer', 'julianto', '2019-09-22', '08:37:31', '00:00:00'),
(42, 'M Dita Pratama', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:37:32', '00:00:00'),
(43, 'Rizky Agung Pratama', 'Designer', 'julianto', '2019-09-22', '08:37:38', '00:00:00'),
(44, 'Nauval Helmi Ebriansyah', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:37:38', '00:00:00'),
(45, 'Doni Anggara', 'Robotics', 'jefri pramono', '2019-09-22', '08:37:38', '00:00:00'),
(46, 'Mardiki Akbar', 'Designer', 'julianto', '2019-09-22', '08:37:48', '00:00:00'),
(47, 'Mochammad Adjie Setyadji', '', '', '2019-09-22', '08:37:50', '00:00:00'),
(48, 'Muhamad Rifki Maulana', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:37:52', '00:00:00'),
(49, 'naufal muhamad putra', 'Animator', 'atikah', '2019-09-22', '08:38:13', '00:00:00'),
(50, 'faisal adam', 'Animator', 'atikah', '2019-09-22', '08:38:21', '00:00:00'),
(51, 'Aziz Muhfidz Hidayat', 'Designer', 'julianto', '2019-09-22', '08:38:22', '00:00:00'),
(52, 'Abdul Taukhid', 'Animator', 'atikah', '2019-09-22', '08:38:31', '00:00:00'),
(53, 'muhamad nur fauzan', 'Designer', 'julianto', '2019-09-22', '08:38:32', '00:00:00'),
(54, 'Puspita Maulana Arumsari', 'Animator', 'atikah', '2019-09-22', '08:38:38', '00:00:00'),
(55, 'Bella amalia', 'Animator', 'atikah', '2019-09-22', '08:38:42', '00:00:00'),
(56, 'khaerul anwar', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:38:42', '00:00:00'),
(57, 'Arpah', 'Animator', 'atikah', '2019-09-22', '08:38:54', '00:00:00'),
(58, 'Rofhan Zahma Anzary', 'Animator', 'atikah', '2019-09-22', '08:39:00', '00:00:00'),
(59, 'Anggara Pratama putra', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:39:01', '00:00:00'),
(60, 'FADELLIA AZZAHRA', 'Robotics', 'jefri pramono', '2019-09-22', '08:39:01', '00:00:00'),
(61, 'Adi Munawar', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:39:01', '00:00:00'),
(62, 'MUHAMAD ALFIN MUBAROK', 'Animator', 'atikah', '2019-09-22', '08:39:04', '00:00:00'),
(63, 'MOH KHOIRUL INSAN', 'Animator', 'atikah', '2019-09-22', '08:39:08', '00:00:00'),
(64, 'Maman Faturochman', 'Animator', 'atikah', '2019-09-22', '08:39:11', '00:00:00'),
(65, 'NYUFI ALHUSAENI', 'Robotics', 'jefri pramono', '2019-09-22', '08:39:12', '00:00:00'),
(66, 'Mohammad Sayyid Syafiq', 'Animator', 'atikah', '2019-09-22', '08:39:16', '00:00:00'),
(67, 'Jumali Eko Satrio', 'Animator', 'atikah', '2019-09-22', '08:39:20', '00:00:00'),
(68, 'irga rusgianto', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:39:33', '00:00:00'),
(69, 'DANYA RIZKI CHAERUNISA', 'Designer', 'julianto', '2019-09-22', '08:39:39', '00:00:00'),
(70, 'Rizal Abdul Rosid', 'Robotics', 'jefri pramono', '2019-09-22', '08:39:45', '00:00:00'),
(71, 'Dessy Angelina', 'Designer', 'julianto', '2019-09-22', '08:39:46', '00:00:00'),
(72, 'yayuk sri rismatuti', 'Designer', 'julianto', '2019-09-22', '08:39:53', '00:00:00'),
(73, 'ryan ramadhan', 'Robotics', 'jefri pramono', '2019-09-22', '08:40:00', '00:00:00'),
(74, 'siti mushoffa', 'Designer', 'julianto', '2019-09-22', '08:40:02', '00:00:00'),
(75, 'yayah sarwiyah', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:40:07', '00:00:00'),
(76, 'Wildan Attariq Firmansyach', 'Robotics', 'jefri pramono', '2019-09-22', '08:40:12', '00:00:00'),
(77, 'Aida Fitri', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:40:31', '00:00:00'),
(78, 'Mohammad Farhan Rizaldy', 'Robotics', 'jefri pramono', '2019-09-22', '08:40:46', '00:00:00'),
(79, 'vina nurul huda', 'Designer', 'julianto', '2019-09-22', '08:40:51', '00:00:00'),
(80, 'akmal maulana garsandi', 'Robotics', 'jefri pramono', '2019-09-22', '08:40:55', '00:00:00'),
(81, 'intan siti zahro', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:40:57', '00:00:00'),
(82, 'azmah rasyidah', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:41:09', '00:00:00'),
(83, 'Sanadz Fortuna', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:41:55', '17:19:06'),
(84, 'Mutia Lizannah Ruyatman', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:42:12', '17:10:35'),
(85, 'putri rahmadani', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:43:42', '00:00:00'),
(86, 'Ikeu Nurhaeni', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:43:45', '00:00:00'),
(87, 'fikmi ikmiah', 'Robotics', 'jefri pramono', '2019-09-22', '08:43:53', '17:15:06'),
(88, 'deden yoshua odie a', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:43:53', '00:00:00'),
(89, 'Fauzi syarief Oktovian', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:43:57', '00:00:00'),
(90, 'agung faisal', 'Robotics', 'jefri pramono', '2019-09-22', '08:44:06', '17:15:15'),
(91, 'Sudirja', 'Designer', 'julianto', '2019-09-22', '08:44:07', '17:19:11'),
(92, 'Yuniar Kartika', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:44:09', '17:10:58'),
(93, 'Hana Rosyani', 'Robotics', 'jefri pramono', '2019-09-22', '08:44:14', '17:14:27'),
(94, 'sopyan', 'Robotics', 'jefri pramono', '2019-09-22', '08:44:20', '17:16:00'),
(95, 'Mohamad Ruchiat', 'Robotics', 'jefri pramono', '2019-09-22', '08:44:28', '17:15:39'),
(96, 'M Izzat Lutfi', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:44:38', '00:00:00'),
(97, 'Heru Siswanto', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:44:46', '17:11:20'),
(98, 'ADJI ARIANTO', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:44:54', '00:00:00'),
(99, 'muhanmad jafar', 'Robotics', 'jefri pramono', '2019-09-22', '08:45:10', '00:00:00'),
(100, 'Muhammad Ridho', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:45:13', '00:00:00'),
(101, 'Aji Muhammad Iqbal', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:45:16', '00:00:00'),
(102, 'Feri Irawan', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:45:20', '00:00:00'),
(103, 'Khoirudin', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:45:23', '00:00:00'),
(104, 'Nurul Ibnu Al Muharom', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:45:26', '17:11:35'),
(105, 'achmad abdul rakhmat', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:45:35', '17:11:24'),
(106, 'muhammad jafar', '', '', '2019-09-22', '08:45:42', '17:15:44'),
(107, 'Vina widiati', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:45:47', '00:00:00'),
(108, 'Neli Sri Anggraeni', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:45:49', '00:00:00'),
(109, 'Kristin Wulan S', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:45:50', '17:11:08'),
(110, 'Neli Sri Anggraeni', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:45:52', '00:00:00'),
(111, 'Mia Fijriani', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:46:03', '00:00:00'),
(112, 'Mia Fijriani', 'Big Data', 'Ersa pratiwi', '2019-09-22', '08:46:05', '00:00:00'),
(113, 'Retno Sari Nababan', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:46:06', '17:10:00'),
(114, 'Ichsanudin Masyuri', 'Robotics', 'jefri pramono', '2019-09-22', '08:46:09', '00:00:00'),
(115, 'Faisal taufiq', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:46:12', '17:11:49'),
(116, 'Sukma Prahara', 'Animator', 'atikah', '2019-09-22', '08:46:17', '17:14:19'),
(117, 'lita khaerunnisa', '', '', '2019-09-22', '08:46:22', '00:00:00'),
(118, 'Sri Suwartini', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:46:28', '00:00:00'),
(119, 'ahmad firdaos', 'AI Artificial Intelligent', 'Fauzi', '2019-09-22', '08:46:30', '00:00:00'),
(120, 'Ishlah habibi', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:46:32', '00:00:00'),
(121, 'Agiy Anfasa', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:46:45', '00:00:00'),
(122, 'cep haryanto', 'Animator', 'atikah', '2019-09-22', '08:47:17', '17:15:11'),
(123, 'Masjunedi', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:47:23', '00:00:00'),
(124, 'Noviati', 'Designer', 'julianto', '2019-09-22', '08:47:29', '17:19:16'),
(125, 'Masjunedi', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:47:33', '00:00:00'),
(126, 'Sudirja', 'Designer', 'julianto', '2019-09-22', '08:47:35', '17:19:11'),
(127, 'Mabrur', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:47:38', '00:00:00'),
(128, 'Siti Oop Sofiyah', 'Designer', 'julianto', '2019-09-22', '08:47:43', '17:19:01'),
(129, 'm solahuddin', '', '', '2019-09-22', '08:47:44', '00:00:00'),
(130, 'Diyana Pungki', 'Designer', 'julianto', '2019-09-22', '08:47:49', '17:19:07'),
(131, 'Suwadi', 'IoT Internet of Things', 'Tika Agustiyani', '2019-09-22', '08:47:49', '00:00:00'),
(132, 'Agus Muhamad Andika', 'Designer', 'julianto', '2019-09-22', '08:47:55', '17:18:49'),
(133, 'Ibnu Faqih Affrizal', 'Animator', 'atikah', '2019-09-22', '08:47:59', '17:14:40'),
(134, 'bilal saputra', 'Designer', 'julianto', '2019-09-22', '08:48:05', '17:18:44'),
(135, 'Rosdiana', 'Animator', 'atikah', '2019-09-22', '08:48:05', '17:14:31'),
(136, 'Dita Rizqi Berliana', 'Designer', 'julianto', '2019-09-22', '08:48:12', '17:18:33'),
(137, 'Rosdiana', 'Animator', 'atikah', '2019-09-22', '08:48:19', '17:14:31'),
(138, 'Haris Maulana', 'Designer', 'julianto', '2019-09-22', '08:48:21', '17:18:57'),
(139, 'uci martinoviyanti', 'Designer', 'julianto', '2019-09-22', '08:48:28', '00:00:00'),
(140, 'Abdurrahman Alliham', 'Animator', 'atikah', '2019-09-22', '08:48:40', '17:15:03'),
(141, 'reja nazar nurdin', 'Designer', 'julianto', '2019-09-22', '08:49:02', '17:18:39'),
(142, 'hilda dwi yolanda', 'Animator', 'atikah', '2019-09-22', '08:49:09', '17:14:00'),
(143, 'Puji Rahayu', 'Animator', 'atikah', '2019-09-22', '08:49:24', '17:14:23'),
(144, 'Rizka jamilatul rachmah', 'Data Science', 'Rifqiawan', '2019-09-22', '17:14:01', '00:00:00'),
(145, 'rahayu nilam cahya', 'Data Science', 'Rifqiawan', '2019-09-22', '17:14:13', '00:00:00'),
(146, 'Lutfi Hakim', 'Data Science', 'Rifqiawan', '2019-09-22', '17:14:34', '00:00:00'),
(147, 'Sukma Tamji', 'Data Science', 'Rifqiawan', '2019-09-22', '17:14:53', '00:00:00'),
(148, 'Abdul Aziz', 'Programmer', 'Nur Qorimah', '2019-09-22', '17:15:42', '17:15:47'),
(149, 'Akhmad khodimul Jalil Nur', 'Data Science', 'Rifqiawan', '2019-09-22', '17:16:14', '00:00:00'),
(150, 'Opiana Prima', '', '', '2019-09-22', '17:16:35', '00:00:00'),
(151, 'Pasya Laduni', '', '', '2019-09-22', '17:16:37', '00:00:00'),
(152, 'prika odiyasa', 'Programmer', 'Nur Qorimah', '2019-09-22', '17:16:39', '17:16:51'),
(153, 'Ichsanudin Masyuri', 'Robotics', 'jefri pramono', '2019-09-22', '17:17:19', '00:00:00'),
(154, 'irfan Abdurrahman', 'Robotics', 'jefri pramono', '2019-09-22', '17:27:13', '17:29:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8 NOT NULL,
  `jenis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mentor`
--

CREATE TABLE `tb_mentor` (
  `id_mentor` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mentor`
--

INSERT INTO `tb_mentor` (`id_mentor`, `nama`, `kelompok`, `foto`) VALUES
(2, 'jefri pramono', 'Robotics', 'IMG_0780.JPG'),
(3, 'Nur Qorimah', 'Programmer', 'WhatsApp_Image_2019-09-19_at_11_35_22.jpeg'),
(4, 'julianto', 'Designer', 'man.png'),
(5, 'monur', 'Developer', '20190919_122721.jpg'),
(6, 'atikah', 'Animator', 'my.jpg'),
(7, 'Ersa pratiwi', 'Big Data', 'IMG-20190615-WA00021.jpg'),
(8, 'Nurul Siti Qomah', 'Hacker', 'WhatsApp_Image_2019-09-19_at_14_58_27.jpeg'),
(9, 'Rifqiawan', 'Data Science', 'WhatsApp_Image_2019-09-19_at_15_09_27.jpeg'),
(10, 'Tika Agustiyani', 'IoT Internet of Things', 'WhatsApp_Image_2019-09-19_at_15_09_45.jpeg'),
(11, 'Fauzi', 'AI Artificial Intelligent', 'WhatsApp_Image_2019-09-19_at_13_23_33.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kelompok` varchar(30) NOT NULL,
  `reguler` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama`, `asal_sekolah`, `alamat`, `no_hp`, `kelompok`, `reguler`) VALUES
(2, 'Agung Saepudin', 'SMK Asih Sadika', 'Warukawung', '085722440592', 'Big Data', 'Reguler Pagi'),
(3, 'Mia Fijriani', 'SMKN 2 Kuningan', 'Kuningan', '087836777441', 'Big Data', 'Reguler Pagi'),
(4, 'Ditto Julianto', 'SMAN 1 Mandirancan', 'Kuningan', '085797882924', 'Big Data', 'Reguler Pagi'),
(6, 'M Farhan Faturahman', 'SMAN 1 Sumber', 'Talun', '0895357707639', 'Big Data', 'Reguler Pagi'),
(7, 'Khoirudin', 'SMK Islamic Center', 'Tengah tani', '089664176125', 'Big Data', 'Reguler Pagi'),
(8, 'DANYA RIZKI CHAERUNISA', 'SMAN 6 KOTA CIREBON', 'Jalan Kanoman Utara no 34 Kota Cirebon', '08981055634', 'Designer', 'Reguler Pagi'),
(9, 'avira kris alvianti', 'SMA.N 6 cirebon', 'jl pandansari rt 03 rw 09 sutawinangun kedawung', '089505866814', 'Developer', 'Reguler Pagi'),
(10, 'Feri Irawan', 'SMAN 1 Wared', 'Pasar Leman', '085791972489', 'Big Data', 'Reguler Pagi'),
(11, 'vina nurul huda', 'smk cipto kota cirebon', 'blok kebon kunir rt/rw 04/02 desa kedung jaya, kec. kedawung kab. cirebon', '08983326849', 'Designer', 'Reguler Pagi'),
(12, 'yayah sarwiyah', 'smk wahidin', 'jl nyimas pakung wati blok pancuran mas gg. paguyuban np. 49', '087882949195', 'AI Artificial Intelligent', 'Reguler Pagi'),
(13, 'Fitri Adha Hariyati Airi', 'SMK Budiarti', 'Sumber', '0895807600609', 'Big Data', 'Reguler Pagi'),
(14, 'Rizki Ramadhan', 'SMAN 1 Losari', 'Desa kalisari kec. losari kab. cirebon', '089654808708', 'Designer', 'Reguler Pagi'),
(15, 'M Dita Pratama', 'SMKN 1 Rajagaluh', 'Majalengka', '082215142282', 'Big Data', 'Reguler Pagi'),
(16, 'Aji Muhammad Iqbal', 'SMK Pinang Putra Mandiri', 'Kuningan', '081287603355', 'Big Data', 'Reguler Pagi'),
(17, 'intan siti zahro', 'MA nurul falaah jalaksana', 'dusun kliwon desa bandorasawetan rt/w 014/005 kec. cilimus kab. kuningan', '083127151525', 'AI Artificial Intelligent', 'Reguler Pagi'),
(18, 'EVA', 'SMK SAHIDA LEMAHABANG', 'Blok Wage Desa Japura Lor Kec. Pangenan Kab.Cirebon', '08971799680', 'Programmer', 'Reguler Pagi'),
(19, 'Rizky Agung Pratama', 'SMK Ulil Albab Depok Cirebon', 'Jl.Jendral Urip Sumoharjo Desa Bringin Blok 2 Tanjakan Rt/Rw 001/002 Kecamatan Ciwaringin Kabupaten ', '089660431245', 'Designer', 'Reguler Pagi'),
(20, 'Wulan Suci', 'SMK AR RAHMAT', 'Desa Sindangpano, Kec.Rajagaluh, Kab.Majalengka', '082116193467', 'Programmer', 'Reguler Pagi'),
(21, 'muhammad aziz rafi', 'SMAN 1 JATIWANGI', 'jl perjuangan belakang akper no 03 kec kesambi', '082120319705', 'Designer', 'Reguler Pagi'),
(23, 'yayuk sri rismatuti', 'SMAN 7 CIREBON', 'jl.perjuangan kec.kesambi kel.karyamulya kamp.kayuwalang rt/rw 02/07', '0895353212841', 'Designer', 'Reguler Pagi'),
(24, 'Agung Laksono', 'SMAN 1 PLUMBON', 'Desa Cangkring blok Kaum', '082218463615', 'Programmer', 'Reguler Pagi'),
(25, 'Aziz Muhfidz Hidayat', 'MA SALAFIYAH', 'Ds. Karangsari Kec. Weru Kab. Cirebon', '0895343659645', 'Designer', 'Reguler Pagi'),
(26, 'Agus Muhamad Andika', 'SMK Negeri 1 Luragung', 'Dusun Manis Rt.002. Rw.002 Desa Bunder Kec. Cidahu Kab. Kuningan', '089679582141', 'Designer', 'Reguler Sore'),
(27, 'siti mushoffa', 'SMAIQu Al Bahjah Sumber', 'jl.perkutut 3 no.62 rt02 rw04 kec.harjamukti kel.kecapi perumnas, cirebon', '089662447951', 'Designer', 'Reguler Pagi'),
(28, 'Noviati', 'SMK', 'Jl Ki Ageng Tapa Blok Karang Wetan Desa Gesik Tengah Tani', '0895353653864', 'Designer', 'Reguler Sore'),
(29, 'Septy nur komalasari', 'Smkn 1 mundu cirebon', 'Jl.karanggetas no.219', '082321415990', 'Hacker', 'Reguler Sore'),
(30, 'Dessy Angelina', 'SMK Samudra Nusantara', 'Desa Lemahabang Kulon Kecamatan Lemahabang Kabupaten cirebon Dusun 06', '089660339633', 'Designer', 'Reguler Pagi'),
(31, 'uci martinoviyanti', 'widya utama', 'blokA no.11 perumahan sentani regency kel.tukmudal kec.sumbwe', '0895363866642', 'Designer', 'Reguler Sore'),
(32, 'ahmad firdaos', 'smk ulil albab', 'blok desa rt/rw 02/02 desa cempaka, plumbon-cirebon', '089660801878', 'AI Artificial Intelligent', 'Reguler Sore'),
(33, 'Nurul Ibnu Al Muharom', 'SMK WAHIDIN KOTA CIREBON', 'Jl. Syekh Nur Jati Ds. Wanasabalor Kec. Talun Kab.Cirebon 45171', '083166192247', 'AI Artificial Intelligent', 'Reguler Sore'),
(34, 'Irvandi', 'SMKN 1 Jamblang', 'Jl. fatahillah No.14 sumber', '089662299994', 'Designer', 'Reguler Pagi'),
(35, 'Zeril Rizal Ekowiono', 'SMKN 1 Cilimus', 'Kuningan', '085210593695', 'Big Data', 'Reguler Sore'),
(36, 'Siti Oop Sofiyah', 'MAN 2 Cirebon', 'Desa Bondan, Kec. Sukagumiwang, Kab. Indramayu', '085797287054', 'Designer', 'Reguler Sore'),
(37, 'Sudirja', 'SMK MUHAMMADIYAH KEDAWUNG CIREBON', 'Ds.cangkoak rt 18/05 Kec.Dukupuntang Kab.cirebon', '083824455504', 'Designer', 'Reguler Sore'),
(38, 'Nauval Helmi Ebriansyah', 'MAN 1 KOTA CIREBON', 'Jawa Barat,Jln Sunan Gunung Jati Gg Desa Pasindangan', '087810034541', 'AI Artificial Intelligent', 'Reguler Pagi'),
(39, 'Alfin Maulana', 'MI Manuputra', 'Brebes', '089874874165', 'Big Data', 'Reguler Sore'),
(40, 'Aida Fitri', 'SMK Sahida Lemahabang', 'Desa Munjul Blok Manis Kecamatan Astanajapura Kabupaten Cirebon', '083821427593', 'AI Artificial Intelligent', 'Reguler Pagi'),
(41, 'muhamad nur fauzan', 'SMK N 4 kuningan', 'desa babakangebang RT.010 Rw.001 kab. babakan kec. cirebon', '082118138338', 'Designer', 'Reguler Pagi'),
(42, 'Muhamad Rifki Maulana', 'SMK Sultan Agung Sumber', 'jl.syekh nurjati desa wanasaba kidul', '089623032892', 'AI Artificial Intelligent', 'Reguler Pagi'),
(43, 'Anis Khaerunissa', 'SMK Al wasliyah', 'Tukmudal', '083824340032', 'Big Data', 'Reguler Sore'),
(44, 'Hamzah Zain Al Bahri', 'SMKN 1 CIREBON', 'Kp.Kriyan Barat No.57 45113', '0895374300688', 'AI Artificial Intelligent', 'Reguler Pagi'),
(45, 'Haris Maulana', 'SMK Wahidin Kota Cirebon', 'Desa wanasaba-lor kec. talun kab. cirebon', '08384569909', 'Designer', 'Reguler Sore'),
(46, 'dias ariana herawati', 'Smk veteran', 'jl.gunung galunggung 3 D24 no.86', '087787851368', 'Hacker', 'Reguler Sore'),
(47, 'azmah rasyidah', 'MAN 1 kota cirebon', 'jl. cantilan kec. pekalipan kel. pulasaren kota cirebon', '082119746103', 'AI Artificial Intelligent', 'Reguler Pagi'),
(48, 'Muhammad Siska', 'SMK Islamic Center', 'Kedawung', '081321517492', 'Big Data', 'Reguler Sore'),
(49, 'muhamad ilham maulana', 'Smk maarif pangenan', 'ds rawaurip kec pangenan kab cirebon', '088229226286', 'Programmer', 'Reguler Pagi'),
(50, 'R dede fitri yani', 'man 1 cirebon', 'jl.desa cangkring blok karang anyar', '085314564987', 'Hacker', 'Reguler Sore'),
(51, 'reja nazar nurdin', 'sma negeri 1 cisarua', 'taman nuansa majasem kos linggahara', '082115273541', 'Designer', 'Reguler Sore'),
(52, 'Diyana Pungki', 'smk yadika kedawung cirebon', 'desa bungko lor rt02 rw04 kecamatan kapetakan kabupaten cirebon', '083823138466', 'Designer', 'Reguler Sore'),
(53, 'Saroji', 'SMKN 1 Cirebon', 'Kedawung', '089604931905', 'Big Data', 'Reguler Sore'),
(54, 'Adi Munawar', 'MA PEMBANGUNAN', 'Desa Mekarjaya', '081563754507', 'AI Artificial Intelligent', 'Reguler Pagi'),
(55, 'faisal akbar', 'smkn 1 jamblang', 'jl.kyai haji agus salim no 70', '08985175748', 'Hacker', 'Reguler Sore'),
(56, 'khaerul anwar', 'sman 1ciwaringin', 'desa gintung tengah kecamatan ciwaringin kabupaten cirebon', '085759602110', 'AI Artificial Intelligent', 'Reguler Pagi'),
(57, 'Muhammad Zulfikri', 'MA Salafiyan', 'Bypass', '085221316272', 'Big Data', 'Reguler Sore'),
(58, 'Muhammad Jawwad', 'Ma Annur setupatok', 'Ponpes jagasatru kecamatan pekalipan', '087848281612', 'AI Artificial Intelligent', 'Reguler Sore'),
(59, 'irga rusgianto', 'sma', 'majalengka', '082215081537', 'AI Artificial Intelligent', 'Reguler Pagi'),
(60, 'Mohammad taufiqurrohman', 'Smk NU Mekanika Buntet pesantren', 'Ds.Pegagan Kidul Kec.Kapetakan Kab.Cirebob', '089664876024', 'Programmer', 'Reguler Pagi'),
(61, 'Dita Rizqi Berliana', 'SMAN 3 CIREBON', 'Jl.Gn.Galunggung III D.24 No.86', '089648762850', 'Designer', 'Reguler Sore'),
(62, 'Hilda fidyah hadi pratama', 'SMAN 1 LOSARI', 'Desa Barisan kec. Losari kab. Cirebon', '0895332776072', 'Hacker', 'Reguler Pagi'),
(63, 'bilal saputra', 'SMK AL HIDAYAH', 'Dusun III Desa Banjarwangunan RT01/RW04 kec.mundu kab.cirebon', '089509888537', 'Designer', 'Reguler Sore'),
(64, 'Muhammad Egi Wahyudi', 'SMAN 6 Cirebon', 'Kedawung', '088972004790', 'Big Data', 'Reguler Sore'),
(65, 'Irfa Mulhimah Fauziah', 'MAN 3 buntet pesantren', 'desa ciawi japura Blok 01 Rt/Rw 007/002 kecamatan susukan lebak kabupaten cirebon', '083824721427', 'Hacker', 'Reguler Pagi'),
(66, 'Farid Purnama', 'SMKN 1 Cirebon', 'Cipto', '0895364453122', 'Big Data', 'Reguler Sore'),
(67, 'MUHAMAD NURHUDA', 'SMK ILMAN NAFIAH', 'desa warukawung kec.depok kab.cirebon', '083106972998', 'Programmer', 'Reguler Pagi'),
(68, 'Alimudin', 'SMAN 9 CIREBON', 'kedung krisik selatan kelurahan argasunya kecamatan harjamukti kota cirebon', '082320195288', 'Hacker', 'Reguler Pagi'),
(69, 'moh.miftahurrifa', 'Smk samudra nusantara', 'ds.mertapada kulon kec.astanajapura kan.cirebon', '089686859790', 'Hacker', 'Reguler Sore'),
(70, 'Norma Ayuningtyas', 'Smk islamic centre', 'jl. kigede mayaguna blok gintungan kulon rt/rw 01/02 kel. pasalakan kec. sumber kab. cirebon', '0895636981804', 'Hacker', 'Reguler Pagi'),
(71, 'Sanadz Fortuna', 'MAN 2 Cirebon', 'Kesambi Dalam', '089660149525', 'Big Data', 'Reguler Sore'),
(72, 'Kharits Abdul Khalim', 'MAN 1 kota cirebon', 'jl.gunung jati,ds pasindangan RT01 Rw01', '089660185663', 'Programmer', 'Reguler Pagi'),
(73, 'Muhammad Tegar Lazuardi', 'SMAN 1 SURANENGGALA', 'Btn Griya Indah Rt/Rw 027/002 Ds.Kapetalan Kec.Kapetakan Kab.Cirebon Prov Jawabarat', '081805887516', 'Hacker', 'Reguler Pagi'),
(74, 'Melia', 'SMKN 1 Kadipaten', 'Ds. Liangjulang blok. jamiasih Kec. Kadipaten Kab. Majalengka', '08970577444', 'Hacker', 'Reguler Pagi'),
(75, 'Irfan Zainul Abidin', 'SMK ALJABBAR CILEDUG', 'Ds.Sukadana Rt.02 Rw.04 kec.pabuaran kab.cirebon', '089504498449', 'Programmer', 'Reguler Pagi'),
(76, 'asep saefuddin', 'SMK', 'desa dukupuntang kecamatan dukupuntang kabupaten cirebon blok dukumalang rt/rw 01/01', '085721288274', 'Hacker', 'Reguler Pagi'),
(77, 'Fahmi Maulana', 'SMAN 1 Arjawinangun', 'BTN Arjawinangun Permai Blok C4 no.5 kec.Arjawinangun Kab.Cirebon', '087719197250', 'Hacker', 'Reguler Pagi'),
(78, 'Herdiyanto Pamungkas', 'Smk Muthia harapan cicalengka Bandung', 'blok krasak desa walahar rt02 rw03 kec gempol kab cirebon', '089663678211', 'Programmer', 'Reguler Pagi'),
(79, 'Muhammad bagus ibrohim', 'SMA negeri 1 babakan', 'blok kaum desa gebang udik kecamatan gebang', '08562441581', 'Hacker', 'Reguler Pagi'),
(82, 'Nur Syarief Abdullah', 'SMK Informatika Al-irsyad Al-islamiyah Kota Cirebon', 'Jl.Ledeng Suket Duwur Rt05/Rw10 Kec Harjamukti Kota Cirebon', '089506099994', 'Programmer', 'Reguler Sore'),
(83, 'Farhandi Irfan Faishal', 'SMAN 1 Kota Cirebon', 'Taman Evakuasi Indah Blok A9', '08815131445', 'Programmer', 'Reguler Pagi'),
(84, 'rizky ahmad bagja', 'sma 5 kota cirebon', 'komplek mega endah blok c9', '085864663868', 'Programmer', 'Reguler Pagi'),
(85, 'ABDUL AZIZ', 'SMK Lestari Gumulunglebak', 'Dusun Guna Karya RT/RW 002/008 Desa Gumulung Tonggoh Kecamatan Greged Kabupaten Cirebon', '083822113457', 'Programmer', 'Reguler Sore'),
(86, 'prika odiyasa', 'SMK informatika Al irsyad', 'randobawa ilir blok depok rt/rw 02/04 kec.mandirancan kab.kuningan', '089653223331', 'Programmer', 'Reguler Sore'),
(87, 'Siti Nurmaya', 'SMK Samudra Nusantara', 'Dusun 01 Sijanggut Ds. lebak mekar kec.greged kab.cirebon', '0859110208394', 'Programmer', 'Reguler Sore'),
(88, 'ELSA ISTI KOMA', 'SMK N 1 KEDAWUNG', 'JL. CIDENG JAYA BLOK KARANG MINGKRIK RT/RW:014/004 DS.KERTAWINANGUN KEC.KEDAWUNG KAB.CIREBON 45153', '085320295402', 'Programmer', 'Reguler Sore'),
(89, 'Nizar Naufaldy Junjunan', 'SMKN 1 Mundu Cirebon', 'komplek btn sdl indah blok G no 23, rt 017 rw 005, cipeujeuh wetan, lemahabang, cirebon', '081222670450', 'Data Science', 'Reguler Pagi'),
(90, 'Sukma Tamji', 'SMK Veteran', 'Jalan Ciremai Raya Larangan Utara', '081222897148', 'Data Science', 'Reguler Sore'),
(91, 'Donny sugiarto', 'smkn 1 mundu', 'desa cipanas kec.dukupuntang. kab.cirebon', '085920772424', 'Data Science', 'Reguler Pagi'),
(92, 'Ira Karlina', 'SMK Negeri 1 Kedawung', 'blok sabrang indah rt.02 rw.04 desa kalikoa kec. kedawung kab. cirebon', '08986990465', 'Programmer', 'Reguler Sore'),
(93, 'Tanya Misi Suara', 'SMA', 'Jl. Ampera Raya No. 7', '08977816134', 'Data Science', 'Reguler Pagi'),
(94, 'Devan sofiyan', 'MA Al ishlah Bobos', 'desa dukupuntang blok dukumalang kab cirebon', '085722983848', 'Data Science', 'Reguler Pagi'),
(95, 'habib nasyih alwan', 'smk alshighor', 'desa gedongan kec pangenan kab cirebon', '082126152591', 'Hacker', 'Reguler Pagi'),
(96, 'Sri Nurmala', 'SMK sahida lemahabang', 'DS.Munjul Blok Manis', '085318957172', 'Data Science', 'Reguler Pagi'),
(97, 'Yopi Mohammad Luqiyuallah', 'smk kesehatan cendekia', 'jl. sabrang permai b.12 desa kalikoa', '089660450758', 'Data Science', 'Reguler Pagi'),
(99, 'Akhmad khodimul Jalil Nur', 'MA Al Shohwah', 'Ds. Palimanan Barat, kec. Gempol- Cirebon', '083837382324', 'Data Science', 'Reguler Sore'),
(100, 'Siti Azhar', 'MAN 3 Cirebon', 'Desa Bendungan kec.pangenan kab.cirebon', '082376278612', 'Data Science', 'Reguler Pagi'),
(101, 'Krisna Hadi Ramlan', 'SMK N 1Cirebon', 'Jln.Jagasatru Kutagara selatan no.123', '089637873657', 'Data Science', 'Reguler Pagi'),
(102, 'Bob harry', 'Smk wahidin kota cirebon', 'kp kasepuhan gg maajid agung iv no 52', '089661107602', 'Programmer', 'Reguler Sore'),
(103, 'Muhammad Bahrul Jawahir', 'SMK NU MEKANIKA Buntet Pesantren', 'JL. KH. Busyrol Karim Blok Kedung Subur Buntet Pesantren Kec. Astanajapura Kab. Cirebon', '083827536471', 'Data Science', 'Reguler Pagi'),
(104, 'Rizka jamilatul rachmah', 'SMA NEGRI 9 CIREBON', 'Gerbang permai pamengkang jln. anggrek 3 block F6 No 11 RT 01/RW 09', '08132464646488', 'Data Science', 'Reguler Sore'),
(105, 'Teguh Prayogi', 'SMA negeri 1 plumbon', 'blok gotrok rt 04 rw 01 desa pangkalan kecamatan plered kabupaten cirebon', '087782507567', 'Programmer', 'Reguler Sore'),
(106, 'Syamsul Lubis', 'Paket C', 'Desa Gembongan, Kec Babakan, Kab Cirebon', '082123325750', 'Data Science', 'Reguler Pagi'),
(107, 'Lutfi Hakim', 'MA syamsul huda', 'pekalangan selatan gg ridad', '085351370689', 'Data Science', 'Reguler Sore'),
(108, 'ricky ramanda putra', 'SMKN 1 Cirebon', 'perumahan bumi sampiran indah, blok a7 no 3, kec. talun kab. cirebon', '087700573637', 'Data Science', 'Reguler Pagi'),
(109, 'ZAKIYAH DARULHIRIYAH', 'SMA N 7 CIREBON', 'JL. JENDRAL SUDIRMAN GG.CENDRAWASIH 1 RT/RW:04/10 NO.89, PENGGUNG UTARA', '089812898923', 'Programmer', 'Reguler Sore'),
(110, 'MOHAMAD ILHAM SAPUTRA', 'SMK VETERAN CIREBON', 'JL. SUKET DUWUR RT/RW:01/10 KEL.KALIJAGA KEC.HARJAMUKTI', '0895356649449', 'Programmer', 'Reguler Sore'),
(111, 'wahyu prasetyo aji', 'smk manbaul ulum', 'sumber,cirebon.', '082120339236', 'Hacker', 'Reguler Pagi'),
(112, 'Fikri Maulana Gusnah', 'SMA NEGERI 6 KOTA CIREBON', 'jln. Pagongan Timur 1 No.18', '0895344869960', 'Hacker', 'Reguler Sore'),
(113, 'saefullah fasa', 'SMKN 1 CIREBON', 'jl.simaja selatan rt/rw. 05/08', '081770632035', 'Hacker', 'Reguler Sore'),
(114, 'Muhammad fadhilah', 'SMK ISLAMIC CENTRE CINREBON', 'Desa bodelor blok kedung gondang rt.18 rw.04', '082218516525', 'Hacker', 'Reguler Sore'),
(115, 'Deffan Febrian Dirmanthara', 'SMKN 1 Cirebon', 'Permata Harjamukti C6/10', '087728987474', 'Hacker', 'Reguler Sore'),
(116, 'Mari Musliyadi', 'SMK N 1 Jamblang', 'Jl.Suryanegara Ds.Pamijahan rt/rw 09/02', '089617138882', 'Hacker', 'Reguler Sore'),
(117, 'Nurjana Adi Wijaya', 'SMK Sultan Agung', 'Warujaya', '089690487982', 'Big Data', 'Reguler Sore'),
(125, 'hilda dwi yolanda', 'sman 7 cirebob', 'btn puri mulia blok A3 no.12 desa jatimerta kecamatan gunung jati', '085321109457', 'Animator', 'Reguler Sore'),
(126, 'Rosdiana', 'SMA N 1 Rajagaluh', 'sumber', '085881841420', 'Animator', 'Reguler Sore'),
(129, 'lujeng oktavira putri', 'sman 1 ciledug', 'Ds.gebang kulon dusun 01 kec.gebang - cirebon', '087870560669', 'Animator', 'Reguler Sore'),
(130, 'Maman Faturochman', 'Paket c', 'Desa. Kondangsari kec. Beber kab. Cirebon', '087894564753', 'Animator', 'Reguler Pagi'),
(131, 'Mohammad Sayyid Syafiq', 'SMAN 1 Losari Kabupaten Cirebon', 'Desa Dukuhwidara', '087729967848', 'Animator', 'Reguler Pagi'),
(132, 'Bella amalia', 'SMA', 'jl.perjuangan kayuwalang GG familly 1 RT.04 RW 07', '0895323099785', 'Animator', 'Reguler Pagi'),
(133, 'MOH KHOIRUL INSAN', 'Smk Alwashliyah', 'kelurahan kaliwadas blok bantenan Rt 01/02 sumber cirebon', '0895391137257', 'Animator', 'Reguler Pagi'),
(135, 'Abdul Taukhid', 'SMK AL JABBAR', 'Cirebon kec. losari desa ambulu dusun pahing Rt 005 Rw 004', '085603117435', 'Animator', 'Reguler Pagi'),
(136, 'Jumali Eko Satrio', 'MA sunan gunung jati Losari', 'panggang sari RT/RW 013/003', '089660861516', 'Animator', 'Reguler Pagi'),
(138, 'MUHAMAD ALFIN MUBAROK', 'MA SALAFIYAH', 'jl. kalitanjung Gg.kamboja 1 No.06 rt/rw 02/03', '089606817615', 'Animator', 'Reguler Pagi'),
(140, 'Rofhan Zahma Anzary', 'SMK N 1 Cirebon', 'jl.Pancuran no.39 karangpura', '081953553877', 'Animator', 'Reguler Pagi'),
(141, 'alan baihaqi', 'man 2 kota cirebon', 'jl . syekhnurjai blok wanantara rt 01rw 01', '083120054005', 'Animator', 'Reguler Sore'),
(142, 'Abdurrahman Alliham', 'SMK Negeri 1 kota cirebon', 'Kompleks Yayasan Assunah Jl. Ali bin abi thalib no. 9 rt / rw 5 / 4 kel. karyamulya kec. kesambi kot', '0895609225381', 'Animator', 'Reguler Sore'),
(145, 'Puspita Maulana Arumsari', 'Sultan Agung', 'Jl. Perjuangan Komplek PDK Blok. D RT/RW 06/10 Kec. Kesambi Kel. Sunyaragi', '089536118009', 'Animator', 'Reguler Pagi'),
(147, 'Sukma Prahara', 'Smk Bina Warga Lemahabang', 'Ds. Panongan kec. Sedong Kab. Cirebon', '089509994654', 'Animator', 'Reguler Sore'),
(148, 'naufal muhamad putra', 'sma negeri 3 kota cirebon', 'jl gn guntur d25 no 26 rt003 rw008', '087705395613', 'Animator', 'Reguler Pagi'),
(149, 'Arpah', 'SMA', 'Dsn.Pahing.Rt/RW/.01/03.Ds.Danalampah.Kec.Pancalang.Kab.Kuningan', '085872585349', 'Animator', 'Reguler Pagi'),
(150, 'faisal adam', 'sman 1 karangwareng', 'rt/rw 005 007, desa gebang udik,kec gebang, kab cirebon', '083826781635', 'Animator', 'Reguler Pagi'),
(152, 'bagas prakoso', 'smk al-washliyah', 'blok masjid rt3 rw2 desa wanasaba kidul', '082321401588', 'Animator', 'Reguler Pagi'),
(157, 'Puji Rahayu', 'smk n 4 madiun', 'jl.kalimaya v', '081220809586', 'Animator', 'Reguler Sore'),
(159, 'Mohamad Ruchiat', 'SMKN 1 CIREBON', 'Jln.A.Yani kp.karanganom rt04 rw08 no25 pegambiran', '089665631737', 'Robotics', 'Reguler Sore'),
(161, 'Zhurufy Rahmany', 'SMK NU Mekanika Buntet pesantren Cirebon', 'Tangerang Kec Bencongan Jl Danau Maninjau XI No 1', '083861392988', 'Robotics', 'Reguler Sore'),
(162, 'Hana Rosyani', 'sma negeri 1 jamblang', 'btn kedungbunder indah rt.02 rw.07 kec. gempol kab. cirebon', '0895804393389', 'Robotics', 'Reguler Sore'),
(164, 'M NADZIRUL UMAM', 'SMK', 'Ds. Cikarang Kec. Cilamaya Wetan Kab. Karawang', '083837194263', 'Robotics', 'Reguler Sore'),
(166, 'fikmi ikmiah', 'smk kes ypkh palimanan', 'jln.nyi mas endang geulis blok.pengampon kec.klangenan', '089617143016', 'Robotics', 'Reguler Sore'),
(169, 'agung faisal', 'smk muhammadiyah kedawung', 'sendang, sumber', '089636562346', 'Robotics', 'Reguler Sore'),
(171, 'FADELLIA AZZAHRA', 'SMA NEGERI 1 MANDIRANCAN', 'DS.PASAWAHAN BLOK PON RT/RW 014/004 KEC.PASAWAHAN KAB.KUNINGAN', '083824042254', 'Robotics', 'Reguler Pagi'),
(172, 'HANA NATASIA', 'SMKN 2 CIREBON', 'jalan Sultan agung blok dukumalang RT 06 RW 02 sumber cirebon', '08882258650', 'Robotics', 'Reguler Pagi'),
(174, 'NYUFI ALHUSAENI', 'SMK PGRI 1 PALIMANAN', 'Paningkiran, Sumberjaya-Majalengka', '089656339089', 'Robotics', 'Reguler Pagi'),
(175, 'RYAN RAMADHAN', 'SMK Al washliyah sumber', 'Jl. syekh nurjati,ds wanasaba kidul kec talun kab. cirebon', '089633027257', 'Robotics', 'Reguler Pagi'),
(179, 'Mochammad Adjie  Setyadji', 'Man1', 'Jl kembang Gg 4 No 349 Rt 04 Rw 04 kelurahan sukapura kecamatan kejaksan', '085624617566', 'Robotics', 'Reguler Pagi'),
(180, 'Wildan Attariq Firmansyach', 'SMAN 7 cirebon', 'Perumnas Taman Kalijaga Permai, cirebon', '085863139573', 'Robotics', 'Reguler Pagi'),
(181, 'Raul wanandi', 'SMK Budi Bhakti', 'desa cirea dusun karya sembada rt/02 rw/02', '08995833433', 'Robotics', 'Reguler Pagi'),
(186, 'Doni Anggara', 'SMAN 1 WALED', 'Dusun Getrak Desa Tanjung Kecamatan Pasaleman Kabupaten Cirebon', '085703038453', 'Robotics', 'Reguler Pagi'),
(188, 'Mohammad Farhan Rizaldy', 'SMAN 2 INDRAMAYU', 'Indramayu', '08380807014', 'Robotics', 'Reguler Pagi'),
(190, 'akmal maulana garsandi', 'SMA 2 CIREBON', 'graha keandra argasunya blok f2', '0895635432990', 'Robotics', 'Reguler Pagi'),
(191, 'rifcki aziz faturachman', 'smk nuurul bayan sukabumi', 'cirebon', '085872774231', 'Robotics', 'Reguler Pagi'),
(192, 'Delisah A', 'MAN 2 CIREBON', 'Ds. Mandirancan kec. Mandirancan kab. Kuningan rt/rw 002/001', '081809662850', 'Robotics', 'Reguler Pagi'),
(193, 'Rizal Abdul Rosid', 'SMK ALMARIFAH', 'Gempol Cirebon', '085314556079', 'Robotics', 'Reguler Pagi'),
(194, 'Muhamad utoyo', 'smk pariwisata', 'cirebon', '085862099149', 'Hacker', 'Reguler Sore'),
(195, 'Talitha Raudya Tuzzahra', 'SMA', 'Cirebon', '082315157052', 'Programmer', 'Reguler Pagi'),
(196, 'Ibnu Faqih Affrizal', 'man', 'cirebon', '08987792176', 'Animator', 'Reguler Sore'),
(199, 'rahayu nilam cahya', 'muhammadiyah', 'perumahan lovina b26', '08978476595', 'Data Science', 'Reguler Sore'),
(200, 'cep haryanto', 'man', 'cirebon', '0082214211629', 'Animator', 'Reguler Sore'),
(201, 'masjunedi', 'man', 'cirebon', '0895329459181', 'IoT Internet of Things', 'Reguler Sore'),
(202, 'Ishlah Habibi', 'SMK', 'Cirebon', '08986235618', 'IoT Internet of Things', 'Reguler Sore'),
(203, 'Adinda Diah Dini Saskia', 'SMA', 'Cirebob', '08211719262', 'IoT Internet of Things', 'Reguler Sore'),
(204, 'Agiy Anfasa', 'SMA', 'Cirebon', '0896245334968', 'IoT Internet of Things', 'Reguler Sore'),
(205, 'Litha Khaerunnisa', 'SMA', 'Cirebon', '08994207639', 'IoT Internet of Things', 'Reguler Sore'),
(206, 'Mabrur', 'SMA', 'Cirebon', '085624436317', 'IoT Internet of Things', 'Reguler Sore'),
(207, 'sri suwartini', 'man 1', 'cirebon', '082127801444', 'IoT Internet of Things', 'Reguler Sore'),
(208, 'Suwadi', 'SMA', 'Cirebon', '089618371345', 'IoT Internet of Things', 'Reguler Sore'),
(209, 'sasha dwi agustin', 'man 1', 'cirebon', '089508625500', 'IoT Internet of Things', 'Reguler Pagi'),
(210, 'Adji Arianto', 'SMA', 'Cirebon', '0895358149163', 'IoT Internet of Things', 'Reguler Pagi'),
(211, 'mohamad djazuli', 'man 1', 'cirebon', '0895358149163', 'IoT Internet of Things', 'Reguler Pagi'),
(212, 'auliya', 'man 1', 'cirebon', '081312008795', 'IoT Internet of Things', 'Reguler Pagi'),
(213, 'M Sulaim Maulidi', 'SMA', 'Cirebon', '089564742924', 'IoT Internet of Things', 'Reguler Pagi'),
(214, 'Safrullah Hidayat', 'SMA', 'Cirebon', '089660756433', 'IoT Internet of Things', 'Reguler Pagi'),
(215, 'Anggara Pratama putra', 'SMA', 'Cirebon', '0823115811546', 'IoT Internet of Things', 'Reguler Pagi'),
(216, 'M Izzat Lutfi', 'SMA', 'Cirebon', '0823115811546', 'IoT Internet of Things', 'Reguler Pagi'),
(217, 'M Nur Baharudin', 'SMA', 'Cirebon', '0823115811546', 'IoT Internet of Things', 'Reguler Pagi'),
(218, 'medina aprilia putri', 'sma', 'losari', '089674416032', 'Developer', 'Reguler Pagi'),
(219, 'putri rahmadani', 'man1', 'cirebon', '087722889961', 'IoT Internet of Things', 'Reguler Pagi'),
(220, 'syahrul nugraha', 'smk', 'losari', '081315441368', 'Developer', 'Reguler Pagi'),
(221, 'deden yoshua odie a', 'man1', 'cirebon', '087722889961', 'IoT Internet of Things', 'Reguler Pagi'),
(222, 'Ikeu Nurhaeni', 'SMA', 'Cirebon', '0823115811546', 'IoT Internet of Things', 'Reguler Pagi'),
(223, 'Fauzi syarief Oktovian', 'SMA', 'Cirebon', '0823115811546', 'IoT Internet of Things', 'Reguler Pagi'),
(224, 'Adhi Ihdhar Nur Amali', 'SMA', 'Cirebon', '0823115811546', 'Animator', 'Reguler Sore'),
(225, 'Deka Setiadi', 'SMAN 1 Jatiwangi', 'Majalengka', '081222418824', 'Big Data', 'Reguler Sore'),
(226, 'mardiki akbar', 'man1', 'cirebon', '089522221707', 'Designer', 'Reguler Sore'),
(228, 'mohammad rifai', 'man1', 'cirebon', '0832656', 'Designer', 'Reguler Pagi'),
(229, 'carnoto', 'man1', 'cirebon', '0832656', 'Big Data', 'Reguler Pagi'),
(230, 'vina widiati', 'man1', 'cirebon', '0832656', 'Big Data', 'Reguler Pagi'),
(231, 'neli sri anggraeni', 'man1', 'cirebon', '0832656', 'Big Data', 'Reguler Pagi'),
(232, 'muhammad ridho', 'man1', 'cirebon', '0832656', 'Big Data', 'Reguler Pagi'),
(233, 'muhanmad jafar', 'man1', 'cirebon', '0832656', 'Robotics', 'Reguler Sore'),
(234, 'Sopyan', 'SMA', 'Cirebon', '0823115811546', 'Robotics', 'Reguler Sore'),
(235, 'ichsanudin masyuri', 'man1', 'cirebon', '0832656', 'Robotics', 'Reguler Sore'),
(236, 'siti rina sari', 'man1', 'cirebon', '0832656', 'Developer', 'Reguler Pagi'),
(237, 'Catwari Diah Puspita', 'SMA', 'Cirebon', '0823115811546', 'Developer', 'Reguler Pagi'),
(238, 'Nur Amalia', 'SMA', 'Cirebon', '0823115811546', 'Developer', 'Reguler Pagi'),
(239, 'ikhsan heriyawan', 'man1', 'cirebon', '0832656', 'Developer', 'Reguler Pagi'),
(240, 'Nandyka Farhan H', 'SMA', 'Cirebon', '0823115811546', 'Developer', 'Reguler Pagi'),
(241, 'rakhmat hidayat', 'man1', 'cirebon', '0832656', 'Developer', 'Reguler Pagi'),
(242, 'Nishfu Kusumah Wardhana', 'SMA', 'Cirebon', '0823115811546', 'Developer', 'Reguler Pagi'),
(243, 'renanda deva rian', 'man1', 'cirebon', '0832656', 'Developer', 'Reguler Pagi'),
(244, 'Rudi Hartono', 'SMA', 'Cirebon', '0823115811546', 'Developer', 'Reguler Sore'),
(245, 'Waritsu Jakawali', 'SMA', 'Cirebon', '0823115811546', 'Developer', 'Reguler Sore'),
(246, 'faisal saemutullah', 'man1', 'cirebon', '0832656', 'Developer', 'Reguler Sore'),
(247, 'Bilal syamidhuha', 'SMA', 'Cirebon', '0823115811546', 'Developer', 'Reguler Sore'),
(248, 'aldi setiawan', 'man1', 'cirebon', '0832656', 'Developer', 'Reguler Sore'),
(249, 'Taufik Hidayat', 'SMA', 'Cirebon', '0823115811546', 'AI Artificial Intelligent', 'Reguler Pagi'),
(250, 'Aldi Hidayah', 'SMA', 'Cirebon', '0823115811546', 'AI Artificial Intelligent', 'Reguler Pagi'),
(253, 'dede iriyanto', 'man1', 'cirebon', '0832656', 'AI Artificial Intelligent', 'Reguler Sore'),
(254, 'Heru Siswanto', 'SMA', 'Cirebon', '0823115811546', 'AI Artificial Intelligent', 'Reguler Sore'),
(255, 'achmad abdul rakhmat', 'man1', 'cirebon', '0832656', 'AI Artificial Intelligent', 'Reguler Sore'),
(256, 'Kristin Wulan S', 'SMA', 'Cirebon', '0823115811546', 'AI Artificial Intelligent', 'Reguler Sore'),
(257, 'Faisal taufiq', 'SMA', 'Cirebon', '0823115811546', 'AI Artificial Intelligent', 'Reguler Sore'),
(258, 'retno sari nababan', 'man1', 'cirebon', '0832656', 'AI Artificial Intelligent', 'Reguler Sore'),
(260, 'Yuniar Kartika', 'SMA', 'Cirebon', '0823115811546', 'AI Artificial Intelligent', 'Reguler Sore'),
(263, 'Mutia Lizannah Ruyatman', 'SMA', 'Cirebon', '0823115811546', 'AI Artificial Intelligent', 'Reguler Sore'),
(264, 'arief rahman hakim', 'man1', 'cirebon', '0832656', 'AI Artificial Intelligent', 'Reguler Sore'),
(265, 'Pasya Kajuni', 'SMA', 'Cirebon', '0823115811546', 'Data Science', 'Reguler Sore'),
(266, 'Opiana Prima Ghandi', 'SMA', 'Cirebon', '0823115811546', 'Data Science', 'Reguler Sore'),
(267, 'moh nurdayat', 'man1', 'cirebon', '0832656', 'Data Science', 'Reguler Sore'),
(268, 'Isfalana', 'SMA', 'Cirebon', '0823115811546', 'Data Science', 'Reguler Sore'),
(269, 'akhmad niam maksum', 'man1', 'cirebon', '0832656', 'Data Science', 'Reguler Sore'),
(271, 'Hari Akbar Ramadhan', 'SMA', 'Cirebob', '08995848079', 'Designer', 'Reguler Pagi'),
(272, 'jsbsb', 'jd', 'dbd', '94', 'Big Data', 'Reguler Pagi'),
(273, 'irfan Abdurrahman', 'man 1 Cirebon', 'cirebon', '089694524678', 'Robotics', 'Reguler Sore'),
(275, 'Farid', 'SMK', 'Jalan Bahagia', '0818638040', 'Developer', 'Reguler Pagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(5) NOT NULL,
  `blokir` enum('Y','T') NOT NULL,
  `tglupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `password`, `level`, `blokir`, `tglupdate`) VALUES
(1, 'fauzi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'T', '0000-00-00'),
(2, 'dion', 'user', 'user', 2, 'T', '2019-09-17'),
(3, 'fauzi', 'admin', '123456', 2, 'Y', '2019-09-19'),
(4, 'bahrum', 'bahrum', 'bahrum', 2, 'T', '2019-09-19'),
(5, 'Jefri Pramono', 'jefri', 'c710857e9b674843afc9b54b7ae2032d', 2, 'T', '2019-09-19'),
(6, 'jefri pramono', 'jefri pramono', '6ac0bcd83a2508df3c6a3b06c96881df', 2, 'T', '2019-09-19'),
(7, 'Nur Qorimah', 'Qori', 'bc57ad4c9c95740fd19a196982e43c2f', 2, 'T', '2019-09-19'),
(8, 'julianto', 'bangjull', 'b9a2f778551a40c5b1456118ceb704f4', 2, 'T', '2019-09-19'),
(9, 'monur', 'Moh.Nurulloh', '964047c54a1da914ffe99663f09b30a9', 2, 'T', '2019-09-19'),
(10, 'atikah', 'Atikah', '5eb4d0dd864537e2af78f5f4345377a5', 2, 'T', '2019-09-19'),
(12, 'Ersa pratiwi', 'Ersa pratiwi', 'd41d8cd98f00b204e9800998ecf8427e', 2, 'T', '2019-09-19'),
(13, 'Nurul Siti Qomah', 'Oces', '95f6067d493109aa56cace189c4bb74a', 2, 'T', '2019-09-19'),
(14, 'Rifqiawan', 'Rifqi', '72561baf6079c338cc2dd68e98d52055', 2, 'T', '2019-09-19'),
(15, 'Tika Agustiyani', 'Tika', 'c27cd12c8034c739304c22a3a3748e39', 2, 'T', '2019-09-19'),
(16, 'Fauzi', 'jioji', 'ac2ab7be519637438577960d036b1adc', 2, 'T', '2019-09-19'),
(17, 'M Amri Fajri S', 'aam', 'acefc537208b1c76d41cc7c0d0bf45ad', 2, 'T', '2019-09-20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`,`nama`) USING BTREE;

--
-- Indeks untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mentor`
--
ALTER TABLE `tb_mentor`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id_absen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mentor`
--
ALTER TABLE `tb_mentor`
  MODIFY `id_mentor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
