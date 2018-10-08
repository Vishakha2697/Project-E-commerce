-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 10:05 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finishing`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 3),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Bedroom'),
(2, 'Kitchen'),
(3, 'Living');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `email`, `password`) VALUES
(7, 'achu', 'achu123@gmail.com', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K'),
(8, 'vishu', 'visju2378@gmail.com', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `order_amount` float NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_status`, `order_transaction`, `order_currency`) VALUES
(1, 345, '34535434', 'USA', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(3) NOT NULL,
  `product_cat_id` int(3) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `product_quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat_id`, `product_name`, `product_title`, `product_image`, `product_price`, `product_keywords`, `product_quantity`) VALUES
(1, 1, '5-D_Bedsheet', '5-D_Bedsheet', '5-D_Bedsheet.png', 400, 'Bed,bed,sheets,sheet,bedsheet,Bedsheet,5-d,5-D', 10),
(2, 1, 'Floral_Bedsheet', 'Floral_Bedsheet', 'Floral_Bedsheet.png', 350, 'bed,Bed,bedsheet,Bedsheet,floral,Floral', 10),
(3, 1, 'Handprinted_Bedsheet', 'Handprinted_Bedsheet', 'Handprinted_Bedsheet.png', 200, 'bed,Bed,bedsheet,Bedsheet,handprinted,Handprinted', 10),
(4, 1, 'Jaipuri_Bedsheet', 'Jaipuri_Bedsheet', 'Jaipuri_Bedsheet.png', 200, 'bed,Bed,bedsheet,Bedsheet,Jaipuri,jaipuri', 10),
(5, 1, 'Procion_bedsheet', 'Procion_bedsheet', 'Procion_Processed_Cotton_Double_bedsheet.png', 200, 'bed,Bed,bedsheet,Bedsheet,Procion,procion,Cotton,cotton', 10),
(6, 1, 'Handmade_candle', 'Handmade_candle', 'Handmade_matki_candle.png', 100, 'bed,Bed,handmade,Handmade,candle,Candle', 10),
(7, 1, 'Plastic_led_candle', 'Plastic_led_candle', 'Plastic_battery_operated_led_candle.png', 150, 'bed,Bed,Plastic,battery,plastic,candle,Candle', 10),
(8, 1, 'Chinawind_curtain', 'Chinawind_curtain', 'Chinawind_upscale_printed_curtain.png', 350, 'bed,Bed,curtain,Curtain,chainwind,Chainwind', 10),
(9, 1, 'Polyester_door_curtain', 'Polyester_door_curtain', 'Polyester_door_curtain.png', 250, 'bed,Bed,Polyester,polyester,door,curtain,Curtain', 10),
(10, 1, '3-D_Printed_cover', '3-D_Printed_cover', '3-D_Printed_cover.png', 150, 'cushion,Cushion,3-D,cover,Cover,bed,Bed', 10),
(11, 1, 'Striped_cushion_cover', 'Striped_cushion_cover', 'Striped_cushion_cover.png', 170, 'cushion,Cushion,cover,Cover,Striped,striped,bed,Bed', 10),
(12, 1, 'Red-Grey_mattress', 'Red-Grey_mattress', 'Red-Grey_designer_mattress.png', 450, 'bed,BEd,mattress,Mattress,red-grey,Red-Grey', 10),
(13, 1, 'Extrafirm_matress', 'Extrafirm_matress', 'Extrafirm_matress.png', 400, 'bed,Bed,mattress,Mattress,Extrafirm,ExtraFirm', 10),
(14, 1, 'Cupcake_Pillow', 'Cupcake_Pillow', 'Cupcake_Pillow.png', 120, 'bed,Bed,pillow,Pillow,cupcake,Cupcake', 10),
(15, 1, 'Designer_Pillow', 'Designer_Pillow', 'Designer_Pillow.png', 150, 'bed,Bed,pillow,Pillow', 10),
(16, 2, '10-piece_casserole', '10-piece_casserole', '10-piece_luxury_granite_casserole.png', 200, 'kitchen,Kitchen,10-peice,piece,Piece,luxury,Luxury,casseroles,Casseroles,casseroles', 10),
(17, 2, 'Ceramide_casserole', 'Ceramide_casserole', 'wonderchef_ceramide_casserole.png', 250, 'kitchen,Kitchen,Casseroles,casseroles,wonderchef,Wonderchef', 10),
(18, 2, 'Nonstick-cookware-set', 'Nonstick-cookware-set', 'nonstick-cookware-set.png', 300, 'kitchen,Kitchen,nonstick,Nonstick,cookware,Cookware', 10),
(19, 2, 'Prestige_cookware', 'Prestige_cookware', 'Aluminium_prestige_cookware.png', 275, 'kitchen,Kitchen,cookware,Cookware,aluminium,Aluminium,prestige,Prestige', 10),
(20, 2, '14-piece_knifeset', '14-piece_knifeset', '14-piece_Forged_knifeset.png', 125, 'kitchen,Kitchen,cutlery,Cultery,forged', 10),
(21, 2, 'Stainlesssteel_set', 'Stainlesssteel_set', 'Elegant_glory_round_stainlesssteel_set.png', 150, 'kitchen,Kitchen,cutlery,Cultery,elegant,round', 10),
(22, 2, 'Milton_melamine_set', 'Milton_melamine_set', 'Milton_melamine_set.png', 500, 'kitchen,Kitchen,Dinnerset,dinnerset', 10),
(23, 2, 'Nayasa_dinnerset', 'Nayasa_dinnerset', 'Nayasa_round_printed_microwaveable_dinnerset.png', 625, 'kitchen,Kitchen,Dinnerset,dinnerset', 10),
(24, 2, 'Bamboo Serving Set', 'Bamboo Serving Set', 'original_pre-approval-teal-coiled-bamboo-serving-bowls-set.png', 275, 'kitchen,Kitchen,Dished,dishes', 10),
(25, 2, 'Pinzon-serving-plates', 'Pinzon-serving-plates', 'Pinzon-stoneware-serving-plates.png', 250, 'kitchen,Kitchen,Dished,dishes', 10),
(26, 3, 'Clinton-square-table', 'Clinton-square-table', 'clinton-square-table.png', 700, 'living,Living,table,Table', 10),
(27, 3, 'Forzza-iris-coffee-table', 'Forzza-iris-coffee-table', 'Forzza-iris-coffee-table.png', 800, 'living,Living,table,Table', 10),
(28, 3, 'Art-street-5-block-frame', 'Art-street-5-block-frame', 'Art-street-5-block-frame.png', 500, 'living,Living,frames,Frames', 10),
(29, 3, 'Painting_Mr_Ms_Frame', 'Painting_Mr_Ms_Frame', 'Painting-mantra-mr-$-mrs-together-forever-glass-frame.png', 550, 'living,Living,frames,Frames', 10),
(30, 3, '3-D_Printed-moon-light', '3-D_Printed-moon-light', '3-D_Printed-reachargeable-moon-light.png', 250, 'living,Living,lamps,Lamps', 10),
(31, 3, 'Rock-salt-lamp', 'Rock-salt-lamp', 'rock-salt-lamp.png', 280, 'living,Living,lamps,Lamps', 10),
(32, 3, 'Ville-entertainment-set', 'Ville-entertainment-set', 'Wudville-coober-tv-entertainment-table.png', 900, 'living,Living,Tvunit,tvunit', 10),
(33, 3, 'Valtos-wood-TV-Unit', 'Valtos-wood-TV-Unit', 'Valtos-jason-engineered-wood-TV-Unit.png', 950, 'living,Living,Tvunit,tvunit', 10),
(34, 3, 'Sehaz-wall-clock', 'Sehaz-wall-clock', 'Sehaz-artworks-round-wooden-wall-clock.png', 190, 'living,Living,wallclock,Wallclock,clock,Clock', 10),
(35, 3, 'Anchor-wall-clock', 'Anchor-wall-clock', 'Crafts-anchor-plastic-decorative-wall-clock.png', 250, 'living,Living,wallclock,Wallclock,clock,Clock', 10),
(36, 2, 'Designer_crockery_set', 'Designer_crockery_set', 'Designer_crockery_set.png', 235, 'kitchen,kitchen,dish,set,desginer', 10),
(37, 2, 'Bamboo-bowls', 'Bamboo-bowls', 'Moso-Serving-dishwater-safe-bamboo-bowls.png', 150, 'bamboo,bowls,Bamboo.kitchen', 10),
(38, 2, 'Serving-bowls', 'Serving-bowls', 'Porcelain-3-piece-serving-bowls.png', 240, 'bowls,serving.kitchen', 10),
(39, 2, 'Home_trolley', 'Home_trolley', 'Home_center_trolley.png', 150, 'trolley,home,kitchen', 10),
(40, 2, 'Serving_cart', 'Serving_cart', 'Elegant_serving_cart.png', 350, 'trolley,home,kitchen,cart,serving', 10),
(41, 3, 'York_table', 'York_table', 'York-black-table.png', 150, 'table,living', 10),
(42, 3, 'Family-frame-set', 'Family-frame-set', 'Family-black-colour-frame-set.png', 275, 'frame,living,family', 10),
(43, 3, 'Floating-wall-shelf', 'Floating-wall-shelf', 'w-shaped-floating-wall-shelf.png', 150, 'floating,wall,shelf,living', 10),
(44, 3, 'Home-wall-rack', 'Home-wall-rack', 'Home-sparkle-mild-steel-wall-rack.png', 250, 'floating,wall,shelf,living,steel', 10),
(45, 3, 'Round-wall-racks', 'Round-wall-racks', 'Round-corner-black-wall-racks.png', 425, 'wall,rack,living', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
