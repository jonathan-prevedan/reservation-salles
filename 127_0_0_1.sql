-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 11 déc. 2019 à 13:59
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `discussion`
--
CREATE DATABASE IF NOT EXISTS `discussion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `discussion`;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(140) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_interlocuteur` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_auteur` int(255) NOT NULL,
  `titre` varchar(40) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'images/membres/defaut.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `prenom`, `nom`, `avatar`) VALUES
(1, 'admin', '$2y$10$2F2p65Fmjd423Ocfsnlewe2sxmFUZmexSxdBNwBljqD5lBv/9ceIi', 'clement.caillat@laplateforme.io', 'admin', 'admin', 'images/membres/admin.png'),
(2, 'Sweetar', '$2y$10$mUbg2bLletbaFa4iDaAcVuK/1pYpcMZlUZFhrs6PZpPDCeE/jsQGi', 'clem.usa@hotmail.fr', 'ClÃ©ment', 'Caillat', 'images/membres/defaut.png'),
(3, 'Sass13', '$2y$10$AehUISZnQ6qep7Pod.zCLOdqIIZDJGTQlfYGW1xJO6QXidbNT35E2', 'sandra.asselin@laplateforme.io', 'Sandra', 'Asselin', 'images/membres/defaut.png');
--
-- Base de données :  `jour08`
--
CREATE DATABASE IF NOT EXISTS `jour08` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jour08`;

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

DROP TABLE IF EXISTS `etage`;
CREATE TABLE IF NOT EXISTS `etage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `superficie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etage`
--

INSERT INTO `etage` (`id`, `nom`, `numero`, `superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `naissance`, `sexe`, `email`) VALUES
(1, 'Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(2, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(3, 'Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
(4, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
(5, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
(6, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `id_etage` int(11) NOT NULL,
  `capacite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`id`, `nom`, `id_etage`, `capacite`) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Video', 2, 5);
--
-- Base de données :  `livreor`
--
CREATE DATABASE IF NOT EXISTS `livreor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `livreor`;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'J\'ai adorÃ© le festival, une ambiance incroyable et le thÃ¨me de cette Ã©dition Ã©tait gÃ©nial !ðŸ’•ðŸ˜ðŸ‘ðŸŽ¶', 1, '2019-11-21 09:53:03'),
(2, 'J\'ai oubliÃ© de prÃ©ciser, la prochaine fois passez par airbnb pour les logements  ðŸ˜‰', 1, '2019-11-21 09:54:31'),
(3, 'This was amazing, I really loved the theme of this 2019 Edition. The secourists were very kind. Don\'t bring shrooms because there\'s lot of security...ðŸ˜…ðŸ˜…', 2, '2019-11-21 09:56:29'),
(4, 'J\'ai vraiment adorÃ© cette Edition c\'Ã©tait incroyable ! La journÃ©e on partait skier, et le soir on kiffait ! ðŸ”ðŸ”', 3, '2019-11-21 09:58:40'),
(5, 'jadore votre site\r\n', 5, '2019-11-21 18:11:08'),
(6, 'j\'adore votre site', 5, '2019-11-21 18:14:14'),
(7, 'coucou j\'adore l', 7, '2019-11-30 21:31:46');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'Sass13', '$2y$10$ZYdONpKAUtST7rHRONEeUO92Mo3EyyB6iVQZXWyVBxw49g0OpApra'),
(2, 'Psymaster555', '$2y$10$bMvlR8C5jkoNa2W.f1sL0.CA9cKeExzvhtT0P4.dH3/c.39Fg8vi2'),
(3, 'Sweetar', '$2y$10$7CGj4sC6Rf/bsF5K6MhIqO3rDX5gOtPiFI4r6/dQdDIOY30rNmWZC'),
(4, 'jon', '$2y$10$edx7lfZFhvyk2eo6DwM/gexzn5tLxW7o7CK37z6v8F7q3nP5iOEAK'),
(6, '<b>ClÃ©ment</b>', '$2y$10$MD58MlEGVerpBeLuBz6Rd.n4mUieyykG3N.KuIw7Ei1yxFLwhu7iG'),
(7, 'soso', '$2y$10$FwWfXP9/DFQnBFjlcXiYUuKw/VfRRS6QpaX//TK1ZD2JVw/4IdrxK');
--
-- Base de données :  `moduleconnexion`
--
CREATE DATABASE IF NOT EXISTS `moduleconnexion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moduleconnexion`;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_auteur` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `id_auteur`, `titre`, `message`) VALUES
(1, 2, 'Coucou Ã  tous !', 'Coucou Pascal ou Terry ou les deux!\r\nNous sommes fiers de vous prÃ©senter notre site'),
(2, 1, 'Messages aux nouveaux', 'Je suis l\'administrateur de ce site, bonne visite ;)'),
(3, 1, 'Ce site est cool', 'ðŸ˜Š'),
(4, 3, 'Hello', 'Coucou mes petits cornichons ! Cet avatar me ressemble beaucoup, ClÃ©ment n\'a pas fait exprÃ¨s ðŸ˜‚ðŸ˜‚'),
(5, 4, 'Salut Ã  tous !', 'C\'est Alex !');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nb_post` int(255) NOT NULL DEFAULT '0',
  `avatar` varchar(255) NOT NULL DEFAULT 'images/membres/defaut.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `prenom`, `nom`, `nb_post`, `avatar`) VALUES
(1, 'admin', '$2y$10$nvQeNjirHvEU8HFq9mJnpetPt2zAiVbVIF1BBJrdAhlT/4yK5YsJi', 'clement.caillat@laplateforme.io', 'admin', 'admin', 0, 'images/membres/admin.png'),
(2, 'Sweetar', '$2y$10$aaqQnvt6.37AulKYqaxQf.Ql9S1FsRAEFXnJmdebzyVRjvHR0I/4m', 'clem.usa@hotmail.fr', 'ClÃ©ment', 'Caillat', 0, 'images/membres/admin_badge.png'),
(3, 'Sass13', '$2y$10$Y5xyNAxgvDp9YiHhaSQCiefAwiMklwATXM/qSmjalWQBDfAmkafDG', 'sandra.asselin@laplateforme.io', 'Sandra', 'Asselin', 0, 'images/membres/sandra.png'),
(4, 'Ztery', '$2y$10$z32aDe7gdgYcblJF3JKTte0a6/xqkadv8G/hAdQKzIMAj1fx94qfa', 'alexandre.hiel-rey@laplateforme.io', 'Alexandre', 'Hiel-Rey', 0, 'images/membres/alex.png'),
(5, 'Soso', '$2y$10$qiW3FWSgrz665QjpHxkZL.5ZA6P5Js5zGLakXFvVX5bgR51XNAzDW', 'sandraassslein@laposte.net', 'sandra', 'asslein', 0, 'images/membres/defaut.png');
--
-- Base de données :  `reservationsalles`
--
CREATE DATABASE IF NOT EXISTS `reservationsalles` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reservationsalles`;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
