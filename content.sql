-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Décembre 2016 à 14:17
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zikoos`
--

-- --------------------------------------------------------

--
-- Structure de la table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `band` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guitar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_band` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_guitar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_guitar2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_bass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_drum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_amp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `content`
--

INSERT INTO `content` (`id`, `type`, `band`, `guitar1`, `bass`, `drum`, `amp`, `commentaire`, `img_band`, `img_guitar1`, `img_guitar2`, `img_bass`, `img_drum`, `img_amp`, `visible`) VALUES
(1, 'Pop', 'Beatles', 'Rickenbacker 325c64', 'Hofner 500/1', 'Ludwig', 'VOX AC30 v2', 'The Beatles est un groupe de musique britannique originaire de Liverpool, composé de John Lennon, Paul McCartney, George Harrison et Ringo Starr. Il demeure, en dépit de sa séparation en 1970, l\'un des groupes de rock les plus populaires au monde.', '', '', '', '', '', '', 1),
(2, 'Pop', 'Taylor Swift', 'Gibson j200 Standard', 'Fender American Standard Jazz Bass', 'Pearl', 'Fender Acoustasonic 90', 'Taylor Alison Swift, née le 13 décembre 1989 à Reading, en Pennsylvanie, est une auteur-compositrice-interprète et actrice américaine.', '', '', '', '', '', '', 1),
(3, 'Heavy Metal', 'Iron Maiden', 'Fender Stratocaster Dave Murray signature', 'Fender Precision Bass', 'Premier Iron Maiden', 'Marshall AS50 D', 'Iron Maiden est un groupe de heavy metal britannique, originaire de Londres. Le groupe est formé en décembre 1975 par le bassiste Steve Harris et rejoint très rapidement par Dave Murray. ', '', '', '', '', '', '', 1),
(4, 'Heavy Metal', 'Led Zeppelin', 'Gibson Les Paul Gold Top', 'Manson E-Bass', 'Ludwig', 'Orange Thunder 30', 'Led Zeppelin est un groupe de rock britannique fondé en 1968 à Londres par Jimmy Page, avec Robert Plant, John Paul Jones et John Bonham, et dissous à la suite de la mort de ce dernier, en 1980. ', '', '', '', '', '', '', 1),
(5, 'Blues', 'Johnny Cash', 'Gibson ES335 Studio', 'Gibson Firebird', 'Yamaha', 'Marshall JMD102', 'Johnny Cash est un chanteur, guitariste et auteur-compositeur de musique country américain. Il a également pratiqué les styles rock \'n\' roll, rockabilly, blues, folk ou encore gospel.', '', '', '', '', '', '', 1),
(6, 'blues', 'Buddy Guy', 'Fender Telecaster Malcolm 56', 'Fender Jazz Bass Standard', 'Pearl', 'Orange Thunderverb 50', 'George « Buddy » Guy, né le 30 juillet 1936 à Lettsworth, est un musicien américain de blues et de musique rock. Il est le père de la rappeuse Shawnna.', '', '', '', '', '', '', 1),
(7, 'Grunge', 'Pearl Jam', 'Gibson SG Special Faded', 'Musicman Stingray', 'Paiste', '1959\'s Fender Twin Amp', 'Pearl Jam est un groupe de rock américain, originaire de Seattle, ville de l\'État de Washington. Formé en 1990, par le guitariste Stone Gossard et le bassiste Jeff Ament, Pearl Jam est l\'un des groupes les plus populaires du mouvement grunge : le Big Four of Seattle, aux côtés de Soundgarden, Nirvana et Alice in Chains.', '', '', '', '', '', '', 1),
(8, 'Grunge', 'Foo Fighters', 'Gibson ES335 Dave Grohl signature', 'Fender Jazz Bass Studio', 'Tama', 'MESA Triple Rectifier 150W', 'Foo Fighters est un groupe de rock américain, formé à Seattle, Washington. Il est formé en 1994 durant la dissolution de Nirvana, à la suite de la mort de son leader Kurt Cobain. ', '', '', '', '', '', '', 1),
(9, 'Indie', 'Noah and the Whale', 'Fender Jaguar Special HH', 'SRF 700', 'Ludwig', 'VOX Valvetronic VT80+', 'Noah and the Whale est un groupe de folk rock indie anglais formé à Twickenham en 2006. Il est composé de Charlie Fink (au chant et à la guitare), Tom Hobden (violon et clavier), Matt Owens (guitare basse), Fred Abbott (guitare et clavier) et Michael Petulla (percussions).', '', '', '', '', '', '', 1),
(10, 'Indie', 'The Lumineers', 'Guild Westerly OM240E', 'Gibson Midstown Standard', 'Sonor', 'Marshall MGX 30W', 'The Lumineers est un groupe américain de folk rock originaire de Ramsey, dans le New Jersey. Le groupe est composé de Wesley Schultz au chant et à la guitare, Jeremiah Fraites à la batterie et Neyla Pekarek au violoncelle et au chant.', '', '', '', '', '', '', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
