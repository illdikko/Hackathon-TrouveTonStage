-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2025 at 11:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `label` varchar(127) NOT NULL,
  `contenu` text NOT NULL,
  `remuneration` tinyint(1) NOT NULL,
  `metier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metier`
--

CREATE TABLE `metier` (
  `id` int(11) NOT NULL,
  `label` varchar(127) NOT NULL,
  `pole_id` int(11) NOT NULL,
  `referent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metier`
--

INSERT INTO `metier` (`id`, `label`, `pole_id`, `referent_id`) VALUES
(36, 'Designer UX/UI', 2, 1),
(37, 'Développeur·euse Front-End', 2, 1),
(38, 'Administrateur·ice réseaux et systèmes', 2, 1),
(39, 'Community manager', 2, 1),
(40, 'Conseiller·e en Marketing Digital', 2, 1),
(41, 'Graphic designer', 2, 1),
(42, 'Technicien·ne Helpdesk', 2, 1),
(43, 'Agent.e de pompes funèbres', 3, 3),
(44, 'Agent·e immobilier·e', 3, 3),
(45, 'Conseiller·e en relation publiques', 3, 3),
(46, 'Employé·e administratif·ve', 3, 3),
(47, 'Candidat·e expert·e comptable et conseiller fiscal certifié·e - niveau 1', 3, 3),
(48, 'Candidat·e expert·e comptable et conseiller fiscal certifié·e - niveau2', 3, 3),
(49, 'Gestionnaire toiletteur·euse canin', 1, 4),
(50, 'Spa Manager', 1, 4),
(51, 'Socio Esthétique', 1, 4),
(52, 'Balnéo', 1, 4),
(53, 'Massage', 1, 4),
(54, 'Esthétique', 1, 4),
(55, 'Coiffure - Apprentissage', 1, 4),
(56, 'Coiffure - Chef·fe d\'Entreprise', 1, 4),
(57, 'Conseiller·e Animalier', 1, 4),
(58, 'Styliste', 4, 2),
(59, 'Restaurateur de meuble', 4, 2),
(60, 'Ebeniste', 4, 2),
(61, 'Bijoutier', 4, 2),
(62, 'Réalisateur audiovisuel', 4, 2),
(63, 'Décorateur·ice agenceur·euse', 4, 2),
(64, 'Photographe', 4, 2),
(65, 'Fleuriste', 4, 2),
(66, 'Antiquaire', 4, 2),
(67, 'Technicien·ne régisseur·euse de spectacle', 4, 2),
(68, 'Costumier·e de spectacle', 4, 2),
(69, 'Animateur·ice régisseur·euse radio', 4, 2),
(70, 'Organisation d\'évènements', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pole`
--

CREATE TABLE `pole` (
  `id` int(11) NOT NULL,
  `label` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pole`
--

INSERT INTO `pole` (`id`, `label`) VALUES
(1, 'Bien-être'),
(2, 'Numérique'),
(3, 'Service'),
(4, 'Art et médias');

-- --------------------------------------------------------

--
-- Table structure for table `referent`
--

CREATE TABLE `referent` (
  `id` int(11) NOT NULL,
  `prenom` varchar(127) NOT NULL,
  `nom` varchar(127) NOT NULL,
  `email` varchar(127) NOT NULL,
  `telephone` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `referent`
--

INSERT INTO `referent` (`id`, `prenom`, `nom`, `email`, `telephone`) VALUES
(1, 'Raphaële', 'Galmisch', 'rgalmisch@efp.be', '023708606'),
(2, 'Floriane', 'Perrot', 'fperrot@efp.be', '023708541'),
(3, 'Valérie', 'Vanderwalle', 'vvanderwalle@efp.be', '023708571'),
(4, 'Juan', 'Pacifico y Sanchez', 'jpacifico@efp.be', '023708582');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `metier_id` (`metier_id`);

--
-- Indexes for table `metier`
--
ALTER TABLE `metier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pole_id` (`pole_id`),
  ADD KEY `referent_id` (`referent_id`);

--
-- Indexes for table `pole`
--
ALTER TABLE `pole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referent`
--
ALTER TABLE `referent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metier`
--
ALTER TABLE `metier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `pole`
--
ALTER TABLE `pole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `referent`
--
ALTER TABLE `referent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`metier_id`) REFERENCES `metier` (`id`);

--
-- Constraints for table `metier`
--
ALTER TABLE `metier`
  ADD CONSTRAINT `metier_ibfk_1` FOREIGN KEY (`pole_id`) REFERENCES `pole` (`id`),
  ADD CONSTRAINT `metier_ibfk_2` FOREIGN KEY (`referent_id`) REFERENCES `referent` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;