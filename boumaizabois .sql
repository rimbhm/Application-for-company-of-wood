-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 14 Mai 2014 à 14:19
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `boumaizabois`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'boumaiza_bois@hotmail.fr', 123),
(2, 'boumaiza.cyrine@hotmail.fr', 456);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) NOT NULL,
  `e-mail` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(15) NOT NULL,
  `telephone` int(20) DEFAULT NULL,
  `login` varchar(100) NOT NULL,
  `mot` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `cin`, `nom`, `prenom`, `e-mail`, `adresse`, `ville`, `telephone`, `login`, `mot`) VALUES
(10, 9798984, 'boumaiza', 'cyrine', 'boumaiza.cyrine@hotmail.fr', 'rue mouna', '16', 26483442, '09798984', '09798984'),
(11, 9865321, 'salah', 'mohamed', 'salah@yahoo.fr', 'salah ben salah', '15', 98147652, '09865321', '09865321'),
(12, 1237890, 'ben salem', 'ahmed', 'ahmedben@yahoo.fr', 'rue el edrissi', '1', 52998000, '1237890', '1237890'),
(13, 6532437, 'chemingui', 'abdelhamid', 'chemingui@yahoo.fr', 'rue el erkam', '16', 95789157, '06532437', '06532437');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `idcommande` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `montant` decimal(60,0) DEFAULT NULL,
  PRIMARY KEY (`idcommande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande_admin`
--

CREATE TABLE IF NOT EXISTS `commande_admin` (
  `idcommande_admin` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idcommande_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande_client`
--

CREATE TABLE IF NOT EXISTS `commande_client` (
  `idcommande_client` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idcommande_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `idfournisseur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfournisseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`idfournisseur`, `nom`, `adresse`, `tel`) VALUES
(1, 'Stibois', 'Z.I Bir El kassÃ¢a, 2013 Ben Arous Tunisie', '71 381 760'),
(2, 'Stramica', '7, rue 8603 Z.I. Charguia 2035 TUNIS TUNISIE', ' 71 80 80 80 ');

-- --------------------------------------------------------

--
-- Structure de la table `ouvrier`
--

CREATE TABLE IF NOT EXISTS `ouvrier` (
  `idouvrier` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `e-mail` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `salaire` decimal(30,0) DEFAULT NULL,
  PRIMARY KEY (`idouvrier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `ouvrier`
--

INSERT INTO `ouvrier` (`idouvrier`, `nom`, `prenom`, `adresse`, `e-mail`, `tel`, `salaire`) VALUES
(1, 'salah', 'marwene', 'manzel tmim', 'marwensalah@yahoo.fr', 22467913, '500'),
(2, 'salah', 'yassine', 'manzel tmim', 'yassinesalah@yahoo.fr', 22103046, '500');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `desc`, `date`, `logo`) VALUES
(37, 'acajou', 100, 'Bois dâ€™acajou est trÃ¨s prisÃ© pour la fabrication de meubles, ainsi que dâ€™autres applications telles que la construction navale et la construction dâ€™instruments de musique Ã  cause de son aspect attrayant et la force gÃ©nÃ©rale. Du bois de plaisir Ã  travailler avec du bois dâ€™acajou car elle coupe ainsi, les sables vers le bas pour rÃ©vÃ©ler un grain attrayant, peut Ãªtre collÃ© facilement et solidement, et peut Ãªtre fini et poli Ã  un Ã©clat. Ce type de bois peut Ãªtre coÃ»teux, mais les consommateurs sont souvent prÃªts Ã  payer le prix pour le bois dâ€™acajou pour son attrait visuel et la durabilitÃ©. Lâ€™acquisition de bois dâ€™acajou peut Ãªtre difficile parfois, car il est trÃ¨s en demande et donc coÃ»teux', '2014-04-12', '75710211c17396de1259db65606bf36f.jpg'),
(38, 'MDF', 78, 'Un panneau de fibres Ã  densitÃ© moyenne1 ou MDF (pour Medium Density Fiberboard, l''appellation anglophone) est un panneau composite de fibres de bois Ã  moyenne densitÃ© (avec des masses volumiques variables : 800 kg/mÂ³ pour le HDF, 750 kg/mÂ³ pour le MDF, 600 kg/mÂ³ pour le light MDF), par opposition aux panneaux de fibres de bois durs dont la densitÃ© est Ã©levÃ©e. Ã‰galement connu sous la dÃ©nomination de medium, ce panneau issu d''un procÃ©dÃ© industriel continu, est constituÃ© de fibres de bois et d''un liant synthÃ©tique Ã  base de rÃ©sine urÃ©e-formol que l''on soumet Ã  des contraintes de tempÃ©rature et de pression2. le MDF prÃ©sente de multiples avantages :\nil est quasiment isotrope, c''est-Ã -dire prÃ©sente des propriÃ©tÃ©s physiques homogÃ¨nes dans les trois dimensions, sa texture fine le rend facile d''emploi en dÃ©coration\nil est meilleur marchÃ© que le bois massif\nil est disponible en de multiples Ã©paisseurs\nil permet l''utilisation de bois de premiÃ¨re Ã©claircie (arbres de faible diamÃ¨tre, qui ne peuvent pas Ãªtre valorisÃ©s en bois massif)\nLe MDF est un panneau polyvalent, que l''on retrouve surtout dans l''amÃ©nagement et la dÃ©coration intÃ©rieure.', '2014-04-06', '82f20d404d3929d52b7643971fda165f.jpg'),
(39, 'bois blanc', 78, '', '2014-04-26', 'adf91b4d2048557eaf9becc700584aaa.jpg'),
(40, 'bastin', 50, 'Un bastaing est une piÃ¨ce de bois obtenue par sciage dont la section fait gÃ©nÃ©ralement 50mm x 150 mm ou 63mm x 160 mm Ã  180 mm. La section d''un bastaing est donc plus petite que celle d''un madrier mais plus grande que celle d''un chevron.', '2014-04-25', 'da2a8ea982c3fb2cbbdbaa772e760978.jpg'),
(41, 'bois hetre', 30, '', '2014-04-06', '82fb7d4b5eb311551469d55880dadf51.jpg'),
(42, 'madrier', 70, 'Un madrier est une planche Ã©paisse gÃ©nÃ©ralement faÃ§onnÃ©e dans un bois dur comme le chÃªne, utilisÃ©e pour les gros travaux de menuiserie et de construction, et autrefois pour recouvrir les voies de circulation.', '2014-04-15', 'becfdbfa13e3e3a545733c9b05e2bb93.jpg'),
(43, 'ebebne', 40, 'Les caractÃ©ristiques principales de l''Ã©bÃ¨ne sont sa couleur presque noire et sa densitÃ© Ã©levÃ©e. Aussi trouve-t-on des Ã©chantillons d''Ã©bÃ¨ne plus ou moins foncÃ©s (certains restent gris) et durs.', '2014-04-30', 'ffaa9fb86283371d0588ec0af2dfe691.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`) VALUES
(1, 'Ariana'),
(2, 'Beja'),
(3, 'Ben Arous'),
(4, 'Bizerte'),
(5, 'Gabes'),
(6, 'Gafsa'),
(7, 'Jendouba'),
(8, 'Kairouane'),
(9, 'kasserine'),
(10, 'Gebili'),
(11, 'kef'),
(12, 'mahdia'),
(13, 'manouba'),
(14, 'mednine'),
(15, 'monastir'),
(16, 'nabeul'),
(17, 'sfax'),
(18, 'sidi bouzid'),
(19, 'siliana'),
(20, 'sousse'),
(21, 'tataouine'),
(22, 'tozeur'),
(23, 'tunis'),
(24, 'zaghouane');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
