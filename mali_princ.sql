-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 10:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mali_princ`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(200) NOT NULL,
  `title` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `author` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `book_link` varchar(255) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `cover`, `book_link`) VALUES
(1, 'Mali Princ', 'Antoine de Saint-Exupery', 'https://www.knjiga.ba/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/slike/mali_princ_novo.jpg', 'http://www.diogenpro.com/uploads/4/6/8/8/4688084/antoan_de_sent-egziperi-mali_princ.pdf'),
(2, 'Harry Potter i Kamen Mudraca', 'J. K. Rowling', 'https://shop.skolskaknjiga.hr/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/7/172335.jpg', 'http://www.pokusnageneracija.com/wp-content/uploads/2017/12/Dz.-K.-Rouling-01-Hari-Poter-i-Kamen-mudrosti.pdf'),
(4, 'ZloÄin i kazna', 'Fjodor M. Dostojevski', 'https://a.wattpad.com/cover/82258743-288-k767267.jpg', 'http://gimnazija-sb.com/portal/wp-content/uploads/2015/02/dostojevski_zlocinikazna.pdf'),
(5, 'Hamlet', 'William Shakespeare', 'https://audioknjige.elektronskaknjiga.com/slike/hamlet.jpg', 'https://tszoricaivanovic.files.wordpress.com/2013/10/shakespeare_hamlet.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `full_name` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `user_type` varchar(15) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `password`, `username`, `user_type`) VALUES
(1, 'admin', 'admin@admin.com', '123456', 'admin', 'admin'),
(2, 'korisnik', 'asd@asds.com', 'asd', 'asd', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_books`
--

CREATE TABLE `user_books` (
  `id` int(255) NOT NULL,
  `title` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `author` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `book_link` varchar(255) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `user_books`
--

INSERT INTO `user_books` (`id`, `title`, `author`, `cover`, `book_link`) VALUES
(2, 'Mali Princ', 'Antoine de Saint-Exupery', 'https://www.knjiga.ba/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/slike/mali_princ_novo.jpg', 'http://www.diogenpro.com/uploads/4/6/8/8/4688084/antoan_de_sent-egziperi-mali_princ.pdf'),
(3, 'Harry Potter i Kamen Mudraca', 'J. K. Rowling', 'https://shop.skolskaknjiga.hr/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/7/172335.jpg', 'http://www.pokusnageneracija.com/wp-content/uploads/2017/12/Dz.-K.-Rouling-01-Hari-Poter-i-Kamen-mudrosti.pdf'),
(4, 'ZloÄin i kazna', 'Fjodor M. Dostojevski', 'https://a.wattpad.com/cover/82258743-288-k767267.jpg', 'http://gimnazija-sb.com/portal/wp-content/uploads/2015/02/dostojevski_zlocinikazna.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_books`
--
ALTER TABLE `user_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_books`
--
ALTER TABLE `user_books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
