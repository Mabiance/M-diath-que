-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 13 Janvier 2019 à 22:40
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `exoformulaire`
--
CREATE DATABASE IF NOT EXISTS `exoformulaire` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exoformulaire`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nom` (`nom`),
  KEY `nom_2` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `données`
--

CREATE TABLE IF NOT EXISTS `données` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `age` varchar(3) COLLATE utf8_bin NOT NULL,
  `metier` varchar(255) COLLATE utf8_bin NOT NULL,
  `pays` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `données`
--

INSERT INTO `données` (`id`, `nom`, `prenom`, `age`, `metier`, `pays`) VALUES
(1, 'erezrze', 'ezrezr', '1', 'PDG', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `realisateur` varchar(255) COLLATE utf8_bin NOT NULL,
  `duree` varchar(255) COLLATE utf8_bin NOT NULL,
  `resume` text COLLATE utf8_bin NOT NULL,
  `categorie` varchar(255) COLLATE utf8_bin NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie` (`categorie`),
  KEY `categorie_2` (`categorie`),
  KEY `categorie_3` (`categorie`),
  KEY `categorie_4` (`categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `nom`, `realisateur`, `duree`, `resume`, `categorie`, `photo`) VALUES
(1, 'Titanic', 'James Cameron', '3h15', 'Le paquebot le plus grand et le plus moderne du monde, réputé pour son insubmersibilité, le "Titanic", appareille pour son premier voyage. Quatre jours plus tard, il heurte un iceberg. A son bord, un artiste pauvre et une grande bourgeoise tombent amoureux.', 'Drame', 'tititi'),
(2, 'Avatar', 'James Cameron', '2h45', 'Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre la crise énergétique sur Terre.', 'Fantastique', 'avatar'),
(6, 'Wall-e', 'Andrew Staton', '98min', 'Wall E, un petit robot, est le dernier être sur Terre ! 700 ans plus tôt, l''humanité a déserté notre planète en lui laissant le soin de nettoyer la Terre. Mais Wall E a développé un petit défaut technique : une forte personnalité ! Curieux et indiscret, il est surtout très seul. Sa vie va être bouleversée avec l''arrivée d''Eve, une petite robote. Wall E va tout mettre en uvre pour la séduire.', 'Animation', 'walle'),
(7, 'Aquaman', 'James Wan', '2h24', 'Les origines d’un héros malgré lui, dont le destin est d’unir deux mondes opposés, la terre et la mer. Cette histoire épique est celle d’un homme ordinaire destiné à devenir le roi des Sept Mers.', 'Aventure', 'aquaman'),
(8, 'E.T', 'Steven Spielberg', '2h00', 'Une soucoupe volante atterrit en pleine nuit près de Los Angeles. Quelques extraterrestres, envoyés sur Terre en mission d''exploration botanique, sortent de l''engin, mais un des leurs s''aventure au-delà de la clairière où se trouve la navette. Celui-ci se dirige alors vers la ville. C''est sa première découverte de la civilisation humaine. Bientôt traquée par des militaires et abandonnée par les siens, cette petite créature apeurée se nommant E.T. se réfugie dans une résidence de banlieue.  Elliot, un garçon de dix ans, le découvre et lui construit un abri dans son armoire. Rapprochés par un échange télépathique, les deux êtres ne tardent pas à devenir amis. Aidé par sa soeur Gertie et son frère aîné Michael, Elliot va alors tenter de garder la présence d''E.T. secrète.', 'Science Fiction', 'et'),
(9, 'Là-Haut', 'Bob Peterson', '1h35', 'Des studios Disney-Pixar arrive la comédie d''aventure «Up», qui suit un vendeur de ballons de 78 ans, Carl Fredricksen, au moment où il réalise enfin le rêve de sa vie. Son désir de vivre une grande aventure le pousse à attacher des milliers de ballons à sa maison pour s''envoler vers les régions sauvages de l''Amérique du Sud. Mais il s''aperçoit trop tard de la présence d''un colis ayant la forme de son pire cauchemar : Russell, un jeune explorateur de 8 ans un peu trop optimiste, l''accompagnera dans son voyage.', 'Famille', 'lahaut'),
(10, 'Narnia', 'Michel Apted', '1h55', 'Happés à l’intérieur d’un intriguant tableau, Edmund et Lucy Pevensie, ainsi que leur détestable cousin Eustache, se retrouvent subitement projetés dans le royaume de Narnia, à bord d’un navire majestueux : le Passeur d’Aurore. Rejoignant Caspian, devenu roi, et l’intrépide souris guerrière Ripitchip, ils embarquent pour une périlleuse mission dont dépend le sort même de Narnia. A la recherche de sept seigneurs disparus, nos voyageurs entament un envoûtant périple vers les îles mystérieuses de l’Est, où ils ne manqueront pas de rencontrer tant de créatures magiques que de merveilles inimaginables. Mais ils devront surtout vaincre leurs peurs les plus profondes en affrontant de sinistres ennemis, tout en résistant à de terribles tentations auxquelles ils seront confrontés.  Il est temps pour eux de faire preuve d’un courage légendaire au cours d’une odyssée qui les transformera à jamais et les emportera au bout du monde, où le grand Lion Aslan les attend.', 'Aventure', 'narnia'),
(11, 'Robots', 'Carlos Saldanha', '1h30', 'Rodney est un jeune robot plein d''idées, mais son village est trop petit pour ses rêves. Il décide de partir à Robot Ville rencontrer Bigweld, le plus génial inventeur et bienfaiteur de tous les robots, pour lui proposer ses services. Mais de nombreuses surprises l''attendent...', 'Famille', 'robots'),
(12, 'Robin Des Bois', 'Russel Crowe', '2h20', 'À l’aube du treizième siècle, Robin Longstride, humble archer au service de la Couronne d’Angleterre, assiste, en Normandie, à la mort de son monarque, Richard Coeur de Lion, tout juste rentré de la Troisième Croisade et venu défendre son royaume contre les Français. De retour en Angleterre et alors que le prince Jean, frère cadet de Richard et aussi inepte à gouverner qu’obnubilé par son enrichissement personnel, prend possession du trône, Robin se rend à Nottingham où il découvre l’étendue de la corruption qui ronge son pays. Il se heurte au despotique shérif du comté, mais trouve une alliée et une amante en la personne de la belle et impétueuse Lady Marianne, qui avait quelques raisons de douter des motifs et de l’identité de ce croisé venu des bois. Robin entre en résistance et rallie à sa cause une petite bande de maraudeurs dont les prouesses de combat n’ont d’égal que le goût pour les plaisirs de la vie. Ensemble, ils vont s''efforcer de soulager un peuple opprimé et pressuré sans merci, de ramener la justice en Angleterre et de restaurer la gloire d''un royaume menacé par la guerre civile. Brigand pour les uns, héros pour les autres, la légende de "Robin des bois" est née.', 'Action', 'robin');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `identifiant` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `identifiant`, `password`) VALUES
(1, 'oultu', '', 'èjèjè'),
(2, 'ggg', 'ggg', 'ggg'),
(3, 'Pirodon', 'Mabiance', 'lol'),
(4, 'yjhd', 'tsjsjtys', 'ytsjts'),
(5, 'y', 'y', 'y'),
(6, 'Pirodon', 'ppppp', 'ppppp'),
(7, 'hghfhf', 'ooooo', 'ooooo'),
(8, 'Pirodon', 'eeeee', 'eeeee'),
(9, 'Pirodon', 'rrrrr', 'rrrrr');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`nom`) REFERENCES `categorie` (`nom`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
