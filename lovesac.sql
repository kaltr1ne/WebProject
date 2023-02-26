-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 05:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lovesac`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `messageID` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `message` varchar(512) NOT NULL,
  `statusi` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`messageID`, `emri`, `email`, `reason`, `message`, `statusi`) VALUES
(2, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', 'sdfrgthyjuk,hmgfndfsfadwertyujhgbfdsewrthyj', ''),
(3, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', 'sdfrgthyjuk,hmgfndfsfadwertyujhgbfdsewrthyj', ''),
(4, 'EDA', 'eda@hotmail.com', '', 'Heloas fhasid jh dsfhandsj cas,\r\nszfkjbaifeo xckjasbdefia cnjbfkans aaa', ''),
(5, '', '', '', '', ''),
(6, 'Monda', 'monda@gmail.com', '', 'asdfsghjkkjhgdfsd artrdghfdfsasASDFGHJ', ''),
(7, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', 'AZSXDCFGVBHNJKML, DCFVGBHNJKM,L;. TURYBGHUNJIMKO,L.P;LCVTBYHNJMK', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, 'as', '', '', '', ''),
(11, 'as', '', '', '', ''),
(12, 'Kaltrine', '', '', '', ''),
(13, 'Diona', 'filan@hotmail.com', '', 'azsd', ''),
(14, 'Diona', 'filan@hotmail.com', '', 'azsd', ''),
(15, 'Kaltrine', '', '', '', ''),
(16, 'Kaltrine', '', '', '', ''),
(17, 'Kaltrine', '', '', '', ''),
(18, 'EDA', '', '', '', ''),
(19, 'EDA', '', '', '', ''),
(20, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, 'EDA', '', '', '', ''),
(23, 'EDA', '', '', '', ''),
(24, 'Kaltrine', '', '', '', ''),
(25, 'Kaltrine', '', '', '', ''),
(26, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', '<script src=\"script1.js\"></script>asfaA', ''),
(27, 'Kaltrine', 'filan@hotmail.com', '', 'SDFGTHYJKL;', ''),
(28, 'Kaltrine', 'filan@hotmail.com', '', 'SDFGTHYJKL;', ''),
(29, 'Diona', 'filan@hotmail.com', '', 'CDFGTHJ', ''),
(30, 'Diona', 'filan@hotmail.com', '', 'CDFGTHJ', ''),
(31, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', 'SDFTGYHUJIKOLKMJNHBGT6Y7UJNHBGVFHRDTERTYIUJI', ''),
(32, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', 'EDRFTGYHUJIKOPL[;\']', ''),
(33, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', 'EDRFTGYHUJIKOPL[;\']', ''),
(34, 'Monda', 'kaltrinedvorani@gmail.com', '', 'DFTGYHUJK', ''),
(35, 'Monda', 'kaltrinedvorani@gmail.com', '', 'DFTGYHUJK', ''),
(36, 'Monda', 'kaltrinedvorani@gmail.com', '', 'DFTGYHUJK', ''),
(37, 'K', 'Diona@gmail.com', '', 'FGF', ''),
(38, 'K', 'Diona@gmail.com', '', 'FGF', ''),
(39, 'EDA', 'filan@hotmail.com', '', 'DSRFTGYHUJIKOPL[;\'\r\n', ''),
(40, 'EDA', 'filan@hotmail.com', '', 'DSRFTGYHUJIKOPL[;\'\r\n', ''),
(41, 'EDA', 'filan@hotmail.com', '', 'DSRFTGYHUJIKOPL[;\'\r\n', ''),
(42, 'DSFG', 'eda@hotmail.com', '', 'DSFG', ''),
(43, 'KA', 'monda@gmail.com', '', 'QWERTYUIOP[OIUYTREWQERTYUIKOL;KJHGFDSFGGGGG', ''),
(44, 'KA', 'monda@gmail.com', '', 'QWERTYUIOP[OIUYTREWQERTYUIKOL;KJHGFDSFGGGGG', ''),
(45, 'Kaltrine', 'eda@hotmail.com', '', 'asdfghj', ''),
(46, 'Kaltrine', 'eda@hotmail.com', '', 'asdfghj', ''),
(47, 'Kaltrine', 'eda@hotmail.com', '', 'sderdtgyhjk', ''),
(48, 'EDA', 'eda@hotmail.com', '', 'wertyujkil.,m,jgfnds nghkyugil\r\n74865214789514785', ''),
(49, 'EDA', 'eda@hotmail.com', '', 'wertyujkil.,m,jgfnds nghkyugil\r\n74865214789514785', ''),
(50, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', 'ASDGFRTHYJUKLJHGFDSAD4F7856251DS48F5G62FDS5FD89F6B2FDFS51D9', ''),
(51, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', 'WERTYYJK', ''),
(52, 'filani', 'filan@hotmail.com', '', 'hellou', ''),
(53, 'filani', 'filan@hotmail.com', '', 'xcdgfsjadsbjdskjzfckxdnvcm', ''),
(54, 'fdgrhgr', 'fdgrhgr@gmail.com', '', 'fdgrhgr', '');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `user_ID` int(11) NOT NULL,
  `name_surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `emriProduktit` varchar(255) NOT NULL,
  `sasia` int(11) NOT NULL,
  `ngjyra` varchar(255) NOT NULL,
  `coupon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `name`, `surname`, `username`, `email`, `contactNumber`, `address`, `emriProduktit`, `sasia`, `ngjyra`, `coupon`) VALUES
(1, 'Filan', 'Filani', 'Filani00', 'filani00@gmail.com', 49425587, 'Prishtine, Rr.Nena Tereze, 85', 'Brown Wardrobe', 2, 'Blue', 23456434),
(2, 'Afrim', 'Bytyqi', 'afr1m1\n', 'afrimbytyqi@hotmail.com', 44789254, 'Prizren,Rr.Ismail Qemaili, 187', 'Light Brown Couch Set', 1, 'Brown', 1516254),
(3, 'Shyhrete', 'Behluli', 'shyhr3t3', 'shyhrete.behluli@outlook.de', 48784552, 'Prishtine, Rr.Haxhi Zeka, 23', 'Dark Brown & Black Wooden Table', 2, 'Dark Brown', 6548411),
(4, 'Filan', 'Fisteku', 'filani', 'filani@gmail.com', 49845578, 'Bregu i Diellit, 78', 'Couch', 2, 'Blue', 231245321),
(24, 'Ramadan ', 'Krasniqi', 'Dani', 'ramadankrasniqi12@hotmail.com', 45078115, 'Peje, Rr.Bajram Curri, 401', 'Dark Grey Dinning Set', 1, 'Dark Grey\r\n', 50545115),
(25, 'Sinan', 'Vllasaliu', 'sinanvllasaliu', 'sinanvllasaliu85@gmail.com', 45896330, 'Prishtine, Rr. Bill Klinton, 58', 'Brown Leather Couch', 3, 'Grey', 1234222127);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_ID`, `title`, `image`, `description`, `price`) VALUES
(1, 'Couch', 'couch/couch1.jpeg', 'The couch is undoubtedly the centerpiece of any living room and is often the first place we start when pulling together a scheme. A brown leather couch in a contemporary design can bring the perfect balance between style and practicality. Often stereotyped for feeling a little cold, but actually when paired with warmer soft furnishings like linen curtains, a woollen rug and a selection of scatter cushions, a leather sofa can feel inviting yet sophisticated.', '$480'),
(2, 'Dark Grey Bed', 'beds/bed3.jpeg', 'The couch is undoubtedly the centerpiece of any living room and is often the first place we start when pulling together a scheme. A brown leather couch in a contemporary design can bring the perfect balance between style and practicality. Often stereotyped for feeling a little cold, but actually when paired with warmer soft furnishings like linen curtains, a woollen rug and a selection of scatter cushions, a leather sofa can feel inviting yet sophisticated.', '$1300'),
(3, 'Dark Grey Dinning Set', 'diningsets/ds1.jpeg', 'The couch is undoubtedly the centerpiece of any living room and is often the first place we start when pulling together a scheme. A brown leather couch in a contemporary design can bring the perfect balance between style and practicality. Often stereotyped for feeling a little cold, but actually when paired with warmer soft furnishings like linen curtains, a woollen rug and a selection of scatter cushions, a leather sofa can feel inviting yet sophisticated.', '$570'),
(4, 'Dark Brown & Black Wooden Table', 'tables/table2.jpeg', 'The couch is undoubtedly the centerpiece of any living room and is often the first place we start when pulling together a scheme. A brown leather couch in a contemporary design can bring the perfect balance between style and practicality. Often stereotyped for feeling a little cold, but actually when paired with warmer soft furnishings like linen curtains, a woollen rug and a selection of scatter cushions, a leather sofa can feel inviting yet sophisticated.', '$180'),
(5, 'Brown Leather Couch', 'couch/couch_brown.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '$370'),
(6, 'Brown Lamp', 'lamps/brown2.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '$50'),
(7, 'Brown Wardrobe', 'wardrobes/wardrobe2.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '$700'),
(8, 'White & Brown Drawer', 'drawers/drawer4.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '$320'),
(9, 'EDAAA', 'Array', '', '$10101010'),
(10, 'edaaa', 'Array', '', '$350000');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `products_ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(512) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`products_ID`, `title`, `image`, `description`, `price`) VALUES
(1, 'Beige Couch', 'couch/couch_2.jpeg', 'eda', '$360'),
(2, 'Blue Velvet Couch', 'couch/couch_blue.webp', 'The couch is equipped with a cozy and warm comforter which is soft and provides the perfect amount of warmth and support. It also comes in different colors for you to choose.', '$375'),
(3, 'Brown Couch', 'couch/couch_brown2.jpeg', 'This brown couch is a perfect choice for anyone who values both style and comfort. It provides a comfortable and restful feeling, while also adding a touch of elegance and sophistication to the room.', '$260'),
(4, 'Light Grey Couch', 'couch/couch_grey1.jpeg', 'This type of couch typically has two or more pieces that can be arranged in different configurations to fit the shape of the room. It can be L-shaped, U-shaped, or curved, and may have a chaise lounge or recliner built in.', '$500'),
(5, 'Leather Brown Couch', 'couch/couch_orange.jpeg', 'This is a classic style of sofa with tufted leather upholstery and a low back. It\'s a timeless design that looks great in both modern and traditional settings.', '$280'),
(6, 'Light Brown Couch Set', 'couch/furniture.jpeg', 'This is a popular style of sofa that features clean lines and tapered legs. It\'s a great option for a modern, minimalist look', '$590'),
(7, 'Wooden Couch', 'couch/grey.jpeg', 'This is a smaller couch that typically seats two people. It\'s great for smaller spaces or as a complement to a larger sofa.', '$270'),
(9, 'Light Brown Couch', 'couch/Sofas.webp', ' This is another classic style of sofa that features a high, curved back and rolled arms. It\'s a great option for formal living rooms.', '$300'),
(10, 'Beige Couch', 'couch/yes2.jpg', 'This is a modern style of sofa that features a high, straight back and arms that are the same height as the back. It\'s a great option for a clean, sophisticated look.', '$320'),
(11, 'White Wooden Wardrobe', 'wardrobes/wardrobe1.jpeg', 'These are custom-built wardrobes that are designed to fit a specific space. They can be built into alcoves, under staircases, or other areas to maximize storage space.', '$800'),
(12, 'White & Brown Wardrobe', 'wardrobes/wardrobe3.webp', ' These are wardrobes that have one or more mirrored doors. They can make a room look larger and provide a convenient place to check your appearance before leaving.', '$1300'),
(13, 'Black Wardrobe', 'wardrobes/wardrobe4.jpeg', 'These are standalone units that can be moved around the room. They typically come in different sizes and styles, ranging from single-door wardrobes to larger units with multiple doors and drawers.', '$1500'),
(14, 'White Table Lamp', 'lamps/lamp7.webp', 'These are small lamps designed to sit on a table, desk, or nightstand. They can be made of a variety of materials such as glass, metal, and ceramic and come in a range of styles and colors.\r\n\r\n', '$42'),
(15, 'Blue Table Lamp', 'lamps/blue.jpg', 'These are small lamps designed to sit on a desk or work surface. They are often adjustable to provide focused light for reading, writing, or other tasks.', '$20'),
(16, 'Wooden Lamp', 'lamps/brown.jpeg', 'These lamps can be made of a variety of materials, including brass, copper, and porcelain. They can be designed for table or floor use, and often feature intricate details such as ornate filigree or hand-painted designs.', '$25'),
(17, 'Table Lamp', 'lamps/lamp8.webp', 'This table lamp is made from glass and can come in a variety of styles, including clear glass, colored glass, and frosted glass. These glass lamps have intricate patterns or designs that create unique shadows on walls and surfaces.', '$45'),
(18, 'Mushroom Lamp', 'lamps/red.jpeg', 'This Mushroom Lamp is often used as decorative pieces in living rooms, bedrooms, and other spaces where a cozy, intimate ambiance is desired. They are a popular choice for bedside tables or as accent lighting on a side table or console. These mushroom lam', '$30'),
(19, 'Grey Table Lamp', 'lamps/white.jpeg', 'Our grey table lamps are designed to add a subtle, neutral touch to a room, and can complement a variety of decor styles. They are particularly popular in modern or contemporary interiors, but are also used in more traditional or transitional spaces.\r\n\r\nT', '$28'),
(20, 'Table Lamp', 'lamps/white1.jpeg', 'The base of this table lamp is usually made from materials such as wood, metal, and ceramic, and serves to support the stem and shade. The shade of this table lamp is typically made from a material such as fabric, glass, and metal, and is designed to diff', '$25'),
(21, 'Bed', 'beds/bed1.jpg', 'This type of bed is designed to have a low profile, with a simple and modern design. It typically features a solid base for the mattress, without the need for a box spring.', '$1200'),
(22, 'Wooden Bed', 'beds/bed2.webp', 'This wooden bed is a type of bed frame that is made primarily from wood, such as oak. Our wooden beds come in a variety of styles and finishes, ranging from classic and rustic to modern and minimalist.', '$1500'),
(23, 'Dark Grey Bed', 'beds/bed3.jpeg', 'A dark grey bed is a bed that has a dark grey color, typically deeper and more saturated than a lighter shade of grey. This dark grey bed can be paired with a variety of bedding options, including solid or patterned sheets, comforters, or duvet covers. Wh', '$1300'),
(24, 'Light Grey Bed', 'beds/bed4.png', 'This light grey bed can be paired with a variety of bedding options, including solid or patterned sheets, comforters, or duvet covers. White or other light-colored bedding can provide a fresh and crisp look to the bed, while darker or brighter colors can ', '$1200'),
(25, 'Beige Single Bed', 'beds/bed5.jpeg', 'This beige single bed is a type of bed that has a light, sandy-colored tone that is often associated with a neutral or earthy aesthetic. It has some common features and characteristics of a beige single bed.', '$800'),
(26, 'Navy-Blue Single Bed', 'beds/bed6_1.avif\r\n', 'A navy blue single bed is a type of bed that has a deep, rich blue color that is often associated with sophistication and elegance. Overall, a navy blue single bed can be a stylish and versatile choice for anyone who wants a sophisticated and elegant piec', '$850'),
(27, 'Bed', 'beds/green.jpeg', 'This bed has a charming or endearing quality. Soft, pastel colors like pink, lavender, light green can make a bed look cute. Bright and bold colors can also work, especially if they are combined with fun patterns or prints. This bed has with fluffy or sof', '$1000'),
(28, 'White Bed', 'beds/purple.jpeg', 'This is an upholstered white bed. This white bed frame that is upholstered with a soft material such as leather or fabric can create a comfortable and stylish look. This type of bed often features a headboard and can have a modern or classic design.', '$1000'),
(29, 'White Bed', 'beds/white.jpeg', 'This is a low profile white platform bed that can create a modern and sleek look. This type of bed often has a simple design and clean lines, with no footboard or headboard. It is very comfortable.', '$1100'),
(30, 'Single Bed', 'beds/white2.jpeg', 'Our single bed can be paired with a variety of bedding options, including solid or patterned sheets, comforters, or duvet covers. White or other light-colored bedding can provide a fresh and clean look to the bed, while darker or brighter colors can creat', '$700'),
(31, 'White Leather  Bed', 'beds/white3.jpeg', 'White leather bed is a stylish and modern bed option that can bring an elegant and sophisticated touch to a bedroom. This white leather bed can be comfortable to sleep in, as it often has a padded headboard that is upholstered in soft leather. This can pr', '$1300'),
(32, 'Light Grey Bed', 'beds/bed6.jpeg', 'The bed frame is light grey, which can create a soft and calming atmosphere in the bedroom. Light grey is a neutral color that can be paired with a variety of other colors and decor styles. A light grey bed can be comfortable to sleep in, with a soft and ', '$1200'),
(33, 'Dark Grey Dinning Set', 'diningsets/ds1.jpeg', 'The dining set is dark grey, which can create a contemporary and sophisticated atmosphere in the dining room. Dark grey is a neutral color that can be paired with a variety of other colors and decor styles. This dark grey dining set is  comfortable to sit', '$570'),
(34, 'Dark Brown Wooden Dining Set', 'diningsets/ds2.webp', 'Dark brown wooden dining set is a classic and timeless addition to a dining room.  The design of this dark brown wooden dining set can vary, but it often has a traditional and elegant appearance. The dining table might have a classic design, with decorati', '$450'),
(35, 'Brown Wooden-Leather Dining Set', 'diningsets/ds3.jpeg', 'Brown wooden-leather dining set is a stylish and modern addition to a dining room. It  creates a warm and cozy atmosphere, and actually complement a range of decor styles.', '$350'),
(36, '4-chair Black Wooden Dining Set', 'diningsets/ds4.jpeg', 'A 4-chair black wooden dining set is a simple and elegant addition to any dining room or kitchen. This 4-chair black wooden dining set is typically compact and can fit well in smaller dining spaces or kitchen areas. The size of the set can impact the amou', '$300'),
(37, 'White Wooden Dining Set', 'diningsets/ds5.webp', 'A modern dining set typically has a sleek, minimalist design with clean lines and simple shapes. The table is usually made of materials like glass or metal, and the chairs may have a molded plastic or leather seat and back. The overall look is often very ', '$600'),
(38, 'Wooden Dining Set', 'diningsets/yes1.jpg', 'A traditional dining set typically consists of a rectangular table with four to six chairs. The table and chairs are usually made of wood and have a classic design with ornate details and carvings. The chairs often have padded seats and backs for comfort.', '$320'),
(39, 'Dark Brown & Black Wooden Table', 'tables/table2.jpeg', 'This style of coffee table is characterized by its clean lines, simple shapes, and use of natural materials like wood and metal. It often has tapered legs and a low profile, and can be round or rectangular.', '$180'),
(40, 'Dark Brown Wooden Table', 'tables/table3.jpeg', 'An industrial coffee table typically features a metal base and a wooden or metal top, often with rivets or other hardware visible. This style is popular for its rugged, no-nonsense look.', '$150'),
(41, 'Brown Wooden Table', 'tables/table4.webp', 'A rustic wooden coffee table is often made from reclaimed or distressed wood, giving it a charming, vintage look. The wood can be left natural or stained, and the table may have a simple, streamlined design or intricate detailing.', '$170'),
(42, 'Glass Table', 'tables/table5.webp', 'This type of coffee table is made entirely or mostly of glass, and has a sleek, minimalist look. The glass can be clear or frosted, and the base can be made of metal or wood.', '$100'),
(43, 'White Table', 'tables/table6.jpeg', 'A lift-top coffee table has a top that can be raised up to create a work surface or eating area. This type of table is great for small spaces, as it provides extra storage and functionality.', '$260'),
(44, 'Black & White Table', 'tables/table7.jpeg', 'eda', '$250'),
(52, 'EDA', 'Array', '', '$40');

-- --------------------------------------------------------

--
-- Table structure for table `sproducts`
--

CREATE TABLE `sproducts` (
  `sproducts_ID` int(11) NOT NULL,
  `main_image` varchar(512) NOT NULL,
  `image1` varchar(512) NOT NULL,
  `image2` varchar(512) NOT NULL,
  `image3` varchar(512) NOT NULL,
  `image4` varchar(512) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sproducts`
--

INSERT INTO `sproducts` (`sproducts_ID`, `main_image`, `image1`, `image2`, `image3`, `image4`, `title`, `price`, `description`) VALUES
(1, 'couch/couch1.jpeg', 'couch/couch2.jpeg', 'couch/couch1.jpeg', 'couch/couch3.jpeg', '', 'Couch', '$480', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i'),
(2, 'beds/bed3.jpeg', '', '', '', '', 'Dark Grey Bed', '$1300', 'The grey full-size bed is a stylish and modern piece of furniture that is designed to provide a comfortable and restful sleeping experience. The bed has a sturdy frame made from high-quality materials such as wood or metal, which ensures its durability an'),
(3, 'lamps/red.jpeg', '', '', '', '', 'Mushroom Lamp', '$30', 'This Mushroom Lamp is often used as decorative pieces in living rooms, bedrooms, and other spaces where a cozy, intimate ambiance is desired. They are a popular choice for bedside tables or as accent lighting on a side table or console. These mushroom lam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aksesi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `emri`, `email`, `username`, `password`, `aksesi`) VALUES
(1, 'Kaltrine', 'kaltrinedvorani@gmail.com', '', 'Kaltrine111', 0),
(9, 'admin', 'administrator@gmail.com', 'administrator', 'administrat0r1', 2),
(10, 'Filani', 'filani@gmail.com', 'Filani11', 'Filani11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `userID` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`userID`, `emri`, `email`, `username`) VALUES
(1, 'Kaltrine', 'kaltrinedvorani@gmail.com', 'Kaltrine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_ID`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`products_ID`);

--
-- Indexes for table `sproducts`
--
ALTER TABLE `sproducts`
  ADD PRIMARY KEY (`sproducts_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `products_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sproducts`
--
ALTER TABLE `sproducts`
  MODIFY `sproducts_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
