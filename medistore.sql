-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 02:32 PM
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
-- Table structure for table `ayurvedic`
--

CREATE TABLE `ayurvedic` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ayurvedic`
--

INSERT INTO `ayurvedic` (`id`, `Name`, `Price`, `image`, `Description`, `featured`) VALUES
(1, 'ASTHOMAP TABLET', '216.00', '/Medi-Store/ayur_images/ASTHOMAP TABLET.jpg', 'ASTHOMAP TABLETS\r\n\r\nHIGHLY EFFECTIVE FOR:\r\n\r\nAsthma, Chronic Bronchitis, Chronic cough, Cough.\r\n\r\nPRODUCT DESCRIPTION:\r\n\r\nMaharishi Ayurveda Asthomap is judicious combination of herbs which counteracts respiratory allergies, allays and arrests broncho-spasms, exerts prompt mucolytic action, tones up the respiratory mucosal lining and dilates bronchioles.\r\n\r\nAsthomap contains natural immuno-modulators which enhance the body''s immunity to respiratory diseases.', 1),
(2, 'RAKTDA TABLET', '400.00', '/Medi-Store/ayur_images/RAKTDA TABLET.jpg', 'RAKTDA TABLETS\r\n\r\nHIGHLY EFFECTIVE FOR :\r\n\r\nAnaemia, Haemoglobin, Iron deficiency.\r\n', 1),
(3, 'HIMALAYA BLEMINOR CREAM', '125.00', '/Medi-Store/ayur_images/HIMALAYA BLEMINOR CREAM.jpg', 'The Himalaya Bleminor cream contains extracts of Licorice (Yashtimadhu), Indian Copal Tree (Sarja), Silk Cotton Tree (Shalmali), and Almond (Vatada).', 1),
(4, 'SEPTILIN SYRUP', '90.00', '/Medi-Store/ayur_images/SEPTILIN SYRUP.jpg', 'Septilin syrup is a formulation of herbo-mineral ingredients like Tinospora Gulancha, Licorice, and Indian Bdellium. Tinospora Gulancha (Guduchi) comes with an antimicrobial property which helps in increasing the level of antibodies. Licorice (Yashtimadhu) enhance immunostimulation and increases macrophage. Indian Bdellium (Guggulu) has anti-inflammatory and antioxidant properties, which helps in maintaining overall health.', 1),
(6, 'ZANDU RHUMAYOG TABLET', '75.00', '/Medi-Store/ayur_images/ZANDU RHUMAYOG TABLET.jpg', 'A safe and effective Ayurvedic anti inflammatory drug for the treatment of arthritis and other musculo skeletal disorders. Relieves joint pain and inflammation fast, with minimal gastric irritation. Safe for prolonged use. ', 1),
(7, 'LIPOMAP TABLET', '200.00', '/Medi-Store/ayur_images/LIPOMAP TABLET.jpg', 'HIGHLY EFFECTIVE FOR :\r\n\r\nCholesterol, Fat metabolism, Metabolism.\r\n', 1),
(8, 'HIMALAYA LASUNA TABLET', '150.00', '/Medi-Store/ayur_images/HIMALAYA LASUNA TABLET.jpg', 'Lasuna Tablet contains Lasuna (Allium sativum) bulb extract. Lasuna lowers blood lipid levels by modulating key enzymes in the liver responsible for cholesterol biosynthesis. It also helps prevent the hardening of blood vessels by reducing lipid accumulation in the arteries.\r\nLasuna is a potent antioxidant which eliminate free radicals that trigger imbalance in the normal ability of blood vessels to constrict and dilate, and thus promote normal artery vasodilation.', 1),
(9, 'BAIDYANATH DASHMULARISHTA SYRUP', '205.00', '/Medi-Store/ayur_images/BAIDYANATH DASHMULARISHTA SYRUP.jpg', 'Baidyanath Dashmularishta Special Syrup contains 71 herbal ingredients including draksha, amalaki, chitraka, duralabha, and bilva, along with jaggery and self-generated alcohol between 5 and 10 percent. These ingredients in this divine medication confer analgesic, anti-microbial, antioxidant, and anti-inflammatory effects, remove toxins, and nourish, revitalize, and rejuvenate the body. ', 1),
(10, 'HIMALAYA TRIKATU TABLET', '150.00', '/Medi-Store/ayur_images/HIMALAYA TRIKATU TABLET.jpg', 'Himalaya Trikatu tablet promotes appetite and aids healthy digestion.Piperine and gingerols, the active constituents of Trikatu, stimulate the enzyme activity that is responsible for healthy digestion.', 1),
(11, 'HALEEZY SYRUP', '62.00', '/Medi-Store/ayur_images/HALEEZY SYRUP.jpg', 'HALEEZY is a polyherbal combination with natural bronchodilator, anti-inflammatory and anti-allergic properties help to promote overall respiratory health. In an asthma attack, the smooth muscles of the bronchi contract, causing the bronchi to narrow (called broncho-constriction), and the tissues lining the airways swell from inflammation and mucus secretion into the airways. ', 1),
(12, 'HIMALAYA KOFLET SYRUP', '60.00', '/Medi-Store/ayur_images/HIMALAYA KOFLET SYRUP.jpg', 'Koflet syrup contains Tulasi, Madhu and Yashtimadhu. Koflet is beneficial in both productive and dry cough. The mucolytic and expectorant properties reduce the viscosity of bronchial secretions and facilitate expectoration. Koflet’s peripheral antitussive (cough suppressant) action reduces bronchial mucosal irritation and related bronchospasms.', 1),
(13, 'BAIDYANATH ARJUNARISHTA', '120.00', '/Medi-Store/ayur_images/BAIDYANATH ARJUNARISHTA.jpg', 'Baidyanath Arjunarishta contains Partha (Arjuna Chal), Mridvika (Draksha), Madhupushpa (Madhuka), and Dhataki. Arjuna Chal helps in reducing blood pressure and keeps the heart away from stress. This helps blood move into the heart at a regular pace. ', 1),
(14, 'TENTEX ROYAL CAPSULE', '120.00', '/Medi-Store/ayur_images/TENTEX ROYAL CAPSULE.jpg', 'Tentex Royal is recommended for erectile dysfunction of various etiologies (cardiovascular diseases, endothelial dysfunction and diabetes). The natural ingredients in Tentex Royal act as aphrodisiacs that increase sexual desire, treats male sexual weakness and premature ejaculation.', 1),
(15, 'CALCURY TABLET', '79.00', '/Medi-Store/ayur_images/CALCURY TABLET.jpg', 'Calcury tablet facilitates the passage of urinary calculi by diuretic, anti-inflammatory and analgesic properties. ', 1),
(16, 'HIMALAYA OPTHACARE EYE DROP', '50.00', '/Medi-Store/ayur_images/HIMALAYA OPTHACARE EYE DROP.jpg', 'Himalaya Ophthacare Eye Drops contain a mixture of Honey and Persian Rose. Honey acts as an effective anti-inflammatory agent which has a soothing effect on the eyes. Persian Rose has unique cooling properties and helps in treating eyestrain and computer vision syndrome. ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `Items` text COLLATE utf8_unicode_ci NOT NULL,
  `Paid` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'Categories', 0),
(2, 'Ayurvedic', 1),
(3, 'Homeopathic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `homeopathy`
--

CREATE TABLE `homeopathy` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `homeopathy`
--

INSERT INTO `homeopathy` (`id`, `Name`, `Price`, `image`, `Description`, `featured`) VALUES
(1, 'D-TOX DROP', '110.00', '/Medi-Store/homeo_images/D-TOX DROP.jpg', 'D-TOX\r\n\r\n(De-addiction Drops)\r\n\r\nReduces addiction to alcohol & tobacco.(Strychninum Nitrate,Caladium).\r\n\r\nReduces after effects of nicotine, alcohol & strong medications (Kalmegh). ', 1),
(2, 'ALLER-N DROP', '75.00', '/Medi-Store/homeo_images/ALLER-N DROP.jpg', 'Anti Allergic Drop (Aller-N Drop) are used in case of mucus membrane of nose, throat & lungs and are effected with allergic condition due to:\r\n\r\nWeakness of immune system\r\n\r\nNasal, bronchial & laryngeal catarrh\r\n\r\nSneezing, water discharge etc', 1),
(3, 'R88 ANTI VIRAL DROP', '230.00', '/Medi-Store/homeo_images/R88 ANTI VIRAL DROP.jpg', 'DR. RECKEWEG R88\r\nAnti-Viral Drops\r\n\r\nAny viral type disease such as Viral Fever, Measles, Mononucleosis, Herpes, Flu, Swine Flu, Dengue, Hand Foot and Mouth disease(HFMD) etc.\r\nAn effective Anti-viral medicine.\r\n', 1),
(4, 'R43 ASTHMA DROP', '200.00', '/Medi-Store/homeo_images/R43 ASTHMA DROP.jpg', 'Bronchial asthma and spastic bronchitis. Constitutional treatment of bronchial asthma.', 1),
(5, 'ASTHA WIN DROP', '100.00', '/Medi-Store/homeo_images/ASTHA WIN DROP.jpg', 'ASTHA-WIN\r\n\r\n(Remedy for all respiratory disorders)\r\n\r\nSafest Expectorant.\r\n\r\nPreventive & curative in bronchial asthma, chronic bronchitis & bronchopastic disorders. ', 1),
(6, 'ANGIOTON DROP', '135.00', '/Medi-Store/homeo_images/ANGIOTON DROP.jpg', 'Restores the blood pressure and boosts the circulatory system\r\n\r\nIncreases the power of contractions of the heart and regulates the pulse\r\n\r\nIndicated for vertigo on rising, with precordial pain, palpitation and dyspnoea\r\n\r\nExerts a beneficial effect on venous stasis and weak and low pulse with cold extremities.', 1),
(7, 'ROLFIA DROP', '100.00', '/Medi-Store/homeo_images/ROLFIA DROP.jpg', 'An ideal Anti-hypertension medicine.\r\n\r\nHelps in maintaining normal B.P.(acts on the muscles of heart arteries). ', 1),
(8, 'R9 COUGH DROP', '200.00', '/Medi-Store/homeo_images/R9 COUGH DROP.jpg', 'Cough Drops ', 1),
(9, 'DIBONIL DROP', '95.00', '/Medi-Store/homeo_images/DIBONIL DROP.jpg', 'Diabetes and associated symptoms ', 1),
(10, 'AGUE NIL SYRUP', '130.00', '/Medi-Store/homeo_images/AGUE NIL SYRUP.jpg', 'Ague Nil is a powerful immune booster that helps to increase WBC and platelet count and thus boosts your immune system to fight against infections like dengue, malaria, chikungunya and other febrile conditions.', 1),
(11, 'FEVECARE DROP', '100.00', '/Medi-Store/homeo_images/FEVECARE DROP.jpg', 'Fever of any origin like malaria, typhoid, viral or any other infection.\r\n\r\nUseful in associated complaints like headache, bodyache, loss of appetite and bad taste in mouth. ò Also helps in general debility & convalescence after fever. ', 1),
(12, 'TUMORIN DROP', '125.00', '/Medi-Store/homeo_images/TUMORIN DROP.jpg', 'A natural care for underlying Benign Tumors. ', 1),
(13, 'SULPHUR OINTMENT', '55.00', '/Medi-Store/homeo_images/SULPHUR OINTMENT.jpg', 'All purpose antiseptic cream for dry, scaly skin, itching, pimply eruptions rugged skin at folds.\r\nApplication: Apply externally twice daily to properly cleaned and dried affected portion. ', 1),
(14, 'TENSE AID TABLET', '150.00', '/Medi-Store/homeo_images/TENSE AID TABLET.jpg', 'Tense Aid is a formulation competent in dealing with various manifestations of stress disorders, helps one cope with stress which has become a part of modern life.\r\nIt is recommended for:\r\nAnxiety\r\nFatigue\r\nMental physical debility\r\nIrritability\r\nHeadache\r\nWeakness of memory.', 1),
(15, 'AT-TABS TABLET', '125.00', '/Medi-Store/homeo_images/AT-TABS TABLET.jpg', 'SBL’s AT-Tabs is a first aid medication and can be used as the first line of treatment for any kind of injury. It is a well-balanced combination of proven homoeopathic medicines which helps prevent shock after all types of trauma and accidents.\r\n', 1);

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
-- Indexes for table `ayurvedic`
--
ALTER TABLE `ayurvedic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeopathy`
--
ALTER TABLE `homeopathy`
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
-- AUTO_INCREMENT for table `ayurvedic`
--
ALTER TABLE `ayurvedic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `homeopathy`
--
ALTER TABLE `homeopathy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
