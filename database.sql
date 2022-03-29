-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2021 pada 03.59
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `tutorialweb_ppdb_smknu1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

DROP TABLE IF EXISTS `agama`;
CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `agama_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `agama_nama`) VALUES
(13, 'Budha'),
(12, 'Hindu'),
(1, 'Islam'),
(10, 'Katholik'),
(11, 'Konghucu'),
(9, 'Kristen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

DROP TABLE IF EXISTS `calon_siswa`;
CREATE TABLE `calon_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_username` varchar(20) NOT NULL,
  `siswa_tanggal_daftar` datetime NOT NULL,
  `siswa_no_pendaftaran` varchar(10) NOT NULL,
  `siswa_nama` varchar(50) NOT NULL,
  `siswa_tempat_lahir` varchar(30) NOT NULL,
  `siswa_tanggal_lahir` date NOT NULL,
  `siswa_jenis_kelamin` varchar(20) NOT NULL,
  `siswa_no_hp` varchar(20) NOT NULL,
  `siswa_tahun_pelajaran` varchar(20) NOT NULL,
  `siswa_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`siswa_id`, `siswa_username`, `siswa_tanggal_daftar`, `siswa_no_pendaftaran`, `siswa_nama`, `siswa_tempat_lahir`, `siswa_tanggal_lahir`, `siswa_jenis_kelamin`, `siswa_no_hp`, `siswa_tahun_pelajaran`, `siswa_status`) VALUES
(377, '24IT5', '2020-10-12 20:42:47', '1', 'FATONI', 'JKT', '2001-02-02', 'Laki-Laki', '0857767566', '2020/2021', 0),
(378, '7R0KJ', '2020-10-20 08:28:29', '2', 'M. MAN ZAKKA', 'LAMONGAN', '2001-01-02', 'Laki-Laki', '08578181211', '2020/2021', 0),
(379, '14EI6', '2020-10-22 09:23:52', '3', 'SMP', 'LAMONGAN', '2000-01-01', 'Laki-Laki', '087657878', '2020/2021', 0),
(380, 'GWO42', '2020-11-04 09:01:16', '4', 'JOIN', 'LAMONGAN', '2000-01-01', 'Laki-Laki', '084874584544', '2020/2021', 0),
(381, '9SKTZ', '2021-01-10 09:55:53', '5', 'AGUS', 'Lamongan', '2016-01-17', 'Laki-Laki', '12121', '2021/2022', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa_biodata`
--

DROP TABLE IF EXISTS `calon_siswa_biodata`;
CREATE TABLE `calon_siswa_biodata` (
  `biodata_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `biodata_nik` varchar(20) NOT NULL,
  `biodata_nisn` varchar(20) NOT NULL,
  `biodata_hobi` varchar(50) NOT NULL,
  `biodata_asal_sekolah` varchar(50) NOT NULL,
  `biodata_alamat_asal_sekolah` varchar(100) NOT NULL,
  `biodata_agama` varchar(20) NOT NULL,
  `biodata_kewarganegaraan` varchar(20) NOT NULL,
  `biodata_anak_ke` int(11) NOT NULL,
  `biodata_jumlah_saudara` int(11) NOT NULL,
  `biodata_provinsi` varchar(30) NOT NULL,
  `biodata_kabupaten` varchar(30) NOT NULL,
  `biodata_kecamatan` varchar(30) NOT NULL,
  `biodata_desa` varchar(30) NOT NULL,
  `biodata_kodepos` varchar(10) NOT NULL,
  `biodata_alamat` varchar(100) NOT NULL,
  `biodata_tinggi_badan` int(11) NOT NULL,
  `biodata_berat_badan` int(11) NOT NULL,
  `biodata_riwayat_penyakit` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa_biodata`
--

INSERT INTO `calon_siswa_biodata` (`biodata_id`, `siswa_id`, `biodata_nik`, `biodata_nisn`, `biodata_hobi`, `biodata_asal_sekolah`, `biodata_alamat_asal_sekolah`, `biodata_agama`, `biodata_kewarganegaraan`, `biodata_anak_ke`, `biodata_jumlah_saudara`, `biodata_provinsi`, `biodata_kabupaten`, `biodata_kecamatan`, `biodata_desa`, `biodata_kodepos`, `biodata_alamat`, `biodata_tinggi_badan`, `biodata_berat_badan`, `biodata_riwayat_penyakit`) VALUES
(371, 377, '1234567890', '1212', 'Makan', '0', '0', '1', 'Indonesia', 0, 0, '16', '', '', '', '', 'Lamongan', 0, 0, ''),
(372, 378, '22222', '22222', 'Makan', 'SMP 45', 'Latukan', '1', 'Indo', 2, 1, '16', '1', '39', '189', '62254', 'Jl. SUnan giri no 10', 80, 80, 'Covid19'),
(373, 379, '11111', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, ''),
(374, 380, '33333', '3333', 'MAKAN', 'SMP', 'LAMONGAN', '1', 'INDO', 1, 2, '16', '1', '45', '310', '884748', 'Lamongan', 189, 180, '-'),
(375, 381, '1111111111', '2', '9SKTZ', '9SKTZ', '9SKTZ', '1', '9SKTZ', 1, 3, '16', '1', '39', '190', '1', '9SKTZ', 1, 1, '9SKTZ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa_jurusan`
--

DROP TABLE IF EXISTS `calon_siswa_jurusan`;
CREATE TABLE `calon_siswa_jurusan` (
  `jurusan_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `jurusan_1` int(11) NOT NULL,
  `jurusan_2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa_jurusan`
--

INSERT INTO `calon_siswa_jurusan` (`jurusan_id`, `siswa_id`, `jurusan_1`, `jurusan_2`) VALUES
(372, 377, 0, 0),
(373, 378, 1, 2),
(374, 379, 0, 0),
(375, 380, 0, 0),
(376, 381, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa_konfirmasi`
--

DROP TABLE IF EXISTS `calon_siswa_konfirmasi`;
CREATE TABLE `calon_siswa_konfirmasi` (
  `konfirmasi_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `konfirmasi_tanggal` date NOT NULL,
  `konfirmasi_dari_bank` varchar(20) NOT NULL,
  `konfirmasi_ke_bank` varchar(20) NOT NULL,
  `konfirmasi_nominal` varchar(10) NOT NULL,
  `konfirmasi_foto` varchar(100) NOT NULL,
  `konfirmasi_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_siswa_konfirmasi`
--

INSERT INTO `calon_siswa_konfirmasi` (`konfirmasi_id`, `siswa_id`, `konfirmasi_tanggal`, `konfirmasi_dari_bank`, `konfirmasi_ke_bank`, `konfirmasi_nominal`, `konfirmasi_foto`, `konfirmasi_status`) VALUES
(3, 378, '2020-10-22', 'BRI', 'BCA', '60000', '378-inspiration.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa_nilai_uan`
--

DROP TABLE IF EXISTS `calon_siswa_nilai_uan`;
CREATE TABLE `calon_siswa_nilai_uan` (
  `uan_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `uan_bahasa_indonesia` float NOT NULL,
  `uan_matematika` float NOT NULL,
  `uan_bahasa_inggris` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa_nilai_uan`
--

INSERT INTO `calon_siswa_nilai_uan` (`uan_id`, `siswa_id`, `uan_bahasa_indonesia`, `uan_matematika`, `uan_bahasa_inggris`) VALUES
(371, 377, 0, 0, 0),
(372, 378, 90, 99, 98),
(373, 379, 0, 0, 0),
(374, 380, 0, 0, 0),
(375, 381, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa_ortu`
--

DROP TABLE IF EXISTS `calon_siswa_ortu`;
CREATE TABLE `calon_siswa_ortu` (
  `ortu_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `ortu_nik_ayah` varchar(20) NOT NULL,
  `ortu_nama_ayah` varchar(50) NOT NULL,
  `ortu_pendidikan_ayah` varchar(20) NOT NULL,
  `ortu_pekerjaan_ayah` varchar(20) NOT NULL,
  `ortu_no_hp_ayah` varchar(20) NOT NULL,
  `ortu_nik_ibu` varchar(20) NOT NULL,
  `ortu_nama_ibu` varchar(50) NOT NULL,
  `ortu_pendidikan_ibu` varchar(20) NOT NULL,
  `ortu_pekerjaan_ibu` varchar(20) NOT NULL,
  `ortu_no_hp_ibu` varchar(20) NOT NULL,
  `ortu_alamat` varchar(100) NOT NULL,
  `ortu_nik_wali` varchar(20) NOT NULL,
  `ortu_nama_wali` varchar(50) NOT NULL,
  `ortu_pendidikan_wali` varchar(20) NOT NULL,
  `ortu_pekerjaan_wali` varchar(20) NOT NULL,
  `ortu_no_hp_wali` varchar(20) NOT NULL,
  `ortu_alamat_wali` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa_ortu`
--

INSERT INTO `calon_siswa_ortu` (`ortu_id`, `siswa_id`, `ortu_nik_ayah`, `ortu_nama_ayah`, `ortu_pendidikan_ayah`, `ortu_pekerjaan_ayah`, `ortu_no_hp_ayah`, `ortu_nik_ibu`, `ortu_nama_ibu`, `ortu_pendidikan_ibu`, `ortu_pekerjaan_ibu`, `ortu_no_hp_ibu`, `ortu_alamat`, `ortu_nik_wali`, `ortu_nama_wali`, `ortu_pendidikan_wali`, `ortu_pekerjaan_wali`, `ortu_no_hp_wali`, `ortu_alamat_wali`) VALUES
(371, 377, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(372, 378, '22222', 'Ayahku', '2', '2', '08765678', '22222', 'EMak', '2', '9', '0876567', 'Lamongan', '22222', 'Ayahku', '2', '2', '08765567', 'Lamongan'),
(373, 379, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(374, 380, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(375, 381, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa_prestasi`
--

DROP TABLE IF EXISTS `calon_siswa_prestasi`;
CREATE TABLE `calon_siswa_prestasi` (
  `prestasi_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `prestasi_nama` varchar(50) NOT NULL,
  `prestasi_tingkat` varchar(20) NOT NULL,
  `prestasi_juara_ke` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa_prestasi`
--

INSERT INTO `calon_siswa_prestasi` (`prestasi_id`, `siswa_id`, `prestasi_nama`, `prestasi_tingkat`, `prestasi_juara_ke`) VALUES
(371, 377, '', '', 0),
(372, 378, 'Makan', '2', 1),
(373, 379, '', '', 0),
(374, 380, '', '', 0),
(375, 381, '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa_status`
--

DROP TABLE IF EXISTS `calon_siswa_status`;
CREATE TABLE `calon_siswa_status` (
  `status_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `status_daftar` int(11) NOT NULL DEFAULT 0,
  `status_biodata` int(11) NOT NULL DEFAULT 0,
  `status_uan` int(11) NOT NULL DEFAULT 0,
  `status_jurusan` int(11) NOT NULL DEFAULT 0,
  `status_prestasi` int(11) NOT NULL DEFAULT 0,
  `status_ortu` int(11) NOT NULL DEFAULT 0,
  `status_upload_kk` int(11) NOT NULL DEFAULT 0,
  `status_upload_ijasah` int(11) NOT NULL DEFAULT 0,
  `status_upload_nisn` int(11) NOT NULL DEFAULT 0,
  `status_last_login` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa_status`
--

INSERT INTO `calon_siswa_status` (`status_id`, `siswa_id`, `status_daftar`, `status_biodata`, `status_uan`, `status_jurusan`, `status_prestasi`, `status_ortu`, `status_upload_kk`, `status_upload_ijasah`, `status_upload_nisn`, `status_last_login`) VALUES
(371, 377, 1, 1, 0, 0, 0, 0, 0, 0, 0, '2020-10-19 02:02:10'),
(372, 378, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-12-02 10:27:31'),
(373, 379, 1, 0, 0, 0, 0, 0, 0, 0, 0, '2020-10-22 09:24:01'),
(374, 380, 1, 1, 0, 0, 0, 0, 0, 0, 0, '2020-11-04 09:01:27'),
(375, 381, 1, 1, 0, 0, 0, 0, 1, 0, 0, '2021-01-10 09:58:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa_upload`
--

DROP TABLE IF EXISTS `calon_siswa_upload`;
CREATE TABLE `calon_siswa_upload` (
  `upload_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `upload_kk` varchar(100) NOT NULL,
  `upload_ijasah` varchar(100) NOT NULL,
  `upload_nisn` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa_upload`
--

INSERT INTO `calon_siswa_upload` (`upload_id`, `siswa_id`, `upload_kk`, `upload_ijasah`, `upload_nisn`) VALUES
(371, 377, '', '', ''),
(372, 378, '378-kk.jpg', '378-ijasah.png', '378-nisn.jpg'),
(373, 379, '', '', ''),
(374, 380, '', '', ''),
(375, 381, '381-kk.jpeg', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

DROP TABLE IF EXISTS `desa`;
CREATE TABLE `desa` (
  `des_id` int(11) NOT NULL,
  `kec_id` int(11) NOT NULL,
  `des_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`des_id`, `kec_id`, `des_nama`) VALUES
(1, 29, 'Babat '),
(2, 29, 'Banaran '),
(3, 29, 'Bedahan '),
(4, 29, 'Bulumargi '),
(5, 29, 'Datinawong '),
(6, 29, 'Gembong '),
(7, 29, 'Gendong Kulon '),
(8, 29, 'Karangkembang '),
(9, 29, 'Kebalandono '),
(10, 29, 'Kebalanpelang '),
(11, 29, 'Kebonagung '),
(12, 29, 'Keyongan '),
(13, 29, 'Kuripan '),
(14, 29, 'Moropelang '),
(15, 29, 'Patihan '),
(16, 29, 'Plaosan '),
(17, 29, 'Pucakwangi '),
(18, 29, 'Sambangan '),
(19, 29, 'Sogo '),
(20, 29, 'Sumur Genuk '),
(21, 29, 'Trepan '),
(22, 29, 'Tritunggal '),
(23, 29, 'Truni '),
(24, 30, 'Banjargondang '),
(25, 30, 'Bluluk '),
(26, 30, 'Bronjong '),
(27, 30, 'Cangkring '),
(28, 30, 'Kuwurejo '),
(29, 30, 'Primpen '),
(30, 30, 'Songowareng '),
(31, 30, 'Sumberbanjar '),
(32, 30, 'Talunrejo '),
(33, 31, 'Brengkok '),
(34, 31, 'Brondong '),
(35, 31, 'Labuhan '),
(36, 31, 'Lembor '),
(37, 31, 'Lohgung '),
(38, 31, 'Sedayulawas '),
(39, 31, 'Sendangharjo '),
(40, 31, 'Sidomukti '),
(41, 31, 'Sumberagung '),
(42, 31, 'Tlogoretno '),
(43, 32, 'Babatagung '),
(44, 32, 'Deket Kulon '),
(45, 32, 'Deket Wetan '),
(46, 32, 'Dinoyo '),
(47, 32, 'Dlanggu '),
(48, 32, 'Laladan '),
(49, 32, 'Pandanpancur '),
(50, 32, 'Plosobuden '),
(51, 32, 'Rejosari '),
(52, 32, 'Rejotengah (Tejoteng'),
(53, 32, 'Sidobinangun '),
(54, 32, 'Sidomulyo '),
(55, 32, 'Sidorejo '),
(56, 32, 'Srirande '),
(57, 32, 'Sugihwaras '),
(58, 32, 'Tukkerto '),
(59, 32, 'Weduni '),
(60, 33, 'Bangkok '),
(61, 33, 'Bapuh Baru '),
(62, 33, 'Bapuhbandung '),
(63, 33, 'Began '),
(64, 33, 'Duduk Lor '),
(65, 33, 'Dukuhtunggal '),
(66, 33, 'Gempolpendowo '),
(67, 33, 'Glagah '),
(68, 33, 'Jatirenggo '),
(69, 33, 'Karangagung '),
(70, 33, 'Karangturi '),
(71, 33, 'Kentong '),
(72, 33, 'Konang '),
(73, 33, 'Margoanyar '),
(74, 33, 'Medang '),
(75, 33, 'Meluntur '),
(76, 33, 'Meluwur '),
(77, 33, 'Mendogo '),
(78, 33, 'Menganti '),
(79, 33, 'Morocalan '),
(80, 33, 'Panggang '),
(81, 33, 'Pasi '),
(82, 33, 'Rayunggumuk '),
(83, 33, 'Soko '),
(84, 33, 'Sudangan '),
(85, 33, 'Tanggungprigel '),
(86, 33, 'Wangen '),
(87, 33, 'Wedoro '),
(88, 33, 'Wonorejo '),
(89, 34, 'Blajo '),
(90, 34, 'Bojoasri '),
(91, 34, 'Butungan '),
(92, 34, 'Canditunggal '),
(93, 34, 'Cluring '),
(94, 34, 'Dibe '),
(95, 34, 'Gambuhan '),
(96, 34, 'Jelakcatur '),
(97, 34, 'Kalitengah '),
(98, 34, 'Kediren '),
(99, 34, 'Kuluran '),
(100, 34, 'Lukrejo '),
(101, 34, 'Mungli '),
(102, 34, 'Pengangsalan '),
(103, 34, 'Pucangro '),
(104, 34, 'Pucangtelu '),
(105, 34, 'Somosari '),
(106, 34, 'Sugihwaras '),
(107, 34, 'Tiwet '),
(108, 34, 'Tunjungmekar '),
(109, 35, 'Banjarmadu '),
(110, 35, 'Bantengputih '),
(111, 35, 'Guci '),
(112, 35, 'Jagran '),
(113, 35, 'Kalanganyar '),
(114, 35, 'Kaligerman '),
(115, 35, 'Karanggeneng '),
(116, 35, 'Karangrejo '),
(117, 35, 'Karangwungu '),
(118, 35, 'Kawistolegi '),
(119, 35, 'Kendalkemlagi '),
(120, 35, 'Latukan '),
(121, 35, 'Mertani '),
(122, 35, 'Prijek Ngablag '),
(123, 35, 'Sonoadi '),
(124, 35, 'Sumberwudi '),
(125, 35, 'Sungelebak '),
(126, 35, 'Tracal '),
(127, 36, 'Banjarejo '),
(128, 36, 'Banyuurip '),
(129, 36, 'Baranggayam '),
(130, 36, 'Blawi '),
(131, 36, 'Bogobabadan '),
(132, 36, 'Gawerejo '),
(133, 36, 'Karanganom '),
(134, 36, 'Karangbinangun '),
(135, 36, 'Ketapangtelu '),
(136, 36, 'Kuro '),
(137, 36, 'Mayong '),
(138, 36, 'Palangan '),
(139, 36, 'Pendowolimo '),
(140, 36, 'Priyoso '),
(141, 36, 'Putatbangah '),
(142, 36, 'Sambopinggir '),
(143, 36, 'Somowinangun '),
(144, 36, 'Sukorejo '),
(145, 36, 'Waruk '),
(146, 36, 'Watangpanjang '),
(147, 36, 'Windu '),
(148, 37, 'Banjarrejo '),
(149, 37, 'Blawirejo '),
(150, 37, 'Dradah Blumbang '),
(151, 37, 'Gunungrejo '),
(152, 37, 'Jatidrojok '),
(153, 37, 'Kalen '),
(154, 37, 'Kandangrejo '),
(155, 37, 'Karangcangkring '),
(156, 37, 'Kedungpring '),
(157, 37, 'Kradenanrejo '),
(158, 37, 'Maindu '),
(159, 37, 'Majenang '),
(160, 37, 'Mekanderejo '),
(161, 37, 'Mlati '),
(162, 37, 'Mojodadi '),
(163, 37, 'Nglebur '),
(164, 37, 'Sidobangun '),
(165, 37, 'Sidomlangean '),
(166, 37, 'Sukomalo '),
(167, 37, 'Sumengko '),
(168, 37, 'Tenggerejo '),
(169, 37, 'Tlanak '),
(170, 37, 'Warungering '),
(171, 38, 'Doyomulyo '),
(172, 38, 'Dumpiagung '),
(173, 38, 'Gintungan '),
(174, 38, 'Kaliwates '),
(175, 38, 'Katemas '),
(176, 38, 'Kedungasri '),
(177, 38, 'Kedungmegarih '),
(178, 38, 'Kembangbahu '),
(179, 38, 'Lopang '),
(180, 38, 'Mangkujajar '),
(181, 38, 'Maor '),
(182, 38, 'Moronyamplung '),
(183, 38, 'Pelang '),
(184, 38, 'Puter '),
(185, 38, 'Randubener '),
(186, 38, 'Sidomukti '),
(187, 38, 'Sukosongo '),
(188, 38, 'Tlogoagung '),
(189, 39, 'Jetis '),
(190, 39, 'Banjarmendalan '),
(191, 39, 'Sidokumpul'),
(192, 39, 'Tumenggungan'),
(193, 39, 'Sukorejo '),
(194, 39, 'Sukomulyo '),
(195, 39, 'Sidoharjo '),
(196, 39, 'Karanglangit'),
(197, 39, 'Kebet '),
(198, 39, 'Kramat '),
(199, 39, 'Made '),
(200, 39, 'Pangkatrejo '),
(201, 39, 'Plosowahyu '),
(202, 39, 'Rancang Kencono '),
(203, 39, 'Sendangrejo '),
(204, 39, 'Sidomukti '),
(205, 39, 'Sumberjo '),
(206, 39, 'Tanjung '),
(207, 39, 'Tlogoanyar '),
(208, 39, 'Wajik '),
(209, 40, 'Brangsi '),
(210, 40, 'Bulubrangsi '),
(211, 40, 'Bulutigo '),
(212, 40, 'Centini '),
(213, 40, 'Dateng '),
(214, 40, 'Duri Kulon '),
(215, 40, 'Gampang Sejati '),
(216, 40, 'Gelap '),
(217, 40, 'Godog '),
(218, 40, 'Jabung '),
(219, 40, 'Karangtawar '),
(220, 40, 'Karangwungu Lor '),
(221, 40, 'Keduyung '),
(222, 40, 'Laren '),
(223, 40, 'Mojo Asem '),
(224, 40, 'Pelangwot '),
(225, 40, 'Pesanggrahan '),
(226, 40, 'Siser '),
(227, 40, 'Taman Prijek '),
(228, 40, 'Tejoasri '),
(229, 41, 'Blumbang '),
(230, 41, 'Brumbun '),
(231, 41, 'Duriwetan '),
(232, 41, 'Gedangan '),
(233, 41, 'Gumantuk '),
(234, 41, 'Jangkungsomo '),
(235, 41, 'Kanugrahan '),
(236, 41, 'Klagensrampat '),
(237, 41, 'Maduran '),
(238, 41, 'Ngayung '),
(239, 41, 'Pangean '),
(240, 41, 'Pangkatrejo '),
(241, 41, 'Parengan '),
(242, 41, 'Pringgoboyo '),
(243, 41, 'Siwuran '),
(244, 41, 'Taji '),
(245, 41, 'Turi '),
(246, 42, 'Kedukbembem '),
(247, 42, 'Kedungsoko '),
(248, 42, 'Mantup '),
(249, 42, 'Mojosari '),
(250, 42, 'Plabuhanrejo '),
(251, 42, 'Rumpuk '),
(252, 42, 'Sidomulyo '),
(253, 42, 'Sukobendu '),
(254, 42, 'Sukosari '),
(255, 42, 'Sumberagung '),
(256, 42, 'Sumberbendo '),
(257, 42, 'Sumberdadi '),
(258, 42, 'Sumberkerep '),
(259, 42, 'Tugu '),
(260, 42, 'Tunggunjagir '),
(261, 43, 'Jatipayak '),
(262, 43, 'Jegreg '),
(263, 43, 'Kacangan '),
(264, 43, 'Kedunglerep '),
(265, 43, 'Kedungpengaron '),
(266, 43, 'Kedungrejo '),
(267, 43, 'Kedungwaras '),
(268, 43, 'Medalem '),
(269, 43, 'Mojorejo '),
(270, 43, 'Nguwok '),
(271, 43, 'Pule '),
(272, 43, 'Sambangrejo '),
(273, 43, 'Sambungrejo '),
(274, 43, 'Sidodowo '),
(275, 43, 'Sidomulyo '),
(276, 43, 'Sumberagung '),
(277, 43, 'Yungyang '),
(278, 44, 'Cerme '),
(279, 44, 'Drujugurit '),
(280, 44, 'Durikedungjero '),
(281, 44, 'Ganggantingan '),
(282, 44, 'Gebangangkrik '),
(283, 44, 'Girik '),
(284, 44, 'Jejel '),
(285, 44, 'Kakatpenjalin '),
(286, 44, 'Kedungmentawar '),
(287, 44, 'Lamongrejo '),
(288, 44, 'Lawak '),
(289, 44, 'Mendogo '),
(290, 44, 'Munungrejo '),
(291, 44, 'Ngasem Lemahbang '),
(292, 44, 'Ngimbang '),
(293, 44, 'Purwokerto '),
(294, 44, 'Sendangrejo '),
(295, 44, 'Slaharwotan '),
(296, 44, 'Tlemang '),
(297, 45, 'Banjarwati '),
(298, 45, 'Blimbing '),
(299, 45, 'Drajat '),
(300, 45, 'Kandang Semangkon '),
(301, 45, 'Kemantren '),
(302, 45, 'Kranji '),
(303, 45, 'Paciran '),
(304, 45, 'Paloh '),
(305, 45, 'Sendangagung '),
(306, 45, 'Sendangduwur '),
(307, 45, 'Sidokelar '),
(308, 45, 'Sidokumpul '),
(309, 45, 'Sumurgayam '),
(310, 45, 'Tlogosadang '),
(311, 45, 'Tunggul '),
(312, 45, 'Warulor '),
(313, 45, 'Weru '),
(314, 46, 'Babatkumpul '),
(315, 46, 'Bugoharjo '),
(316, 46, 'Cungkup '),
(317, 46, 'Gempolpading '),
(318, 46, 'Karangtinggil '),
(319, 46, 'Kedali '),
(320, 46, 'Kesambi '),
(321, 46, 'Ngambeg '),
(322, 46, 'Padenganploso '),
(323, 46, 'Paji '),
(324, 46, 'Plososetro '),
(325, 46, 'Pucuk '),
(326, 46, 'Sumberjo '),
(327, 46, 'Tanggungan '),
(328, 46, 'Wanar '),
(329, 46, 'Warukulon '),
(330, 46, 'Waruwetan '),
(331, 47, 'Ardirejo '),
(332, 47, 'Barurejo '),
(333, 47, 'Candisari '),
(334, 47, 'Garung '),
(335, 47, 'Gempolmanis '),
(336, 47, 'Jatipandak '),
(337, 47, 'Kedungbanjar '),
(338, 47, 'Kedungwangi '),
(339, 47, 'Kreteranggon '),
(340, 47, 'Nogojatisari '),
(341, 47, 'Pamotan '),
(342, 47, 'Pasarlegi '),
(343, 47, 'Pataan '),
(344, 47, 'Sekidang '),
(345, 47, 'Selorejo '),
(346, 47, 'Semampirejo '),
(347, 47, 'Sidokumpul '),
(348, 47, 'Sumbersari '),
(349, 47, 'Tenggiring '),
(350, 47, 'Wateswinangun '),
(351, 47, 'Wonorejo '),
(352, 47, 'Wudi '),
(353, 48, 'Beru '),
(354, 48, 'Canggah '),
(355, 48, 'Dermo Lemahbang '),
(356, 48, 'Gempol Tukmloko '),
(357, 48, 'Kedungkumpul '),
(358, 48, 'Sarirejo '),
(359, 48, 'Simbatan '),
(360, 48, 'Sumberjo '),
(361, 48, 'Tambakmenjangan '),
(362, 49, 'Besur '),
(363, 49, 'Bugel '),
(364, 49, 'Bulutengger '),
(365, 49, 'Jugo '),
(366, 49, 'Karang '),
(367, 49, 'Kebalan Kulon '),
(368, 49, 'Kembangan '),
(369, 49, 'Kendal '),
(370, 49, 'Keting '),
(371, 49, 'Kudikan '),
(372, 49, 'Latek '),
(373, 49, 'Manyar '),
(374, 49, 'Miru '),
(375, 49, 'Moro '),
(376, 49, 'Ngarum '),
(377, 49, 'Porodeso '),
(378, 49, 'Sekaran '),
(379, 49, 'Siman '),
(380, 49, 'Sungegeneng '),
(381, 49, 'Titik '),
(382, 49, 'Trosono '),
(383, 50, 'Banyubang '),
(384, 50, 'Bluri '),
(385, 50, 'Dadapan '),
(386, 50, 'Dagan '),
(387, 50, 'Payaman '),
(388, 50, 'Solokuro '),
(389, 50, 'Sugihan '),
(390, 50, 'Takerharjo '),
(391, 50, 'Tebluru '),
(392, 50, 'Tenggulun '),
(393, 51, 'Bakalrejo '),
(394, 51, 'Bedingin '),
(395, 51, 'Daliwangun '),
(396, 51, 'Deketagung '),
(397, 51, 'German '),
(398, 51, 'Gondang Lor '),
(399, 51, 'Jubel Kidul '),
(400, 51, 'Jubel Lor '),
(401, 51, 'Kalipang '),
(402, 51, 'Kalitengah '),
(403, 51, 'Karang Sambigalih '),
(404, 51, 'Kedungbanjar '),
(405, 51, 'Kedungdadi '),
(406, 51, 'Lawangan Agung '),
(407, 51, 'Lebakadi '),
(408, 51, 'Pangkatrejo '),
(409, 51, 'Sekarbagus '),
(410, 51, 'Sidobogem '),
(411, 51, 'Sidorejo '),
(412, 51, 'Sugio '),
(413, 51, 'Supenuh '),
(414, 52, 'Balungtawun'),
(415, 52, 'Bandungsari '),
(416, 52, 'Banjarejo '),
(417, 52, 'Baturono '),
(418, 52, 'Gedangan '),
(419, 52, 'Kadungrembug '),
(420, 52, 'Kebonsari '),
(421, 52, 'Madulegi '),
(422, 52, 'Menongo '),
(423, 52, 'Pajangan '),
(424, 52, 'Plumpang '),
(425, 52, 'Sidogembul '),
(426, 52, 'Siwalanrejo '),
(427, 52, 'Sugihrejo '),
(428, 52, 'Sukodadi '),
(429, 52, 'Sukolilo '),
(430, 52, 'Sumberagung '),
(431, 52, 'Sumberaji '),
(432, 52, 'Surabayan '),
(433, 52, 'Tlogorejo '),
(434, 53, 'Banggle'),
(435, 53, 'Kedungkumpul'),
(436, 53, 'Kedungrejo'),
(437, 53, 'Mragel'),
(438, 53, 'Pendowokumpul'),
(439, 53, 'Sembung'),
(440, 53, 'Sewor'),
(441, 53, 'Sukorame'),
(442, 53, 'Wedoro'),
(443, 54, 'Bakalanpule '),
(444, 54, 'Balongwangi '),
(445, 54, 'Botoputih '),
(446, 54, 'Dukuhagung '),
(447, 54, 'Guminingrejo '),
(448, 54, 'Jatirejo '),
(449, 54, 'Jotosanur '),
(450, 54, 'Kelorarum '),
(451, 54, 'Pengumbulanadi '),
(452, 54, 'Soko '),
(453, 54, 'Takeranklating '),
(454, 54, 'Tambakrigadung '),
(455, 54, 'Wonokromo '),
(456, 55, 'Badurame '),
(457, 55, 'Balun '),
(458, 55, 'Bambang '),
(459, 55, 'Gedongboyo Untung '),
(460, 55, 'Geger '),
(461, 55, 'Karangwedoro '),
(462, 55, 'Keben '),
(463, 55, 'Kemlaggi Lor '),
(464, 55, 'Kemlagigede '),
(465, 55, 'Kepudibener '),
(466, 55, 'Ngujungrejo '),
(467, 55, 'Pomahan Janggan '),
(468, 55, 'Putatkumpul '),
(469, 55, 'Sukoanyar '),
(470, 55, 'Sukorejo '),
(471, 55, 'Tambakploso '),
(472, 55, 'Tawangrejo '),
(473, 55, 'Turi '),
(474, 55, 'Wangunrejo '),
(475, 56, 'Babatan '),
(476, 56, 'Balongpanggang '),
(477, 56, 'Bandungsekaran '),
(478, 56, 'Banjaragung '),
(479, 56, 'Brangkal '),
(480, 56, 'Dapet '),
(481, 56, 'Dohoagung '),
(482, 56, 'Ganggang '),
(483, 56, 'Jombangdelik '),
(484, 56, 'Karangsemanding '),
(485, 56, 'Kedungpring '),
(486, 56, 'Kedungsumber '),
(487, 56, 'Klotok '),
(488, 56, 'Mojogede '),
(489, 56, 'Ngampel '),
(490, 56, 'Ngasin '),
(491, 56, 'Pacuh '),
(492, 56, 'Pinggir '),
(493, 56, 'Pucung '),
(494, 56, 'Sekarputih '),
(495, 56, 'Tanahlandean '),
(496, 56, 'Tenggor '),
(497, 56, 'Wahas '),
(498, 56, 'Wonorejo '),
(499, 56, 'Wotansari '),
(500, 57, 'Balongmojo '),
(501, 57, 'Balongtunjung '),
(502, 57, 'Banter '),
(503, 57, 'Bengkelolor '),
(504, 57, 'Bulangkulon '),
(505, 57, 'Bulurejo '),
(506, 57, 'Deliksumber '),
(507, 57, 'Dermo '),
(508, 57, 'Gluranploso '),
(509, 57, 'Jatirembe '),
(510, 57, 'Jogodalu '),
(511, 57, 'Kalipadang '),
(512, 57, 'Karangankidul '),
(513, 57, 'Kedungrukem '),
(514, 57, 'Kedungsekar '),
(515, 57, 'Klampok '),
(516, 57, 'Lundo '),
(517, 57, 'Metatu '),
(518, 57, 'Munggugebang '),
(519, 57, 'Munggugianti '),
(520, 57, 'Punduttrate '),
(521, 57, 'Sedapurklagen '),
(522, 57, 'Sirnoboyo '),
(523, 58, 'Abar-Abir '),
(524, 58, 'Bedanten '),
(525, 58, 'Bungah '),
(526, 58, 'Gumeng '),
(527, 58, 'Indrodelik '),
(528, 58, 'Kemangi '),
(529, 58, 'Kisik '),
(530, 58, 'Kramat '),
(531, 58, 'Masangan '),
(532, 58, 'Melirang '),
(533, 58, 'Mojopuro Gede '),
(534, 58, 'Mojopuro Wetan '),
(535, 58, 'Pegundan '),
(536, 58, 'Raciwetan '),
(537, 58, 'Sidokumpul '),
(538, 58, 'Sidomukti '),
(539, 58, 'Sidorejo '),
(540, 58, 'Sukorejo '),
(541, 58, 'Sukowati '),
(542, 58, 'Sungonlegowo '),
(543, 58, 'Tajung Widoro '),
(544, 58, 'Watuagung '),
(545, 59, 'Banjarsari '),
(546, 59, 'Betiting '),
(547, 59, 'Cagakagung '),
(548, 59, 'Cerme Kidul '),
(549, 59, 'Cerme Lor '),
(550, 59, 'Dadapkuning '),
(551, 59, 'Dampaan '),
(552, 59, 'Dooro '),
(553, 59, 'Dungus '),
(554, 59, 'Gedangkulut '),
(555, 59, 'Guranganyar '),
(556, 59, 'Ikerikergeger '),
(557, 59, 'Jono '),
(558, 59, 'Kambingan '),
(559, 59, 'Kandangan '),
(560, 59, 'Lengkong '),
(561, 59, 'Morowudi '),
(562, 59, 'Ngabetan '),
(563, 59, 'Ngembung '),
(564, 59, 'Padeg '),
(565, 59, 'Pandu '),
(566, 59, 'Semampir '),
(567, 59, 'Sukoanyar '),
(568, 59, 'Tambakberas '),
(569, 59, 'Wedani '),
(570, 60, 'Bambe '),
(571, 60, 'Banjaran '),
(572, 60, 'Cangkir '),
(573, 60, 'Driyorejo '),
(574, 60, 'Gadung '),
(575, 60, 'Karangandong '),
(576, 60, 'Kesambenwetan '),
(577, 60, 'Krikilan '),
(578, 60, 'Mojosarirejo '),
(579, 60, 'Mulung '),
(580, 60, 'Petiken '),
(581, 60, 'Randegansari '),
(582, 60, 'Sumput '),
(583, 60, 'Tanjungan '),
(584, 60, 'Tenaru '),
(585, 60, 'Wedoroanom '),
(586, 61, 'Ambeng Ambeng Watang'),
(587, 61, 'Bendungan '),
(588, 61, 'Duduk Sampeyan '),
(589, 61, 'Glanggang '),
(590, 61, 'Gredek '),
(591, 61, 'Kandangan '),
(592, 61, 'Kawistowindu '),
(593, 61, 'Kemudi '),
(594, 61, 'Kramat Kulon '),
(595, 61, 'Palebon '),
(596, 61, 'Pandanan '),
(597, 61, 'Panjunan '),
(598, 61, 'Petisbenem '),
(599, 61, 'Samirplapan '),
(600, 61, 'Setrohadi '),
(601, 61, 'Sumari '),
(602, 61, 'Sumengko '),
(603, 61, 'Tambakrejo '),
(604, 61, 'Tebaloan '),
(605, 61, 'Tirem '),
(606, 61, 'Tumapel '),
(607, 61, 'Wadak Kidul '),
(608, 61, 'Wadak Lor '),
(609, 62, 'Babakbawo '),
(610, 62, 'Babaksari '),
(611, 62, 'Bangeran '),
(612, 62, 'Baron '),
(613, 62, 'Bulangan '),
(614, 62, 'Dukuh Kembar '),
(615, 62, 'Dukunanyar '),
(616, 62, 'Gedongkedoan '),
(617, 62, 'Imaan '),
(618, 62, 'Jrebeng '),
(619, 62, 'Kalirejo '),
(620, 62, 'Karangcangkring '),
(621, 62, 'Lowayu '),
(622, 62, 'Madumulyorejo '),
(623, 62, 'Mentaras '),
(624, 62, 'Mojopetung '),
(625, 62, 'Padang Bandung '),
(626, 62, 'Petiyin Tunggal '),
(627, 62, 'Sambogunung '),
(628, 62, 'Sawo '),
(629, 62, 'Sekargadung '),
(630, 62, 'Sembung Anyar '),
(631, 62, 'Sembungan Kidul '),
(632, 62, 'Tebuwung '),
(633, 62, 'Tiremenggal '),
(634, 62, 'Wonokerto '),
(635, 63, 'Sidokumpul '),
(636, 63, 'Tlogopatut '),
(637, 63, 'Sidorukun '),
(638, 63, 'Pulopancikan'),
(639, 63, 'Tlogobendung '),
(640, 63, 'Bedilan '),
(641, 63, 'Pekauman '),
(642, 63, 'Trate '),
(643, 63, 'Kebungson '),
(644, 63, 'Kemuteran '),
(645, 63, 'Pekelingan '),
(646, 63, 'Karangpoh '),
(647, 63, 'Kroman '),
(648, 63, 'Sukodono '),
(649, 63, 'Lumpur '),
(650, 63, 'Karangturi '),
(651, 63, 'Tlogopojok '),
(652, 63, 'Gapurosukolilo '),
(653, 63, 'Kramatinggil '),
(654, 63, 'Ngipik '),
(655, 63, 'Sukorame '),
(656, 64, 'Kawisanyar '),
(657, 64, 'Kebomas '),
(658, 64, 'Randuagung '),
(659, 64, 'Sidomoro '),
(660, 64, 'Singosari '),
(661, 64, 'Gending '),
(662, 64, 'Segoromadu '),
(663, 64, 'Dahanrejo '),
(664, 64, 'Giri '),
(665, 64, 'Gulomantung '),
(666, 64, 'Indro '),
(667, 64, 'Karangkering '),
(668, 64, 'Kedanyang '),
(669, 64, 'Kembangan '),
(670, 64, 'Klangonan '),
(671, 64, 'Ngargosari '),
(672, 64, 'Prambangan '),
(673, 64, 'Sekarkurung '),
(674, 64, 'Sidomukti '),
(675, 64, 'Sukorejo '),
(676, 64, 'Tenggulunan '),
(677, 65, 'Banyuurip '),
(678, 65, 'Belahanrejo '),
(679, 65, 'Cermen '),
(680, 65, 'Glindah '),
(681, 65, 'Katimoho '),
(682, 65, 'Kedamean '),
(683, 65, 'Lampah '),
(684, 65, 'Menunggal '),
(685, 65, 'Mojowuku '),
(686, 65, 'Ngepung '),
(687, 65, 'Sidoraharjo '),
(688, 65, 'Slempit '),
(689, 65, 'Tanjung '),
(690, 65, 'Tulung '),
(691, 65, 'Turirejo '),
(692, 66, 'Banjarsari '),
(693, 66, 'Banyuwangi '),
(694, 66, 'Betoyoguci '),
(695, 66, 'Betoyokauman '),
(696, 66, 'Gumeno '),
(697, 66, 'Karangrejo '),
(698, 66, 'Leran '),
(699, 66, 'Manyar Sidomukti '),
(700, 66, 'Manyar Sidorukun '),
(701, 66, 'Manyarejo '),
(702, 66, 'Morobakung '),
(703, 66, 'Ngampel '),
(704, 66, 'Peganden '),
(705, 66, 'Pejangganan '),
(706, 66, 'Pongangan '),
(707, 66, 'Roomo '),
(708, 66, 'Sembayat '),
(709, 66, 'Suci '),
(710, 66, 'Sukomulyo '),
(711, 66, 'Sumberejo '),
(712, 66, 'Tanggulrejo '),
(713, 66, 'Tebalo '),
(714, 66, 'Yosowilangun '),
(715, 67, 'Beton '),
(716, 67, 'Boboh '),
(717, 67, 'Boteng '),
(718, 67, 'Bringkang '),
(719, 67, 'Domas '),
(720, 67, 'Drancang '),
(721, 67, 'Gadingwatu '),
(722, 67, 'Gempolkurung '),
(723, 67, 'Hendrosari '),
(724, 67, 'Hulaan '),
(725, 67, 'Kepatihan '),
(726, 67, 'Laban '),
(727, 67, 'Menganti '),
(728, 67, 'Mojotengah '),
(729, 67, 'Pelemwatu '),
(730, 67, 'Pengalangan '),
(731, 67, 'Pranti '),
(732, 67, 'Putat Lor '),
(733, 67, 'Randupadangan '),
(734, 67, 'Setro '),
(735, 67, 'Sidojangkung '),
(736, 67, 'Sidowungu '),
(737, 68, 'Banyutengah'),
(738, 68, 'Campurejo'),
(739, 68, 'Dalegan'),
(740, 68, 'Doudo'),
(741, 68, 'Ketanen'),
(742, 68, 'Pantenan'),
(743, 68, 'Petung'),
(744, 68, 'Prupuh'),
(745, 68, 'Serah'),
(746, 68, 'Siwalan'),
(747, 68, 'Sukodono'),
(748, 68, 'Sumurber'),
(749, 68, 'Surowiti'),
(750, 68, 'Wotan'),
(751, 69, 'Balikterus '),
(752, 69, 'Bululanjang '),
(753, 69, 'Daun '),
(754, 69, 'Dekatagung '),
(755, 69, 'Gunungteguh '),
(756, 69, 'Kebon Teluk Dalam '),
(757, 69, 'Kota Kusuma '),
(758, 69, 'Kumalasa '),
(759, 69, 'Lebak '),
(760, 69, 'Patarselamat '),
(761, 69, 'Pudakit Barat '),
(762, 69, 'Pudakit Timur '),
(763, 69, 'Sawahmulya '),
(764, 69, 'Sidogedung Batu '),
(765, 69, 'Sungai Rujing '),
(766, 69, 'Sungai Teluk '),
(767, 69, 'Suwari '),
(768, 70, 'Asempapak '),
(769, 70, 'Bunderan '),
(770, 70, 'Gedangan '),
(771, 70, 'Golokan '),
(772, 70, 'Kauman '),
(773, 70, 'Kertosono '),
(774, 70, 'Lasem '),
(775, 70, 'Mojoasem '),
(776, 70, 'Mriyunan '),
(777, 70, 'Ngawen '),
(778, 70, 'Pengulu '),
(779, 70, 'Purwodadi '),
(780, 70, 'Racikulon '),
(781, 70, 'Racitengah '),
(782, 70, 'Randuboto '),
(783, 70, 'Sambipondok '),
(784, 70, 'Sedagaran '),
(785, 70, 'Sidomulyo '),
(786, 70, 'Srowo '),
(787, 70, 'Sukorejo '),
(788, 70, 'Wadeng '),
(789, 71, 'Diponggo '),
(790, 71, 'Gelam '),
(791, 71, 'Grejeg '),
(792, 71, 'Kelompang Gubug '),
(793, 71, 'Kepuh Legundi '),
(794, 71, 'Kepuh Teluk '),
(795, 71, 'Pekalongan '),
(796, 71, 'Peromaan (Paromaan) '),
(797, 71, 'Sukalela '),
(798, 71, 'Sukaoneng '),
(799, 71, 'Tambak '),
(800, 71, 'Tanjungori '),
(801, 71, 'Teluk Jatidawang '),
(802, 72, 'Banyuurip '),
(803, 72, 'Bolo '),
(804, 72, 'Cangaan '),
(805, 72, 'Glatik '),
(806, 72, 'Gosari '),
(807, 72, 'Karangrejo '),
(808, 72, 'Kebonagung '),
(809, 72, 'Ketapang Lor '),
(810, 72, 'Ngemboh '),
(811, 72, 'Pangkah Kulon '),
(812, 72, 'Pangkah Wetan '),
(813, 72, 'Sekapuk '),
(814, 72, 'Tanjangawan '),
(815, 73, 'Kedunganyar '),
(816, 73, 'Kepuhklagen '),
(817, 73, 'Kesamben Kulon '),
(818, 73, 'Lebanisuko '),
(819, 73, 'Lebaniwaras '),
(820, 73, 'Mondoluku '),
(821, 73, 'Pasinan Lemahputih '),
(822, 73, 'Pedagangan '),
(823, 73, 'Sembung '),
(824, 73, 'Soko (Sooko) '),
(825, 73, 'Sumberame '),
(826, 73, 'Sumbergede '),
(827, 73, 'Sumberwaru '),
(828, 73, 'Sumengko '),
(829, 73, 'Watestanjung '),
(830, 73, 'Wringinanom ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) CHARACTER SET utf8 NOT NULL,
  `singkatan_jurusan` char(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `singkatan_jurusan`) VALUES
(0, 'Belum Memilih Jurusan', 'None'),
(1, 'Teknik dan Bisnis Sepeda Motor', 'TBSM'),
(2, 'Teknik Kendaraan Ringan Otomotif', 'TKRO'),
(3, 'Teknik Komputer dan Jaringan', 'TKJ'),
(4, 'Multimedia', 'MM'),
(5, 'Akuntansi dan Keuangan Lembaga', 'AK'),
(6, 'Perbankan dan Keuangan Mikro', 'PB'),
(7, 'Bisnis Daring dan Pemasaran', 'PMS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

DROP TABLE IF EXISTS `kabupaten`;
CREATE TABLE `kabupaten` (
  `kab_id` int(20) NOT NULL,
  `kab_nama` varchar(20) NOT NULL,
  `prov_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`kab_id`, `kab_nama`, `prov_id`) VALUES
(1, 'Lamongan', 16),
(2, 'Gresik', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE `kecamatan` (
  `kec_id` int(11) NOT NULL,
  `kec_nama` varchar(20) NOT NULL,
  `kab_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`kec_id`, `kec_nama`, `kab_id`) VALUES
(29, 'Babat', 1),
(30, 'Buluk', 1),
(31, 'Brondong', 1),
(32, 'Deket', 1),
(33, 'Glagah', 1),
(34, 'Kalitengah', 1),
(35, 'Karanggeneng', 1),
(36, 'Karangbinangun', 1),
(37, 'Kedungpring', 1),
(38, 'Kembangbahu', 1),
(39, 'Lamongan', 1),
(40, 'Laren', 1),
(41, 'Maduran', 1),
(42, 'Mantup', 1),
(43, 'Modo', 1),
(44, 'Ngimbang', 1),
(45, 'Paciran', 1),
(46, 'Pucuk', 1),
(47, 'Sambeng', 1),
(48, 'Sarirejo', 1),
(49, 'Sekaran', 1),
(50, 'Solokuro', 1),
(51, 'Sugio', 1),
(52, 'Sukodadi', 1),
(53, 'Sukorame', 1),
(54, 'Tikung', 1),
(55, 'Turi', 1),
(56, 'Balong Panggang', 2),
(57, 'Benjeng', 2),
(58, 'Bungah', 2),
(59, 'Cerme', 2),
(60, 'Driyorejo', 2),
(61, 'Duduk Sampeyan', 2),
(62, 'Dukun', 2),
(63, 'Gresik', 2),
(64, 'Kebomas', 2),
(65, 'Kedamean', 2),
(66, 'Manyar', 2),
(67, 'Menganti', 2),
(68, 'Panceng', 2),
(69, 'Sangkapura', 2),
(70, 'Sidayu', 2),
(71, 'Tambak', 2),
(72, 'Ujung Pangkah', 2),
(73, 'Wringin Anom', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

DROP TABLE IF EXISTS `pekerjaan`;
CREATE TABLE `pekerjaan` (
  `pek_id` int(11) NOT NULL,
  `pek_nama` varchar(64) NOT NULL,
  `pek_keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`pek_id`, `pek_nama`, `pek_keterangan`) VALUES
(1, 'PNS', NULL),
(2, 'Swasta', NULL),
(3, 'IRT', NULL),
(4, 'Petani', NULL),
(5, 'Wiraswasta', NULL),
(6, 'Buruh', NULL),
(7, 'Guru', NULL),
(9, 'Lain-Lain', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

DROP TABLE IF EXISTS `pendidikan`;
CREATE TABLE `pendidikan` (
  `pend_id` int(11) NOT NULL,
  `pend_nama` varchar(64) NOT NULL,
  `pend_keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`pend_id`, `pend_nama`, `pend_keterangan`) VALUES
(1, 'Tidak Tamat SD', NULL),
(2, 'SD/MI', NULL),
(3, 'SMP/MTs', NULL),
(4, 'SMA/SMK', NULL),
(5, 'Diploma 1', NULL),
(6, 'Diploma 2', NULL),
(7, 'Diploma 3', NULL),
(8, 'S1', NULL),
(9, 'S2', NULL),
(10, 'S3', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

DROP TABLE IF EXISTS `pengaturan`;
CREATE TABLE `pengaturan` (
  `pengaturan_id` int(11) NOT NULL,
  `pengaturan_slug` varchar(100) NOT NULL,
  `pengaturan_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`pengaturan_id`, `pengaturan_slug`, `pengaturan_value`) VALUES
(1, 'pembayaran', '<h2>Lakukan pembayran dengan mengikuti instruksi di bawah ini:</h2><ol style=\"box-sizing: border-box; margin: 0px 0px 26px 40px; padding: 0px; color: rgb(0, 0, 0); font-family: Lora, serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><li style=\"box-sizing: border-box; list-style-type: decimal;\">Masukan Kartu ATM</li><li style=\"box-sizing: border-box; list-style-type: decimal;\">Pilih “Bahasa Indonesia”</li><li style=\"box-sizing: border-box; list-style-type: decimal;\">Pilih Lanjutkan</li><li style=\"box-sizing: border-box; list-style-type: decimal;\">Masukan PIN ATM</li><li style=\"box-sizing: border-box; list-style-type: decimal;\">Pilih Transaksi Lain</li><li style=\"box-sizing: border-box; list-style-type: decimal;\">Pilih Transfer..</li></ol>'),
(2, 'syarat_pendaftaran', '<ol>\r\n							<li>Foto Copy Ijazah & SKHUN SMP/MTs 2 lembar & dilegalisir</li>\r\n							<li>Foto Copy Kartu Keluarga 2 lembar</li>\r\n							<li>Foto Copy NISN 2 lembar</li>\r\n							<li>Foto Copy Ijazah SD/MI 2 lembar</li>\r\n							<li>Pas Foto Hitam Putih 3x4 = 4 lembar</li>\r\n							<li>Menyerahkan FC KIP (Kartu Indonesia Pintar) bagi yang punya</li>\r\n							<li>Biaya Pendaftaran Rp. 50.000,- (Lima puluh ribu rupiah)</li>\r\n						</ol>\r\n						<div class=\"alert alert-danger bg-info text-white\">Kelengkapan pendaftaran silahkan di bawah pada saat ke sekolahan.</div>'),
(3, 'title', 'PPDB TUTORIALWEB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE `provinsi` (
  `prov_id` int(11) NOT NULL,
  `prov_nama` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`prov_id`, `prov_nama`) VALUES
(16, 'Jawa Timur'),
(35, 'Lain-Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `hobi` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL,
  `alamat_sekolah` char(50) DEFAULT NULL,
  `siswa_agama` int(11) DEFAULT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `jumlah_saudara` int(11) DEFAULT NULL,
  `alamat_siswa` varchar(50) DEFAULT NULL,
  `siswa_provinsi` int(11) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `nomor_hp` varchar(20) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `riwayat_penyakit` varchar(50) DEFAULT NULL,
  `nilai_bahasa_indonesia` int(11) DEFAULT NULL,
  `nilai_bahasa_inggris` int(11) DEFAULT NULL,
  `nilai_matematika` int(11) DEFAULT NULL,
  `jurusan1` int(11) DEFAULT NULL,
  `jurusan2` int(11) DEFAULT NULL,
  `prestasi` varchar(50) DEFAULT NULL,
  `prestasi_tingkat` varchar(50) DEFAULT NULL,
  `prestasi_juara` varchar(10) DEFAULT NULL,
  `prestasi_bukti` varchar(50) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(20) DEFAULT NULL,
  `pendidikan_ayah` int(11) DEFAULT NULL,
  `pekerjaan_ayah` int(11) DEFAULT NULL,
  `nomor_hp_ayah` varchar(20) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pendidikan_ibu` int(11) DEFAULT NULL,
  `pekerjaan_ibu` int(11) DEFAULT NULL,
  `nomor_hp_ibu` varchar(20) DEFAULT NULL,
  `alamat_orang_tua` varchar(50) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `pendidikan_wali` int(11) DEFAULT NULL,
  `pekerjaan_wali` int(11) DEFAULT NULL,
  `nomor_hp_wali` varchar(20) DEFAULT NULL,
  `alamat_wali` varchar(50) DEFAULT NULL,
  `login` varchar(20) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `kk` varchar(100) DEFAULT NULL,
  `kip` varchar(100) DEFAULT NULL,
  `ijazah` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `no_pendaftaran`, `tanggal_daftar`, `nik`, `nisn`, `nama_siswa`, `hobi`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `asal_sekolah`, `alamat_sekolah`, `siswa_agama`, `kewarganegaraan`, `anak_ke`, `jumlah_saudara`, `alamat_siswa`, `siswa_provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `nomor_hp`, `tinggi_badan`, `berat_badan`, `riwayat_penyakit`, `nilai_bahasa_indonesia`, `nilai_bahasa_inggris`, `nilai_matematika`, `jurusan1`, `jurusan2`, `prestasi`, `prestasi_tingkat`, `prestasi_juara`, `prestasi_bukti`, `nik_ayah`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `nomor_hp_ayah`, `nik_ibu`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `nomor_hp_ibu`, `alamat_orang_tua`, `nik_wali`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `nomor_hp_wali`, `alamat_wali`, `login`, `foto`, `kk`, `kip`, `ijazah`, `status`) VALUES
(6, '1', '2020-03-29', NULL, NULL, 'FATONI ARIF', NULL, 'Laki-Laki', 'Lamongan', '2001-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '088787788778', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QcJ1P', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

DROP TABLE IF EXISTS `tagihan`;
CREATE TABLE `tagihan` (
  `tagihan_id` int(11) NOT NULL,
  `tagihan_nama` varchar(200) NOT NULL,
  `tagihan_total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`tagihan_id`, `tagihan_nama`, `tagihan_total`) VALUES
(1, 'PENDAFTARAN', '50000'),
(2, 'KTA', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat`
--

DROP TABLE IF EXISTS `tingkat`;
CREATE TABLE `tingkat` (
  `id_tingkat` int(15) NOT NULL,
  `nama_tingkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tingkat`
--

INSERT INTO `tingkat` (`id_tingkat`, `nama_tingkat`) VALUES
(1, 'Nasional'),
(2, 'Provinsi'),
(3, 'Kabupaten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'Administrator', 'admin@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_agama` (`agama_nama`);

--
-- Indeks untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indeks untuk tabel `calon_siswa_biodata`
--
ALTER TABLE `calon_siswa_biodata`
  ADD PRIMARY KEY (`biodata_id`);

--
-- Indeks untuk tabel `calon_siswa_jurusan`
--
ALTER TABLE `calon_siswa_jurusan`
  ADD PRIMARY KEY (`jurusan_id`);

--
-- Indeks untuk tabel `calon_siswa_konfirmasi`
--
ALTER TABLE `calon_siswa_konfirmasi`
  ADD PRIMARY KEY (`konfirmasi_id`);

--
-- Indeks untuk tabel `calon_siswa_nilai_uan`
--
ALTER TABLE `calon_siswa_nilai_uan`
  ADD PRIMARY KEY (`uan_id`);

--
-- Indeks untuk tabel `calon_siswa_ortu`
--
ALTER TABLE `calon_siswa_ortu`
  ADD PRIMARY KEY (`ortu_id`);

--
-- Indeks untuk tabel `calon_siswa_prestasi`
--
ALTER TABLE `calon_siswa_prestasi`
  ADD PRIMARY KEY (`prestasi_id`);

--
-- Indeks untuk tabel `calon_siswa_status`
--
ALTER TABLE `calon_siswa_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indeks untuk tabel `calon_siswa_upload`
--
ALTER TABLE `calon_siswa_upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`des_id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD UNIQUE KEY `nama_jurusan` (`nama_jurusan`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`kab_id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kec_id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`pek_id`),
  ADD UNIQUE KEY `UNIQUE` (`pek_nama`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`pend_id`),
  ADD UNIQUE KEY `UNIQUE` (`pend_nama`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`pengaturan_id`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`prov_id`),
  ADD UNIQUE KEY `UNIQUE` (`prov_nama`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`tagihan_id`);

--
-- Indeks untuk tabel `tingkat`
--
ALTER TABLE `tingkat`
  ADD PRIMARY KEY (`id_tingkat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa_biodata`
--
ALTER TABLE `calon_siswa_biodata`
  MODIFY `biodata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa_jurusan`
--
ALTER TABLE `calon_siswa_jurusan`
  MODIFY `jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa_konfirmasi`
--
ALTER TABLE `calon_siswa_konfirmasi`
  MODIFY `konfirmasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa_nilai_uan`
--
ALTER TABLE `calon_siswa_nilai_uan`
  MODIFY `uan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa_ortu`
--
ALTER TABLE `calon_siswa_ortu`
  MODIFY `ortu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa_prestasi`
--
ALTER TABLE `calon_siswa_prestasi`
  MODIFY `prestasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa_status`
--
ALTER TABLE `calon_siswa_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa_upload`
--
ALTER TABLE `calon_siswa_upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=831;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `kab_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `pek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `pend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `pengaturan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `tagihan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `id_tingkat` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
