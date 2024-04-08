-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 12:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";









--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(23, 7, 13, 'Lip-stick', 'Glam', 699, 499, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;HM Sans Regular&quot;, &quot;ãƒ’ãƒ©ã‚®ãƒŽè§’ã‚´ Pro W3&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Osaka, ãƒ¡ã‚¤ãƒªã‚ª, Meiryo, &quot;ï¼­ï¼³ ï¼°ã‚´ã‚·ãƒƒã‚¯&quot;, &quot;MS PGothic&quot;, sans-serif; font-size: 25px; letter-spacing: 2px;\">This soft matte lip colour has an intense colour payoff that gives lips a matte yet soft focus effect. The soft matte formula is enriched with rose oil extracts from France which give your matte lips a moisturized, comfortable feel.</span>', 'lip-1.jpg', 'lip-2.jpeg', 'lip-3.jpg', 100, 'In Stock', '2024-03-10 21:15:35', NULL),
(24, 8, 14, 'EyeLiner', 'Glam', 456, 678, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;HM Sans Regular&quot;, &quot;ãƒ’ãƒ©ã‚®ãƒŽè§’ã‚´ Pro W3&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Osaka, ãƒ¡ã‚¤ãƒªã‚ª, Meiryo, &quot;ï¼­ï¼³ ï¼°ã‚´ã‚·ãƒƒã‚¯&quot;, &quot;MS PGothic&quot;, sans-serif; font-size: 25px; letter-spacing: 2px;\">This eyeliner gives you a very nice look within a single apply only . A must try product with waterproof resistance&nbsp;</span><br>', 'eyeliner-1.jpeg', 'eyeliner-2.jpeg', 'eyeliner-3.jpeg', 100, 'In Stock', '2024-03-10 21:38:16', NULL),
(25, 9, 15, 'Foundation', 'Glam', 2345, 1900, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;HM Sans Regular&quot;, &quot;ãƒ’ãƒ©ã‚®ãƒŽè§’ã‚´ Pro W3&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Osaka, ãƒ¡ã‚¤ãƒªã‚ª, Meiryo, &quot;ï¼­ï¼³ ï¼°ã‚´ã‚·ãƒƒã‚¯&quot;, &quot;MS PGothic&quot;, sans-serif; font-size: 25px; letter-spacing: 2px;\">This absolute foundation is a very basic need of your makeup routine . Do try according to your skin shade , the best one is waiting for you.</span><br>', 'foundation-1.jpeg', 'foundation-2.jpeg', 'foundation-3.jpg', 100, 'In Stock', '2024-03-10 21:41:16', NULL);














-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM');

-- --------------------------------------------------------


CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, 'kushagralakhote0511@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-06 12:14:11', NULL, 0),
(25, 'Ashmeet@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-06 12:21:41', '06-03-2024 06:17:19 PM', 1),
(26, 'kushagralakhote0511@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-12 04:14:48', NULL, 1),
(27, 'kushagralakhote0511@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-12 04:15:57', '12-03-2024 09:54:04 AM', 1),
(28, 'kushagralakhote0511@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-12 04:24:24', NULL, 1),
(29, 'kushagralakhote0511@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-12 04:26:28', NULL, 1),
(30, 'kushagralakhote0511@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-14 11:19:31', '14-03-2024 09:32:06 PM', 1),
(31, 'Anushritahkur03@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-14 16:05:39', NULL, 1),
(32, 'Ashmeet@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-24 20:43:40', NULL, 0),
(33, 'Ashmeet@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-24 20:44:05', NULL, 1),
(34, 'Anushrithakur03@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-24 20:46:35', NULL, 1),
(35, 'Anushrithakur03@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-25 22:02:45', '26-03-2024 03:33:57 AM', 1),
(36, 'Anushrithakur03@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-25 22:05:57', '26-03-2024 03:35:58 AM', 1),
(37, 'Anushrithakur03@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-25 23:20:42', '26-03-2024 05:11:22 AM', 1),
(38, 'Anushrithakur03@gmail.com', 0x3a3a3100000000000000000000000000, '2024-03-25 23:44:26', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext DEFAULT NULL,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(2, 'Amit ', 'amit@gmail.com', 8285703355, '5c428d8875d2948607f3e3fe134d71b4', '', '', '', 0, '', '', '', 0, '2017-03-15 17:21:22', ''),
(3, 'hg', 'hgfhgf@gmass.com', 1121312312, '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 0, '', '', '', 0, '2018-04-29 09:30:32', ''),
(4, 'Ashmeet', 'Ashmeet@gmail.com', 1234567890, 'b43ea2125ea98ec8850296a5addff7d1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 12:20:57', NULL),
(5, 'kushagra Lakhote', 'kushagralakhote0511@gmail.com', 6767676767, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-12 04:14:37', NULL),
(6, 'Anushri Thakur ', 'Anushritahkur03@gmail.com', 8888851631, 'beaf3368aab99fd2b803d50ee9e5ae8b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-14 16:05:32', NULL),
(7, 'Ashmeet', 'Ashmeet@gmail.com', 1234567890, '6fb42da0e32e07b61c9f0251fe627a9c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-24 20:43:57', NULL),
(8, 'Ashmeet', 'Ashmeet@gmail.com', 1234567890, '6fb42da0e32e07b61c9f0251fe627a9c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-24 20:45:15', NULL),
(9, 'Anushri Thakur', 'Anushrithakur03@gmail.com', 8888851631, 'e807f1fcf82d132f9bb018ca6738a19f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-24 20:46:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);






--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);





--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);



--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;









--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wishlist`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
