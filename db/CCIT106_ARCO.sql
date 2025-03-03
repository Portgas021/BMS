-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 03, 2025 at 02:27 AM
-- Server version: 5.7.44
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CCIT106_ARCO`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `created_at`) VALUES
(8, 'The Catcher in the Rye', 'J.D. Salinger', 'Young Adult', '2025-03-03 02:02:46'),
(9, 'War and Peace', 'Leo Tolstoy', 'Historical Fiction', '2025-03-03 02:02:46'),
(10, 'The Picture of Dorian Gray', 'Oscar Wilde', 'Philosophical Fiction', '2025-03-03 02:02:46'),
(11, 'Moby-Dick', 'Herman Melville', 'Adventure', '2025-03-03 02:02:46'),
(12, 'Crime and Punishment', 'Fyodor Dostoevsky', 'Psychological Thriller', '2025-03-03 02:02:46'),
(13, 'The Adventures of Huckleberry Finn', 'Mark Twain', 'Adventure', '2025-03-03 02:02:46'),
(14, 'Wuthering Heights', 'Emily Brontë', 'Romance', '2025-03-03 02:02:46'),
(15, 'The Scarlet Letter', 'Nathaniel Hawthorne', 'Historical Fiction', '2025-03-03 02:02:46'),
(16, 'The Count of Monte Cristo', 'Alexandre Dumas', 'Adventure', '2025-03-03 02:02:46'),
(23, 'von', '=', 'von', '2025-03-03 02:12:03'),
(24, 'CONRAD', 'CONRAD', 'CONRAD', '2025-03-03 02:16:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
