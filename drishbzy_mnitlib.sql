-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2012 at 06:40 PM
-- Server version: 5.0.84
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drishbzy_mnitlib`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` mediumint(9) NOT NULL auto_increment,
  `isbn` varchar(10) collate ascii_bin NOT NULL,
  `title` varchar(100) collate ascii_bin NOT NULL,
  `author` varchar(75) collate ascii_bin NOT NULL,
  `publisher` varchar(50) collate ascii_bin NOT NULL,
  `priority` varchar(10) collate ascii_bin NOT NULL,
  `bank_sc` int(11) NOT NULL default '0',
  `bank_st` int(11) NOT NULL default '0',
  `bank_gen` int(11) NOT NULL default '0',
  `library` int(11) NOT NULL default '0',
  `reference` int(11) NOT NULL default '0',
  `target` varchar(15) collate ascii_bin NOT NULL,
  `price` float default NULL,
  `req_by` varchar(25) collate ascii_bin NOT NULL,
  `dept` varchar(2) collate ascii_bin NOT NULL,
  `status` varchar(20) collate ascii_bin NOT NULL,
  PRIMARY KEY  (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=51 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `isbn`, `title`, `author`, `publisher`, `priority`, `bank_sc`, `bank_st`, `bank_gen`, `library`, `reference`, `target`, `price`, `req_by`, `dept`, `status`) VALUES
