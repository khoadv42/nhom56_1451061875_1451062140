-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 04:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtrungtamsathachlaixemoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblgioithieu`
--

CREATE TABLE `tblgioithieu` (
  `id_gt` int(10) NOT NULL,
  `tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `trang` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblgioithieu`
--

INSERT INTO `tblgioithieu` (`id_gt`, `tieude`, `noidung`, `trang`) VALUES
(1, 'ioyiyiu', 'kjhklhikh', 'Giới Thiệu'),
(2, 'kughjghjfvhj', 'jkgjhgjfjy', 'Trang Chủ'),
(3, 'Mọi Thắc Mắc Của Các Bạn', 'Gọi Tới Số 0982204131 Để được tư vấn của chúng tôi', 'Hỏi Đáp');

-- --------------------------------------------------------

--
-- Table structure for table `tblhocviendangky`
--

CREATE TABLE `tblhocviendangky` (
  `id_dk` int(10) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cmtnd` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `theloaithi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaythi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblhocviendangky`
--

INSERT INTO `tblhocviendangky` (`id_dk`, `hoten`, `ngaysinh`, `diachi`, `cmtnd`, `sdt`, `theloaithi`, `ngaythi`) VALUES
(7, 'Đào Văn Khoa', '1996-07-03', 'Vân Đình', '3212312523', '0982204131', 'A2', '2017-06-08'),
(14, 'Đào Văn Khoa', '2017-06-06', 'Vân Đình', '32132132', '32313', 'A1', '2017-06-08'),
(16, 'Ngo Thanh Tung', '2017-06-06', 'Thai Binh', '152036012', '0964109501', 'A1', '2017-06-05'),
(17, 'Đào Văn Khoa', '2017-06-07', 'Vân Đình', '111', '111', 'Gia Hạn Bằng Lái', '0000-00-00'),
(18, 'Đào Văn Khoa', '2017-06-06', '1111111111', '1111111111', '1111111111', 'Cấp Lại Bằng Lái', '0000-00-00'),
(19, 'Đào Văn Khoa', '2017-06-05', '2222222222', '2222222222', '2222222222', 'A1', '0000-00-00'),
(20, 'Đào Văn Khoa', '2017-05-29', 'Vân Đình', '333333333', '123456789', 'A1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbllichthi`
--

CREATE TABLE `tbllichthi` (
  `ngaythi` date NOT NULL,
  `dotthi` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbllichthi`
--

INSERT INTO `tbllichthi` (`ngaythi`, `dotthi`) VALUES
('2015-03-02', '1'),
('2017-06-07', 'đợt 1');

-- --------------------------------------------------------

--
-- Table structure for table `tblnhanvien`
--

CREATE TABLE `tblnhanvien` (
  `id_nv` int(10) NOT NULL,
  `tennv` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cmtnd` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt_nv` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi_nv` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblnhanvien`
--

INSERT INTO `tblnhanvien` (`id_nv`, `tennv`, `cmtnd`, `sdt_nv`, `diachi_nv`, `tendangnhap`, `matkhau`) VALUES
(1, 'Lương Xuân Ánh', '2312321321', '01245284', 'Láng', 'anhlx', 'anhlx'),
(2, 'Xuân Ánh', '12324455', '1232131238', 'Láng', 'ace9010', 'anhlx');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id_user` int(10) NOT NULL,
  `fullName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numberPhone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pword` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id_user`, `fullName`, `numberPhone`, `sex`, `email`, `pword`, `permission`) VALUES
(1, 'Khoa Đào', '0982204131', 'male', 'khoadv@wru.vn', 'khoa29896', 1),
(2, 'Xuân Ánh', '1232131238', '', 'ace9010', 'anhlx', 2),
(3, 'Ngô Thanh Tùng', '0964109501', '', 'thanhtung9x21', '123', 1),
(6, '', '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgioithieu`
--
ALTER TABLE `tblgioithieu`
  ADD PRIMARY KEY (`id_gt`);

--
-- Indexes for table `tblhocviendangky`
--
ALTER TABLE `tblhocviendangky`
  ADD PRIMARY KEY (`id_dk`),
  ADD UNIQUE KEY `cmtnd` (`cmtnd`),
  ADD KEY `ngaythi` (`ngaythi`),
  ADD KEY `ngaythi_2` (`ngaythi`);

--
-- Indexes for table `tbllichthi`
--
ALTER TABLE `tbllichthi`
  ADD PRIMARY KEY (`ngaythi`);

--
-- Indexes for table `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
  ADD PRIMARY KEY (`id_nv`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`),
  ADD UNIQUE KEY `cmtnd` (`cmtnd`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `fullName` (`fullName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgioithieu`
--
ALTER TABLE `tblgioithieu`
  MODIFY `id_gt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblhocviendangky`
--
ALTER TABLE `tblhocviendangky`
  MODIFY `id_dk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
  MODIFY `id_nv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
