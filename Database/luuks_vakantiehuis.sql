-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2023 at 03:02 PM
-- Server version: 5.7.36
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luuks_vakantiehuis`
--

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `Klantnummer` int(11) NOT NULL,
  `Geslacht` varchar(20) NOT NULL,
  `Voornaam` varchar(20) NOT NULL,
  `Tussenvoegsel` varchar(20) NOT NULL DEFAULT 'optioneel',
  `Achternaam` varchar(40) NOT NULL,
  `Adres` varchar(50) NOT NULL,
  `Postcode` varchar(10) NOT NULL,
  `Woonplaats` varchar(20) NOT NULL,
  `Telefoonnummer` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`Klantnummer`, `Geslacht`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Adres`, `Postcode`, `Woonplaats`, `Telefoonnummer`, `Email`) VALUES
(6, 'vrouw', 'veu', 'optioneel', 'dwvy', 'udwuw', 'duyd', 'buwuw', '93653972', 'dywy@uud.d'),
(7, 'man', 'Luuk', 'ie', 'Luuk', 'bduebubu', '3738eh', 'Hoorn', '06165321', 'dbueub@bufebu.en');

-- --------------------------------------------------------

--
-- Table structure for table `reservering`
--

CREATE TABLE `reservering` (
  `Reserveringsnummer` int(11) NOT NULL,
  `Gewenste_aankomstdatum` text NOT NULL,
  `Aantal_nachten` int(11) NOT NULL,
  `Aantal_personen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservering`
--

INSERT INTO `reservering` (`Reserveringsnummer`, `Gewenste_aankomstdatum`, `Aantal_nachten`, `Aantal_personen`) VALUES
(6, '2023-06-10', 2, 3),
(7, '2023-05-12', 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `auteur` varchar(75) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `inhoud` text NOT NULL,
  `sterren` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `auteur`, `titel`, `inhoud`, `sterren`) VALUES
(1, 'Santos van der Wansem', 'Geweldig huisje', 'Dit vakantiehuisje heeft de vakantie van mij en mijn 20 kinderen geweldig gemaakt! Wij komen zeker terug.', 3),
(2, 'Luuk van Eeken', 'Wat een huis!', 'Dit huis heeft mijn leven veranderd. Ik zal nooit meer hetzelfde zijn na mijn bezoekje aan dit huis. WOW!', 5),
(3, 'Mina Qayumzada', 'Wowie!', 'Dit huis heeft me zeer positief verrast!', 4),
(4, 'Mina Qayumzada', 'Wowie!', 'Dit huis heeft me zeer positief verrast!', 4),
(5, 'Mina Qayumzada', 'Wowie!', 'Dit huis heeft me zeer positief verrast!', 4),
(6, 'Laura Steenvoorden', 'O mijn hemel.', 'Dit huis is beter dan mijn eigen. Ik ga hier voortaan wonen.', 5),
(7, 'Laura Steenvoorden', 'O mijn hemel.', 'Dit huis is beter dan mijn eigen. Ik ga hier voortaan wonen.', 5),
(8, 'Laura Steenvoorden', 'O mijn hemel.', 'Dit huis is beter dan mijn eigen. Ik ga hier voortaan wonen.', 5),
(13, 'Luukerd', 'WWOWOOW', 'Dit is mijn favoriete huisje ooit wowiwwowiweoie woewiwowie woeiweo', 3),
(14, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(15, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(16, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(17, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(18, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(19, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(20, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(21, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(22, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(23, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(24, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(25, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(26, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(27, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(28, 'SANTOS VAN DER WANSEM', 'Testie', 'Blablabla wat een leuk huis (ik ben gekidnapped door Luuk red mij alstjeblieft)', 1),
(29, 'SANTOS VAN DER WANSEM', 'HELP', 'IK ZIT AL DAGEN OPGESLOTEN (HELP)', 1),
(30, 'Laura Steenvoorden', 'Hoi allemaal', 'Ik wil jullie laten weten hoe goed ik dit huisje vindt (ik ben er heel tevreden mee)', 4),
(31, 'Luuk van Eeken', 'Luuk was hier', 'Hoi ik ben luuk en ik was hier dherbebuebu euedhheuhe edhh hdhd hdhd hd dhd ch dhd dhcd dhc dchd cdhd cdh cdhcd cdhcd cdhcd cdh ch', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`Klantnummer`);

--
-- Indexes for table `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`Reserveringsnummer`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `Klantnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservering`
--
ALTER TABLE `reservering`
  MODIFY `Reserveringsnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
