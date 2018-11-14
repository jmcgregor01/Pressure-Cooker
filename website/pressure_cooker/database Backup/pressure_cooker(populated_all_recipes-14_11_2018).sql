-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 05:02 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

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
(9, 'HoaDinh', 'Maria Koulouris_Pressure Cooker-5.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(10, 'HoaDinh', 'HoaDinh-pressurecook-0882.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(11, 'HoaDinh', 'HoaDinh-pressurecook-0917.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(12, 'HoaDinh', 'IP_ChrisFernance_PC_5.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(13, 'HoaDinh', 'IP_ChrisFernance_PC_6.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(14, 'HoaDinh', 'Maria Koulouris_Pressure Cooker.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(15, 'HoaDinh', 'Maria Koulouris_Pressure Cooker-3.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh '),
(16, 'HoaDinh', 'Maria Koulouris_Pressure Cooker-5.jpg', '2018-10-11 06:06:01', 'HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh HoaDinh ');

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
(7, 'IP_ChrisFernance_PC_2.jpg', 'IP_ChrisFernance_PC_7.jpg', 'Maria Koulouris_Pressure Cooker-13.jpg', '2018-11-12 04:38:21', '');

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
(37, 'Manu', 'manu.jpg', 'xcv', '2018-10-22 02:20:12', ''),
(38, 'Colin', 'colin.jpg', 'asd', '2018-10-22 02:20:02', ''),
(39, 'Manu', 'manu.jpg', 'xcv', '2018-10-22 02:20:12', ''),
(40, 'Colin', 'colin.jpg', 'asd', '2018-10-22 02:20:02', ''),
(41, 'Manu', 'manu.jpg', 'xcv', '2018-10-22 02:20:12', ''),
(42, 'Colin', 'colin.jpg', 'asd', '2018-10-22 02:20:02', ''),
(43, 'Manu', 'manu.jpg', 'xcv', '2018-10-22 02:20:12', '');

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
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `video`, `msg`, `date`, `type`) VALUES
(3, 'Cook Saag', 'SBZj-BAz-Ec', 'sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas', '2018-10-10 13:01:44', ''),
(4, 'Cook Saag', 'HgnXfevdoXY', 'sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fassdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas sdf sdfl sds sdfk k sdf lk adfj fas', '2018-10-10 13:01:44', ''),
(5, 'Keyboard Cat', 'J---aiyznGQ', 'Keyboard cat playing the keyboard.', '2018-11-12 01:05:54', ''),
(6, 'fd', '', 'fd', '2018-11-14 03:18:14', 'e'),
(7, 'Test', 'UgsDt_y8CC0', 'Testing episode', '2018-11-14 03:19:26', 'e'),
(8, 'John', 'Ph54wQG8ynk', 'Second test', '2018-11-14 03:46:17', 'j'),
(9, 'John', 'Ph54wQG8ynk', 'Second test', '2018-11-14 03:46:50', 'j'),
(10, 'test', 'Ph54wQG8ynk', 'ds', '2018-11-14 03:47:26', 'c'),
(11, 'dsa', 'Ph54wQG8ynk', 'dsa', '2018-11-14 03:47:54', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `ingredients` varchar(1024) NOT NULL,
  `method` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `img`, `ingredients`, `method`, `date`, `etc`) VALUES
(9, 'Crispy Skin Lemon Chicken and Potatoes', 'crispy-skin-lemon-chicken-and-potatoes_1980x1320-120036-1.jpg', '1kg chicken thigh cutlets, skin on\r\n60g butter\r\n500g baby potatoes\r\n4 lemons, halved\r\n1 â„2 cup fresh oregano sprigs, plus extra, to serve\r\n4 garlic cloves, unpeeled\r\n250ml (1 cup) Massel chicken style liquid stock', 'Step 1\r\nPreheat oven to 180C/160C fan forced. Pat the chicken skin dry with paper towel and season.\r\nStep 2\r\nMelt half the butter in an ovenproof frying pan over medium-high heat. Add chicken, skin side down, and cook for 5 minutes or until golden. Turn and cook for a further 2 minutes. Transfer chicken to a plate. Add the potatoes to the pan. Cook, turning regularly, for 4-5 minutes or until golden. Transfer to a plate. Add 4 lemon halves, cut side down, to pan. Cook for 2-3 minutes, until caramelised. Transfer to a plate and reserve.\r\nStep 3\r\nReduce heat to low. Squeeze juice from remaining lemon halves into pan and stir to deglaze. Add squeezed lemon halves, potatoes, oregano and garlic to the pan. Cook for 2 minutes. Remove pan from heat and add stock. Arrange chicken, skin side up, on top of potatoes, keeping the skin exposed. Bake for 25-30 minutes or until chicken is cooked through and potatoes are tender. Transfer chicken, potatoes and garlic to a plate. Cover to keep warm.\r\nStep 4\r\nStrain the liquid from the pan into a small saucepan. Discard solids. Bring to the boil over high heat. Cook for 10-15 minutes or until sauce reduces and thickens slightly. Stir in remaining butter until melted. Season. Drizzle sauce over the chicken and potatoes. Scatter with extra oregano and serve with reserved caramelised lemon.', '2018-11-12 02:44:25', ''),
(10, 'Katafi Pastry Fried Eggs with Truffle Foam', 'crispy-skin-lemon-chicken-and-potatoes_1980x1320-120036-1.jpg', '12     EGGS\r\n1 PACKET KATAFI PASTRY\r\n50g     FLOUR\r\n100ml	 MILK\r\n\r\nTruffle foam:\r\n\r\n180 ml cream\r\n30g butter\r\n20g grated truffle\r\n10ml truffle oil\r\nSalt and pepper\r\n2g Lethcicin \r\n1g carrageenan\r\n', 'Boil eggs till soft approx. 4/5minutes.\r\n1.Cool and peel.\r\n2.Beat 2 eggs and add milk.\r\n3.Roll in flour then egg mixture.\r\n4.Lay out katafi pastry and place egg in the centre roll up pastry around egg.\r\n5.Repeat with remaining eggs.\r\n6.Brush with any left over egg mixture and then deep fry eggs till golden.\r\n\r\nTruffle foam:\r\n1.Bring to the boil reduce slightly.\r\n2.Put into cream gun . serve\r\n', '2018-11-14 01:35:00', ''),
(11, 'Coco prawns, Banana bread ,Rum syrup dressing', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'Rum syrup:\r\n\r\n3 long red chilli\r\n1/2 bunch coriander\r\n50g ginger grated\r\n60ml rum\r\n300ml golden syrup\r\n\r\nBatter:\r\n\r\n175g flour\r\n65g corn flour\r\n15g baking powder\r\n15g oil \r\n15ml vinegar	\r\n175ml beer \r\n50ml soda water\r\n', 'Rum syrup:\r\n\r\n1.Blend chilli,coriander ,ginger \r\n2.Bring to the boil add spice mix\r\n\r\nBatter:\r\n\r\n1.Mix together and rest\r\n2.Batter prawns.\r\n3.To serve place on warm Banana Bread drizzle with rum syrup garnish micro herbs.\r\n', '2018-11-14 01:44:18', ''),
(12, 'Baby Toffee Apples', 'crispy-skin-lemon-chicken-and-potatoes_1980x1320-120036-1.jpg', '12 small red apples, stalks removed\r\n3 cups caster sugar\r\n1/4 cup liquid glucose\r\n1 teaspoon white vinegar\r\n1/2 teaspoon red food colouring\r\n', '1.Wash apples in hot water to remove wax coating. Dry. Push 1 chopstick or stick in top of each apple, being careful not to push all the way through. Line 2 large baking trays with baking paper.\r\n2.Place sugar, 3/4 cup warm water, glucose and vinegar in a heavy-based saucepan over low heat. Cook, stirring, for 5 to 7 minutes or until sugar has dissolved (donâ€™t boil).\r\nIncrease heat to medium-high. Bring to the boil. Cook, without stirring, for 15 to 20 minutes or until toffee reaches hard crack stage , brushing sides of pan with a pastry brush dipped in water to avoid crystallisation.\r\n3.Remove from heat. Tint red with food colouring. Stand for 30 seconds for bubbles to subside slightly. Working quickly, dip 1 apple into toffee, tilting pan to coat. Turn apple above pan to drain excess toffee. Stand apple on prepared tray. Repeat with remaining apples and toffee. Stand for 20 minutes or until done.\r\n\r\n', '2018-11-14 01:51:34', ''),
(13, 'Walnut Sausage', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', '2 cups raw walnuts, soaked overnight in filtered water\r\n1 teaspoon fresh sage, minced\r\n11/2 teaspoon fresh thyme, minced\r\n1 teaspoon  marjoram\r\n1 teaspoon ground fennel or fennel seeds\r\n1/2 teaspoon cayenne pepper\r\n1 teaspoon fresh rosemary, minced\r\n2 tablespoon brown sugar\r\n20g flax seeds\r\n4 tablespoons shoyu or liquid aminos, salt reduced soya sauce\r\n', '1.Add all of the ingredients to the food processor and process until there are no big chunks of walnuts.\r\n2.Mould into a sausage.\r\n3.To serve\r\n4.Wrap in cos lettuce\r\n5.Top with grated granny smith apple, lemon and salt.\r\n', '2018-11-14 01:54:36', ''),
(14, 'Pumpkin gnocchi, Sage butter , Crispy kale', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', '200g roasted pumpkin puree\r\n200g ricotta\r\n2 eggs\r\n200g four\r\n150g butter\r\n1 bunch sage\r\n1 bunch kale\r\n', '1.Mix  pumpkin , ricotta, eggs and flour together to make gnocchi.\r\n2.Cook in boiling water\r\n3.For butter place in a pot bring it up till it starts to foam let sit to the side to infuse.\r\n4.Deep fry Kale till crispy place and on paper towel to drain.\r\n5.To serve heat gnocchi in a pan add sage butter salt and pepper , top with crispy Kale.\r\n', '2018-11-14 01:59:29', ''),
(15, 'Eye Fillet with Dutch Carrots, Brussel sprouts, Onion pearls and Fondant potatoes', 'mkr9_ep49_ae_2nd-course_jamon-wrapped-lamb-brains-with-caper-mayonnaise-2.jpg', 'Coffee rub : \r\n       Ground coffee\r\n       Mustard powder\r\n       Coriander powder\r\n       Garlic powder\r\n       Salt and black pepper\r\nPotatoes :\r\n       1kg Desiree potato Turn potatoes\r\n       Cook in sous vide  for 35minutes\r\n       50g butter\r\n       2 cloves garlic\r\n       4 sprigs of thyme\r\nDutch carrots :\r\n       Par cook dutch carrots in water.\r\n       50g butter\r\n       Honey salt and pepper\r\nOnion Pearls :\r\n       6 schallots\r\n       30ml Olive oil\r\n       30 g butter\r\nBrussel sprouts :\r\n       30g butter \r\n       30ml olive oil\r\n', 'Eye Fillet :\r\n1.Roll fillet in coffee mix . wrap to form a cylinder\r\n2.Cook in sous vide for 15 minutes.\r\n3.Seal on char grill and rest for 5mins.\r\n\r\nPotatoes :\r\n1.To finish add potatoes and ingredients to a pan and glaze to a golden brown color.\r\n\r\nDutch carrots :\r\n1.Add butter and honey together in a pan add chicken stock, reduce and glaze carrots.\r\n\r\nOnion Pearls :\r\n1.Mix together add half ecshallots roast in oven till tender and slightly colored.\r\n\r\nBrussel sprouts :\r\n1.Roast till cooked and have slightly brown color.', '2018-11-14 02:12:13', '');

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
(6, 'Bababo Bababo', 'kids-badminton-championship-thumbanail-copy.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(7, 'ffds', 'sample image.jpg', '2018-11-12 02:22:52', 'sfdsfds'),
(8, 'Bababo', '0008-2.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(9, 'Bababo Bababo', 'a3EhqOqy_400x400.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(10, 'Bababo', 'buyfreshbuylocal.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(11, 'Bababo Bababo', 'Food Waste Infographic shareable.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(12, 'Bababo', 'images.png', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(13, 'Bababo Bababo', 'kids-badminton-championship-thumbanail-copy.jpg', '2018-10-11 07:13:31', 'Food Waste Infographic shareable'),
(14, 'ffds', 'sample image.jpg', '2018-11-12 02:22:52', 'sfdsfds');

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
(3, 'Team 2', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:43:04'),
(4, 'Team 1', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:42:48'),
(5, 'Team 2', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:43:04'),
(6, 'Team 1', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:42:48'),
(7, 'Team 2', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:43:04'),
(8, 'Team 1', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:42:48'),
(9, 'Team 2', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:43:04'),
(10, 'Team 1', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:42:48'),
(11, 'Team 2', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:43:04'),
(12, 'Team 1', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:42:48'),
(13, 'Team 2', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:43:04'),
(14, 'Team 1', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:42:48'),
(15, 'Team 2', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:43:04'),
(16, 'Team 1', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:42:48'),
(17, 'Team 2', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape.jpg', 'Hello, We are a team!', '2018-10-29 00:43:04');

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
(7, 'test@testt.com'),
(8, '');

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
(1, 'Overall Vote', 2, 5);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
