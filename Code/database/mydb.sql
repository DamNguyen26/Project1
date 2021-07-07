-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 03:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `image`, `note`) VALUES
(1, 'equip1.png', 'Galvanized iron tank. (source: https://www.rainharvest.com/rainflo-3400-gallon-corrugated-steel-tank-rainwater-harvesting-package.asp).'),
(2, 'equip2.png', 'Ferro-cement tanks.'),
(3, 'equip3.png', 'Concrete tank (Source: Taanka Wikipedia). (source: https://www.rainharvest.com/rainflo-3400-gallon-corrugated-steel-tank-rainwater-harvesting-package.asp).'),
(4, 'equip4.png', 'Plastic tanks (Source: Taanka Wikipedia).');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phoneNumber` varchar(20) CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phoneNumber`, `message`) VALUES
(8, 'asdas', 'dammit2525@yahoo.com.vn', '1234445', '123123123'),
(9, 'asdas', 'dammit2525@yahoo.com.vn', '1234445', 'asdasdasdsad'),
(10, 'asdas', 'dammit2525@yahoo.com.vn', '1234445', '123123123'),
(11, 'asdas', 'dammit2525@yahoo.com.vn', '1234445', '123123123'),
(12, 'asdas', 'dammit2525@yahoo.com.vn', '1234445', '123123123');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phoneNumber` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `age` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `username`, `image`, `password`, `name`, `email`, `phoneNumber`, `address`, `age`) VALUES
(28, 'Mickey26', 'DamKhoiNguyen.jpg', '$2y$10$aN0EE/SXUnynAssIAj60AeLNiDGgJThP0rbYDju3Lun4UTXcPB76a', 'Nguyen ', 'dammit2525@gmail.com', '0983650209', 'Hà Nội', '2000-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 NOT NULL,
  `note` text CHARACTER SET utf8 NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `note`, `title`) VALUES
(8, 'product2.png', 'It is the most elementary method. Here, rooftop of any building serves as the catchment. Rainwater is accumulated using easily available and cheap pots kept at the side of the roof. The quantity and feature of this collected water are influenced by the location, size, and material of the roof. A bamboo-made roof gives the lowest quality of water. So, instead of using a bamboo-made roof, it must be made up with other materials like galvanized corrugated iron, aluminum, cement, etc. The catchments need to be cleaned frequently to wash from dirt, leaves, and birdie stools. Figure 2 shows a rooftop-type catchment area.', 'ROOFTOP CATCHMENT'),
(9, 'product3.png', 'Here, rainwater is collected from the common surface of any ground or land a(Figure 3). This method of water collection is also very intricate. This method can be improved by improving surface runoff capacity. That is done using a number of techniques. Runoff capacity can be enhanced by using drain pipes and storing the collected runoff water. Ground catchment area is larger than that of the rooftop area. Therefore, techniques involved with this catchment have more chance for improvement. In this method, water is kept either in small storage reservoirs or in small dams. This technique is usually applied for irrigation purpose. To increase the amount of rainwater runoff within ground catchment areas, it is required to clear or alter foliage cover, increase the slope of ground by artificial means, and reduce soil permeability by proper means [6]. The steeper the slopes of catchment areas, the quicker is the runoff and hence faster collection of rainwater. But, high-speed runoff may cause soil erosion. Therefore, its rate needs to be controlled using plastic sheets, asphalt, or tiles along with slope. This method further reduces evaporative losses as well. Since more than 60 years ago, flat sheets of galvanized iron with timber frames have been used in the State of Victoria, Australia, to prevent soil corrosion of ground catchment area. Conservation bench terraces may also be constructed along a slope perpendicular to runoff flow for this purpose. The soil of the catchment area must be made hard and smooth. Surplus runoff water is directed to a lower collector and stored there. In addition to this, soil treatment using sodium helps in reducing soil permeability [7].', 'LAND SURFACE CATCHMENT');

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

CREATE TABLE `weather` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`id`, `name`, `image`) VALUES
(1, 'Ha Noi', 'haNoi.png'),
(2, 'Ho Chi Minh', 'hoChiMinh.png'),
(3, 'Nha Trang', 'nhaTrang.png'),
(4, 'Phu Lieu', 'phuLieu.png'),
(5, 'Pleiku', 'pleiku.png'),
(6, 'Son La', 'sonLa.png'),
(7, 'Thai Nguyen ', 'thaiNguyen.png'),
(8, 'Vinh', 'vinh.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weather`
--
ALTER TABLE `weather`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `weather`
--
ALTER TABLE `weather`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
