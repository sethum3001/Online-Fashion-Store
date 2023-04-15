-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 05:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `username`, `password`) VALUES
(1, 'John Perera', 'johnperera0001', 'John0001'),
(2, 'Sam Fernando', 'samfernando0002', 'Sam0002'),
(3, 'Jane Peiris', 'janepeiris0003', 'Jane0003');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cus_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `item_code` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `size` char(1) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`item_code`, `cart_id`, `price`, `size`, `quantity`) VALUES
(13, 1, 1890, 's', 4);

-- --------------------------------------------------------

--
-- Table structure for table `courier_service`
--

CREATE TABLE `courier_service` (
  `courier_id` int(11) NOT NULL,
  `courier_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier_service`
--

INSERT INTO `courier_service` (`courier_id`, `courier_name`) VALUES
(1, 'DHL'),
(2, 'DOMEX'),
(3, 'PRONTO');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `name`, `dob`, `username`, `password`) VALUES
(1, 'Yasanjith Rajapathirane', '2022-06-29', 'Yasa123', 'xahkbt56'),
(2, 'Saman Perera', '2001-02-03', 'samanperera0001', 'Saman0001'),
(3, 'Nimal Fernando', '2001-02-02', 'nimalfernando0002', 'Nimal0002'),
(4, 'Kamal Peiris', '2001-03-03', 'kamalpeiris0003', 'Kamal0003'),
(5, 'Keshan Dissanayaka', '2022-05-11', 'Keshand', 'kesh123'),
(6, 'Nimanthi Karundhara', '2022-05-24', 'namid', 'nami123'),
(7, 'Ravi Rajapathirane', '2022-05-19', 'ravir', 'ravi123'),
(8, 'sam jaya', '2022-04-12', 'sam111', 'sam@123'),
(9, 'Kasun perera', '2022-05-04', 'KasuK', 'Kasu@123'),
(10, 'Sethum rashmika', '2022-05-24', 'seththa', 'setu@#$');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_code` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `unit_price` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  `category` varchar(15) NOT NULL,
  `item_desc` varchar(300) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `size` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_code`, `name`, `unit_price`, `type`, `category`, `item_desc`, `stock`, `image`, `admin_id`, `size`) VALUES
