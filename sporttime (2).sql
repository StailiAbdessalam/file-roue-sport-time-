-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 22 mai 2022 à 17:48
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sporttime`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `IdUnique` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Email`, `IdUnique`) VALUES
(1, 'BENJY33x', 'abdo@gmail.com', 'AA');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `IdUnique` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `FirstName`, `LastName`, `UserName`, `Phone`, `IdUnique`, `Email`) VALUES
(1, 'rajae', 'ourèani', 'jik', '2147483647', 'CL-6274fdf20ce0b', 'rajatyicuffuisdfge@gmail.com'),
(3, 'rajae', 'ourèani', 'juik', '90023435657234567', 'CL-6274feaf1a645', 'rajatyicugffuisdfge@gmail.com'),
(4, 'rajae', 'ourèani', 'juicnk', '90345678923435657234567', 'CL-6274fec5e84bd', 'rajatyicugffuiffsdfge@gmail.com'),
(6, 'rajae', 'ourèani', 'juitcnk', '903456789234345657234567', 'CL-62750225af390', 'rajatyichugffuiffsdfge@gmail.com'),
(10, 'rajae', 'ourèani', 'juiltcnk', '9034567869234345657234567', 'CL-62750244240e8', 'rajatyichgugffuiffsdfge@gmail.com'),
(11, 'Karen', 'Walters', 'kubilis', '+1 (515) 732-2874', 'CL-627502e1aece0', 'tubizetew@mailinator.com'),
(12, 'Pamela', 'Evans', 'dikynitih', '+1 (774) 409-1886', 'CL-627503213a525', 'totipibi@mailinator.com'),
(13, 'Aurelia', 'Griffith', 'zyresazyk', '+1 (758) 623-4296', 'CL-62750363b0a5e', 'gumy@mailinator.com'),
(14, 'Judah', 'Morgan', 'mepekigaz', '+1 (186) 709-3021', 'CL-6275038becfe7', 'tijipiru@mailinator.com'),
(15, 'Xyla', 'Parks', 'hiloriq', '+1 (172) 513-4697', 'CL-6275059c29dc7', 'koxod@mailinator.com'),
(16, 'rajae', 'ourèani', 'juisdfghktcnk', '9034567869234334545657234567', 'CL-62750c17f369e', 'rajatyichgugjffuiffsdfge@gmail.com'),
(17, 'rajae', 'ourèani', 'juidfghktcnk', '9034567865657234567', 'CL-62750d50a246c', 'rajatyichgudiffsdfge@gmail.com'),
(18, 'rajae', 'ourèani', 'jufghktcnk', '90345678657234567', 'CL-62752435b5c95', 'rajatyichgudfsdfge@gmail.com'),
(20, 'rajae', 'ourèani', 'jufktcnk', '903478657234567', 'CL-62752441c49f5', 'ratyichgudfsdfge@gmail.com'),
(21, 'rajae', 'ourèani', 'judfktcnk', '903d478657234567', 'CL-62752464c2f65', 'radtdyichgudfsdfge@gmail.com'),
(22, 'rajae', 'ourèani', 'judcfktcnk', '903d478c657234567', 'CL-6275249ebc13d', 'radtdyicchgudfsdfge@gmail.com'),
(23, 'rajae', 'ourèani', 'judcfktcdnk', '903d478c65d7234567', 'CL-627524c2cbd56', 'radtdyiccdhgudfsdfge@gmail.com'),
(25, 'rajae', 'ourèani', 'judcfktcddnk', '903d478c65d72d34567', 'CL-627524d69a9e5', 'radtdyiccdhguddfsdfge@gmail.com'),
(26, 'Lareina', 'Weber', 'tobihuly', '+1 (922) 313-1842', 'CL-627525159ee9a', 'zaguzyzak@mailinator.com'),
(27, 'Colleen', 'Moss', 'musepeq', '+1 (909) 173-3148', 'CL-62752552a4681', 'wynazewe@mailinator.com'),
(28, 'Kalia', 'Fields', 'sylonoqa', '+1 (574) 246-9976', 'CL-627525edc9e44', 'kilyvyp@mailinator.com'),
(29, 'Patricia', 'Holloway', 'lysykotiq', '+1 (149) 256-5532', 'CL-627526633bf95', 'fohaza@mailinator.com'),
(30, 'Hashim', 'Jenkins', 'lopymi', '+1 (169) 666-2914', 'CL-62752a665e794', 'mihiqut@mailinator.com'),
(31, 'Anne', 'Simon', 'cafyse', '+1 (256) 842-8305', 'CL-62752ed2920c1', 'tarubojasa@mailinator.com'),
(32, 'Myles', 'Tate', 'numigyry', '+1 (615) 809-4875', 'CL-6277aeec09543', 'waposyqyj@mailinator.com'),
(34, 'Leandra', 'Sharpe', 'baqalar', '+1 (139) 991-3919', 'CL-6278cf3a42d10', 'rezyg@mailinator.com'),
(35, 'Lenore', 'Norton', 'ciwahu', '+1 (117) 637-9275', 'CL-6278cf626dd27', 'cicuqamu@mailinator.com'),
(36, 'Uriel', 'Turner', 'wofijolem', '+1 (536) 706-6407', 'CL-6278d00faf08d', 'zeden@mailinator.com'),
(37, 'Ulla', 'Terrell', 'puhuqefe', '+1 (326) 813-1635', 'CL-6278d1699f79c', 'soxy@mailinator.com'),
(38, 'Karen', 'Wilson', 'wereryvyf', '+1 (901) 992-3495', 'CL-6278ee970375f', 'sojek@mailinator.com'),
(39, 'Martena', 'Durham', 'voxyxicoq', '+1 (703) 399-1748', 'CL-6278eeb1dff06', 'cexuseh@mailinator.com'),
(40, 'Xander', 'Wade', 'hinipuvyh', '+1 (766) 297-3227', 'CL-6278eec2dad55', 'kibiq@mailinator.com'),
(41, 'Amity', 'Buckley', 'siluz', '+1 (454) 154-8445', 'CL-627a3d9844480', 'qedo@mailinator.com'),
(42, 'Fredericka', 'Talley', 'qunoso', '+1 (995) 618-9386', 'CL-627a41f7c638b', 'lepuf@mailinator.com'),
(43, 'Renee', 'Wiley', 'syqipyr', '+1 (831) 162-8936', 'CL-627a420ecd034', 'lomedi@mailinator.com'),
(44, 'Sasha', 'Mccarthy', 'cuwob', '+1 (314) 325-4054', 'CL-627a42288b3ee', 'lecyxily@mailinator.com'),
(45, 'MacKenzie', 'Frye', 'qutuwam', '+1 (587) 858-5484', 'CL-627a4236a91e6', 'duhonej@mailinator.com'),
(46, 'Xander', 'Hubbard', 'nocosuq', '+1 (742) 456-1803', 'CL-627d43f45e7e1', 'hivyhajah@mailinator.com'),
(47, 'Neil', 'Gregory', 'jefarupequ', '+1 (969) 603-5453', 'CL-627ea5b85cd0a', 'lisadag@mailinator.com'),
(48, 'Belle', 'Cantrell', 'mebagowa', '+1 (368) 295-1354', 'CL-627ea69286c0d', 'fabuvyzipi@mailinator.com'),
(49, 'Giacomo', 'Stephenson', 'bunidej', '+1 (238) 905-3129', 'CL-627ebb99cd040', 'gazu@mailinator.com'),
(50, 'Ina', 'Cline', 'lalyge', '+1 (116) 756-4708', 'CL-62821c5cba27d', 'xujon@mailinator.com'),
(51, 'Noble', 'Pope', 'dufemyd', '+1 (579) 513-1147', 'CL-6282a7c0b7107', 'biciw@mailinator.com'),
(52, 'Melissa', 'Pierce', 'tiwalihyp', '+1 (761) 591-2634', 'CL-6282a9e17271d', 'vywesapy@mailinator.com'),
(53, 'Brody', 'Boyd', 'nycopoj', '+1 (157) 747-3312', 'CL-6282aa6a33b11', 'govydysuz@mailinator.com'),
(54, 'Galvin', 'Perry', 'kirijod', '+1 (988) 157-3279', 'CL-6282aaa5d994b', 'sypijuhi@mailinator.com'),
(55, 'MacKenzie', 'Copeland', 'dokyxyr', '+1 (147) 568-8088', 'CL-6282aacabd7bc', 'kitujito@mailinator.com'),
(56, 'Elaine', 'Macias', 'kagamuraza', '+1 (174) 794-5999', 'CL-6283c9dd14f8e', 'qabetir@mailinator.com'),
(57, 'Sarah', 'Wiley', 'dolipiv', '+1 (496) 655-5567', 'CL-62861ef84f955', 'dilubulu@mailinator.com'),
(58, 'Ivory', 'Savage', 'zuzola', '+1 (918) 526-5234', 'CL-62867285b9673', 'buli@mailinator.com'),
(59, 'Darius', 'Newton', 'nanaweviw', '+1 (885) 725-9089', 'CL-6287b51fee71a', 'dyjyn@mailinator.com'),
(60, 'Graiden', 'Gay', 'rawewo', '+1 (754) 811-8549', 'CL-6287d7eb1648e', 'sebenunele@mailinator.com');