(10, '123456', 'c++', 'Manish', 'ashirwad', 'TOP', 1, 100, 14, 11, 0, 'UG', 12, '1', 'CS', 'ON THE RACK'),
(11, '123456', 'c++', 'manish', 'ashirwad', 'top', 1, 1, 1, 1, 10, 'PG', 12, '1', 'CS', 'ON THE RACK'),
(12, '23658', 'JAVA', 'DAVID KARLOS', 'SUN MCS', 'average', 23, 2, 2, 5, 9, 'Research', 189, '10', 'CS', 'PROCURRED'),
(13, '78956', 'hawala co.', 'pl yadav', 'ratan tata', 'medium', 1, 2, 3, 4, 6, 'Research', 67, '10', 'CS', 'PROCURRED'),
(14, '1569', 'hahaha', 'hunm', 'iioioi', 'medium', 8, 0, 5, 2, 1, 'PG', 25, '10', 'CS', 'PROCURRED'),
(15, '1589', 'JAVA the core', 'stani memphis', 'mnit', 'medium', 1, 1, 5, 2, 1, 'PG', 250, '10', 'CS', 'UNDER PROCESS'),
(16, '15893', 'soft skills', 'winfred crowford', 'skit', 'medium', 7, 8, 9, 10, 12, 'PG', 800, '10', 'CS', 'UNDER PROCESS'),
(17, '1234567891', 'MASK', 'Pali', 'OS Pandey', 'medium', 2, 1, 0, 1, 6, 'Research', 12, '1', 'CS', 'UNDER PROCESS'),
(18, '12', 'as', 'as df', 'as', 'medium', 0, 0, 0, 1, 2, 'Research', 10, '1', 'CS', 'UNDER PROCESS'),
(19, '12', 'as', 'qqqq as', 'as df', 'medium', 0, 0, 0, 0, 1, 'Research', 10, '10', 'CS', 'UNDER PROCESS'),
(20, '78932', 'hauma jj', 'JKIIJJ HJ', 'CSJL;S ;CN;', 'medium', 1, 1, 1, 10, 10, 'PG', 45, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(21, '83266656', 'GHGUIJX KLNHSCK', 'NKSCJL KHSCJAL', 'JVCLCV JHCJ;L', 'medium', 1, 1, 1, 10, 11, 'Research', 569, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(22, '156894', '4444', '444444', '444', 'top', 4, 4, 4, 4, 4, 'UG', 450, 'MANISH LAKHARA', 'CS', 'UNDER PROCESS'),
(23, '7895622', 'te hjjh', 'tglnnxcs.cxn.cn', 'io inp', 'medium', 15, 25, 45, 896, 0, 'PG', 789, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(24, '78955', 'ljhdjxhohd', 'lnlhlohjl', 'lkjholhjolhjo', 'top', 45, 0, 0, 0, 0, 'Research', 789, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(25, '1223344556', 'as ss', 'aqwee', 'asw', 'medium', 1, 0, 0, 0, 0, 'Research', 12, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(26, '12548', 'Programming in Java', 'idh, owudh', 'Tata Mc Graw Hill', 'top', 2, 2, 8, 5, 0, 'PG', 200, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(27, '1234', 'as sd', 'asw', 'as df gh hj', 'medium', 1, 2, 0, 4, 0, 'UG', 12, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(28, '12', 'shubham', 'mask', 'paliwal', 'top', 9, 0, 3, 0, 2, 'UG/Researc', 10, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(29, '78922', 'kjkj;jj', 'kn.;k;jj', ';j;j;jkj;k;lkjk', 'medium', 78, 0, 0, 0, 0, 'UG/PG/Rese', 78, 'GyanPrakash Pandey', 'EE', 'UNDER PROCESS'),
(30, '1234567890', 'ilk jsp rama', 'lakh', 'paliw', 'top', 1, 2, 4, 1, 0, 'UG/PG/Rese', 10, 'SHUBHAM PALIWAL', 'CS', 'ON THE RACK'),
(31, '1234', 'kela', 'pali', 'shubh aw ws', 'medium', 12, 0, 0, 1, 0, 'UG/PG/Rese', 2, 'Shubham Kela', 'EC', 'PROPOSED'),
(32, '121', 'aswqe fgtr', 'ag re tg', 'mn bh', 'medium', 12, 0, 3, 0, 1, 'PG/Researc', 21, 'Sudhir Samtani', 'EC', 'PROPOSED'),
(33, '12344556', 'AS  WDF ', ' SCER', 'ASW FGB', 'average', 2, 0, 0, 0, 3, 'UG/PG/Rese', 12, 'Prakash Banjara', 'ME', 'PROPOSED'),
(34, '1213234', 'aspoi knin ', 'we3c ', 'sdef ferf', 'medium', 1, 0, 0, 4, 2, 'UG/PG/Rese', 10, 'Parashar jain', 'ME', 'UNDER PROCESS'),
(35, '12323', 'ndlks dskblkf kjblfkf', 'nikhil', 'nikjho;', 'medium', 12, 2, 0, 0, 2, 'UG/PG/Rese', 10, 'SHUBHAM PALIWAL', 'CS', 'UNDER PROCESS'),
(36, '1324435', '443yrthbtbhtw5uhf hwbthhthy jy  stjydkj yjyjdhbr j yjj ydjyjyj jy', 'sssssssssssssssssssss hhh', 'sffggb ggjj yjyjk jjyrjjt', 'top', 1, 0, 0, 3, 0, 'UG/PG/Research/', 1, 'MANISH LAKHARA', 'CS', 'UNDER PROCESS'),
(37, '14589332', 'The C++ Programming', 'SCHILDT', 'TATA MCGRAW HILLS', 'top', 78, 89, 89, 25, 10, 'UG/PG/', 725, 'AYUSH PANDEY', 'CS', 'ON THE RACK'),
(38, '125487', 'dlfklksdes;gj odhj o', 'lkgn, orhg ', 'elr  jgorjh ', 'top', 4, 4, 10, 20, 2, 'UG/PG/', 150, 'MANISH LAKHARA', 'CS', 'PROCURRED'),
(39, '12365', 'sdjv ohj ', 'dofv ;ohvj ', 'i pij qpwifjpi ', 'medium', 0, 0, 0, 10, 9, '', 10, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(40, '7826993', 'manjhoho', 'kjkljkl;j;klj;l', 'lkjhkljklj', 'average', 6, 0, 0, 5, 0, 'UG/Research/', 41, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(41, '5446654', 'jkbjkhjkshjkhn', 'lnhjlkjkjjkjkj', 'ljbjlkhbljkhj;l', 'medium', 556, 56, 0, 0, 67, 'PG/', 10, 'MANISH LAKHARA', 'CS', 'UNDER PROCESS'),
(42, '5646556', 'lknlnlkjnl', 'nllnnnnl', 'lnlnlknll', 'medium', 0, 0, 0, 0, 0, '', 0, 'MANISH LAKHARA', 'CS', 'UNDER PROCESS'),
(43, '123444', 'FFVVVV', 'FVVVVVVVVVVVVVVVVVVVVRRRRRRRRRRRR', '', 'medium', 0, 0, 0, 0, 0, 'UG/PG/Research/', 0, 'MANISH LAKHARA', 'CS', 'UNDER PROCESS'),
(44, '14566', 'khgkjchb', 'ljnjlknln', 'jbjjcnj', 'medium', 0, 0, 0, 4, 0, 'UG/Research/', 0, 'MANISH LAKHARA', 'CS', 'UNDER PROCESS'),
(45, '12223', 'biigi jbiub biuib bii k', 'vv66t7g 7t7', '', 'medium', 45, 0, 0, 0, 5, 'UG/PG/Research/', 0, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(46, '1456', 'N.LNNM;M', 'DS;KV;SDM', ' SD ', 'medium', 56, 0, 0, 0, 0, 'PG/', 0, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(47, '865453', 'kjahdc ijdckh', 'id,ldwih, ihidhgcf', 'jdj ljdji', 'medium', 4, 4, 10, 20, 2, 'UG/PG/', 200, 'MANISH LAKHARA', 'CS', 'UNDER PROCESS'),
(48, '', '', '', '', 'average', 0, 5, 0, 0, 0, '', 0, 'AYUSH PANDEY', 'CS', 'UNDER PROCESS'),
(49, '1976', 'abcd', 'asd, bgr, nhy', 'xyz', 'medium', 5, 3, 10, 5, 1, 'UG/', 100, 'AYUSH PANDEY', 'CS', 'PROCURRED'),
(50, '2345', 'abcd', 'asd, bgt', 'xyz', 'medium', 4, 3, 10, 5, 1, 'UG/', 100, 'MANISH LAKHARA', 'CS', 'ON THE RACK');

-- --------------------------------------------------------

--
-- Table structure for table `sys_members`
--

CREATE TABLE IF NOT EXISTS `sys_members` (
  `id` mediumint(9) NOT NULL auto_increment,
  `username` varchar(25) collate ascii_bin NOT NULL,
  `name` varchar(65) collate ascii_bin NOT NULL,
  `type` char(1) collate ascii_bin NOT NULL,
  `desi` varchar(25) collate ascii_bin NOT NULL,
  `dept` varchar(20) collate ascii_bin NOT NULL,
  `pwd` varchar(16) collate ascii_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=30 ;

--
-- Dumping data for table `sys_members`
--

INSERT INTO `sys_members` (`id`, `username`, `name`, `type`, `desi`, `dept`, `pwd`) VALUES
(1, 'mnitjas001', 'MANISH LAKHARA', 'H', 'HOD', 'CS', 'password'),
(10, 'mnitjas002', 'AYUSH PANDEY', 'F', 'Sr. LECTURER', 'CS', 'password'),
(11, 'mnitjas003', 'SHUBHAM PALIWAL', 'F', 'READER', 'CS', 'password'),
(12, 'mnitjas014', 'Shubham Kela', 'H', 'HOD', 'EC', 'password'),
(14, 'mnitjas019', 'ANIL CHAUDHRY', 'H', 'HOD', 'IT', 'password'),
(15, 'mnitjas000', 'Ptolemy Singh', 'L', 'CHIEF LIBRARIAN', 'LIBRARY', 'password'),
(16, 'mnitjas004', 'GyanPrakash sharma', 'H', 'HOD', 'EE', 'password'),
(17, 'mnitjas005', 'Prakash sharma', 'F', 'Reader', 'EE', 'password'),
(18, 'mnitjas006', 'Siddharth sharma', 'F', 'Reader', 'EE', 'password'),
(19, 'mnitjas007', 'Vikram Singh', 'F', 'Faculty', 'EE', 'password'),
(20, 'mnitjas008', 'Vikas Thada', 'H', 'HOD', 'ARCHITECTURE', 'password'),
(21, 'mnitjas009', 'Monil Kumar', 'F', 'Faculty', 'ARCHITECTURE', 'password'),
(22, 'mnitjas010', 'Giriraj Singh', 'F', 'Faculty', 'ARCHITECTURE', 'password'),
(23, 'mnitjas011', 'Gurdeep Singh', 'H', 'HOD', 'ME', 'password'),
(24, 'mnitjas012', 'Parashar jain', 'F', 'Sr. Lecturer', 'ME', 'password'),
(25, 'mnitjas013', 'Prakash Banjara', 'F', 'Sr. Lecturer', 'ME', 'password'),
(26, 'mnitjas015', 'Sudhir Samtani', 'F', 'Sr. LECTURER', 'EC', 'password'),
(27, 'mnitjas016', 'Himanshu Poddar', 'F', 'Sr. LECTURER', 'EC', 'password'),
(28, 'mnitjas018', 'Anoop Singh', 'F', 'Sr. LECTURER', 'IT', 'password'),
(29, 'mnitjas019', 'Sikhar Kapoor', 'F', 'Sr. LECTURER', 'IT', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
