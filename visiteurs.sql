-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 16 Novembre 2017 à 12:29
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `visiteurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE `billets` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL,
  `auteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` (`id`, `titre`, `contenu`, `date_creation`, `auteur`) VALUES
(1, 'Bienvenue sur mon blog !', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !', '2017-09-19 08:00:00', 'Paul'),
(2, 'Le PHP à la conquête du monde !', 'C\'est officiel, l\'éléPHPant a annoncé à la radio hier soir \"J\'\'ai l\'intention de conquérir le monde !\"', '2017-09-19 10:00:00', 'Anna'),
(3, 'Mon billet N°3', 'Je crée des billets pour tester ma pagination.', '2017-09-23 11:00:00', 'Anaïs'),
(4, 'Billet n°4', 'Le billet du dimanche !', '2017-09-24 09:16:38', 'Miguel'),
(5, 'Billet n°5', 'Non c\'est pas pour faire la promo de Chanel !', '2017-09-25 08:15:08', 'Parfum'),
(6, 'Billet n°6', 'Le lundi matin on est au taquet !', '2017-09-25 09:00:07', 'Andrew'),
(7, 'Billet n°7', 'Vous souhaitez apprendre à paginer  ?', '2017-09-25 15:33:29', 'Cindy');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 'M@teo21', 'C\'est un peu court pour un billet, non ?', '2017-09-19 11:19:09'),
(2, 1, 'Maxime', 'On commence doucement :-)', '2017-09-19 11:17:00'),
(3, 1, 'Tiger', '+1 !', '2017-09-19 11:21:29'),
(4, 2, 'John', 'C\'est moi qui commente en premier !', '2017-09-19 11:10:09'),
(5, 2, 'Maxime', 'Excellente analyse de la situation !Il y arrivera plus tôt qu\'\'on ne le pense !', '2017-09-19 11:22:10'),
(8, 2, 'Vendredi soir', 'Ultime test', '2017-09-22 19:00:49'),
(9, 1, 'Mumu', 'Vendredi soir mon code est ENFIN OK !!!', '2017-09-22 19:02:06'),
(10, 2, 'Lundi', 'Bonjour Lundi matin !', '2017-09-25 09:41:31'),
(11, 4, 'Bill', 'Un commnetaire', '2017-09-26 11:09:47'),
(12, 7, 'mercredi ', 'est-ce que cela fonctionne toujours ?', '2017-09-27 10:01:29'),
(13, 7, 'mercredi ', 'est-ce que cela fonctionne toujours ?', '2017-09-27 10:01:32'),
(14, 7, 'Mercredi ', 'Une nouvelle erreur !', '2017-09-27 10:11:15'),
(15, 7, 'Pauline ', 'Salut', '2017-09-27 13:08:18'),
(16, 6, 'Paul', 'Salut', '2017-09-27 13:13:05'),
(17, 7, 'toto', 'essiae', '2017-10-05 09:25:40'),
(18, 7, 'zozo', 'zozo', '2017-10-05 13:44:45'),
(19, 6, 'salut', 'salut', '2017-10-05 13:45:52'),
(20, 6, 'salut bis ', 'salut bis', '2017-10-05 13:46:04'),
(21, 7, 'jon ', 'salut', '2017-10-25 13:16:25'),
(24, 7, 'toto', 'essai de modification', '2017-11-16 12:15:03'),
(25, 7, 'toto', 'salut c\'est moi', '2017-11-07 14:37:59'),
(26, 7, 'toto', 'Je crois que j\'ai trouvé :-) Bon il faut encore améliorer certains détails !', '2017-11-07 15:03:00'),
(27, 5, 'Prune', ' Le dimanche c\'est running\r\n', '2017-11-12 16:20:44'),
(28, 6, 'Baltazar', 'Salut ! ', '2017-11-13 11:17:25'),
(29, 6, 'mardi ', 'verification', '2017-11-15 10:38:38'),
(30, 6, 'Audrey', 'As-tu trouvé la fonction pour modifier les commentaires ? ', '2017-11-16 11:37:09');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `billets`
--
ALTER TABLE `billets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
