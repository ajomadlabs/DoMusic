-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 12:43 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `domusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dp` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`name`, `email`, `password`, `dp`) VALUES
('Abhijith M D', 'abhijithmd@cs.ajce.in', 'admin4', 'b.jpg'),
('Ajo John', 'ajojohnmathai@cs.ajce.in', 'admin2', 'c.jpeg'),
('Anju Mathew', 'anjuannmathew31@gmail.com', 'admin1', 'la.jpg'),
('Ashna Ann', 'ashnaannbabu@cs.ajce.in', 'admin3', 'd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`nid` int(11) NOT NULL,
  `ncat` varchar(100) NOT NULL,
  `ncon` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `ncat`, `ncon`) VALUES
(1, 'English', 'hellooo ajoj'),
(2, 'malayalam', 'helndsjkgkagjkdgaskjgfjkad');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `p_uname` varchar(100) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_password` varchar(700) NOT NULL,
  `p_name` varchar(100) DEFAULT NULL,
  `p_add` varchar(100) DEFAULT NULL,
  `p_phn` varchar(100) DEFAULT NULL,
  `p_con` varchar(100) DEFAULT NULL,
  `p_dp` varchar(900) DEFAULT NULL,
  `p_ncat` varchar(100) DEFAULT NULL,
  `p_gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`p_uname`, `p_email`, `p_password`, `p_name`, `p_add`, `p_phn`, `p_con`, `p_dp`, `p_ncat`, `p_gender`) VALUES
('abhijith', 'abhijithmd@cs.ajce.in', 'b8a5539b4bd19eab43bf7749822b4fbdcda7aac560450c5387d86f8356bc6e0c', 'Abhijith M D', '', '2147483647', '', '', '', 'Male'),
('ajo', 'ajojohn555@gmail.com', 'e3c769e6534d8d3bf7e686268680fb5a3c04589f76a3a0093c5236867638eb45', 'Ajo John', 'kerala', '8086699507', 'india', 'dp/propicajojohn555@gmail.com.jpg', '', 'male'),
('anju', 'anjumathew@cs.ajce.in', '099511d00af8364cb9a0f76d1532272393021ce33810d8e47b6839543985249e', 'Anju Mathew', '', '2147483647', '', '', '', 'Female'),
('ashna', 'ashnaannbabu@cs.ajce.in', 'a67f5f1651300de6f25e6f2276bb606843008e6491c4de25a62b1679d35f03cf', 'Ashna Ann Babu', '', '2147483647', '', '', '', 'Female'),
('john', 'geo@gmail.com', '923820bb862049ed530e2b47117c8f07ddd6ff3ccb276925e30279265f10669a', 'george', 'kuwait', '943756287', 'india', 'dp/propicgeo@gmail.com.jpg', '', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `sid` int(100) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `scat` varchar(30) NOT NULL,
  `sfile` varchar(200) NOT NULL,
  `sartist` varchar(100) NOT NULL,
  `simg` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`sid`, `sname`, `scat`, `sfile`, `sartist`, `simg`) VALUES
