-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 28. 06 2019 kl. 09:29:26
-- Serverversion: 10.1.40-MariaDB
-- PHP-version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v31webshop`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `productcategories`
--

CREATE TABLE `productcategories` (
  `categoryId` int(3) NOT NULL,
  `name` varchar(50) COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `productcategories`
--

INSERT INTO `productcategories` (`categoryId`, `name`) VALUES
(1, 'Penne og blyanter'),
(2, 'Memo pads'),
(3, 'Stickers'),
(4, 'Penalhuse'),
(5, 'Washi tape');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
  `productId` int(5) NOT NULL,
  `name` varchar(50) COLLATE latin1_danish_ci NOT NULL,
  `description` varchar(500) COLLATE latin1_danish_ci NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(100) COLLATE latin1_danish_ci NOT NULL,
  `categoryId` int(3) NOT NULL,
  `userId` int(3) NOT NULL,
  `creationTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`productId`, `name`, `description`, `price`, `image`, `categoryId`, `userId`, `creationTime`) VALUES
(1, 'Meow Cat Gel Pen', 'What’s more adorable than a kitten? Not much! Which is why we love this collection of cute kitten topped gel pens. The perfect addition to your cute stationery collection. Each pen includes its own unique adorable face.', '19.95', 'MeowCatGelPen.jpg', 1, 1, '2019-06-07 11:28:30'),
(2, 'Cats & Dogs Memo Pads', 'Take home one of our adorable Cat or Dog memo pads. The cute Dog and Cat designs are perfect for leaving notes or add them to notebooks and bullet journals for a little dose of cute. Each pad includes 30 pages.', '19.95', 'CatsDogMemoPads.jpg', 2, 1, '2019-06-07 11:29:26'),
(3, 'Mini Vitamin Shaped Highlighter Pens', 'Chuck out your boring old highlighters, and welcome this cute little family of Vitamin shaped mini highlighter pens into your pencil case. Each pen has its own unique personality. The perfect size to pop into any bag and go.', '29.95', 'MiniVitaminShapedHighlighterPens.jpg', 1, 1, '2019-06-07 11:30:19'),
(4, 'Milk Carton Pencil Case', 'We love these novelty Milk Carton shaped pencil cases. Featuring cute and adorable characters that will be sure to brighten your day. The unique designs means there is plenty of space to store all your pens and pencils. Available in three lovable designs.', '39.95', 'MilkCartonPencilCase.jpg', 4, 1, '2019-06-07 11:31:12'),
(5, 'Cat Paw Sticker Set', 'We love cats, playful, cute and a joy to have around. Which is why we love this adorable cat paw sticker set and think you’ll love them too. A unique way to decorate Journals, Notebooks and craft projects. Each box contains 45 paper stickers.', '29.95', 'CatPawStickerSet.jpg', 3, 1, '2019-06-12 10:34:47'),
(6, 'Cherry Blossom Washi Tape', 'Breath in the sweet scent of the delicate cherry blossom, and bring your Journals and craft projects to life. The subtle and delicate design is a great addition to any washi tape collection. Great for highlighting detail, or creating a border.', '29.95', 'CherryBlossomWashiTape.jpg', 5, 1, '2019-06-12 10:42:23'),
(7, 'Twilight Galaxy Dream Washi Tape', 'Take a trip across the galaxy with our collection of galaxy-inspired washi tape. Featuring a unique watercolour design. The perfect way to bring your projects, notebooks and journals to life.', '9.95', 'TwilightGalaxyDreamWashiTape.jpg', 5, 1, '2019-06-12 10:46:06'),
(8, 'Cute Kitten Pencil Case', 'What better way than keeping all your cute stationery inside this super adorable Cat pencil case. Made from a hardwearing canvas fabric material, with an adorable kitten character attached to the outside.', '49.95', 'CuteKittenPencilCase.jpg', 4, 1, '2019-06-12 10:54:32'),
(9, 'Animal Friends Soft Touch Gel Pens', 'Our adorable animal friends soft touch gel pens are the perfect companion for all the stationery addicts out there. The soft touch feel, and the adorable character design is an excellent addition to any pencil case. Each pen features an ink eraser end tip.', '9.95', 'AnimalFriendsSoftTouchGelPens.jpg', 1, 1, '2019-06-12 11:00:05'),
(10, 'Japanese Art Washi Tape', 'Featuring stunning delicately rendered cranes taking flight against a backdrop of Traditional Japanese Art inspired elements. This washi tape is the perfect way to bring your craft projects to life.', '29.95', 'JapaneseArtWashiTape.jpg', 5, 1, '2019-06-12 11:13:26'),
(11, 'Organic Carrot Gel Ink Pen', 'Surprise and amuse with this super kawaii Organic Carrot Gel Ink Pen. It is sure to add a hint of fun to your everyday note taking.', '19.95', 'OrganicCarrotGelInkPen.jpg', 1, 1, '2019-06-13 14:24:12');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `userId` int(3) NOT NULL,
  `firstName` varchar(50) COLLATE latin1_danish_ci NOT NULL,
  `lastName` varchar(50) COLLATE latin1_danish_ci NOT NULL,
  `username` varchar(30) COLLATE latin1_danish_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_danish_ci NOT NULL,
  `accessLevel` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `username`, `password`, `accessLevel`) VALUES
(1, 'Maren Gjesing', 'Laursen', 'mare0231', 'cv220501', 2),
(2, 'Maren', 'Gjesing Laursen', 'maren', 'maren15', 1),
(3, 'Admin', '-', 'admin', 'admin', 3);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `categoryId` (`categoryId`,`userId`),
  ADD KEY `authorId` (`userId`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `categoryId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productcategories` (`categoryId`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
