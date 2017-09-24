-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2015 at 02:37 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbfamilyconn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `adm_id` int(50) NOT NULL,
  `adm_fname` varchar(50) NOT NULL,
  `adm_lname` varchar(50) NOT NULL,
  `adm_username` varchar(50) NOT NULL,
  `adm_pass` varchar(10) NOT NULL,
  `adm_dob` date NOT NULL,
  `adm_gen` varchar(20) NOT NULL,
  `adm_mno` varchar(10) NOT NULL,
  `adm_add` varchar(200) NOT NULL,
  `adm_occ` varchar(50) NOT NULL,
  `adm_image` varchar(50) NOT NULL,
  `adm_sques` varchar(100) NOT NULL,
  `adm_sans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adm_id`, `adm_fname`, `adm_lname`, `adm_username`, `adm_pass`, `adm_dob`, `adm_gen`, `adm_mno`, `adm_add`, `adm_occ`, `adm_image`, `adm_sques`, `adm_sans`) VALUES
(1, 'Vishram', 'Kulkarni', 'vishram@gmail.com', 'vishram', '1985-01-01', 'male', '9999123456', 'KOp', 'worker', '1-20140803_110307.jpg', 'What is your favourite actor', 'Raj Kapoor'),
(2, 'vishal', 'jadhav', 'jadhavv599@gmail.com', '9850084346', '1995-08-13', 'male', '9579304746', 'shahapur', 'worker', '2-Penguins.jpg', 'What is your favourite actor', 'amir'),
(3, 'sagar', 'somvanshi', 'sagar123@gmail.com', '0123456789', '1996-01-22', 'male', '9579304746', 'daksdj;alsd', 'worker', '3-20140803_111718.jpg', 'What is your favourite actor', 'Raje'),
(4, 'suraj', 'jadhav', 'ssj14321@gmail.com', '1432', '1995-11-12', 'male', '9595060595', 'ambap', 'Engineer', '4-20140803_123829.jpg', 'What is your favourite film', 'virus not found'),
(5, 'shraddha', 'bagade', 'sdbagade30@gmail.com', '12345', '1991-05-30', 'female', '7798662099', 'a/p Nave Pargaon', 'Engineer', '5-20140803_110307.jpg', 'What is your best friend birth date ', '7 march'),
(6, 'rohit', 'patil', 'rohitpatil@gmail.com', '1234', '1999-01-17', 'male', '9049074854', 'dhglakSDHKASd', 'worker', '6-20140803_113700.jpg', 'What is your favourite actor', 'rohit'),
(7, 'hasda', 'asdasda', 'sj12@gmail.com', '1', '1998-01-19', 'male', '9049074854', 'sadasd', 'worker', '7-20140803_110716.jpg', 'What is your favourite actor', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE IF NOT EXISTS `tbl_chat` (
  `chat_id` int(11) NOT NULL,
  `chat_date` date NOT NULL,
  `chat_fromname` varchar(50) NOT NULL,
  `chat_toname` varchar(50) NOT NULL,
  `chat_msg` varchar(50) NOT NULL,
  `chat_filenm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`chat_id`, `chat_date`, `chat_fromname`, `chat_toname`, `chat_msg`, `chat_filenm`) VALUES
(1, '2015-02-27', 'abc@gmail.com', 'jadhavv599@gmail.com', 'JJ', ''),
(2, '2015-02-27', 'jadhavv599@gmail.com', 'jadhavv599@gmail.com', 'jsdfskf', ''),
(3, '2015-02-27', '', 'jadhavv599@gmail.com', '', ''),
(4, '2015-03-06', 'jadhavv599@gmail.com', 'prsd11@gmail.com', 'hellow', ''),
(5, '2015-03-06', 'jadhavv599@gmail.com', 'prsd11@gmail.com', 'hellow', ''),
(6, '2015-03-06', 'jadhavv599@gmail.com', 'abc@gmail.com', 'hiiiiiiiii', ''),
(7, '2015-03-06', 'jadhavv599@gmail.com', 'omkar@gmail.com', 'ytuytytui', ''),
(8, '2015-03-06', 'jadhavv599@gmail.com', 'jadhavv599@gmail.com', 'Hello', '8-'),
(9, '2015-03-06', 'jadhavv599@gmail.com', 'jadhavv599@gmail.com', 'EEEEE', '9-Esd_COMP.doc'),
(10, '2015-03-12', 'sagar123@gmail.com', 'sachin132@gmail.com', 'jkfgs;ldfkgj;dfg', '10-TurboC.docx'),
(11, '2015-03-12', 'sagar123@gmail.com', 'jadhavv599@gmail.com', 'vishal', '11-85.jpg'),
(12, '2015-03-13', 'jadhavv599@gmail.com', 'jadhav354@gmail.com', 'That is Test', '12-20140915_104921.jpg'),
(13, '2015-03-16', 'sdbagade30@gmail.com', 'jadhavv354@gmail.com', 'hiii', '13-20140803_110326.jpg'),
(14, '2015-03-28', 'jadhavv599@gmail.com', 'jadhavv354@gmail.com', 'jkdfksdfkshdfksjd', '14-'),
(15, '2015-03-28', 'jadhavv599@gmail.com', 'jadhavv354@gmail.com', 'jhkhjhkjhjkhkjhkhjhkjhkjhkjhkjhkjhjkhjhkj', '15-'),
(16, '2015-03-28', 'sagar123@gmail.com', 'rohitpatil@gmail.com', 'jfdshlgkdfjghsldkjgdhklg', '16-'),
(17, '2015-03-28', 'rohitpatil@gmail.com', 'rohitpatil@gmail.com', 'ouifruwisdjlfksielrdjk;fjsok;ldfjsldkfjsldkjfsdl;k', '17-'),
(18, '2015-03-28', 'rohitpatil@gmail.com', 'jadhavv354@gmail.com', 'dsfgdfgsdgdfg', '18-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_conteno`
--

CREATE TABLE IF NOT EXISTS `tbl_conteno` (
  `con_id` int(50) NOT NULL,
  `con_fname` varchar(50) NOT NULL,
  `con_lname` varchar(50) NOT NULL,
  `con_address` varchar(50) NOT NULL,
  `con_type` varchar(50) NOT NULL,
  `con_contectno` varchar(50) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_dob` date NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_conteno`
--

INSERT INTO `tbl_conteno` (`con_id`, `con_fname`, `con_lname`, `con_address`, `con_type`, `con_contectno`, `con_email`, `con_dob`) VALUES
(1, 'skfjksdf', 'sdfsdf', 'sdfsdf', 'Business', '1234567890', 'sdfsdkjf@gmila.com', '0000-00-00'),
(2, 'jsadjkasd', 'asjdjaksd', 'asdhajskd', 'Relative', '98508434', '', '0000-00-00'),
(3, 'jsadjkasd', 'asjdjaksd', 'asdhajskd', 'Relative', '9850843460', 'asjkd@gmil.com', '2015-02-11'),
(4, 'fbjsdf', 'asdfsadf', 'dfhsafd', 'Friend', '9', '', '0000-00-00'),
(5, 'fbjsdf', 'asdfsadf', 'dfhsafd', 'Friend', '12345678901', 'kjasdf@gmail.com', '2015-02-16'),
(6, 'fiotrew', 'sdfsdf', 'sdkfj', 'Business', '999910000', 'sdfsdkjf@gmila.com', '2015-02-02'),
(7, 'vishal', 'jadhav', 'shahapur', 'Friend', '9579304746', 'jadhavv599@gmail.com', '2015-02-17'),
(8, 'erfwer', 'werwerww', 'werqwerwer', 'Business', '9579304746', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `ev_id` int(11) NOT NULL,
  `ev_title` varchar(50) NOT NULL,
  `ev_date` date NOT NULL,
  `ev_des` varchar(500) NOT NULL,
  `ev_imgnm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`ev_id`, `ev_title`, `ev_date`, `ev_des`, `ev_imgnm`) VALUES
(1, 'my hdd', '2015-07-23', 'jdjdjdjdjdjdjdjdj', '1-Lighthouse.jpg'),
(2, 'myyyyyyyy', '2015-03-17', 'qwqqwqw', '2-20140803_122729.jpg'),
(3, 'maaaaa', '2015-03-22', 'wedqweqwe', '3-20140803_110716.jpg'),
(4, 'qweqweqwew', '2015-03-16', 'qweqweqwewq', '4-20140803_110417.jpg'),
(5, 'jkfdsadfs', '2015-03-26', 'sadsadsad', '5-20140803_111628.jpg'),
(6, 'vishal', '2015-03-16', 'asdjaksld', '6-20140803_111618.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_familymem`
--

CREATE TABLE IF NOT EXISTS `tbl_familymem` (
  `fm_id` int(50) NOT NULL,
  `fm_fname` varchar(50) NOT NULL,
  `fm_lname` varchar(50) NOT NULL,
  `fm_username` varchar(50) NOT NULL,
  `fm_pass` varchar(10) NOT NULL,
  `fm_dob` date NOT NULL,
  `fm_gen` varchar(50) NOT NULL,
  `fm_mno` varchar(10) NOT NULL,
  `fm_add` varchar(100) NOT NULL,
  `fm_occ` varchar(50) NOT NULL,
  `fm_rel` varchar(50) NOT NULL,
  `fm_image` varchar(50) NOT NULL,
  `fm_sques` varchar(50) NOT NULL,
  `fm_sans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_familymem`
--

INSERT INTO `tbl_familymem` (`fm_id`, `fm_fname`, `fm_lname`, `fm_username`, `fm_pass`, `fm_dob`, `fm_gen`, `fm_mno`, `fm_add`, `fm_occ`, `fm_rel`, `fm_image`, `fm_sques`, `fm_sans`) VALUES
(1, 'vishal', 'jadhav', 'jadhavv354@gmail.com', '9850084346', '0000-00-00', 'Male', '', '', 'worker', 'Choose Relationship', '1-20140803_111856.jpg', 'What is your favourite actor', 'Raje'),
(2, 'rohit', 'patil', 'rohitpatil@gmail.com', '1234', '2015-03-23', 'Male', '9049074854', 'fjsldfjksadf', 'worker', 'Brother', '2-20140803_111601.jpg', 'What is your favourite actor', 'amir'),
(3, 'rohit', 'patil', 'rohitpatil@gmail.com', '12', '0000-00-00', 'Male', '9579304746', 'kdsfj;dfdf', 'Engineer', 'Brother', '3-20140803_110417.jpg', 'What is your favourite actor', 'amir'),
(4, 'dkjasd', 'asdss', 'vishaljadhav@gmail.com', '123456789', '2015-03-24', 'Male', '9595060595', 'sdasd', 'Government job', 'Uncle', '4-20140803_111628.jpg', 'What is your favourite actor', 'vishal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `ne_id` int(11) NOT NULL,
  `ne_title` varchar(50) NOT NULL,
  `ne_date` date NOT NULL,
  `ne_des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`ne_id`, `ne_title`, `ne_date`, `ne_des`) VALUES
(1, 'vishal jadhav', '2015-03-25', 'SDADSD'),
(2, 'adsdasdasd', '2015-03-16', 'sadasd'),
(3, 'vishal jadhav', '0000-00-00', 'vishal jadhavvishal jadhav'),
(4, 'Bday', '2015-03-28', 'kfdjLAFD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload`
--

CREATE TABLE IF NOT EXISTS `tbl_upload` (
  `up_id` int(11) NOT NULL,
  `up_nm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
