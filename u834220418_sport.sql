
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `IdUnique` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `admin` (`id`, `UserName`, `Email`, `IdUnique`) VALUES
(1, 'BENJY33x', 'sefaqezo@mailinator.com', '$2y$10$Ic3U.tr6tIEOxlJCNUdNfuBtuDxDC5Fyv1pHVrtMw9f0aa6V2ll7C');

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `IdUnique` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `clients` (`id`, `FirstName`, `LastName`, `UserName`, `Phone`, `IdUnique`, `Email`) VALUES
(147, 'Emery', 'Trujillo', 'soloneb', '+1 (569) 963-3729', '$2y$10$47L9/7iPKUqkNFkAwButB.HgODan2S.v6b59e9mnGCeXRwVnaarNO', 'lohe@mailinator.com'),
(148, 'Brennan', 'Copeland', 'lisepiwe', '+1 (228) 587-4796', '$2y$10$V5Bbz8X5xC.0Buw6yt5utOh/U4TnYe4U5iwELAOgus.1VvceC891G', 'kofaduhafe@mailinator.com'),
(149, 'Lance', 'Logan', 'bejytoluxo', '+1 (478) 763-6348', '$2y$10$dAlgh1mkZftE8VzKp/3gWeF78nelBqOZtL1eeWYsqYiMI6liq3hg6', 'hyhuf@mailinator.com'),
(150, 'Serina', 'Anderson', 'dulajamut', '+1 (406) 763-1703', '$2y$10$fspjAIPQZqEXgzIa4PKAruSt/5TEWY6vA5I5pfg2C3gcKWbJ6RfNW', 'mipojux@mailinator.com'),
(151, 'Abdessalam', 'Staili', 'xoces@mailinator.com', '0646906318', '$2y$10$/0AS7281P2NZ81H5OE7Z4.I2MWLiYwb/ktpUw.yEfeECt7AN7s6LO', 'abdostaili1999@gmail.com'),
(152, 'med', 'med', '4anjo', '234567890', '$2y$10$7ceVeBR19znMy.//YUadX.r2bhsma9usQskifCvbZbYX8iNgIF0Hq', '0766721330@HH.com'),
(153, 'Helen', 'Riggs', 'xybywuva', '+1 (335) 586-4033', '$2y$10$iqexL9He0jQiuojauDF0m.he3hzMZ4R7rmlPq.j4UZSyLVf5j4j3W', 'dawutalaly@mailinator.com'),
(155, 'said', 'said', 'said', '54664', '$2y$10$8e.WjE8agHJdZNLCSkHNOu2OE8Ly5PuglPY94wqdq2dSEvU4OxF8W', 'said@gmail.com');

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
  `About` text NOT NULL,
  `numberSTade` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `local`
--

INSERT INTO `local` (`id`, `idOrganisateur`, `Address`, `Ville`, `Photo`, `About`, `numberSTade`) VALUES
(63, 166, 'Adress complite 1', 'Meknes', 'SporTime/lavy9pzxsraudj49o0ea', 'Il accueille les matches du CODM de Meknès, ainsi des matchs de l\'équipe nationale du Maroc et des concerts de musique. Il a aussi abrité la finale de la CAN Junior 1997.', 3),
(64, 167, 'adress complitment ', 'Marakech', 'SporTime/ddtumqms7hwo2oh9nqat', 'Il accueille les matches du CODM de Marrakech, ainsi des matchs de l\'équipe nationale du Maroc et des concerts de musique. Il a aussi abrité la finale de la CAN Junior 1997.', 4),
(65, 168, 'adress comlitement 4', 'OUjda', 'SporTime/ulcbn3lk4rnjpcdd0bxa', 'Il accueille les matches du CODM de oujda, ainsi des matchs de l\'équipe nationale du Maroc et des concerts de musique. Il a aussi abrité la finale de la CAN Junior 1997.', 2),
(66, 170, 'aDRESS complite 6', 'Tanger', 'SporTime/i0tlryp5xem75or3ezfu', 'Il accueille les matches du CODM de tanger, ainsi des matchs de l\'équipe nationale du Maroc et des concerts de musique. Il a aussi abrité la finale de la CAN Junior 1997.', 4),
(67, 172, 'Adress complited 6', 'TATNTAN', 'SporTime/vitmonbstzokmxspygwa', 'Il accueille les matches du CODM de Tantan, ainsi des matchs de l\'équipe nationale du Maroc et des concerts de musique. Il a aussi abrité la finale de la CAN Junior 1997.', 5),
(68, 173, 'Adress complited', 'marakech', 'SporTime/gfvcm29fp3tilwj4un6j', 'Il accueille les matches du CODM de marakech, ainsi des matchs de l\'équipe nationale du Maroc et des concerts de musique. Il a aussi abrité la finale de la CAN Junior 1997.', 3);

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
(166, 'Abdessalam ', 'STAILI', 'STAILI-ABDESSALAM', 'Aa1@gmail.com', '1234567', '$2y$10$p5f9gVLsxJILzbhyhMxGhet1akWA1uRWAEw1OehGB9PCaL5d07wZa', '1'),
(167, 'said ', 'loudani', 'benjy', 'Aa2@gmail.com', '2345678', '$2y$10$o8IuL7WegvVEi90KQo0G3Os3FGzJyADSZM3oIQpMAnMCsT8CNgQWC', '1'),
(168, 'oussama', 'bachri', 'bachaaa', 'Aa3@gmail.com', '23456789', '$2y$10$rVAnUmjpWRQMTxvnhcDD8ehbgifk8H.X8iTK1DZBOMVciltJ51Dn2', '1'),
(170, 'hala ', 'ziani', 'jiksaw', 'Aa5@gmail.com', '345689099', '$2y$10$4Kp4UMcCj3qzlC9mbDiAcuPFYWWhNSVTb0Axa8nhKatoER/omEFq6', '1'),
(172, 'amin', 'mesbahi', 'Lwidjet', 'Aa6@gmail.com', '45789876585875', '$2y$10$9Y4w0AU2rW5eKYRDVbl.seOr7vYCSHMUGZuVzLofcbUwmefa0IlBS', '1'),
(173, 'houusam', 'doufar', 'douuu', 'Aa7@gmail.com', '0709785875', '$2y$10$cQW1M6.dfr.SSIGi5Bz2fevCeau5lYlRB4Te8zqCY6NO9.i8tDhd6', '1');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `idStadieum` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
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
(41, 64, 'Title', 'Idéalement situé à l’entrée de la ville ocre, et à 15 Km de l’aéroport international de Marrakech, le Grand Stade de Marrakech est équipé d’infrastructures de dernière génération, répondant aux standards internationaux les plus exigeants', 'basketball', 10, 'SporTime/ou8yxlrkwhwieg2uv68a', 100),
(42, 64, 'Title', 'Nommé à l\'origine football association et codifié au Royaume-Uni à la fin du xixe siècle, le football s\'est doté en 1904 d\'une fédération internationale, la FIFA', 'Football', 12, 'SporTime/jy9zfvyayczodrbcflsb', 60);

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
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_ibfk_1` (`idClient`),
  ADD KEY `reservation_ibfk_2` (`idStadieum`),
  ADD KEY `reservation_ibfk_3` (`idLocal`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT pour la table `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `organisateur`
--
ALTER TABLE `organisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT pour la table `stadium`
--
ALTER TABLE `stadium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`idLocal`) REFERENCES `local` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stadium`
--
ALTER TABLE `stadium`
  ADD CONSTRAINT `stadium_ibfk_1` FOREIGN KEY (`idLocal`) REFERENCES `local` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