(1, 'BLACK AMANI WOMEN TROUSER', 3500, 'PANTS', 'WOMEN', 'Upgrade your formal trouser collection with our wide range of Womens formal trousers. Item features in a stretch jersey with elasticated waist band and side pockets.', 50, ' src/img/item_img-17.jpg', 1, 'XL'),
(2, 'WHITE JOBBS PRINTED SHIRT', 4990, 'SHIRT', 'MEN', 'A basic Mens bold striped casual shirt with short sleeves, shirt collar and full front button fastening.\r\n', 27, 'src/img/item_img-7.jpg', 2, 'S'),
(3, 'RED GIVO SHELLEY CUT AWAY DRES', 3500, 'DRESS', 'WOMEN', 'Get this effortlessly stylist look. Inspired with vintage floral bold prints made in a cut away neckline silhouette.', 50, 'src/img/item_img-1.jpg', 2, 'XL'),
(4, 'WHITE JOBBS PRINTED SHIRT', 3500, 'SHIRT', 'MEN', 'A basic Mens bold striped casual shirt with short sleeves, shirt collar and full front button fastening.\r\n', 50, 'src/img/item_img-7.jpg', 2, 'XL'),
(5, 'RED GIVO SHELLEY CUT AWAY DRES', 3500, 'DRESS', 'WOMEN', 'Get this effortlessly stylist look. Inspired with vintage floral bold prints made in a cut away neckline silhouette.', 49, 'src/img/item_img-1.jpg', 2, 'S'),
(6, 'BLACK AMANI WOMEN TROUSER', 3500, 'PANTS', 'WOMEN', 'Upgrade your formal trouser collection with our wide range of Womens formal trousers. Item features in a stretch jersey with elasticated waist band and side pockets.', 22, ' src/img/item_img-17.jpg', 3, 'S'),
(7, 'BLUE BUG JUNIOR SHORTS', 1500, 'PANTS', 'KIDS', 'A comfy twill pant to pair with absolutely anything. From shirts to t-shirt this casual twill shorts will give them ease of movement.', 3, 'src/img/item_img-18.jpg', 3, 'S'),
(8, 'BLUE BUG JUNIOR SHORTS', 1500, 'PANTS', 'KIDS', 'A comfy twill pant to pair with absolutely anything. From shirts to t-shirt this casual twill shorts will give them ease of movement.', 20, 'src/img/item_img-18.jpg', 3, 'XL'),
(9, 'WHITE VANTAGE UBER MENS FORMAL', 4990, 'SHIRT', 'MEN', 'This versatile shirt from Vantage Uber is made with an comfortable 100% cotton stripe fabric. and finished with quality fine finishing. complement it with a matching tie.', 35, ' src/img/item_img-19.jpg', 1, 'S'),
(10, 'WHITE VANTAGE UBER MENS FORMAL', 4990, 'SHIRT', 'MEN', 'This versatile shirt from Vantage Uber is made with an comfortable 100% cotton stripe fabric. and finished with quality fine finishing. complement it with a matching tie.', 35, ' src/img/item_img-19.jpg', 1, 'M'),
(11, 'WHITE VANTAGE UBER MENS FORMAL', 4990, 'SHIRT', 'MEN', 'This versatile shirt from Vantage Uber is made with an comfortable 100% cotton stripe fabric. and finished with quality fine finishing. complement it with a matching tie.', 35, ' src/img/item_img-19.jpg', 1, 'XL'),
(13, 'AMANI ESTHER FRILL DETAILED PE', 1890, 'BLOUSE', 'women', 'Frill panel detailed peplum inspired sun top with adjustable spaghetti straps. ', 20, 'src/img/item_img-25.jpg', 1, 'S'),
(14, 'GIVO HEYL FRONT TWIST TIE SLEE', 1390, 'BLOUSE', 'women', 'Front twist tie up detailed top in a sleeveless silhouette, collar. and front button fastening', 20, 'src/img/item_img-26.jpg', 1, 'S'),
(15, 'AMANI AARYA GATHERED NECK DETA', 2490, 'BLOUSE', 'women', 'Elegant smart casual blouse with gathered neck detail and short puff sleeves', 100, 'src/img/item_img-27.jpg', 1, 'M'),
(16, 'AMANI DIXIE SMOCKED SHORT SLEE', 2490, 'BLOUSE', 'women', 'Inspired with ditsy florals this pretty smoked top features short puff sleeves and a frill hemline', 50, 'src/img/item_img-28.jpg', 1, 'L'),
(17, 'AMANI BLESSICA PLEATED RUFFLE ', 1450, 'BLOUSE', 'women', 'Add a splash of solid colors to your smart casual wardrobe item featuring a pleated ruffle neckline along with a front keyhole detail and pretty frill hem.', 56, 'src/img/item_img-29.jpg', 1, 'M'),
(18, 'CRISET FRONT TWIST TIE CROP TO', 1450, 'BLOUSE', 'women', 'Simple elegance with a minimal look featured in a breathable in a breathable georgette this crop top features a front twist tie.', 45, 'src/img/item_img-30.jpg', 1, 'L'),
(22, 'LADIES COTTON TROUSER - BLACK', 1890, 'PANTS', 'women', 'Ladies slim fit stretchable cotton pants for the stylish diva for you', 1, 'src/img/item_img-31.jpg', 1, 'S'),
(23, 'AMANI TIE UP SLEEVE LINEN JUMP', 2590, 'DRESS', 'women', 'Perfect for holidays and warm weekend, our linen blend jumpsuit is perfect for dressing up or down whatever the occasion. Item featuring a tie up sleeveless pattern in a flattering shape, curved hem and side pockets.', 20, 'src/img/item_img-32.jpg', 1, 'S'),
(25, 'AMANI SOORYA FLORAL PRINTED SL', 2890, 'DRESS', 'women', 'Pretty floral inspired maxi length sun dress with adjustable spaghetti straps, side pockets and self fabric waist belt.', 19, 'src/img/item_img-33.jpg', 1, 'S'),
(26, 'JOBBS SELECT MENS GRAPHIC PRIN', 1390, 't-shirt', 'men', 'Inspired with range of pattern in tie dye concept this casual crew neck t-shirt is perfect for that summer heat', 17, 'src/img/item_img-34.jpg', 1, 'S'),
(27, 'AMY GIRLS LINEN SHIRT DRESS(AG', 1930, 't-shirt', 'KIDS', 'Delighful long sleeve shirt dress in a cotton linen blend with decorative self fabric waist bow tie in front. Available in a range of colors to choose form.', 60, 'src/img/item_img-35.jpg', 1, 'S'),
(28, 'JOBBS SELECT MENS CONTRAST PAN', 2650, 't-shirt', 'men', 'Upgrade your polo collection with our wide range of mens polo shirts from Jobbs Select. Featured in a soft and breathable pique fabric with ribbed contrast panel polo collar along with two button fastening placket, short sleeves and ribbed sleeve hem panel.', 33, 'src/img/item_img-36.jpg', 1, 'S'),
(29, 'BOYS PRINTED CASUAL SHIRT', 1100, 't-shirt', 'KIDS', 'Dress them up in our selection of casual printed shirt range. It features a classic shirt style with short sleeves, a full front button down placket and basic shirt collar. Style it up in shorts and a cute hat for that weekend getaway.', 4, 'src/img/item_img-37.jpg', 1, 'S'),
(30, 'AMANI AARYA GATHERED NECK DETA', 2490, 'BLOUSE', 'women', 'Elegant smart casual blouse with gathered neck detail and short puff sleeves', 100, 'src/img/item_img-27.jpg', 1, 'S'),
(31, 'AMANI DIXIE SMOCKED SHORT SLEE', 2490, 'BLOUSE', 'women', 'Inspired with ditsy florals this pretty smoked top features short puff sleeves and a frill hemline', 50, 'src/img/item_img-28.jpg', 1, 'S'),
(32, 'AMANI BLESSICA PLEATED RUFFLE ', 1450, 'BLOUSE', 'women', 'Add a splash of solid colors to your smart casual wardrobe item featuring a pleated ruffle neckline along with a front keyhole detail and pretty frill hem.', 56, 'src/img/item_img-29.jpg', 1, 'S'),
(33, 'CRISET FRONT TWIST TIE CROP TO', 1450, 'BLOUSE', 'women', 'Simple elegance with a minimal look featured in a breathable in a breathable georgette this crop top features a front twist tie.', 45, 'src/img/item_img-30.jpg', 1, 'S'),
(34, 'BUG JUNIOR BOYS LINEN SHIRT', 2000, 't-shirt', 'kid', 'Even kids love the comfort of a linen shirt. Made with a rich blend of cotton linen this trendy shirt features an basic shirt collar along with a full front button fastening and long shirt sleeves with cuffs', 12, 'src/img/item_img-38.jpg', 1, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `order_status` varchar(15) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `address`, `order_status`, `cus_id`, `courier_id`, `payment_id`) VALUES
(1, 'PANADURA', 'pending', 1, 1, 1),
(37, '18 Quarry  Dehiwala', 'pending', 1, 1, 1),
(38, '18, Quarry road Dehiwala', 'pending', 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `item_code` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(2) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `item_code`, `price`, `size`, `quantity`) VALUES
(1, 1, 3500, 'XL', 5),
(37, 2, 4990, 's', 1),
(37, 6, 7000, 's', 2),
(38, 25, 2890, 's', 1),
(38, 26, 4170, 's', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_id` int(11) NOT NULL,
  `payment_method` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`payment_id`, `payment_method`) VALUES
(1, 'cash on deliver'),
(2, 'credit card'),
(3, 'cash on deliver');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `item_code` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `review_disc` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`item_code`, `cus_id`, `review_id`, `review_disc`) VALUES
(1, 1, 1, 'Excellent product'),
(2, 2, 2, 'Not upto the quality I expect'),
(2, 3, 3, 'Good quality'),
(1, 3, 4, 'Good quality'),
(2, 3, 5, 'Slow delivary'),
(3, 2, 6, 'Bad service'),
(5, 3, 10, 'Excellent product'),
(6, 4, 11, 'Not upto the quality I expect'),
(6, 3, 12, 'Good quality'),
(26, 1, 13, 'A very Good Item\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `Cart_fk` (`cus_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`cart_id`,`item_code`),
  ADD KEY `item_codefk` (`item_code`);

--
-- Indexes for table `courier_service`
--
ALTER TABLE `courier_service`
  ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_code`),
  ADD KEY `itemfk2` (`admin_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `ordersfk1` (`payment_id`),
  ADD KEY `ordersfk2` (`cus_id`),
  ADD KEY `ordersfk3` (`courier_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`,`item_code`),
  ADD KEY `order_detailsfk2` (`item_code`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `reviewfk2` (`item_code`),
  ADD KEY `reviewfk1` (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courier_service`
--
ALTER TABLE `courier_service`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `Cart_fk` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_idfk` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `item_codefk` FOREIGN KEY (`item_code`) REFERENCES `item` (`item_code`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `itemfk2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `ordersfk1` FOREIGN KEY (`payment_id`) REFERENCES `payment_method` (`payment_id`),
  ADD CONSTRAINT `ordersfk2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`),
  ADD CONSTRAINT `ordersfk3` FOREIGN KEY (`courier_id`) REFERENCES `courier_service` (`courier_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_detailsfk1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_detailsfk2` FOREIGN KEY (`item_code`) REFERENCES `item` (`item_code`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `reviewfk1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`),
  ADD CONSTRAINT `reviewfk2` FOREIGN KEY (`item_code`) REFERENCES `item` (`item_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
