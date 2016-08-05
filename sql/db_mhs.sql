-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2016 at 10:56 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tmhs`
--

CREATE TABLE `tmhs` (
  `nim` char(9) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmhs`
--

INSERT INTO `tmhs` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`) VALUES
('151511052', 'Mutiara Trie Aprilian', 'Cililin', '1998-07-05'),
('151511055', 'Nita Amelia Wijaya', 'Tasikmalaya', '1998-01-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tmhs`
--
ALTER TABLE `tmhs`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
