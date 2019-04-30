-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 30, 2019 at 02:43 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blogExam`
--

-- --------------------------------------------------------

--
-- Table structure for table `billets`
--

CREATE TABLE `billets` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL,
  `auteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billets`
--

INSERT INTO `billets` (`id`, `titre`, `contenu`, `date_creation`, `auteur`) VALUES
(1, 'Billet n° 1 : Bienvenue', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !', '2019-04-30 08:00:00', 'Paul'),
(2, 'Billet n° 2 : PHP', 'Nous allons parler un peu de PHP dans ce billet ! ', '2019-04-30 08:00:00', 'Annah'),
(3, 'Billet N°3', 'Je crée des billets pour tester mon site moisi ! ', '2019-04-30 08:00:00', 'Mylène');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(31, 3, 'Mylene', 'Ca marche bien !', '2019-04-30 14:18:36'),
(33, 1, 'Vincent', 'héhé', '2019-04-30 16:16:02'),
(34, 3, 'Vincent', 'Il manque le crud delete mais pas grave !', '2019-04-30 16:09:54'),
(35, 2, 'Vincent', 'J\'aime les cookies !', '2019-04-30 16:10:12'),
(36, 1, 'Vincent', 'J\'aime beaucoup ce site ! ', '2019-04-30 16:15:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billets`
--
ALTER TABLE `billets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;