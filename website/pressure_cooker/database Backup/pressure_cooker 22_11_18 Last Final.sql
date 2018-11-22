-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 12:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
(17, 'Maddie Caggiano, Hayley Kemp _ Kimberly Harwood HoaDinh', 'Maddie Caggiano, Hayley Kemp _ Kimberly Harwood HoaDinh-pressurecook-0897.jpg', '2018-11-22 09:37:54', 'Maddie Caggiano, Hayley Kemp _ Kimberly Harwood HoaDinh'),
(18, 'PictureD', 'IP_KatieMouser_PC_005.jpg', '2018-11-22 09:53:16', 'PictureD'),
(19, 'Jack Sankey', 'Jack Sankey Media Crew IP_Andrea_Bryant_PC_1-8_20180903-_DSC0142.jpg', '2018-11-22 10:03:08', 'Jack Sankey'),
(20, 'Jordan Paull ', 'Jordan Paull IP_KatharinaB_PC-5.jpg', '2018-11-22 10:03:19', 'Jordan Paull '),
(21, 'Jordan Paull ', 'Jordan Paull IP_KatharinaB_PC-6.jpg', '2018-11-22 10:03:28', 'Jordan Paull '),
(22, 'Kieran Taylor Director, Tobias Thorn DOP, Ngoc Hung Thinh Ha Camera Operator', 'Kieran Taylor Director, Tobias Thorn DOP, Ngoc Hung Thinh Ha Camera Operator IP_ChrisFernance_PC_3.jpg', '2018-11-22 10:03:43', 'Kieran Taylor Director, Tobias Thorn DOP, Ngoc Hung Thinh Ha Camera Operator'),
(23, 'Matt Cleaver ', 'Matt Cleaver Camera Operator HoaDinh-pressurecook-0917.jpg', '2018-11-22 10:03:57', 'Matt Cleaver '),
(24, 'Ngoc Hung', 'Ngoc Hung Thinh Ha Clapper Loader Trina-Marie Onrust  (3 of 8).jpg', '2018-11-22 10:04:22', 'Ngoc Hung'),
(25, 'Russel Nankerivs', 'Russel Nankerivs Media Producer IP_MonicaRuiz_PC_4.jpg', '2018-11-22 10:04:33', 'Russel Nankerivs'),
(26, 'Soloman Burgess  ', 'Soloman Burgess  Camera OperatorIP_Lach_PC_7-8.jpg', '2018-11-22 10:04:45', 'Soloman Burgess  '),
(27, 'Soloman Burgess ', 'Soloman Burgess Clapper Loader IP_MariaKoulouris_PC_1-8-4.jpg', '2018-11-22 10:04:55', 'Soloman Burgess '),
(28, 'Teresa Francini ', 'Teresa Francini Producer Zaiden Woods IP_ChrisFernance_PC_5.jpg', '2018-11-22 10:05:05', 'Teresa Francini '),
(29, 'Tobias Thorn ', 'Tobias Thorn Camera Operator IP_Andrea_Bryant_PC_5-8_20180827-_DSC8561.jpg', '2018-11-22 10:05:14', 'Tobias Thorn ');

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
(8, 'CasA.jpg', 'CasB.jpg', 'CasC.jpg', '2018-11-22 07:43:22', '');

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
(13, 'Aiden, Maria, Olivia, Matt Student Chefs, Chris Endrey Host', 'AIDEN_~1.JPG', '2018-11-22 09:33:23', 'Aiden, Maria, Olivia, Matt Student Chefs and Chris Endrey Host'),
(14, 'Narayan, Claudio, Sam Student Chefs, Chris Endrey Host', 'Narayan, Claudio, Sam Student Chefs, Chris Endrey Host  IP_KatharinaB_PC-4.jpg', '2018-11-22 09:33:47', 'Narayan, Claudio, Sam Student Chefs, Chris Endrey Host'),
(15, 'Narayan, Coco, Brad Team Captain Ivonne Team Captain, Sam and Claudio', 'NARAYA~1.JPG', '2018-11-22 09:34:25', 'Narayan, Coco, Brad Team Captain Ivonne Team Captain, Sam and Claudio'),
(16, 'Coco student chef, Brad Team Captain, Russell', 'Coco student chef, Brad Team Captain, Russell interviewer_MG_9654- IP_JackMohr_PC_2.jpg', '2018-11-22 09:36:59', 'Coco student chef, Brad Team Captain, Russell'),
(17, 'Ivonne Team Captain ', 'Ivonne Team Captain HoaDinh-pressurecook-1022.jpg', '2018-11-22 09:37:10', 'Ivonne Team Captain '),
(18, 'Ivonne Team Captain ', 'Ivonne Team Captain IP_KatieMouser_PC_003.jpg', '2018-11-22 09:37:24', 'Ivonne Team Captain '),
(19, 'Seyoung Chun and Bradd', 'Seyoung Chun and Bradd.jpg', '2018-11-22 09:38:54', 'Seyoung Chun and Bradd'),
(20, 'Brad and Aiden ', 'Brad and Aiden IP_Xixi_PC_6-8.jpg', '2018-11-22 09:39:06', 'Brad and Aiden '),
(21, 'Brad Team Captain and Aiden', 'Brad Team Captain and Aiden IP_Andrey_Chernev_PC_5.jpg', '2018-11-22 09:39:19', 'Brad Team Captain and Aiden'),
(22, 'Claudio and Ivonne', 'Claudio and Ivonne IP_MonicaRuiz_PC_7.jpg', '2018-11-22 09:39:32', 'Claudio and Ivonne'),
(23, 'Claudio and Sam', 'Claudio and Sam IP_ChrisFernance_PC_4.jpg', '2018-11-22 09:39:43', 'Claudio and Sam'),
(24, 'Claudio, Ivonne Team Captain, Sam', 'Claudio, Ivonne Team Captain _ Sam IP_Andrea_Bryant_PC_8-8_20180903-_DSC0252.jpg', '2018-11-22 09:40:20', 'Claudio, Ivonne Team Captain, Sam'),
(25, 'Ivonne Team Captain, Oliva and Matt ', 'Ivonne Team Captain, Oliva and Matt IP_Andrey_Chernev_PC_4.jpg', '2018-11-22 09:40:37', 'Ivonne Team Captain, Oliva and Matt '),
(26, 'Ivonne, Olivia and Matt', 'Ivonne, Olivia and MattIP_TashFister_PC_4jpg.jpg', '2018-11-22 09:41:01', 'Ivonne, Olivia and Matt'),
(27, 'Maria, Brad Team Captaina and Aiden ', 'Maria, Brad Team Captaina and Aiden IP_Andrey_Chernev_PC_6.jpg', '2018-11-22 09:41:11', 'Maria, Brad Team Captaina and Aiden '),
(28, 'Narayan, Brad and Coco ', 'Narayan, Brad and Coco IP_Melia_PC-5.jpg', '2018-11-22 09:41:24', 'Narayan, Brad and Coco '),
(29, 'Olivia and Ivonne ', 'Olivia and Ivonne IP_Marty_PC-4.jpg', '2018-11-22 09:41:37', 'Olivia and Ivonne '),
(30, 'Olivia,  Ivonne and Matt ', 'Olivia,  Ivonne and Matt IP_ErrolSteed_PC-7.jpg', '2018-11-22 09:41:47', 'Olivia,  Ivonne and Matt '),
(31, 'Olivia, Matt and Ivonne', 'Olivia, Matt and Ivonne Trina-Marie Onrust  (6 of 8).jpg', '2018-11-22 09:42:01', 'Olivia, Matt and Ivonne'),
(32, 'Sam, Brad Team Captain and Aiden', 'Sam, Brad Team Captain and Aiden IP_GaynorShaw_PC_-2.jpg', '2018-11-22 09:42:14', 'Sam, Brad Team Captain and Aiden'),
(33, 'Sam, Claudio and Team Captain Ivonne Narayan, Coco and Brad', 'SAM_CL~1.JPG', '2018-11-22 09:42:36', 'Sam, Claudio and Team Captain Ivonne Narayan, Coco and Brad'),
(34, 'PictureA', 'IP_KatharinaB_PC-2.jpg', '2018-11-22 09:52:12', 'PictureA'),
(35, 'PictureB', 'IP_KatharinaB_PC-7.jpg', '2018-11-22 09:52:25', 'PictureB'),
(36, 'PictureC', 'IP_Lach_PC_2-8.jpg', '2018-11-22 09:52:47', 'PictureC'),
(37, 'Chris Endrey', 'Chris Endrey Host HoaDinh-pressurecook-0882.jpg', '2018-11-22 09:53:59', 'Chris Endrey Host'),
(38, 'Chris Endrey', 'Chris Endrey.jpg', '2018-11-22 09:54:08', 'Chris Endrey'),
(39, 'HoaDinh', 'HoaDinh-pressurecook-0921.jpg', '2018-11-22 09:54:22', 'HoaDinh'),
(40, 'Group Picture', 'IP_Andrey_Chernev_PC_7.jpg', '2018-11-22 09:57:27', 'Group Picture'),
(41, 'Group Picture', 'IP_Lach_PC_5-8.jpg', '2018-11-22 09:57:35', 'Group Picture'),
(42, 'Picture', 'IP_Marty_PC-1.jpg', '2018-11-22 09:57:56', 'Picture'),
(43, 'Picture', 'IP_TashFister_PC_2jpg.jpg', '2018-11-22 09:58:12', 'Picture'),
(44, 'Group Picture', 'IP_Xixi_PC_8-8.jpg', '2018-11-22 09:58:19', 'Group Picture'),
(46, 'Picture', 'Michelle Flatf Head Judge IP_KatieMouser_PC_002.jpg', '2018-11-22 10:02:30', 'Picture'),
(47, 'Group Picture', 'Trina-Marie Onrust  (4 of 8).jpg', '2018-11-22 10:02:43', 'Group Picture'),
(48, 'Coco  and Narayan ', 'Coco  and Narayan IP_MariaKoulouris_PC_1-8-2.jpg', '2018-11-22 10:05:42', 'Coco  and Narayan '),
(49, 'Coco ', 'Coco IP_ChrisFernance_PC_7.jpg', '2018-11-22 10:05:58', 'Coco '),
(50, 'Maria ', 'Maria IP_Lach_PC_3-8.jpg', '2018-11-22 10:06:07', 'Maria '),
(51, 'Sam  ', 'Sam  IP_Melia_PC-7.jpg', '2018-11-22 10:06:21', 'Sam  '),
(52, 'Sam ', 'Sam IP_MariaKoulouris_PC_1-8-7.jpg', '2018-11-22 10:06:32', 'Sam ');

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
(44, 'Bradford Wolter', 'Aiden and Bradd.jpg', 'Born Locally in Canberra, Brad has been enthusiastically engaged in the ACTâ€™s hospitality industries since undertaking a Chefâ€™s Apprenticeship in 1984. His experience and broad track record have spanned over 30 years including restaurant management, retail, and even five star accommodation in the Gold Coast. Bradâ€™s passion for creating and sharing has seen him involved with many Canberra venues including Rocksalt; a fine dining restaurant he owned and operated in Hawker from 2000 to 2007, and the Rendezvousin Manuka.\r\n \r\nWhen not managing a team of budding student chefs, Brad is an avid golfer and can be seen frequenting the Magpies Club in Belconnen where he is a finalist in the current season championships. \r\n \r\nBrad also has a green thumb when it comes to his fruit trees and vegetable gardens. Growing tomatoes, peaches, lemons, feijoas, apples and several olive trees not only gives Brad a better understanding of the ingredients he works with, but is also a relaxing hobby he shares with his wife of 27 years, Janine. \r\n \r\nNow In his 8thyear of teaching at CIT, Brad delights in the challenges that this busy industry entails. Working with students to bring out the best in each of them is what Brad strives for and is always looking for opportunities to share and learn something new with his students.\r\n', '2018-11-22 07:51:18', ''),
(46, 'Johnon MacDonald', 'Johnon.jpg', 'Johnon MacDonald was born in New Zealand, and lived there for 16 years. At age 16, however, he packed his bags and moved to Sydney, Australia to pursue a chef\'s apprenticeship. In his second year, he landed a job working under Australian chef, Neil Perry. Since then, he has worked in kitchens all around the world, with some chefs as talented as the world-famous Japanese Chef, Masaharu Morimoto and Melbourne chef, Ben Shewry. He is currently an executive chef in three of Canberra’s restaurants, including the restaurant AKIBA. Johnon has been a chef for 18 years and since that time, has taught and mentored other aspiring chefs to reach their goals, including 7 young CIT culinary apprentices. As of now, he has just finished being a judge for CIT Reid for a cooking competition. The show is due to air in a month from now. <br>\r\nBIO: Johnon MacDonald - Chef/Owner of AKIBA, Judge on Pressure Cooker. ', '2018-11-22 08:13:06', ''),
(47, 'Ivonne Nathan', 'Ivonne Nathan.jpg', 'Born and raised in Scotland, Ivonne began cooking at a young age with her mother and father. Here aspirations for cooking is what lead her to marry the man of her dreams and move to Australia to live out her dreams of becoming a world-class chef. Married for 8 years, Ivonne and her husband love her passion for making curries and her handcrafted CrÃ¨me BrÃ»lÃ©eâ€™s can, â€œwow even the poutiest faced judge.â€ Over her many years of Culinary excellence, Ivonne has turned her weaknesses into strengths. With an open mind and tenacity to match, she believes she has a good chance of winning the Pressure Cooker title for herself and her teams.\r\n\r\nIn 2014 Ivonne gave up her life as a top class chef because of the strain it placed on her, still wanting to cook she considered a career change and became a Culinary cooking course teacher for CIT. Away from the Kitchen, Ivonne loves spending time with her family, playing with her dog, Scooby and racing her mountain bike all over Australia.\r\n\r\nOccupation: Culinary Chef at CIT Reid\r\n', '2018-11-22 08:11:08', ''),
(48, 'Anurag', 'Anurag.jpg', 'No Message', '2018-11-22 08:39:13', ''),
(50, 'Chris Endrey', 'Chris Endrey.jpg', 'Host', '2018-11-22 08:54:39', ''),
(51, 'Veronica', 'Veronica.jpg', 'Ronnie is a teacher at CIT, a proficient weaver and a proud Kalkadoon woman from Mt Isa. She is a proficient trainer specialising in traditional Indigenous games, painting techniques and coil basket weaving including animal and doll making. She is also an expert in bush tucker plants. \r\nRonnie has taught Indigenous culture to a wide selection of people old and young, Indigenous and non-Indigenous, for a number of years. She has performed workshops for government agencies, community groups and schools, providing many with an understanding of Aboriginal art and culture. Ronnie often teaches basket weaving classes in the CIT Reid courtyard for her students, passing down traditional weaving techniques so that they may survive for generations to come. One of the most important things for Ronnie is her students, as the Indigenous games, painting and weaving techniques, and knowledge of Indigenous culture will live on through them.\r\nBy Patrick Howard\r\n', '2018-11-22 09:20:09', ''),
(52, 'Andrew Scotford', 'Andrew Scotford .jpg', 'Episode one of Pressure Cooker saw the highly adept Andrew Scotford make a guest appearance on the judgeâ€™s panel. Andrew has a burning passion for creating change and developing individuals, which has seen him take up the role as general manager at CITâ€™s Student Association (CITSA). \r\nAndrew is rather distinguished within the Australian sporting community. Previously, he has held the title of CEO at Basketball Geelong, Umpire Manager at Cricket Australia, Cricket Manager at the Western Australian Cricket Association and most notably, CEO of Volleyball Australia during the golden era that was the Sydney 2000 Olympic Games. \r\nNowadays, as well as working with CITSA, Andrew plays a vital role in the making of the Canberra International Film Festival, holding the title of Vice President. Andrew continues to work closely with the wider sporting community. He still plays a role within Volleyball Australia as a member of the board and continues to follow his passion for sports officiating, umpiring local cricket games across the nationâ€™s capital, along with working as the head coach for AFL Canberra community umpires. \r\n', '2018-11-22 09:22:38', ''),
(53, 'MALCOLM HANSLOW ', 'MALCOLM HANSLOW.jpg', 'The first industry judge for Pressure Cooker is Malcolm Hanslow, a fully qualified chef who specialises in fine dining cuisine. He has worked in places such as Oscillate Wildly, Ester and Automata in Sydney and was short-listed as one of the Josephine Pignolet Young Chefs of the Year in early 2018. Malcolm has returned to Canberra to take up residence as the head chef at the newly opened Pilot restaurant in Braddon ACT.\r\nWhen asked about a formative food moment Malcolm recalls; “My grandfather\'s neighbours used to grow the most incredible white peaches. When I was young I would visit on school holidays and \"help\" them pick the fruit they would take to the market.”\r\nOf his cooking style, Hanslow is inspired by local produce and different techniques and says he’s always looking for reasons to try something new.  He also loves taking familiar concepts and elevating those to new levels. Ross McQuinn of Eighty Six bar says. “With Mal, there’s this simplicity to his treatment of food, but it’s still rich and powerful with a dedication to using quality produce”.\r\n', '2018-11-22 09:29:27', '');

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
(12, 'CIT Canberra Regional', 'p1rUNEUE-XQ', 'Our cooking show will excite you and show you how to cook new delicious recipes. ', '2018-11-22 10:47:00', 'e');

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
(10, 'Katafi Pastry Fried Eggs with Truffle Foam', 'kataaifiPastry.jpg', '12     EGGS\r\n1 PACKET KATAFI PASTRY\r\n50g     FLOUR\r\n100ml	 MILK\r\n\r\nTruffle foam:\r\n\r\n180 ml cream\r\n30g butter\r\n20g grated truffle\r\n10ml truffle oil\r\nSalt and pepper\r\n2g Lethcicin \r\n1g carrageenan\r\n', 'Boil eggs till soft approx. 4/5minutes.\r\n1.Cool and peel.\r\n2.Beat 2 eggs and add milk.\r\n3.Roll in flour then egg mixture.\r\n4.Lay out katafi pastry and place egg in the centre roll up pastry around egg.\r\n5.Repeat with remaining eggs.\r\n6.Brush with any left over egg mixture and then deep fry eggs till golden.\r\n\r\nTruffle foam:\r\n1.Bring to the boil reduce slightly.\r\n2.Put into cream gun . serve\r\n', '2018-11-22 07:16:19', ''),
(11, 'Coco prawns, Banana bread ,Rum syrup dressing', 'missing.png', 'Rum syrup:\r\n\r\n3 long red chilli\r\n1/2 bunch coriander\r\n50g ginger grated\r\n60ml rum\r\n300ml golden syrup\r\n\r\nBatter:\r\n\r\n175g flour\r\n65g corn flour\r\n15g baking powder\r\n15g oil \r\n15ml vinegar	\r\n175ml beer \r\n50ml soda water\r\n', 'Rum syrup:\r\n\r\n1.Blend chilli,coriander ,ginger \r\n2.Bring to the boil add spice mix\r\n\r\nBatter:\r\n\r\n1.Mix together and rest\r\n2.Batter prawns.\r\n3.To serve place on warm Banana Bread drizzle with rum syrup garnish micro herbs.\r\n', '2018-11-22 10:41:10', ''),
(12, 'Baby Toffee Apples', 'toffeeApples.jpg', '12 small red apples, stalks removed\r\n3 cups caster sugar\r\n1/4 cup liquid glucose\r\n1 teaspoon white vinegar\r\n1/2 teaspoon red food colouring\r\n', '1.Wash apples in hot water to remove wax coating. Dry. Push 1 chopstick or stick in top of each apple, being careful not to push all the way through. Line 2 large baking trays with baking paper.\r\n2.Place sugar, 3/4 cup warm water, glucose and vinegar in a heavy-based saucepan over low heat. Cook, stirring, for 5 to 7 minutes or until sugar has dissolved (donâ€™t boil).\r\nIncrease heat to medium-high. Bring to the boil. Cook, without stirring, for 15 to 20 minutes or until toffee reaches hard crack stage , brushing sides of pan with a pastry brush dipped in water to avoid crystallisation.\r\n3.Remove from heat. Tint red with food colouring. Stand for 30 seconds for bubbles to subside slightly. Working quickly, dip 1 apple into toffee, tilting pan to coat. Turn apple above pan to drain excess toffee. Stand apple on prepared tray. Repeat with remaining apples and toffee. Stand for 20 minutes or until done.\r\n\r\n', '2018-11-22 07:16:35', ''),
(13, 'Walnut Sausage', 'walnutSausage.jpg', '2 cups raw walnuts, soaked overnight in filtered water\r\n1 teaspoon fresh sage, minced\r\n11/2 teaspoon fresh thyme, minced\r\n1 teaspoon  marjoram\r\n1 teaspoon ground fennel or fennel seeds\r\n1/2 teaspoon cayenne pepper\r\n1 teaspoon fresh rosemary, minced\r\n2 tablespoon brown sugar\r\n20g flax seeds\r\n4 tablespoons shoyu or liquid aminos, salt reduced soya sauce\r\n', '1.Add all of the ingredients to the food processor and process until there are no big chunks of walnuts.\r\n2.Mould into a sausage.\r\n3.To serve\r\n4.Wrap in cos lettuce\r\n5.Top with grated granny smith apple, lemon and salt.\r\n', '2018-11-22 07:16:49', ''),
(14, 'Pumpkin gnocchi, Sage butter , Crispy kale', 'missing.png', '200g roasted pumpkin puree\r\n200g ricotta\r\n2 eggs\r\n200g four\r\n150g butter\r\n1 bunch sage\r\n1 bunch kale\r\n', '1.Mix  pumpkin , ricotta, eggs and flour together to make gnocchi.\r\n2.Cook in boiling water\r\n3.For butter place in a pot bring it up till it starts to foam let sit to the side to infuse.\r\n4.Deep fry Kale till crispy place and on paper towel to drain.\r\n5.To serve heat gnocchi in a pan add sage butter salt and pepper , top with crispy Kale.\r\n', '2018-11-22 10:41:15', ''),
(15, 'Eye Fillet with Dutch Carrots, Brussel sprouts, Onion pearls and Fondant potatoes', 'eyeFillet.jpg', 'Coffee rub : \r\n       Ground coffee\r\n       Mustard powder\r\n       Coriander powder\r\n       Garlic powder\r\n       Salt and black pepper\r\nPotatoes :\r\n       1kg Desiree potato Turn potatoes\r\n       Cook in sous vide  for 35minutes\r\n       50g butter\r\n       2 cloves garlic\r\n       4 sprigs of thyme\r\nDutch carrots :\r\n       Par cook dutch carrots in water.\r\n       50g butter\r\n       Honey salt and pepper\r\nOnion Pearls :\r\n       6 schallots\r\n       30ml Olive oil\r\n       30 g butter\r\nBrussel sprouts :\r\n       30g butter \r\n       30ml olive oil\r\n', 'Eye Fillet :\r\n1.Roll fillet in coffee mix . wrap to form a cylinder\r\n2.Cook in sous vide for 15 minutes.\r\n3.Seal on char grill and rest for 5mins.\r\n\r\nPotatoes :\r\n1.To finish add potatoes and ingredients to a pan and glaze to a golden brown color.\r\n\r\nDutch carrots :\r\n1.Add butter and honey together in a pan add chicken stock, reduce and glaze carrots.\r\n\r\nOnion Pearls :\r\n1.Mix together add half ecshallots roast in oven till tender and slightly colored.\r\n\r\nBrussel sprouts :\r\n1.Roast till cooked and have slightly brown color.', '2018-11-22 07:16:56', '');

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
(15, 'No Sponsor', 'missing.png', '2018-11-22 11:21:49', 'No Sponsor'),
(16, 'No Sponsor', 'missing.png', '2018-11-22 11:24:33', 'No Sponsor'),
(17, 'No Sponsor', 'missing.png', '2018-11-22 11:24:41', 'No Sponsor'),
(18, 'No Sponsor', 'missing.png', '2018-11-22 11:25:45', 'No Sponsor');

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
(18, 'Sam', 'Sam.jpg', 'Senem Emre, or Sam is a student chef at CIT Reid, studying her second year of commercial cookery. As a member of Ivonneâ€™s team, she looks forward to bringing her skills to the competition and cooking in front of an audience. \r\nSam was a bank manager until a few years ago, when she decided that she wanted a change in direction and decided to embrace one of her favourite passions, cooking.  Since coming to CIT, she has worked on and helped to implement the Healthier Choices system of supplying healthy food options at school canteens, providing nutritious and tasty alternative to what was traditionally available. This program has been very successful and has been adopted at canteens around Australia, including the one at CIT Reid.\r\nSam has fond memories of learning to cook with and for her father as a child and is looks forward to making her family proud with her talent onscreen and in the kitchen.\r\n', '2018-11-22 08:16:43'),
(19, 'Coco', 'Coco.jpg', 'Coco is one of the Pressure Cooker student chefs on Bradâ€™s team. In Medellin, Colombia, Coco grew up surrounded by family who loved food and cooking. Cocoâ€™s passion for food started young, she remembers sitting in her kitchen listening to music as her grandma cooked. As Coco grew older she continued her love of cooking by cooking traditional dishes from Medellin for her family and friends and she still loves to cook these dishes today. Coco moved to Australia with her husband and has been adapting to the Australian culture and way of life. She spends her time learning cookery at CIT, which she really enjoys. When Coco isnâ€™t cooking she loves to read with a glass of wine, go on calming walks in nature and spending time with her husband. Her main goal and passion is to live her life to the fullest and she does just that with her bubbly personality and contagious laughter. When Brad asked Coco to participate in Pressure Cooker she happily accepted as she wants to have a go at any opportunity that comes her way.  ', '2018-11-22 08:18:59'),
(20, 'Naryan', 'Naryan.jpg', 'In 2016 Narayan and his partner moved from Nepal to Australia, living in Melbourne for six months. He then moved to Canberra where he got a job at the Hyatt Canberra working in the staff canteen. His head chef encouraged him to enrol at CIT to get his qualifications. In the year and a half since then he has developed his skills a lot and is now second in charge of his kitchen. Narayan hopes to keep gaining new experience and eventually open up his own restaurant.\r\nFood is Narayanâ€™s passion but when he isnâ€™t busy at work or in class he is an enthusiastic outdoorsman. He spends his free time with his partner going cycling, hiking or swimming. Family is very important to Narayan but when he moved to Australia his parents didnâ€™t come with him. He is looking forward to bringing his family over so he can show them his new home in Australia.\r\n', '2018-11-22 08:21:46'),
(21, 'Fiona', 'Fiona.jpg', 'Fiona Mitchell is one of our guest judges for episode 4 of pressure cooker. She has an impressive culinary background involving experience as a chef and owning a restaurant. Fiona grew up in Victoria where she owned the restaurant â€œThe Ribberyâ€. She also was a proprietor of an Ice Cream company in Yarra. She has a range of awards including women of year something and something. Fiona has previous experience in judging cooking competitions, and has travelled across Australia for them. Fiona produces wine with a keen interest in its creation. Fiona has an artist appreciation of cooking and considers it an artform. ', '2018-11-22 08:30:49'),
(22, 'Olivia', 'Olivia.jpg', 'Olivia Templeton is a 20 year old student chef at CIT Reid. Born in Sydney and raised in Canberra, sheâ€™s always had a passion for food and the culinary arts. She cooked her first meal when she was just 7 years old, and since cooks regularly for her family and friends. Now in her second year at CIT, she was called up by Yvonne to help her take Brad down in episodes 3 and 4 of CITâ€™s very own competitive cooking show: â€œPressure Cookerâ€. Olivia specialises in fine dining and cuisine, and hopes to one day open her own award winning 5 star restaurant here in Canberra. Olivia moved down from sydney at the end of 2016, and started her study at CIT the next year. Olivia says that CITâ€™s award winning culinary classes drew her in before she even moved to Canberra, so it was an easy choice for her when it came to choosing a university to attend.', '2018-11-22 08:33:11'),
(23, 'Shelly', 'Shelly.jpg', 'No Message', '2018-11-22 08:34:21'),
(24, 'Claudio', 'Claudio.jpg', 'Pressure Cookerâ€™s student chef, Claudio Savoca, hails from Sicily, south of Italy, where his heritage has influenced his cooking. He has worked in many Italian restaurants while traveling through Taiwan, Thailand, Singapore, New Zealand and others. He understands that by being a chef, he can fulfill his dream of traveling and bringing Italian culinary delights to the world. Besides cooking, he has another passion for graphic design and does freelance job occasionally. Claudio has been in Australia for 5 years, firstly stayed in Western Australia and then moved to Canberra. At present he is studying commercial cookery at the Canberra Institute of Technology to get an international degree while enhancing his skills as a chef. As a result, his education in CIT has helped him gain a job offer. Heâ€™s excited to start a new life in Australia. After graduating from CIT, he plans to save some money to open his own Italian restaurant and still continue to explore the world.', '2018-11-22 08:35:43'),
(25, 'Matt Fely', 'Matt Fely.jpg', 'No Message', '2018-11-22 08:40:58'),
(26, 'Maria', 'Maria.jpg', 'Born in Columbia, Maria fuses both rich flavours of her hometown in Bogota, and here in Australia. During her childhood Maria recalls big family barbecues, sweet deserts, and favourite meals prepared by her mother and grandmother; introducing a world of warmth and exquisite flavours. During her free time Maria enjoys reading, diving, and is a frequent traveller. She prides herself on being a creative thinker; constantly thinking of different ways to approach a problem. \r\nIn Columbia, Maria studied law for four years, earning her law degree and to eventually become a lawyer. As time passed, Maria looked into a different career path to take a break, and find something she was passionate about; pastry. To further pursue her career as a chef, Maria moved to Australia in 2016. When she first arrived she described being anxious, however Maria now calls Canberra her home. She currently studies a certificate four at the Canberra Institute of Technology with hopes to open her own pastry business. \r\n', '2018-11-22 08:42:14'),
(27, 'Seyoung Chun', 'Seyoung Chun.jpg', 'Seyoung Chun, 29, better known to his peers as Aiden, arrived in Australia in 2014 from South Korea. At a very young age, Aidenâ€™s mother began teaching him how to cook and from there, his passion grew. Aiden chose Canberra to begin his culinary journey and found that the Canberra Institute of Technology was the perfect place to study. As well as studying, he is currently working two jobs as a chef; one at the University of Canberra and the other at Hotel Realm. At first, Aiden was not at all interested in Western Food, but when he tasted more and learned to cook certain dishes, he became a big fan. When he is not cooking, Aiden loves to play guitar and spend time with his friends and girlfriend. He loves to cook for others and is looking forward to cooking for his family back in South Korea when he returns. His favourite dish to cook is a beautiful medium rare steak, as he is a meat lover! To Aiden, the most important things in life are family, cooking and friends and he has all three in abundance. After finishing study, Aiden hopes to own and run a restaurant and use his special recipes. ', '2018-11-22 08:51:33');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `behindscenes`
--
ALTER TABLE `behindscenes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
