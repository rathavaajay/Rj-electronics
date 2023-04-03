-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 05:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rjelectronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@rku.ac.in', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `factor` varchar(100) NOT NULL,
  `connector` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `brand`, `model`, `colour`, `factor`, `connector`, `price`, `image`) VALUES
(2, 'Truke', 'Buds pro', 'Black', 'In Ear', 'Wireless', '1500', 'upload/508454597truke.jpg'),
(3, 'JBL', 'Tune', 'Black', 'In Ear', 'Bluetooth 5.2', '4500', 'upload/tune.jpg'),
(4, 'OnePlus', 'OnePlus Bullets Wireless Z2', 'Black', '	In Ear', 'Wireless, Bluetooth v5', '2000', 'upload/oneplus.jpg'),
(6, 'truke', 'BTG 1', 'Black', 'In Ear', 'Wireless, Bluetooth 5.1', '1,199', 'upload/trukebuds.webp');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `event` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `screenSize` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `operatingSystem` varchar(100) NOT NULL,
  `generation` varchar(100) NOT NULL,
  `specialFeature` varchar(100) NOT NULL,
  `graphicsCard` varchar(100) NOT NULL,
  `windows` varchar(100) NOT NULL,
  `storage` varchar(100) NOT NULL,
  `ssdORhdd` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `brand`, `model`, `colour`, `screenSize`, `cpu`, `ram`, `operatingSystem`, `generation`, `specialFeature`, `graphicsCard`, `windows`, `storage`, `ssdORhdd`, `price`, `image`) VALUES
(4, 'HP', 'chromebook', 'Black', 'sreen', 'MediaTP', '8 GB', 'Chrome OS', '9 Gen', 'touch Screen', 'dedicated', 'Windows 10', '32 GB', 'SSD', '560000', 'upload/775309444hp.jpg'),
(5, 'DELL', 'chromebook', 'Black', '14.6 inches', 'Core i5 6200U', '32 GB', 'Windows', '10 Gen', '', 'integrated', 'Windows 11', '500 GB', 'SSD', '60000', 'upload/dell.jpg'),
(6, 'ASUS', 'chromebook', 'White', '15.6 inches', 'Celeron N4020', '4 GB', 'Windows', '11 Gen', 'FingerPrint Reader, Thin and Light Laptop, HD (1366 x 768) Display, Anti-glare Panel', 'integrated', 'Windows 11', '1 TB', 'SSD', '35000', 'upload/asus.jpg'),
(9, '	MSI', 'Crosshair 15 B12UGZ', 'Black', '40 Centimetres', 'Intel Core i7', '16 GB', 'Windows', '11 Gen', 'Backlit Keyboard, Built-in Microphone', 'dedicated', 'Windows 11', '1 TB', 'SSD', '1,35,000', 'upload/MSI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `network` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `cellular` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `storage` varchar(100) NOT NULL,
  `about` varchar(400) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `brand`, `model`, `network`, `os`, `cellular`, `colour`, `ram`, `storage`, `about`, `price`, `image`) VALUES
