-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 04:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krentzackary`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `attribute` varchar(500) NOT NULL,
  `amount` int(11) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `category`, `description`, `attribute`, `amount`, `location`) VALUES
(1, 'asdf', 'asdf', 'asdfa', 'sdfasdf', 0, 'asdf'),
(2, 'asdf', 'asdf', 'asdfa', 'sdfasdf', 0, 'asdf'),
(3, 'asdf', 'asdf', '', 'sdfasdf', 0, 'asdf'),
(4, 'asdf', 'asdf', '', 'sdfasdf', 0, 'asdf'),
(5, 'Malambot na upuan', 'Upuan', 'Sarap sa pwet', 'Mainit pag malamig, malamig pag mainit', 1, 'Ur mom'),
(6, 'Malambot na upuan', 'Upuan', 'Twice', 'Blink', 1, 'Ur mom'),
(7, 'asdfasdf', 'asdf', 'asdfasdf', 'asdfasdf', 69, 'Ur sis'),
(8, 'asdfasdf', 'asdf', 'asdfasdf', 'asdfasdf', 420, 'Ur aunt'),
(9, 'asdf', 'asdf', 'asdfasdf', 'asdf', 420, 'Ur aunt'),
(10, 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 123123, 'asdfasdfasdf'),
(11, 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', 242141234, 'gfasdfasdfasdf'),
(12, 'ghjkhkhkh', 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdfasdf', 12341234, 'gfdfsgsdgfsdfgsdfg'),
(13, 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasf', 45432345, 'asfasdfasdf'),
(14, 'fasfasdf', 'asdfasdfasd', 'fasdfasdfa', 'sdfasdfasdf', 21341234, 'asdfasdf'),
(15, 'fasdfasdfasdf', 'asdfasdfasdfasdf', 'asdfasdfasdfasdf', 'asdfasdfasdfasdf', 2147483647, 'fasdfwefasdfasdf'),
(16, 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdfasdf', 'asdfasdfasdfasdf', 123412423, 'sdafasdfasdfasdf'),
(17, 'asdfasfasd', 'fasdfasdf', 'asdfasdfasdf', 'asdfasdfasfasf', 432141234, 'asdfasjfioawejfosdf'),
(18, 'asdfasdfasdfasdf', 'asdfasdfasdf', 'fasdfasdfasfsaf', 'sdfasdfasdfasdfasdfasdf', 2147483647, 'asdfasfwefasdfasdfsdf'),
(19, 'asfasfasdf', 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdfasd', 2147483647, 'lajslfjasjfklasdfjafasf'),
(20, 'asdfasdfasdf', 'asdfasdfas', 'dfasdfasdfasdf', 'asdfasdfasdfa', 2147483647, 'fasfasdfasdf'),
(21, 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdfas', 534214532, 'asfasdfasfasdfasdf'),
(22, 'asfasdf', 'adsfasdf', 'asdfasdfasdf', 'asdfasdfasdf', 2147483647, 'asdfasdfasdf'),
(23, 'asdfasdfasdf', 'asdfasdfasd', 'fasdfasdfasdf', 'asdfasdfasdf', 412341234, 'asdfasdfasdf'),
(24, 'asdfasdfa', 'asdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', 2147483647, 'asdfasdf'),
(26, 'asdfasdfasdf', 'asdfasdfasd', 'fasdfasdfasdf', 'asdfasdfasdfasdf', 412341234, 'fasdfasdf'),
(27, 'jljkljkljljljljlkj', 'ojljklljjljjlj', 'asjlfjlasjflasjfljaslfjlasj', 'lasjdlfjasldfklasjdlkfjasldf', 124234234, 'asfdfasdfasdf'),
(28, 'afasdfasfafffffffffffff', 'asdfasdfasfasf', 'asdfasdfasfasf', 'asdfasdfasfasdfasfasdf', 2147483647, 'fasdfasdf'),
(29, 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdfasdf', 'asdfasdfasdfasdf', 32453245, 'fasdfasdfasdf'),
(31, '', '', '', '', 0, ''),
(32, '', '', '', '', 0, ''),
(33, '', '', '', '', 0, ''),
(34, '', '', '', '', 0, ''),
(35, '', '', '', '', 0, ''),
(36, '', '', '', '', 0, ''),
(37, '', '', '', '', 0, ''),
(38, '', '', '', '', 0, ''),
(39, '', '', '', '', 0, ''),
(40, '', '', '', '', 0, ''),
(41, '', '', '', '', 0, ''),
(42, '', '', '', '', 0, ''),
(43, '', '', '', '', 0, ''),
(44, '', '', '', '', 0, ''),
(45, '', '', '', '', 0, ''),
(46, '', '', '', '', 0, ''),
(47, '', '', '', '', 0, ''),
(48, '', '', '', '', 0, ''),
(49, '', '', '', '', 0, ''),
(50, '', '', '', '', 0, ''),
(51, '', '', '', '', 0, ''),
(52, '', '', '', '', 0, ''),
(53, '', '', '', '', 0, ''),
(54, '', '', '', '', 0, ''),
(55, '', '', '', '', 0, ''),
(56, 'eyy', 'yoo', '', '', 0, ''),
(57, 'Your', 'so', 'skibidi', 'your so fanum tax', 999, ''),
(58, 'second', 'time', 'the charm', 'hello', 234, ''),
(59, 'asfasdf', 'asdfasdfsadf', 'sdfasdfasdfasdf', 'asdfasdfasdfasdfasdf', 2147483647, ''),
(60, 'your', 'so', 'skibidi', 'your', 123, 'fasfsafasdf'),
(61, 'Skibidi', 'bop', 'toilet', '9 yo with ipads', 2147483647, 'Hawaii'),
(62, 'Rome', 'asdfasdfasdfasdf', 'fsdfasdf', 'asdfasdfasdf', 2147483647, 'asfasdfasdfadf'),
(63, 'Bambi', 'Tokyo Police Club ', 'Nice song ', 'Patrick Bateman', 81234, 'aklsfjfkljasdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `attribute` varchar(500) NOT NULL,
  `amount_held` int(11) NOT NULL,
  `amount_sold` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `description`, `attribute`, `amount_held`, `amount_sold`, `location`, `created_at`, `updated_at`) VALUES
(11, 'third', 'asdfasdfasfasdf', 'asdfasdfasdfasdf', 'asdfasdfasdfasdfasdf', 9, 77, 'asldfjlasdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'woosh', 'woosh', 'woosh', 'woosh', 5, 3, 'lasdfasfasdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'test', 'test', 'please', 'work', 0, 5, 'nice', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'fifth', 'something', 'somewhere', 'someplace', 99, 99, 'Somewhere not here', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Hello', 'Hi', 'Bonjour', 'Konichiwa', 7, 9, 'Nowhere in particular', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Best Seller', 'People buy this', 'A lot', 'Apparently', 0, 100, 'Wallet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'What ', 'Is', 'A ', 'Man', 5, 5, 'But a featherless biped?', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `secret` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `birthday`, `email`, `secret`, `password`) VALUES
(1, 'Jane', 'Doe', '', 'jane@doe.com', '', 'password'),
(2, 'John', 'Doe', '', 'john@doe.com', '', 'password'),
(3, 'Jade', 'Doe', '2024-01-02', 'jade@doe.com', 'birds', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
