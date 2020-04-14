CREATE TABLE `Utilisateur` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `login` varchar(255),
  `password` varchar(255),
  `statut` varchar(255),
  `created_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `Vendeur` (
  `id` int PRIMARY KEY,
  `nom` varchar(255),
  `photo` blob,
  `backgroundphoto` blob,
  `user_id` int
);

CREATE TABLE `Acheteur` (
  `id` int PRIMARY KEY,
  `prenom` varchar(255),
  `nom` varchar(255),
  `user_id` int
);

CREATE TABLE `Admin` (
  `id` int PRIMARY KEY,
  `user_id` int
);

CREATE TABLE `Adresse` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `adresse1` varchar(255),
  `adresse2` varchar(255),
  `ville` varchar(255),
  `codepostal` int,
  `pays` varchar(255),
  `telephone` varchar(255),
  `ach_id` int
);

CREATE TABLE `Paiement` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `typecarte` varchar(255),
  `nbcarte` int,
  `nom` varchar(255),
  `dateexp` date,
  `code` int,
  `ach_id` int
);

CREATE TABLE `Panier` (
  `id` int PRIMARY KEY,
  `ach_id` int,
  `item_id` int
);

CREATE TABLE `Item` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255),
  `photos` blob,
  `descrptions` varchar(255),
  `video` blob,
  `prix_minimum` float,
  `categoriedachat` varchar(255),
  `categorie` varchar(255),
  `date_vente` timestamp,
  `prix_vente` float,
  `idAcheteur` int,
  `v_id` int
);

CREATE TABLE `Enchere` (
  `id` int PRIMARY KEY,
  `startdate` date,
  `enddate` date,
  `item_id` int
);

CREATE TABLE `OffreEnchere` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `prix` int,
  `enchere_id` int,
  `ach_id` int
);

CREATE TABLE `MeilleurOffre` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `prixAch` float,
  `prixVen` float,
  `repetition` int,
  `statut` boolean,
  `ach_id` int,
  `item_id` int
);

ALTER TABLE `Vendeur` ADD FOREIGN KEY (`user_id`) REFERENCES `Utilisateur` (`id`);

ALTER TABLE `Acheteur` ADD FOREIGN KEY (`user_id`) REFERENCES `Utilisateur` (`id`);

ALTER TABLE `Admin` ADD FOREIGN KEY (`user_id`) REFERENCES `Utilisateur` (`id`);

ALTER TABLE `Adresse` ADD FOREIGN KEY (`ach_id`) REFERENCES `Acheteur` (`id`);

ALTER TABLE `Paiement` ADD FOREIGN KEY (`ach_id`) REFERENCES `Acheteur` (`id`);

ALTER TABLE `Panier` ADD FOREIGN KEY (`ach_id`) REFERENCES `Acheteur` (`id`);

ALTER TABLE `Item` ADD FOREIGN KEY (`id`) REFERENCES `Panier` (`item_id`);

ALTER TABLE `Item` ADD FOREIGN KEY (`v_id`) REFERENCES `Vendeur` (`id`);

ALTER TABLE `Enchere` ADD FOREIGN KEY (`item_id`) REFERENCES `Item` (`id`);

ALTER TABLE `OffreEnchere` ADD FOREIGN KEY (`enchere_id`) REFERENCES `Enchere` (`id`);

ALTER TABLE `OffreEnchere` ADD FOREIGN KEY (`ach_id`) REFERENCES `Acheteur` (`id`);

ALTER TABLE `MeilleurOffre` ADD FOREIGN KEY (`ach_id`) REFERENCES `Acheteur` (`id`);

ALTER TABLE `MeilleurOffre` ADD FOREIGN KEY (`item_id`) REFERENCES `Item` (`id`);