(1, 'asever', 'english', 'Songs\\english\\asever.mp3', 'unknown', 'img\\defaultpic.jpg'),
(2, 'better with the lights', 'english', 'Songs\\english\\.mp3', 'Black Eyed Peas', 'img\\defaultpic.jpg'),
(3, 'Just Cant Get Enough', 'english', 'Songs\\english\\Black Eyed Pears -  Just Cant Get Enough.mp3', 'Black Eyed Peas', 'img\\defaultpic.jpg'),
(4, 'Everytime I Look For You', 'english', 'Songs\\english\\Blink-182 - Everytime I Look For You.mp3', 'Blink 182', 'img\\defaultpic.jpg'),
(5, 'Airplanes', 'english', 'Songs\\english\\BOB Ft Hayley Williams - Airplanes.mp3', 'Bob Hayley Williams', 'img\\defaultpic.jpg'),
(6, 'A Thousand Years', 'english', 'Songs\\english\\Christina Perri - A Thousand Years.mp3', 'Christina Perri', 'img\\defaultpic.jpg'),
(7, 'Clap Again', 'english', 'Songs\\english\\Clap Again.mp3', 'Akon', 'img\\defaultpic.jpg'),
(8, 'Where Them Girls At', 'english', 'Songs\\english\\David  Guetta Feat. Nicki Minaj & Flo  Rida - Where Them Girls At.mp3', 'David Guetta', 'img\\defaultpic.jpg'),
(9, 'EdwardMaya', 'english', 'Songs\\english\\EdwardMaya.mp3', 'Edward Maya', 'img\\defaultpic.jpg'),
(10, 'Whistle Audio', 'english', 'Songs\\english\\Flo Rida - Whistle Audio.mp3', 'Rihana', 'img\\defaultpic.jpg'),
(11, 'sorry', 'english', 'Songs\\english\\sorry.mp3', 'Justin Bieber', 'img\\jb.jpg'),
(12, 'Ente Maavum Poothea', 'malayalam', 'Songs\\malayalam\\entemaavumpoothe.mp3', 'Unknown', 'img\\ak.jpg'),
(13, 'Kathangalil Kinave', 'malayalam', 'Songs\\malayalam\\kaathangalkinavil.mp3', 'maranu', 'img\\darvinte.jpg'),
(14, 'Kaayalinarike', 'malayalam', 'Songs\\malayalam\\kaayalinarike.mp3', 'Unknown', 'img\\default.jpg'),
(15, 'kandokando', 'malayalam', 'Songs\\malayalam\\kandokando.mp3', 'unknown', 'img\\hello Namasthe'),
(16, 'Bolna', 'hindi', 'Songs\\hindi\\bolna.mp3', 'Unknown', 'img\\kas.jpg'),
(17, 'Dance Basanti', 'hindi', 'Songs\\hindi\\dancebasanti.mp3', 'Unknown', 'img\\ungli.jpg'),
(19, 'Janam Janam', 'hindi', 'Songs\\hindi\\janamjanam.mp3', 'Arjit Singh', 'img\\Dilwale.jpg'),
(20, 'Soch Na Sakhe', 'hindi', 'Songs\\hindi\\sochnasakhe.mp3', 'Unknown', 'img\\Airlift.jpg'),
(21, 'Peeloon', 'hindi', 'peelon.mp3', 'peeloon.mp4', 'advance-admin/a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `topsong`
--

CREATE TABLE IF NOT EXISTS `topsong` (
  `sname` varchar(200) NOT NULL,
  `scat` varchar(200) NOT NULL,
  `sartist` varchar(200) NOT NULL,
  `sfile` varchar(300) NOT NULL,
  `simg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topsong`
--

INSERT INTO `topsong` (`sname`, `scat`, `sartist`, `sfile`, `simg`) VALUES
('bolna', 'hindi', 'unknown', 'Songs\\hindi\\bolna.mp3', 'img\\kas.jpg'),
('dance basanti', 'hindi', 'unknown', 'Songs\\hindi\\dancebasanti.mp3', 'img\\ungli.jpg'),
('ente maavum poothe', 'malayalam', 'unknown', 'Songs\\malayalam\\entemaavumpoothe.mp3', 'img\\ak.jpg'),
('hello', 'english', 'Adele', 'Songs\\english\\hello.mp3', 'img\\adele.jpg'),
('janam janam', 'hindi', 'unknown', 'Songs\\hindi\\janamjanam.mp3', 'img\\Dilwale.jpg'),
('kaathangal kinavil', 'malayalam', 'unknown', 'Songs\\malayalam\\kaathangalkinavil.mp3', 'img\\darvinte.jpg'),
('kandu kothiche', 'malayalam', 'unknown', 'Songs\\malayalam\\kandukothiche.mp3', 'img\\HelloNamasthe.jpg'),
('love yourself', 'english', 'Justin Bieber', 'Songs\\english\\loveyourself.mp3', 'img\\jb.jpg'),
('out of the woods', 'english', 'Taylor Swift', 'Songs\\english\\outofthewoods.mp3', 'img\\ts.jpg'),
('soch na sakhe', 'hindi', 'unknown', 'Songs\\hindi\\sochnasakhe.mp3', 'img\\Airlift.jpg'),
('sorry', 'english', 'Justin Bieber', 'Songs\\english\\sorry.mp3', 'img\\jb.jpg'),
('the three empty words', 'english', 'Shawn Mendes', 'Songs\\english\\threeemptywords.mp3', 'img\\smen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `topten`
--

CREATE TABLE IF NOT EXISTS `topten` (
  `sname` varchar(200) NOT NULL,
  `scat` varchar(200) NOT NULL,
  `sartist` varchar(200) NOT NULL,
  `sfile` varchar(300) NOT NULL,
  `simg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topten`
--

INSERT INTO `topten` (`sname`, `scat`, `sartist`, `sfile`, `simg`) VALUES
('bolna', 'hindi', 'unknown', 'bolna.mp3', 'kas.jpg'),
('dance basanti', 'hindi', 'unknown', 'dancebasanti.mp3', 'ungli.jpg'),
('ente maavum poothe', 'malayalam', 'unknown', 'entemaavumpoothe.mp3', 'ak.jpg'),
('hello', 'english', 'Adele', 'hello.mp3', 'adele.jpg'),
('janam janam', 'hindi', 'unknown', 'janamjanam.mp3', 'Dilwale.jpg'),
('kaathangal kinavil', 'malayalam', 'unknown', 'kaathangalkinavil.mp3', 'darvinte.jpg'),
('kandu kothiche', 'malayalam', 'unknown', 'kandukothiche.mp3', 'HelloNamasthe.jpg'),
('love yourself', 'english', 'Justin Bieber', 'loveyourself.mp3', 'jb.jpg'),
('out of the woods', 'english', 'Taylor Swift', 'outofthewoods.mp3', 'ts.jpg'),
('soch na sakhe', 'hindi', 'unknown', 'sochnasakhe.mp3', 'Airlift.jpg'),
('sorry', 'english', 'Justin Bieber', 'sorry.mp3', 'jb.jpg'),
('the three empty words', 'english', 'Shawn Mendes', 'threeemptywords.mp3', 'smen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `toptenartist`
--

CREATE TABLE IF NOT EXISTS `toptenartist` (
  `aname` varchar(300) NOT NULL,
  `acat` varchar(300) NOT NULL,
  `asong` varchar(400) NOT NULL,
  `aimg` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toptenartist`
--

INSERT INTO `toptenartist` (`aname`, `acat`, `asong`, `aimg`) VALUES
('Justin Bieber', 'english', 'Love Yourself', 'img\\jb.jpg'),
('Justin Timberlake', 'english', 'The 20/20 Experience', 'img\\jt.jpg'),
('Lady Gaga', 'english', 'Cheek TO Cheek', 'img\\lg.jpg'),
('Najim Arshad', 'malayalam', 'Ulil Thoniyal', 'img\\najim.png'),
('Pitbull', 'english', 'Dale', 'img\\pit.jpg'),
('Rihana', 'english', 'Anti', 'img\\rihanna.jpg'),
('Shreya Ghoshal', 'malayalam', 'Manwa Lagae', 'img\\sh.png'),
('Shwetha Mohan', 'malayalam', 'I love you mummy', 'img\\shw.png'),
('Taylor Swift', 'english', 'Swifty', 'img\\ts.jpg'),
('Vijay Yesudas', 'malayalam', 'Malare', 'img\\vy.png'),
('Vineeth Srinivasan', 'malayalam', 'Jacobinte Swargarajyam', 'img\\vs.png');

-- --------------------------------------------------------

--
-- Table structure for table `topvideo`
--

CREATE TABLE IF NOT EXISTS `topvideo` (
  `sname` varchar(200) NOT NULL,
  `scat` varchar(200) NOT NULL,
  `sartist` varchar(200) NOT NULL,
  `sfile` varchar(300) NOT NULL,
  `simg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topvideo`
--

INSERT INTO `topvideo` (`sname`, `scat`, `sartist`, `sfile`, `simg`) VALUES
('bolna', 'hindi', 'unknown', 'movies\\hindi\\bolna.mp4', 'img\\kas.jpg'),
('dance basanti', 'hindi', 'unknown', 'movies\\hindi\\dancebasanti.mp4', 'img\\ungli.jpg'),
('ente maavum poothe', 'malayalam', 'unknown', 'movies\\malayalam\\entemaavumpoothe.mp4', 'img\\ak.jpg'),
('hello', 'english', 'Adele', 'movies\\english\\hello.mp4', 'img\\adele.jpg'),
('idukki', 'malayalam', 'unknown', 'movies\\malayalam\\idu.mp4', 'img\\maheshinte.jpg'),
('janam janam', 'hindi', 'unknown', 'movies\\hindi\\janamjanam.mp4', 'img\\Dilwale.jpg'),
('kaathangal kinavil', 'malayalam', 'unknown', 'movies\\malayalam\\kk.mp4', 'img\\darvinte.jpg'),
('kandu kothiche', 'malayalam', 'unknown', 'movies\\malayalam\\kan.mp4', 'img\\HelloNamasthe.jpg'),
('kar gayi chull', 'hindi', 'unknown', 'movies\\hindi\\kargayichul.mp4', 'img\\kas.jpg'),
('love yourself', 'english', 'Justin Bieber', 'movies\\english\\loveyourself.mp4', 'img\\jb.jpg'),
('out of the woods', 'english', 'Taylor Swift', 'movies\\english\\outofwoods.mp4', 'img\\ts.jpg'),
('Paavada', 'malayalam', 'unknown', 'movies\\malayalam\\pa.mp4', 'img\\pavada.jpg'),
('Pookal Panineer', 'malayalam', 'unknown', 'movies\\malayalam\\pok.mp4', 'img\\Action.jpg'),
('rock the party', 'hindi', 'unknown', 'movies\\hindi\\rocktheparty.mp4', 'img\\rts.jpg'),
('soch na sakhe', 'hindi', 'unknown', 'movies\\hindi\\sochnasakhe.mp4', 'img\\Airlift.jpg'),
('sorry', 'english', 'Justin Bieber', 'movies\\english\\sorry.mp4', 'img\\jb.jpg'),
('the three empty words', 'english', 'Shawn Mendes', 'movies\\english\\threeemptywords.mp4', 'img\\smen.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`p_uname`), ADD UNIQUE KEY `p_email` (`p_email`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `topsong`
--
ALTER TABLE `topsong`
 ADD PRIMARY KEY (`sname`);

--
-- Indexes for table `topten`
--
ALTER TABLE `topten`
 ADD PRIMARY KEY (`sname`);

--
-- Indexes for table `toptenartist`
--
ALTER TABLE `toptenartist`
 ADD PRIMARY KEY (`aname`);

--
-- Indexes for table `topvideo`
--
ALTER TABLE `topvideo`
 ADD PRIMARY KEY (`sname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
