-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 11:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medistore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent`) VALUES
(1, 'Allopathic', 0),
(2, 'Ayurvedic', 0),
(3, 'Homeopathic', 0),
(4, 'Allergy', 1),
(5, 'Asthma', 1),
(6, 'Blood Pressure', 1),
(7, 'Cough & Cold', 1),
(8, 'Dengue', 1),
(9, 'Diabetes', 1),
(10, 'Fever', 1),
(11, 'Kidney Problems', 1),
(12, 'Liver Problems', 1),
(13, 'Skin Problems', 1),
(14, 'Allergy', 2),
(15, 'Asthma', 2),
(16, 'Blood Pressure', 2),
(17, 'Cough & Cold', 2),
(18, 'Dengue', 2),
(19, 'Diabetes', 2),
(20, 'Fever', 2),
(21, 'Hair Problem', 2),
(22, 'Liver Problem', 2),
(23, 'Skin Problem', 2),
(24, 'Allergy', 3),
(25, 'Asthma', 3),
(26, 'Blood Pressure', 3),
(27, 'Cough & Cold', 3),
(28, 'Dengue', 3),
(29, 'Diabetes', 3),
(30, 'Fever', 3),
(31, 'Immunity', 3),
(32, 'Liver Problem', 3),
(33, 'Skin Problem', 3),
(34, 'Heart Problem', 2),
(35, 'Tooth & Gum', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Name`, `Price`, `categories`, `featured`, `image`, `Description`) VALUES
(1, 'HIMALAYA ASHVAGANDHA TABLET', '135.00', '31', 1, '/Medi-Store/image/HIMALAYA ASHVAGANDHA TABLET.jpg', 'Ashvagandha Tablet is pure herb extract that contains Ashvagandha (Withania somnifera). Ashvagandha rejuvenates the mind and helps to increase the immunity.\r\n Ashvagandha Tablet maintains a healthy balance between the nervous system, endocrine glands and immune system.'),
(2, 'ZANDU VIGOREX CAPSULE', '180.00', '34', 1, '/Medi-Store/image/ZANDU VIGOREX CAPSULE.jpg', 'Zandu Vigorex is a unique formulation fortified with 7 powerful herbs & minerals based on Ayurvedic wisdom. With regular use, Vigorex enhances stamina & energy for a healthy & happy life. It contains Dry extracts of Asparagus adscendens, Mucuna prurita , Withania somnifera, Asparagus racemosus, Tribulus terrestris, Shudh Shilajit. Powders of Myristica fragrans, Yasad Bhasma, Anacyclus pyrethrum, Syzygium aromaticum.'),
(3, 'R89 HAIR CARE DROP', '230.00', '21', 1, '/Medi-Store/image/R89 HAIR CARE DROP.jpg', 'DR. RECKEWEG R89\r\nHair care drops\r\n'),
(4, 'CINERARIA MARITIMA EYE DROP', '190.00', '4', 1, '/Medi-Store/image/CINERARIA MARITIMA EYE DROP.jpg', 'CINERARIA MARITIMA SCHWABE EYE DROPS\r\nWidely used by physicians for Coneal opacities and Cataract.\r\nIt can be used in serious eye problems in consultation with physician.'),
(5, 'CALCAREA PHOS 6X TABLET', '135.00', '35', 1, '/Medi-Store/image/CALCAREA PHOS 6X TABLET.jpg', 'Calcarea Phos 6X Tablet is a bone and teeth supplement, it is a homeopathic medicine. Calcarea phosphoricum is the major constituent in bones and teeth. It is commonly prescribed for teething problems in infants, after dental drilling or surgery, to reduce tooth decay, and to stimulate the timely eruption of teeth. '),
(6, 'DIABOHERB ORAL LIQUID', '85.00', '29', 1, '/Medi-Store/image/DIABOHERB ORAL LIQUID.jpg', 'Blood glucose levels are controlled by insulin, a hormone produced by pancreas. When blood glucose level rises (for example, after eating food), insulin is released to control it.\r\nDiaboherb helps to stimulate the pancreatic cells to produce more insulin thereby controlling the blood sugar levels. It is composed of extracts of five potent herbs that bring down the blood sugar levels, namely, Abroma augusta, Cephalandra indica, Crataegus oxyacantha, Gymnema sylvestre and Syzygium jambolanum'),
(7, 'ALFALFA TONIC SUGAR FREE', '135.00', '31', 1, '/Medi-Store/image/ALFALFA TONIC SUGAR FREE.jpg', 'Day to day activities can make you tired and exposure to various pollutants can make you sick. But todayÆs hectic lifestyle needs instant and sustained energy to live a healthier and longer life.\r\n\r\nTo boost your immune system and keep your body functions going, take SBL’s Alfalfa.\r\n\r\nSBL’s Alfalfa Tonic, a tonic with natural ingredients, ensures vitality & proper functioning of all body systems. It is available in strawberry flavor for children in the name of SBL’s Alfalfa Tonic Paediatric.\r\n'),
(8, 'SILK N STAY MOISTURISING BODY LOTION', '90.00', '33', 1, '/Medi-Store/image/SILK N STAY MOISTURISING BODY LOTION.jpg', 'Silk n Stay Moisturising Body lotion is a light and non-greasy moisturizer. It contains extracts of Calendula and Aloe Vera which imparts soothing and deep moisturizing effect while Wheat germ oil gets readily absorbed and rejuvenates the skin.\r\n'),
(9, 'ASTHOMAP TABLET', '215.00', '14', 1, '/Medi-Store/image/ASTHOMAP TABLET.jpg', 'HIGHLY EFFECTIVE FOR:\r\n\r\nAsthma, Chronic Bronchitis, Chronic cough, Cough.\r\n'),
(10, 'EXTRAMMUNE TABLET', '85.00', '18', 1, '/Medi-Store/image/EXTRAMMUNE TABLET.jpg', 'Extrammune tablet is a natural immunity enhancer. It helps tostimulate the production and activity of infection-fighting cells, whereby improves host resistance and helps in faster recovery. \r\nHaldi (Curcuma longa), Guduchi (Tinospora cordifolia), Tulsi (Ocimum sanctum) and Yastimadhu (Glycyrrhiza glabra) improves the immunity by supporting functions of immune cells. '),
(11, 'AFLUOCIL FORTE TABLET', '48.00', '20', 1, '/Medi-Store/image/AFLUOCIL FORTE TABLET.jpg', 'A unique combination of tribhuvankeerti rasa, sootashekhar rasa & ghana derived from mahasudarshan choorna, acting as jwaraghna & amapachak. These properties are further enhanced with the addition of mahasudarshan ghana useful in jwara by reducing body temperature with swedajanak & srotovishodhak action. the combination is also useful in various sankramak disorders like chikungunya etc. being amapachak & jwaraghna.'),
(12, 'OPTILIV CAPSULE', '396.00', '22', 1, '/Medi-Store/image/OPTILIV CAPSULE.jpg', 'Optiliv Capsule is a unique hepatogenic, hepato-protective and hepatic stimulant for safe and effective treatment of diffuse diseases of liver and liver dysfunction. It also has unique antioxidant, choleretic, digestive and appetite stimulant properties. Anti-inflammatory, hepatitis virus neutraliser, enzymatic and pro-haematinic actions further enhance its usefulness in liver disorders.\r\n'),
(13, 'ADEL 83 BRONCHI-PERTU SYRUP', '306.00', '27', 1, '/Medi-Store/image/ADEL 83 BRONCHI-PERTU SYRUP.jpg', 'Adel 83 Bronchi-Pertu is a Homeopathic syrup which is used to treat various types of respiratory diseases through a proprietary blend of several homeopathic herbs (available in drops). It has key ingredients like bryonia cretica, dactrylpius coccus etc that act on respiratory pathway infections like asthma, bronchial infection etc. '),
(14, 'ADEL 56 HABIFAC DROP', '194.00', '31', 1, '/Medi-Store/image/ADEL 56 HABIFAC DROP.jpg', 'FOR TREATMENT IN CASE OF GENETIC PREDISPOSITION AND INFECTIONS OF ALL TYPES'),
(15, 'TALEKT CAPSULE', '90.00', '33', 1, '/Medi-Store/image/TALEKT CAPSULE.jpg', 'Talekt is a new advance in derma care. It contains Haldi and Neem.'),
(16, 'CALCAREA PHOS TABLET 6X', '135.00', '35', 1, '/Medi-Store/image/CALCAREA PHOS TABLET 6X.jpg', 'Calcarea Phos 6X Tablet is a bone and teeth supplement, it is a homeopathic medicine. Calcarea phosphoricum is the major constituent in bones and teeth. It is commonly prescribed for teething problems in infants, after dental drilling or surgery, to reduce tooth decay, and to stimulate the timely eruption of teeth. '),
(17, 'ASTHA WIN DROP', '100.00', '25', 1, '/Medi-Store/image/ASTHA WIN DROP.jpg', 'ASTHA-WIN\r\n\r\n(Remedy for all respiratory disorders)\r\n'),
(18, 'HIMALAYA LIV.52 HB CAPSULE', '90.00', '22', 1, '/Medi-Store/image/HIMALAYA LIV.52 HB CAPSULE.jpg', 'Liv 52 HB Capsule as the name indicates is mainly used in Hepatitis B Infection. Liv 52 HB Capsule contains Nut Grass (Musta) and Umbrella''s Edge (Nagaramustaka)\r\n \r\nNut grass kills the viruses in the liver. It has anti-inflammatory and hepatoprotective activities which help in liver disorders as well.\r\nUmbrella''s Edge has antioxidant and anti-inflammatory properties that benefits the liver. The hepatoprotective property of Umbrella''s Edge maintains overall liver health.'),
(19, 'BLOOUME 20 IMMUNOFORCE DROP', '125.00', '31', 1, '/Medi-Store/image/BLOOUME 20 IMMUNOFORCE DROP.jpg', ' A general tonic. Stimulates and builds general immunity. Useful in convalescence.'),
(20, 'HARTO TABLET', '330.00', '34', 1, '/Medi-Store/image/HARTO TABLET.jpg', 'Harto Tablet is heart tonic that strengthens the heart muscle. So it is important to take it on regular basis instead of taking it only when get diseased. It could be used as supportive tonic in the treatment of blockages and in pre & post cardiac surgeries. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
