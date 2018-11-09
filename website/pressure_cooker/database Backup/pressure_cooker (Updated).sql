-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 01:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pressure_cooker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'd8e2fd82de480de7354b58f1e6c2e58fe6e3800bbbbad0c9a95be997157586d9');

-- --------------------------------------------------------

--
-- Table structure for table `behindscenes`
--

CREATE TABLE `behindscenes` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `behindscenes`
--

INSERT INTO `behindscenes` (`id`, `name`, `img`, `date`, `msg`) VALUES
(1, 'HoaDinh', 'HoaDinh-pressurecook-0882.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(3, 'HoaDinh', 'HoaDinh-pressurecook-0917.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(5, 'HoaDinh', 'IP_ChrisFernance_PC_5.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(6, 'HoaDinh', 'IP_ChrisFernance_PC_6.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(7, 'HoaDinh', 'Maria Koulouris_Pressure Cooker.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(8, 'HoaDinh', 'Maria Koulouris_Pressure Cooker-3.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(9, 'HoaDinh', 'Maria Koulouris_Pressure Cooker-5.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh ');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(10) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `img1`, `img2`, `img3`, `date`, `etc`) VALUES
(6, 'mkr9_ep49_ae_2nd-course_jamon-wrapped-lamb-brains-with-caper-mayonnaise-2.jpg', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'manu.jpg', '2018-10-12 04:40:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `msg`, `date`) VALUES
(1, 'Rizwan', 'abc@gmail.com', 'sdlfj sdlfj lsdf lskdjf lsdkfj', '2018-10-12 03:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `img`, `date`, `msg`) VALUES
(1, 'Beautiful Pictures', 'HoaDinh-pressurecook-0921.jpg', '2018-10-10 14:52:32', ''),
(2, 'Beautiful Pictures', 'HoaDinh-pressurecook-0948.jpg', '2018-10-10 14:52:32', ''),
(3, 'Beautiful Pictures', 'HoaDinh-pressurecook-0974.jpg', '2018-10-10 14:52:32', ''),
(4, 'Beautiful Pictures', 'HoaDinh-pressurecook-1022.jpg', '2018-10-10 14:52:32', ''),
(5, 'Beautiful Pictures', 'HoaDinh-pressurecook-1043.jpg', '2018-10-10 14:52:32', ''),
(6, 'Beautiful Pictures', 'IP_ChrisFernance_PC_1.jpg', '2018-10-10 14:52:32', ''),
(7, 'Beautiful Pictures', 'IP_ChrisFernance_PC_2.jpg', '2018-10-10 14:52:32', ''),
(8, 'Beautiful Pictures', 'IP_ChrisFernance_PC_4.jpg', '2018-10-10 14:52:32', ''),
(9, 'Beautiful Pictures', 'IP_ChrisFernance_PC_7.jpg', '2018-10-10 14:52:32', ''),
(10, 'Beautiful Pictures', 'IP_ChrisFernance_PC_8.jpg', '2018-10-10 14:52:32', ''),
(11, 'Beautiful Pictures', 'Maria Koulouris_Pressure Cooker-2.jpg', '2018-10-10 14:52:32', ''),
(12, 'Beautiful Pictures', 'Maria Koulouris_Pressure Cooker-4.jpg', '2018-10-10 14:52:32', '');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE `judges` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`id`, `name`, `img`, `msg`, `date`, `etc`) VALUES
(36, 'Colin', 'colin.jpg', 'asd', '2018-10-22 02:20:02', ''),
(37, 'Manu', 'manu.jpg', 'xcv', '2018-10-22 02:20:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `video` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `video`, `msg`, `date`, `etc`) VALUES
(3, 'Cook Saag', 'SBZj-BAz-Ec', 'sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas', '2018-10-10 13:01:44', ''),
(4, 'Cook Saag', 'HgnXfevdoXY', 'sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas', '2018-10-10 13:01:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `img`, `msg`, `date`, `etc`) VALUES
(1, 'Dal Chawal', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe.', '2018-10-10 11:07:40', ''),
(2, 'Dal Chawal', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe.', '2018-10-10 11:07:40', ''),
(3, 'Dal Chawal', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe.', '2018-10-10 11:07:40', ''),
(4, 'Dal Chawal', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe.', '2018-10-10 11:07:40', ''),
(5, 'Dal Chawal', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe.', '2018-10-10 11:07:40', ''),
(6, 'Dal Chawal', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe.', '2018-10-10 11:07:40', ''),
(7, 'Dal Chawal', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe. asdf asdf klsdf sdf sdfl asdf se dv cv slek salfe slkfe lfe.', '2018-10-10 11:07:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `name`, `img`, `date`, `msg`) VALUES
(1, 'Bababo', '0008-2.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(2, 'Bababo Bababo', 'a3EhqOqy_400x400.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(3, 'Bababo', 'buyfreshbuylocal.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(4, 'Bababo Bababo', 'Food Waste Infographic shareable.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(5, 'Bababo', 'images.png', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(6, 'Bababo Bababo', 'kids-badminton-championship-thumbanail-copy.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `img`, `msg`, `date`) VALUES
(2, 'Team 1', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:42:48'),
(3, 'Team 2', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(50) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `email`) VALUES
(1, 'phone.asim@gmail.com'),
(2, 'eg@example.com'),
(3, 'egg@example.com'),
(4, 'jacob.test@cit.com'),
(5, 'what@what.com'),
(6, 'test@test.com'),
(7, 'test@testt.com');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(2) NOT NULL,
  `name` varchar(200) NOT NULL,
  `team1` int(5) NOT NULL,
  `team2` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `name`, `team1`, `team2`) VALUES
(1, 'Overall Vote', 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `behindscenes`
--
ALTER TABLE `behindscenes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `behindscenes`
--
ALTER TABLE `behindscenes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
