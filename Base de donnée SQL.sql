CREATE TABLE `Utilisateur` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(255),
  `password` varchar(255),
  `statut` varchar(255),
  `created_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `Vendeur` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `prenom` varchar(255),
  `nom` varchar(255),
  `profil_photo` varchar(255),
  `background_photo` varchar(255),
  `user_id` int
);

CREATE TABLE `Acheteur` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `prenom` varchar(255),
  `nom` varchar(255),
  `user_id` int
);

CREATE TABLE `Admin` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int
);

CREATE TABLE `Adresse` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `adresse` varchar(255),
  `ville` varchar(255),
  `codepostal` int,
  `pays` varchar(255),
  `telephone` varchar(255),
  `ach_id` int
);

CREATE TABLE `Paiement` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `typecarte` varchar(255),
  `nom` varchar(255),
  `numero_carte` int,
  `dateexp` date,
  `code` int,
  `ach_id` int
);

CREATE TABLE `Panier` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `ach_id` int,
  `item_id` int
);

CREATE TABLE `Item` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255),
  `photo1` varchar(255),
  `photo2` varchar(255),
  `photo3` varchar(255),
  `video` varchar(255),
  `description` varchar(255),
  `prix_minimum` float,
  `categorie_achat` varchar(255),
  `categorie_produit` varchar(255),
  `date_publication` timestamp,
  `date_vente` timestamp,
  `prix_vente` float,
  `id_acheteur` int,
  `v_id` int
);

CREATE TABLE `Enchere` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
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
  `msg_ach` varchar(255),
  `prixVen` float,
  `msg_vend` varchar(255),
  `repetition` int,
  `validation` boolean,
  `statut` varchar(255),
  `ach_id` int,
  `vend_id` int,
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

ALTER TABLE `MeilleurOffre` ADD FOREIGN KEY (`vend_id`) REFERENCES `Vendeur` (`id`);

ALTER TABLE `MeilleurOffre` ADD FOREIGN KEY (`item_id`) REFERENCES `Item` (`id`);