-- --------------------------------------------------------

--
-- Structure de la table `local`
--

CREATE TABLE `local` (
  `id` int(11) NOT NULL,
  `idOrganisateur` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `About` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `local`
--

INSERT INTO `local` (`id`, `idOrganisateur`, `Address`, `Ville`, `Photo`, `About`) VALUES
(34, 57, 'Dkhissa , ouslane , Meknes , MAROC', 'Meknes ', 'utlzarbnyfel3dab0rt', 'hada terrain nadi asat aji t9assar lwa9t lib4iti '),
(35, 63, 'local 2', 'local 2', '3z4x1qywdcrl3erexvr', 'local 2 local 2 local 2 local 2local 2 local 2local 2 local 2local 2 local 2local 2 local 2local 2 local 2'),
(36, 64, 'Totam repellendus N', 'Molestiae tempor mol', 'dvbk73q10z9l3ev4yyl', 'hedufhruph fur giurhugho ragohazoghio zegzoighoiezh ogrgezhgoezhigo hzegdsu vohmezihehgepmouez hgp'),
(37, 65, 'Architecto qui minim', 'In ullam blanditiis ', 'v7yrpjcidufl3ev5qvi', 'Lorem eaque exercitarefugzreuifguezigfuigeziufgezf gezfgeuizgfuiezgiufgezuigfuiegfpugzeui'),
(38, 66, 'Maiores perferendis ', 'Debitis dolor obcaec', '01y1xwdzziill3ev6u5j', 'Praesentium qui irur hlfqgomfgapzf eazm fmef abdessalm  syatdoil  hdsmhf dsfdmhsfjhds');

-- --------------------------------------------------------

--
-- Structure de la table `organisateur`
--

CREATE TABLE `organisateur` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `IdUnique` varchar(255) NOT NULL,
  `suspended` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `organisateur`
--

INSERT INTO `organisateur` (`id`, `FirstName`, `LastName`, `business_name`, `Email`, `Phone`, `IdUnique`, `suspended`) VALUES
(57, '4anjo', ' STAILI', 'BENJY33X', 'A.STAILI@student.youcode.ma', '0646906318', 'OR-62867d3756772', '1'),
(58, 'Victoria Lowe', 'Mccray', 'Scarlet Petersen', 'miliqoti@mailinator.com', '+1 (845) 387-5017', 'OR-62868b7332101', '0'),
(59, 'Octavius Oneill', 'Salazar', 'Lionel Carver', 'qepypape@mailinator.com', '+1 (868) 747-7918', 'OR-6287d76cee8ed', '0'),
(62, 'Natalie Puckett', 'Mccoy', 'Wallace Foley', 'nobiwixog@mailinator.com', '+1 (881) 998-3208', 'OR-6287d7f550685', '0'),
(63, 'test 2', 'test 2', 'test 2', 'sebenunele@mailinator.com', '12345678', 'OR-6287d8205cc79', '1'),
(64, 'Erich Gibbs', 'Ramirez', 'Roary Barlow', 'zazisol@mailinator.com', '+1 (477) 401-1689', 'OR-6287f26817648', '1'),
(65, 'Melissa Morse', 'Farley', 'Herrod Bridges', 'gekafymo@mailinator.com', '+1 (678) 784-7668', 'OR-6287f294b0b2a', '1'),
(66, 'Jerry Hicks', 'Booth', 'Igor Strong', 'lahocaqive@mailinator.com', '+1 (494) 185-3649', 'OR-6287f2c027984', '1');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `idStadieum` int(11) NOT NULL,
  `idOrganisateur` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stadium`
--

CREATE TABLE `stadium` (
  `id` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `num_personne` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `priceH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stadium`
--

INSERT INTO `stadium` (`id`, `idLocal`, `Title`, `Description`, `Type`, `num_personne`, `images`, `priceH`) VALUES
(3, 34, 'Voluptate culpa susc', 'Labore dolor elit r', 'auther', 39, 'qdrcbg1bbcnl3e8tyv8', 79),
(4, 34, 'Ut dolorem non autem', 'Doloremque commodo a', 'auther', 27, '2gy7v2t0zjgl3eivcbd', 52),
(5, 34, 'Fugit ullam cum aut', 'Exercitationem excep', 'Football', 29, 'w0tzzp92d7dl3eixkyj', 52),
(6, 34, 'Porro molestiae sint', 'Vel aliquip sit comm', 'basketball', 70, 'mj7upixketl3eizf2b', 56),
(7, 34, 'Et consequatur quas', 'Exercitationem lauda', 'basketball', 60, 'ilm71nub6zl3ej07vs', 57),
(8, 34, 'Sed ut cillum sed no', 'A suscipit sint ut ', 'auther', 78, 'pk2mozmm7yol3ej1y24', 54),
(9, 34, 'Local 2 ', 'Local 2 Local 2 Local 2 Local 2 Local 2 Local 2 Local 2 Local 2 Local 2 Local 2 Local 2 Local 2 ', 'basketball', 2, 'ns3i0x387sel3eqzg69', 12);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IdUnique` (`IdUnique`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `IdUnique` (`IdUnique`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Index pour la table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idOrganisateur` (`idOrganisateur`);

--
-- Index pour la table `organisateur`
--
ALTER TABLE `organisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `business_name` (`business_name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `IdUnique` (`IdUnique`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Time` (`Time`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idStadieum` (`idStadieum`),
  ADD KEY `idOrganisateur` (`idOrganisateur`);

--
-- Index pour la table `stadium`
--
ALTER TABLE `stadium`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idLocal` (`idLocal`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `organisateur`
--
ALTER TABLE `organisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stadium`
--
ALTER TABLE `stadium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `local`
--
ALTER TABLE `local`
  ADD CONSTRAINT `local_ibfk_1` FOREIGN KEY (`idOrganisateur`) REFERENCES `organisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idStadieum`) REFERENCES `stadium` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`idOrganisateur`) REFERENCES `organisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stadium`
--
ALTER TABLE `stadium`
  ADD CONSTRAINT `stadium_ibfk_1` FOREIGN KEY (`idLocal`) REFERENCES `local` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
