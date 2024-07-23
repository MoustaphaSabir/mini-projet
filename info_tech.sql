-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 juil. 2024 à 11:51
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `info_tech`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `nom_du_cours` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `duree` varchar(11) NOT NULL,
  `niveau` varchar(80) NOT NULL,
  `prix_du_cours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `nom_du_cours`, `description`, `duree`, `niveau`, `prix_du_cours`) VALUES
(1, 'EXCEL', 'Il permet la  saisie de données, des calculs de gestions, la navigation dans Excel, Le formatage des cellules, Les graphiques,\r\nLes tableaux croisés dynamiques ,La gestion des feuilles de calcul et des classeurs .', '3 mois', 'Niveau 1', 300),
(2, 'WORD', 'Il permet la création des documents, Saisie de texte ,formatage de texte, Gestion des pages ,Révision et correction, Impression et partage ,Automatisation .\r\n', '3 mois', 'Niveau 1', 400),
(3, 'POWERPOINT ', 'Il permet la Création de diapositives, Utilisation des animations et des transitions, Insertion de médias, Ajout de commentaires et de notes, Préparation et présentation, Partage et exportation, Partage et exportation.', '3 mois', 'Niveau 1', 500),
(4, 'ACCES', 'Concept de base : ACCES est une approche pédagogique qui intègre des systèmes informatiques dans le processus d\'apprentissage collaboratif.\r\n\r\nCollaboration entre pairs : L\'ACCES met l\'accent sur la collaboration entre les apprenants. Les systèmes informatiques sont utilisés pour faciliter cette collaboration en fournissant des outils et des environnements pour la communication, la coopération et le partage de ressources.\r\n\r\nPersonnalisation de l\'apprentissage : Les systèmes ACCES sont conçus pour offrir une certaine personnalisation de l\'apprentissage en fonction des besoins individuels des apprenants. Cela peut inclure des recommandations de contenu, des parcours d\'apprentissage adaptatifs, etc.\r\n\r\nFeedback et évaluation : Les systèmes ACCES peuvent également fournir des mécanismes de feedback et d\'évaluation pour soutenir l\'apprentissage. Cela peut inclure des évaluations automatisées, des commentaires sur les contributions des pairs, etc.', '3 mois', 'Niveau 1', 350);

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id_devis` int(11) NOT NULL,
  `prix_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id_inscriptions` int(11) NOT NULL,
  `id_cours` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_inscriptions`, `id_cours`, `id_utilisateurs`, `date_inscription`) VALUES
(1, 1, 1, '2025-09-01 07:46:47'),
(2, 2, 2, '2024-03-19 08:00:00'),
(3, 3, 3, '2024-09-01 07:00:00'),
(4, 4, 4, '2024-09-01 07:00:00'),
(5, 3, 31, '2024-03-21 08:31:32'),
(6, 1, 32, '2024-03-22 08:18:01'),
(7, 3, 33, '2024-03-22 09:09:34'),
(8, 1, 34, '2024-03-22 10:11:43'),
(10, 4, 35, '2024-03-22 10:18:47'),
(11, 4, 35, '2024-03-22 10:25:54'),
(12, 1, 36, '2024-03-22 10:26:19'),
(13, 1, 36, '2024-03-22 10:28:59'),
(16, 2, 38, '2024-04-08 09:08:50'),
(17, 1, 39, '2024-04-08 10:01:06'),
(18, 3, 40, '2024-06-12 09:46:25'),
(19, 1, 41, '2024-06-13 12:20:31');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateurs` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mot_de_passe` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateurs`, `nom`, `prenom`, `email`, `mot_de_passe`) VALUES
(1, 'TOURE', 'Saliou', 'cheniadamm3@gmail.com', '1234'),
(2, 'SABIR', 'Moustapha', 'moustaphasabri@gmail.com', 'M6392m'),
(3, 'CISSE', 'Fatima', 'fatima@gmail.com', '69545'),
(4, 'KAMARA', 'Mahawa', 'kamara@gmail.com', '4321'),
(5, 'OUSMANE', 'Ahmat', 'ahmatous@gmail.com', '55555'),
(6, 'Moussa', 'Moustapha', 'moustaphasabirmoussa61@gmail.com', 'gfndfjnnd'),
(38, 'Moussa', 'Moustapha', 'moustaphasabirmoussa61@gmail.com', '458647634'),
(39, 'Moussa', 'Moustapha', 'moustaphasabirmoussa61@gmail.com', '744555'),
(40, 'Moussa', 'Moustapha', 'cheniadam3@gmail.com', '12345'),
(41, 'Moussa', 'Moustapha', 'cheniadam3@gmail.com', '0000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`);

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id_devis`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id_inscriptions`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateurs`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id_devis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id_inscriptions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
