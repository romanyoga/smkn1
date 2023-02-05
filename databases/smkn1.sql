-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 03:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(111) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama`, `mata_pelajaran`, `alamat`, `telepon`, `foto`) VALUES
(2, '20202', 'Lili', 'TIK', 'Jl. Mala Mak', '08989', 'default.png'),
(3, '2', 'Popol', 'Bahasa Inggris', '321', '123', 'default.png'),
(4, '123', 'Kupa', 'Bahasa Indonesia', '123', '123', 'default.png'),
(5, '12', 'Dexter', 'TIK', '12', '12', 'default.png'),
(6, '15', 'Fredrin', 'TIK', '15', '15', 'default.png'),
(7, '18', 'Granger', 'Matematika', '18', '18', 'default.png'),
(8, '19', 'Jack', 'Matematika', '19', '19', 'default.png'),
(9, '2', 'Popol', 'Bahasa Inggris', '321', '123', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(111) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list`
--

CREATE TABLE `tbl_list` (
  `id_pelanggaransiswa` int(111) NOT NULL,
  `nis` char(20) NOT NULL,
  `id_pelanggaran` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_list`
--

INSERT INTO `tbl_list` (`id_pelanggaransiswa`, `nis`, `id_pelanggaran`) VALUES
(26, '202020409', 3),
(27, '202020409', 5),
(29, '101010', 0),
(30, '202020348', 7),
(31, '202020353', 5),
(32, '202020350', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggaran`
--

CREATE TABLE `tbl_pelanggaran` (
  `id_pelanggaran` int(111) NOT NULL,
  `nama_pelanggaran` varchar(128) NOT NULL,
  `point_pelanggaran` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggaran`
--

INSERT INTO `tbl_pelanggaran` (`id_pelanggaran`, `nama_pelanggaran`, `point_pelanggaran`) VALUES
(5, 'Tawuran', 100),
(6, 'Terlambat', 5),
(7, 'Bolos Pelajaran', 20),
(8, 'Seragam/Topi Dicoret-Coret', 10),
(9, 'Tidak Memakai Atribut', 10),
(10, 'Berkelahi', 25),
(12, 'Tidak Mengikuti Upacara', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` char(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `alamat`, `kelas`, `jurusan`, `foto`) VALUES
('201919813', 'Muhammad Apriansyah', '3', 'XII', 'TKJ', 'default.png'),
('202020348', 'Adien Fathikurahman', '1', 'XII', 'SIJA 2', 'default.png'),
('202020349', 'Afifah', '1', 'XII', 'SIJA 2', 'default.png'),
('202020350', 'Afrin Khalisa', '2', 'XII', 'SIJA 1', 'default.png'),
('202020351', 'Ahmad Sobirin', '2', 'XII', 'SIJA 1', 'default.png'),
('202020352', 'Akhmad Deewa Prambudi', '2', 'XII', 'SIJA 1', 'default.png'),
('202020353', 'Alif Naufal Muzakkiy', '1', 'XII', 'SIJA 2', 'default.png'),
('202020354', 'Allayka Azzahra', '1', 'XII', 'SIJA 2', 'default.png'),
('202020355', 'Allesando Prayoga', '1', 'XII', 'SIJA 2', 'default.png'),
('202020356', 'Andre Maulana', '1', 'XII', 'SIJA 2', 'default.png'),
('202020357', 'Arfan Aulia', '1', 'XII', 'SIJA 2', 'default.png'),
('202020359', 'Bagas Nurul Saputra', '2', 'XII', 'SIJA 1', 'default.png'),
('202020360', 'Careal Alif Mafazi', '1', 'XII', 'SIJA 2', 'default.png'),
('202020361', 'Carla Chavelli Wardani', '2', 'XII', 'SIJA 1', 'default.png'),
('202020363', 'Choerul Aly Al Hasany', '1', 'XII', 'SIJA 2', 'default.png'),
('202020364', 'Christiant Danu Adnand N', '2', 'XII', 'SIJA 1', 'default.png'),
('202020365', 'Defan Mahadhika Tambunan', '2', 'XII', 'SIJA 1', 'default.png'),
('202020366', 'Diaz Raharjo Muliasmara', '2', 'XII', 'SIJA 1', 'default.png'),
('202020367', 'Dicky Surya Lesmana Putra', '1', 'XII', 'SIJA 2', 'default.png'),
('202020368', 'Dimas Wahyu Adityah', '2', 'XII', 'SIJA 1', 'default.png'),
('202020369', 'Dinda Kahrnita', '1', 'XII', 'SIJA 2', 'default.png'),
('202020370', 'Ebenhaezer Raya Obaja Sumbayak', '1', 'XII', 'SIJA 2', 'default.png'),
('202020371', 'Faiq Bilal Alhakim', '1', 'XII', 'SIJA 2', 'default.png'),
('202020372', 'Farel Putra Sandri', '1', 'XII', 'SIJA 2', 'default.png'),
('202020373', 'Ghania Nashwa Fazila', '2', 'XII', 'SIJA 1', 'default.png'),
('202020374', 'Hagy Priyo Prasetyo', '2', 'XII', 'SIJA 1', 'default.png'),
('202020375', 'Hanif Abdullah', '1', 'XII', 'SIJA 2', 'default.png'),
('202020376', 'Hanif Mishbah Zulfikar', '2', 'XII', 'SIJA 1', 'default.png'),
('202020377', 'Harryawan Kamil', '2', 'XII', 'SIJA 1', 'default.png'),
('202020381', 'Luthfi Akbar Riyadi', '2', 'XII', 'SIJA 1', 'default.png'),
('202020382', 'Malvino Dave Ardion Datty', '1', 'XII', 'SIJA 2', 'default.png'),
('202020383', 'Miqdad Hafiz Albany', '1', 'XII', 'SIJA 2', 'default.png'),
('202020384', 'Mochamad Faudrian', '1', 'XII', 'SIJA 2', 'default.png'),
('202020385', 'Mochammad Althof Syah Raharjo', '1', 'XII', 'SIJA 2', 'default.png'),
('202020386', 'Mohamad Rivan', '2', 'XII', 'SIJA 1', 'default.png'),
('202020387', 'Muhamad Billi Ramadhan', '1', 'XII', 'SIJA 2', 'default.png'),
('202020388', 'Muhamad Maulana Hasanudin', '1', 'XII', 'SIJA 2', 'default.png'),
('202020389', 'Muhammad Ardhi Baskara', '1', 'XII', 'SIJA 2', 'default.png'),
('202020390', 'Muhammad Bagas Arya Putra', '1', 'XII', 'SIJA 2', 'default.png'),
('202020391', 'Muhammad Febry Mulia', '2', 'XII', 'SIJA 1', 'default.png'),
('202020392', 'Muhammad Rizky Saputra', '2', 'XII', 'SIJA 1', 'default.png'),
('202020393', 'Muhammad Sammy Atha', '2', 'XII', 'SIJA 1', 'default.png'),
('202020394', 'Muhammad Tiar Syawal S', '2', 'XII', 'SIJA 1', 'default.png'),
('202020395', 'Najwa Awlia Hasanah', '1', 'XII', 'SIJA 2', 'default.png'),
('202020397', 'Nizam Hasan', '2', 'XII', 'SIJA 1', 'default.png'),
('202020398', 'Patrick Dimas Hadisusanto', '1', 'XII', 'SIJA 2', 'default.png'),
('202020399', 'Putra Ahmad Salafi', '2', 'XII', 'SIJA 1', 'default.png'),
('202020400', 'Ranaka Damar Fatih Sandjaya', '1', 'XII', 'SIJA 2', 'default.png'),
('202020402', 'Rayna Kayla Rayvanka', '1', 'XII', 'SIJA 2', 'default.png'),
('202020403', 'Reza Adrian Hidayat', '2', 'XII', 'SIJA 1', 'default.png'),
('202020405', 'Rizki Akbar Putra Harmawan', '2', 'XII', 'SIJA 1', 'default.png'),
('202020406', 'Rizki Dermawan', '2', 'XII', 'SIJA 1', 'default.png'),
('202020407', 'Rizqi Dwi Saputra', '2', 'XII', 'SIJA 1', 'default.png'),
('202020408', 'Rizqy Tyanda Garjzla', '2', 'XII', 'SIJA 1', 'default.png'),
('202020409', 'Roman Yoga Adhika', 'Jl. Pademangan Timur', 'XII', 'SIJA 2', 'default.png'),
('202020410', 'Ryan Faiz Sanie', '2', 'XII', 'SIJA 1', 'default.png'),
('202020411', 'Sabian Ayu Kinanti', '1', 'XII', 'SIJA 2', 'default.png'),
('202020412', 'Seno Aji', '2', 'XII', 'SIJA 1', 'default.png'),
('202020413', 'Shanaya Rasihanifa', '1', 'XII', 'SIJA 2', 'default.png'),
('202020414', 'Stanis Laus Abies Parera', '2', 'XII', 'SIJA 1', 'default.png'),
('202020415', 'Surya Ramadhan', '1', 'XII', 'SIJA 2', 'default.png'),
('202020416', 'Ulayya Amara Bilqis', '1', 'XII', 'SIJA 2', 'default.png'),
('202020417', 'Urip Prasetyo', '2', 'XII', 'SIJA 2', 'default.png'),
('202020418', 'Yoel Nabonardo P Panjaitan', '1', 'XII', 'SIJA 2', 'default.png'),
('202020419', 'Zalfa Rania Hawa', '2', 'XII', 'SIJA 1', 'default.png'),
('202020420', 'Abdullah Hafis', '3', 'XII', 'TKJ', 'default.png'),
('202020421', 'Achmad Zulfikar', '3', 'XII', 'TKJ', 'default.png'),
('202020422', 'Aini Dimjati', '3', 'XII', 'TKJ', 'default.png'),
('202020423', 'Akhmad Gibran', '3', 'XII', 'TKJ', 'default.png'),
('202020424', 'Arfina Dinda Musyafa', '3', 'XII', 'TKJ', 'default.png'),
('202020425', 'Astuti Cahyani', '3', 'XII', 'TKJ', 'default.png'),
('202020427', 'Dewa Pradipta Bagaskara', '3', 'XII', 'TKJ', 'default.png'),
('202020428', 'Diva Asih Amelia', '3', 'XII', 'TKJ', 'default.png'),
('202020429', 'Dwi Aryo Prakoso Rahardjo', '3', 'XII', 'TKJ', 'default.png'),
('202020430', 'Erik Setiawan', '3', 'XII', 'TKJ', 'default.png'),
('202020432', 'Faiz Al Fahreza', '3', 'XII', 'TKJ', 'default.png'),
('202020433', 'Farras Muhamad Raihan', '3', 'XII', 'TKJ', 'default.png'),
('202020434', 'Fatih Omar Egystiano', '3', 'XII', 'TKJ', 'default.png'),
('202020435', 'Lido Afrianto', '3', 'XII', 'TKJ', 'default.png'),
('202020436', 'Lidya Ruth Rotua', '3', 'XII', 'TKJ', 'default.png'),
('202020437', 'Mohamad Khomeini Fahmi', '3', 'XII', 'TKJ', 'default.png'),
('202020438', 'Mohammad Miftah Falah', '3', 'XII', 'TKJ', 'default.png'),
('202020440', 'Muhammad Afrizal', '3', 'XII', 'TKJ', 'default.png'),
('202020441', 'Muhammad Aththooriq', '3', 'XII', 'TKJ', 'default.png'),
('202020442', 'Muhammad Desta', '3', 'XII', 'TKJ', 'default.png'),
('202020443', 'Muhammad Febrialbari', '3', 'XII', 'TKJ', 'default.png'),
('202020444', 'Muhammad Ragil', '3', 'XII', 'TKJ', 'default.png'),
('202020445', 'Muhammad Yuro Al Fadli', '3', 'XII', 'TKJ', 'default.png'),
('202020446', 'Natanael Sion', '3', 'XII', 'TKJ', 'default.png'),
('202020447', 'Ninda Alifah Ghaissani', '3', 'XII', 'TKJ', 'default.png'),
('202020448', 'Nur Azijah Sara', '3', 'XII', 'TKJ', 'default.png'),
('202020449', 'Rafi Ikhwan Fadillah', '3', 'XII', 'TKJ', 'default.png'),
('202020451', 'Ridho Aryansyah', '3', 'XII', 'TKJ', 'default.png'),
('202020452', 'Salsabilah', '3', 'XII', 'TKJ', 'default.png'),
('202020453', 'Sayyid Abdullah Azzam', '3', 'XII', 'TKJ', 'default.png'),
('202020471', 'Khairunisa Salsabila', '2', 'XII', 'SIJA 1', 'default.png'),
('202020472', 'Rendi Darmawan', '1', 'XII', 'SIJA 2', 'default.png'),
('202020473', 'Citra Kusumadewi Sribawono', '3', 'XII', 'TKJ', 'default.png'),
('202020474', 'Akmal Qadir', '2', 'XII', 'SIJA 1', 'default.png'),
('202121048', 'Bima Gifari', '2', 'XII', 'SIJA 1', 'default.png'),
('202121053', 'Perdian', '3', 'XII', 'TKJ', 'default.png'),
('202121054', 'Rexelino Cheristyano B.T', '3', 'XII', 'SIJA 1', 'default.png'),
('202121055', 'Yoel Matthew Noya', '3', 'XII', 'TKJ', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(111) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1-Administrator\r\n2-Visitor',
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `fullname`, `password`, `address`, `level`, `foto`) VALUES
(8, 'roman', 'roman', '$2y$10$NrIrZAwWFWqEkuiM4JTa2eW86mj8zpgNWS.sb/IR7D7g6mracHZgO', 'roman', 1, 'default.png'),
(11, 'admin', 'admin', '$2y$10$W03CJexmVtSPaYh2A2nryeI6E9W/MIymIsXl3x3YaEvKbJ2Fkhs8u', 'admin', 1, 'default.png'),
(12, 'siswa', 'siswa', '$2y$10$B7DfI72MLwdOIkqGFiGeXucjZwHe85ouU.G.Eu0Z3B2dsqhxNRCVO', 'siswa', 2, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_list`
--
ALTER TABLE `tbl_list`
  ADD PRIMARY KEY (`id_pelanggaransiswa`);

--
-- Indexes for table `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_list`
--
ALTER TABLE `tbl_list`
  MODIFY `id_pelanggaransiswa` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  MODIFY `id_pelanggaran` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