(18, 'Redmi', 'Redmi A1', 'Unlocked for All Carriers', 'Android Go', '4G', 'Blue', '6 RAM', '32 GB', 'Display: 16.56cm HD+ Scratch resistant display Processor: MediaTek Helio A22 processor; up to 2.0GHz Camera: 8MP Dual camera | 5MP Front camera Memory, Storage & SIM: 2GB LPDDR4x RAM | 32GB storage expandable up to 512GB with dedicated SD card slot | Dual SIM (nano+nano) dual standby (4G+4G) Battery: 5000 mAh large battery with 10W in-box charger', '7000', 'upload/123770578redmiA1.jpg'),
(19, 'Samsung', 'Samsung Galaxy M33 5G', 'Unlocked for All Carrie', 'Android 12.0', '5G', 'Brown', '8 RAM', '128 GB', 'Exynos 1280 Octa Core 2.4GHz 5nm Processor with the 12 band support for a True 5G experience 16.72 centimeters (6.6-inch) LCD Display, FHD+ resolution, 1080x2400 pixels protected by Gorilla Glass 5 Versatile Quad camera setup-50MP (F1.8)+ 5MP (F2.2/UW- 123 FOV) + 2MP (F2.4/Depth) + 2MP (F2.4/Macro) QuadCamera| 8MP (F1.8) Front Camera Massive 6000 mAh Battery | Memory, Storage & SIM: 6GB RAM | 128G', '18000', 'upload/samsung.jpg'),
(21, 'Oppo', 'A74 Fantastic Purple', 'Unlocked for All Carriers', 'Android 11.0', '5G', 'purple', '6 RAM', '128 GB', '6.49\" Inch 16.5cm FHD+ Punch-hole Display with 2400x1080 pixels. Larger screen to body ratio of 90.5%.Side Fingerprint Sensor Qualcomm Snapdragon 480 5G GPU 619 at 650 MHz Support 5G sim Powerful 2 GHz Octa-core processor, support LPDDR4X memory and latest UFS 2.1 gear 3 storage 5000 mAh lithium polymer battery 48MP Quad Camera 48MP Main + 2MP Macro + 2MP Depth Lens 8MP Front Camera Memory, Storag', '15,490', 'upload/oppo.jpg'),
(22, 'OnePlus', 'OnePlus Nord CE 2 Lite 5G', 'Unlocked for All Carriers', 'OxygenOS', '5G, 4G LTE', 'Black', '6 RAM', '128 GB', 'Camera: 64MP Main Camera with EIS; 2MP Depth Lens and 2MP Macro Lens; Front (Selfie) Camera: 16MP Sony IMX471 Camera Features: AI scene enhancement, Dual-View Video, HDR, Night Portrait, Panorama Mode, Retouch Filters, 1080p video at 30 fps, SLO-MO: 720p video at 120 fps, TIME-LAPSE: 1080p video at 30 fps, Video editor, Face unlock, Screen flash, HDR, NIGHT, PORTRAIT, TIME-LAPSE, Retouch, Filters ', '19,000', 'upload/oneplus1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `flate` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `id` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `flate` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `mobileid` varchar(100) NOT NULL,
  `EmailId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `country`, `name`, `mobile`, `pincode`, `flate`, `area`, `landmark`, `town`, `state`, `payment`, `mobileid`, `EmailId`) VALUES
(33, 'India', 'mehul kanzariya', '2364872652', '3893782', 'sree ram ', 'rajkoto', 'near new marketing yard', 'rajkot', 'Gujrat', 'Cash on delivery', '22', 'mehul@rku.ac.in'),
(41, 'India', 'dwe', '', 'ds', 'fvsdc', 'ghdsbm', '', 'fghjk', 'Delhi', 'Payment method', '4', 'mehul@rku.ac.in'),
(42, 'India', 'mehul kanzariya', '', 'ds', 'fvsdc', 'ghdsbm', '', 'fghjk', 'Delhi', 'Payment method', '3', 'mehul@rku.ac.in'),
(43, 'India', 'dwe', '', 'ds', 'fvsdc', 'ghdsbm', 'new markiting yard', 'fghjk', 'Delhi', 'Cash on delivery', '4', 'mehul@rku.ac.in'),
(44, 'India', 'dwe', '', 'ds', 'fvsdc', 'ghdsbm', '', 'fghjk', 'Delhi', 'Payment method', '18', 'ajay@rku.ac.in'),
(45, 'India', 'dwe', '', 'ds', 'fvsdc', 'ghdsbm', '', 'fghjk', 'Delhi', 'Payment method', '18', 'ajay@rku.ac.in'),
(46, 'Select Country/Region', 'RK University', '2345643456', '65676', 'RKU Hostel ', 'Traba', 'RKUniversity', 'Rajkot', 'Gujrat', 'Cash on delivery', '26', 'ajay@rku.ac.in'),
(47, 'Select Country/Region', 'RK University', '2345643456', '65676', 'RKU Hostel ', 'Traba', 'RKUniversity', 'Rajkot', 'Gujrat', 'Cash on delivery', '26', 'ajay@rku.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `number`, `password`) VALUES
(11, 'ajay', 'ajay@rku.ac.in', '123456789', '111'),
(13, 'Mehul', 'mehul@rku.ac.in', '987654345', '222');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `screen` varchar(100) NOT NULL,
  `supportedInternet` varchar(100) NOT NULL,
  `display` varchar(100) NOT NULL,
  `dimensions` varchar(100) NOT NULL,
  `resolution` varchar(100) NOT NULL,
  `refreashRate` varchar(100) NOT NULL,
  `specialFeature` varchar(100) NOT NULL,
  `mountingHardware` varchar(100) NOT NULL,
  `connectorType` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tv1`
--

CREATE TABLE `tv1` (
  `id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `screen` varchar(100) NOT NULL,
  `internet` varchar(100) NOT NULL,
  `display` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `resolution` varchar(100) NOT NULL,
  `refresh` varchar(100) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `hardware` varchar(100) NOT NULL,
  `connector` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tv1`
--

INSERT INTO `tv1` (`id`, `brand`, `model`, `screen`, `internet`, `display`, `product`, `resolution`, `refresh`, `feature`, `hardware`, `connector`, `price`, `image`) VALUES
(3, 'TOSHIBA', 'toshiba', '64 Inches', 'Netflix, Prime Video, Zee5, Oxygen Play, Eros Now, JioCinema, SonyLiv, Youtube, Hungama, Hotstar', 'sdfghj', '18.5D x 71.6W x 42.9H Centimeters', '768p', '60 Hz', 'Official Android TV 11(R) | Built-in Assistant | RAM: 1GB | ROM 8 GB | Quad Core | Supported Apps : ', '1 LED TV, 1 Remote, 1 Table Top Stand, 1 Wall Mount Bracket, 1 Power Cable, 2 AAA Battery, 1 User Ma', '', '20000', 'upload/705408874toshiba.jpg'),
(4, 'LG', 'UHD TV', '43 Inches', 'Netflix, Prime Video, Zee5, Many more, Voot, SonyLIV, Discovery+, Youtube, YuppTV, Apple TV, Disney+', 'LED', '18.7D x 97.3W x 57.2H Centimeters', '4K', '60 Hz', 'WebOS 22 with User Profiles | Filmmaker Mode, HDR 10 Pro & HLG | Game Optimizer, ALLM, HGIG Mode | U', '‎‎‎1 UHD 4K TV, 1 Table Top Stand, 1 User Manual, 1 Warranty Card, 1 Remote Control, 2 Batteries', 'Wireless', '30,500', 'upload/LG.jpg'),
(5, 'MI', 'Xiaomi TV 5A 32', '32 Inches', 'Netflix, 5000+apps, Prime Video, and, Youtube, Disney+Hotstar, from, Play Store', 'LED', '19D x 71.5W x 47H Centimeters', '720p', '60 Hz', 'Android TV 11 | PatchWall | IMDb Integration | Universal Search | 300+ Free Live Channels | Kids Mod', '1 LED TV, 2 Table Stand Base, 1 User Manual, 1 Remote Control, 4 screws, 2 x AAA Batteries', 'c', '13,999', 'upload/MI.jpg'),
(6, 'OnePlus', '32Y', '32 Inches', 'Netflix, Prime Video, YouTube', 'LED', '6.5D x 42W x 71.3H Centimeters', '8K', '60 Hz', 'Flat', '1 LED TV, 2 Table Stand Base, 1 User Manual, 1 Remote Control, 1AC Cord, 2 AAA Battery', 'c', '11,999', 'upload/OnePlus80.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv1`
--
ALTER TABLE `tv1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tv1`
--
ALTER TABLE `tv1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
