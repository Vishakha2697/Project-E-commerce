-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 04:02 PM
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
(1, 'abc', 'asdsa@gmail.com', '123'),
(2, 'abc', 'archit778@gmail.com', '123'),
(3, 'Archit', 'asdsa@gmail.com', '123');

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
  `product_prize` int(5) NOT NULL,
  `product_keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat_id`, `product_name`, `product_title`, `product_image`, `product_prize`, `product_keywords`) VALUES
(1, 1, '5-D_Bedsheet', '5-D_Bedsheet', '5-D_Bedsheet.png', 400, 'Bed,bed,sheets,sheet,bedsheet,Bedsheet,5-d,5-D'),
(2, 1, 'Floral_Bedsheet', 'Floral_Bedsheet', 'Floral_Bedsheet.png', 350, 'bed,Bed,bedsheet,Bedsheet,floral,Floral'),
(3, 1, 'Handprinted_Bedsheet', 'Handprinted_Bedsheet', 'Handprinted_Bedsheet.png', 200, 'bed,Bed,bedsheet,Bedsheet,handprinted,Handprinted'),
(4, 1, 'Jaipuri_Bedsheet', 'Jaipuri_Bedsheet', 'Jaipuri_Bedsheet.png', 200, 'bed,Bed,bedsheet,Bedsheet,Jaipuri,jaipuri'),
(5, 1, 'Procion_Processed_Cotton_Double_bedsheet', 'Procion_Processed_Cotton_Double_bedsheet', 'Procion_Processed_Cotton_Double_bedsheet.png', 200, 'bed,Bed,bedsheet,Bedsheet,Procion,procion,Cotton,cotton'),
(6, 1, 'Handmade_matki_candle', 'Handmade_matki_candle', 'Handmade_matki_candle.png', 100, 'bed,Bed,handmade,Handmade,candle,Candle'),
(7, 1, 'Plastic_battery_operated_led_candle', 'Plastic_battery_operated_led_candle', 'Plastic_battery_operated_led_candle.png', 150, 'bed,Bed,Plastic,battery,plastic,candle,Candle'),
(8, 1, 'Chinawind_upscale_printed_curtain', 'Chinawind_upscale_printed_curtain', 'Chinawind_upscale_printed_curtain.png', 350, 'bed,Bed,curtain,Curtain,chainwind,Chainwind'),
(9, 1, 'Polyester_door_curtain', 'Polyester_door_curtain', 'Polyester_door_curtain.png', 250, 'bed,Bed,Polyester,polyester,door,curtain,Curtain'),
(10, 1, '3-D_Printed_cover', '3-D_Printed_cover', '3-D_Printed_cover.png', 150, 'cushion,Cushion,3-D,cover,Cover,bed,Bed'),
(11, 1, 'Striped_cushion_cover', 'Striped_cushion_cover', 'Striped_cushion_cover.png', 170, 'cushion,Cushion,cover,Cover,Striped,striped,bed,Bed'),
(12, 1, 'Red-Grey_designer_mattress', 'Red-Grey_designer_mattress', 'Red-Grey_designer_mattress.png', 450, 'bed,BEd,mattress,Mattress,red-grey,Red-Grey'),
(13, 1, 'Extrafirm_matress', 'Extrafirm_matress', 'Extrafirm_matress.png', 400, 'bed,Bed,mattress,Mattress,Extrafirm,ExtraFirm'),
(14, 1, 'Cupcake_Pillow', 'Cupcake_Pillow', 'Cupcake_Pillow.png', 120, 'bed,Bed,pillow,Pillow,cupcake,Cupcake'),
(15, 1, 'Designer_Pillow', 'Designer_Pillow', 'Designer_Pillow.png', 150, 'bed,Bed,pillow,Pillow'),
(16, 2, '10-piece_luxury_granite_casserole', '10-piece_luxury_granite_casserole', '10-piece_luxury_granite_casserole.png', 200, 'kitchen,Kitchen,10-peice,piece,Piece,luxury,Luxury,casseroles,Casseroles,casseroles'),
(17, 2, 'wonderchef_ceramide_casserole', 'wonderchef_ceramide_casserole', 'wonderchef_ceramide_casserole.png', 250, 'kitchen,Kitchen,Casseroles,casseroles,wonderchef,Wonderchef'),
(18, 2, 'nonstick-cookware-set', 'nonstick-cookware-set', 'nonstick-cookware-set.png', 300, 'kitchen,Kitchen,nonstick,Nonstick,cookware,Cookware'),
(19, 2, 'Aluminium_prestige_cookware', 'Aluminium_prestige_cookware', 'Aluminium_prestige_cookware.png', 275, 'kitchen,Kitchen,cookware,Cookware,aluminium,Aluminium,prestige,Prestige'),
(20, 2, '14-piece_Forged_knifeset', '14-piece_Forged_knifeset', '14-piece_Forged_knifeset.png', 125, 'kitchen,Kitchen,cutlery,Cultery,forged'),
(21, 2, 'Elegant_glory_round_stainlesssteel_set', 'Elegant_glory_round_stainlesssteel_set', 'Elegant_glory_round_stainlesssteel_set.png', 150, 'kitchen,Kitchen,cutlery,Cultery,elegant,round'),
(22, 2, 'Milton_melamine_set', 'Milton_melamine_set', 'Milton_melamine_set.png', 500, 'kitchen,Kitchen,Dinnerset,dinnerset'),
(23, 2, 'Nayasa_round_printed_microwaveable_dinnerset', 'Nayasa_round_printed_microwaveable_dinnerset', 'Nayasa_round_printed_microwaveable_dinnerset.png', 625, 'kitchen,Kitchen,Dinnerset,dinnerset'),
(24, 2, 'original_pre-approval-teal-coiled-bamboo-serving-bowls-set', 'original_pre-approval-teal-coiled-bamboo-serving-bowls-set', 'original_pre-approval-teal-coiled-bamboo-serving-bowls-set.png', 275, 'kitchen,Kitchen,Dished,dishes'),
(25, 2, 'Pinzon-stoneware-serving-plates', 'Pinzon-stoneware-serving-plates', 'Pinzon-stoneware-serving-plates.png', 250, 'kitchen,Kitchen,Dished,dishes'),
(26, 3, 'clinton-square-table', 'clinton-square-table', 'clinton-square-table.png', 700, 'living,Living,table,Table'),
(27, 3, 'Forzza-iris-coffee-table', 'Forzza-iris-coffee-table', 'Forzza-iris-coffee-table.png', 800, 'living,Living,table,Table'),
(28, 3, 'Art-street-5-block-frame', 'Art-street-5-block-frame', 'Art-street-5-block-frame.png', 500, 'living,Living,frames,Frames'),
(29, 3, 'Painting-mantra-mr-$-mrs-together-forever-glass-frame', 'Painting-mantra-mr-$-mrs-together-forever-glass-frame', 'Painting-mantra-mr-$-mrs-together-forever-glass-frame.png', 550, 'living,Living,frames,Frames'),
(30, 3, '3-D_Printed-reachargeable-moon-light', '3-D_Printed-reachargeable-moon-light', '3-D_Printed-reachargeable-moon-light.png', 250, 'living,Living,lamps,Lamps'),
(31, 3, 'rock-salt-lamp', 'rock-salt-lamp', 'rock-salt-lamp.png', 280, 'living,Living,lamps,Lamps'),
(32, 3, 'Wudville-coober-tv-entertainment-table', 'Wudville-coober-tv-entertainment-table', 'Wudville-coober-tv-entertainment-table.png', 900, 'living,Living,Tvunit,tvunit'),
(33, 3, 'Valtos-jason-engineered-wood-TV-Unit', 'Valtos-jason-engineered-wood-TV-Unit', 'Valtos-jason-engineered-wood-TV-Unit.png', 950, 'living,Living,Tvunit,tvunit'),
(34, 3, 'Sehaz-artworks-round-wooden-wall-clock', 'Sehaz-artworks-round-wooden-wall-clock', 'Sehaz-artworks-round-wooden-wall-clock.png', 190, 'living,Living,wallclock,Wallclock,clock,Clock'),
(35, 3, 'Crafts-anchor-plastic-decorative-wall-clock', 'Crafts-anchor-plastic-decorative-wall-clock', 'Crafts-anchor-plastic-decorative-wall-clock.png', 250, 'living,Living,wallclock,Wallclock,clock,Clock');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
