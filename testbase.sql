SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `testbase` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `testbase`;

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `caption` text,
  `content` text,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `news` (`id`, `caption`, `content`, `datetime`) VALUES
(1, 'Hello, world', 'There is the best information about Hello, world in this article', '2016-04-22 12:53:27'),
(2, 'Lorem Ipsum', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', '2016-06-30 00:40:23'),
(3, 'Мэль видишчы', 'Эи ыёрмод инимёкюж квуй, ыам хёнк льаборэ орнатюс ан. Жюмо убяквюэ мэя эю, чент ентэгры нам ку, льюкяльиюч ажжынтиор эю векж. Экз факэтэ вёртюты аляквюид мэль, ад дыкоры вэртырэм тэмпорибуз мыа, ножтрюд эрюдитя жят ад. Шэа йн вэрыар долорюм консэквюат, нэ кэтэро пэркйпет ныкэжчятатябюз эжт, янвыняры тэмпорибуз ку хёз. Йн кюм юллюм губэргрэн.', '2016-06-11 05:19:06'),
(4, 'Abcdefg Hijklmnop Qrstuvw Qrstuvw Xyz Xyz', 'Now I know an alfabet', '2016-06-18 19:22:52');


ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
