-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2019 at 12:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Email`, `pass`) VALUES
('jinan@gmail.com', 'jinan');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_address`, `quantity`) VALUES
(1, '::1', NULL),
(7, '::1', NULL),
(13, '::1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `catgory_id` int(11) NOT NULL,
  `catagory_title` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`catgory_id`, `catagory_title`) VALUES
(1, 'Earrings'),
(2, 'Finger Ring'),
(3, 'Phone Case');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_catagory` int(11) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_description` text,
  `product_image` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_catagory`, `product_title`, `product_price`, `product_description`, `product_image`) VALUES
(1, 2, 'Finger Rings', 150, '', 0x35333230313031365f323036363236393933333636353836375f313737343131353236303432313131313830385f6e2e6a7067),
(2, 2, 'Finger Rings', 150, '', 0x35333235363833335f323036363234323038333636383635325f323239313538393731333536353331393136385f6e2e6a7067),
(3, 2, 'Finger Rings', 150, '', 0x35333335323634355f323036363237303736303333323435315f333239303534323931353535373738353630305f6e2e6a7067),
(4, 2, 'Finger Rings', 100, '', 0x35333039373331355f323036363237313330363939393036335f3438323738383836383439323336313732385f6f2e6a7067),
(6, 2, 'Finger Rings', 100, '', 0x35343431303134325f323036363237313935303333323333325f343131393833383933353035383734333239365f6f2e6a7067),
(7, 2, 'Finger Rings', 100, '', 0x35343732373839315f323036363237313837303333323334305f353939353536323231323438363238333236345f6f2e6a7067),
(8, 1, 'Earrings', 400, '', 0x35363732313436385f323038343439393233313834323933375f383332313436333332303236373731383635365f6e2e6a7067),
(9, 1, 'Earrings', 300, '', 0x35333430353431315f323036373538323032333533343635385f3937303436313031363031363032373634385f6e2e6a7067),
(10, 1, 'Earrings', 250, '', 0x35333832313032395f323036373538323134333533343634365f363637313130323439313539393330363735325f6e2e6a7067),
(11, 1, 'Earrings', 400, '', 0x35333134323638325f323036373538343031333533343435395f323930393931313436373639383432313736305f6e2e6a7067),
(12, 1, 'Earrings', 400, '', 0x35333234383433385f323036373538333937333533343436335f3436343430333738383533353433313136385f6e2e6a7067),
(13, 1, 'Earrings', 250, '', 0x35333831393535385f323036373538313937333533343636335f313237333333343032323330363532393238305f6e2e6a7067),
(14, 3, 'Phone Case', 600, '', 0x34333137363039385f313937373232343037323537303435345f313535303834323530363532353031363036345f6f2e6a7067),
(15, 3, 'Phone Case', 650, '', 0x34333132323731305f313937373232343236353930333736385f343833393630363334333534393538333336305f6f2e6a7067),
(16, 3, 'Phone Case', 500, '', 0x34333231383834385f313937383334323131323435383635305f343137313430393631363639393132393835365f6f2e6a7067),
(17, 3, 'Phone Case', 650, '', 0x34333138383536395f313937383334313236353739323036385f343639333335323536363730323939373530345f6e2e6a7067),
(19, 3, 'Phone Case', 550, '', 0x34333233353938385f313937383334313832393132353334355f363030303732353233393931373434353132305f6e2e6a7067),
(22, 1, 'Earrings', 300, '', 0x35333733383135315f323036373538313531363836383034325f383335373036333731313437383737353830385f6e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `phone_number`, `email`, `pass`) VALUES
(1, 'Partha', '01991948974', 'parthanath639@gmail.com', '1212'),
(2, 'tonni', '01684881849', 'nilltonni@gmail.com', 'tonni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`catgory_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `catgory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
