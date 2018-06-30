-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 30 Juin 2018 à 16:40
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `banque`
--

-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb001`
--

CREATE TABLE IF NOT EXISTS `sbrhtb001` (
  `id_document a fournir` int(50) NOT NULL AUTO_INCREMENT,
  `libelle piece` varchar(50) NOT NULL,
  `id_contrat douverture` int(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_document a fournir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb001`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb002`
--

CREATE TABLE IF NOT EXISTS `sbrhtb002` (
  `id_contrat douverture` int(100) NOT NULL,
  `libelle contrat` varchar(100) NOT NULL,
  `debut contrat` date NOT NULL,
  `fin contrat` date NOT NULL,
  `id_type contrat` int(100) NOT NULL,
  PRIMARY KEY (`id_contrat douverture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb002`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb003`
--

CREATE TABLE IF NOT EXISTS `sbrhtb003` (
  `id_type contrat` int(100) NOT NULL,
  `libelle contrat` varchar(100) NOT NULL,
  `date dajout` date NOT NULL,
  PRIMARY KEY (`id_type contrat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb003`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb004`
--

CREATE TABLE IF NOT EXISTS `sbrhtb004` (
  `id_client physique` int(100) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sexe` char(1) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `date de naissance` date NOT NULL,
  `nationnalite` varchar(100) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `adresse postale` varchar(100) NOT NULL,
  `ville de residence` varchar(100) NOT NULL,
  `pays de residence` varchar(100) NOT NULL,
  `numero` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `situation matrimoniale` char(10) NOT NULL,
  `nom du conjoint` varchar(100) NOT NULL,
  `mode didentification` int(11) NOT NULL,
  `numero piece` varchar(100) NOT NULL,
  `lieu de naissance` varchar(100) NOT NULL,
  `type de compte` varchar(100) NOT NULL,
  `agence douvertute` varchar(100) NOT NULL,
  `documents a fournir` varchar(100) NOT NULL,
  `nom utilisateur` varchar(100) NOT NULL,
  `mot de passe` varchar(100) NOT NULL,
  `confirmer mot de passe` varchar(100) NOT NULL,
  PRIMARY KEY (`id_client physique`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb004`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb005`
--

CREATE TABLE IF NOT EXISTS `sbrhtb005` (
  `id_client morale` int(100) NOT NULL,
  `Titre impetrant` varchar(100) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `date de naissance` date NOT NULL,
  `mode identification` varchar(100) NOT NULL,
  `matricule ou registre du commerce` varchar(100) NOT NULL,
  `lieu de naissance` varchar(100) NOT NULL,
  `ville de residence` varchar(100) NOT NULL,
  `pays de residence` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `titre societe` varchar(100) NOT NULL,
  `nom social` varchar(100) NOT NULL,
  `date de creation` date NOT NULL,
  `numero de piece` varchar(100) NOT NULL,
  `adresse postale societe` varchar(100) NOT NULL,
  `adresse postale impetrant` varchar(100) NOT NULL,
  `siege social` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `site internet` varchar(100) NOT NULL,
  `nationnailte` varchar(50) NOT NULL,
  `type de compte` varchar(100) NOT NULL,
  `agence douverture` varchar(100) NOT NULL,
  `Document a fournir` varchar(100) NOT NULL,
  `nom utilisateur` varchar(50) NOT NULL,
  `mot de passe` varchar(50) NOT NULL,
  `confirmer mot de passe` varchar(50) NOT NULL,
  PRIMARY KEY (`id_client morale`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb005`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb006`
--

CREATE TABLE IF NOT EXISTS `sbrhtb006` (
  `id_type pret` int(100) NOT NULL,
  `libelle type pret` varchar(100) NOT NULL,
  `date dajout` date NOT NULL,
  PRIMARY KEY (`id_type pret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb006`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb007`
--

CREATE TABLE IF NOT EXISTS `sbrhtb007` (
  `id_type compte` int(100) NOT NULL,
  `libelle type compte` varchar(100) NOT NULL,
  `date dajout` date NOT NULL,
  PRIMARY KEY (`id_type compte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb007`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb008`
--

CREATE TABLE IF NOT EXISTS `sbrhtb008` (
  `id_client` int(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `date naiss ou creat` date NOT NULL,
  `adresse postale` varchar(100) NOT NULL,
  `siege` varchar(100) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_employe` int(100) NOT NULL,
  `id_agence` int(100) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb008`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb009`
--

CREATE TABLE IF NOT EXISTS `sbrhtb009` (
  `id_demande pret` int(100) NOT NULL,
  `libdemandepret` varchar(100) NOT NULL,
  `id_contrat pret` int(100) NOT NULL,
  PRIMARY KEY (`id_demande pret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb009`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb010`
--

CREATE TABLE IF NOT EXISTS `sbrhtb010` (
  `id_contrat pret` int(100) NOT NULL,
  `libellecontratpret` varchar(100) NOT NULL,
  `debut contrat` date NOT NULL,
  `fin contrat` date NOT NULL,
  `id_type contrat` int(100) NOT NULL,
  PRIMARY KEY (`id_contrat pret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb010`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb011`
--

CREATE TABLE IF NOT EXISTS `sbrhtb011` (
  `id_periode` int(100) NOT NULL,
  `libelleperiode` varchar(100) NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb011`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb012`
--

CREATE TABLE IF NOT EXISTS `sbrhtb012` (
  `id_echeancier` int(100) NOT NULL,
  `libelleecheancier` varchar(100) NOT NULL,
  `date echeancier` date NOT NULL,
  `montant` double NOT NULL,
  PRIMARY KEY (`id_echeancier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb012`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb013`
--

CREATE TABLE IF NOT EXISTS `sbrhtb013` (
  `id_agence` int(100) NOT NULL,
  `libelleagence` varchar(100) NOT NULL,
  `date creation` date NOT NULL,
  `adresse` int(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `id_ville` int(100) NOT NULL,
  PRIMARY KEY (`id_agence`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb013`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb014`
--

CREATE TABLE IF NOT EXISTS `sbrhtb014` (
  `id_operation` int(100) NOT NULL,
  `Nom type operation` varchar(100) NOT NULL,
  `id_type operation` int(100) NOT NULL,
  `Date dajout` date NOT NULL,
  PRIMARY KEY (`id_operation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb014`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb015`
--

CREATE TABLE IF NOT EXISTS `sbrhtb015` (
  `id_type operation` int(100) NOT NULL,
  `libelletypeoperation` varchar(100) NOT NULL,
  PRIMARY KEY (`id_type operation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb015`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb016`
--

CREATE TABLE IF NOT EXISTS `sbrhtb016` (
  `id_mode reglement` int(100) NOT NULL,
  `libellemodreglement` varchar(100) NOT NULL,
  `date dajout` date NOT NULL,
  PRIMARY KEY (`id_mode reglement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb016`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb017`
--

CREATE TABLE IF NOT EXISTS `sbrhtb017` (
  `id_guichet` int(100) NOT NULL,
  `Nom guichet` varchar(100) NOT NULL,
  `agence` varchar(100) NOT NULL,
  `date dajout` date NOT NULL,
  `id_agence` int(100) NOT NULL,
  PRIMARY KEY (`id_guichet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb017`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb018`
--

CREATE TABLE IF NOT EXISTS `sbrhtb018` (
  `id_employe` int(11) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `mode didentification` varchar(100) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date de naissance` date NOT NULL,
  `adresse postale` varchar(100) NOT NULL,
  `adresse residence` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `email personnel` varchar(100) NOT NULL,
  `id_client` int(100) NOT NULL,
  `situation matrimoniale` char(10) NOT NULL,
  `nom pere` varchar(100) NOT NULL,
  `nom mere` varchar(100) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `numero de piece` varchar(100) NOT NULL,
  `nationnalite` varchar(100) NOT NULL,
  `date denregistrement` date NOT NULL,
  `ville de residence` varchar(100) NOT NULL,
  `lieu de naissance` varchar(100) NOT NULL,
  `pays de residence` varchar(100) NOT NULL,
  `Document a fournir` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `poste` varchar(100) NOT NULL,
  PRIMARY KEY (`id_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb018`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb019`
--

CREATE TABLE IF NOT EXISTS `sbrhtb019` (
  `id_pret` int(100) NOT NULL,
  `numero de compte` varchar(100) NOT NULL,
  `periode` int(100) NOT NULL,
  `type de pret` varchar(100) NOT NULL,
  `montant` int(11) NOT NULL,
  `objet demande` text NOT NULL,
  `id_client physique` int(11) NOT NULL,
  `id_client moral` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  PRIMARY KEY (`id_pret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb019`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb020`
--

CREATE TABLE IF NOT EXISTS `sbrhtb020` (
  `id_duree prelev` int(100) NOT NULL,
  `libelle duree prelev` varchar(100) NOT NULL,
  `temps prelev` int(11) NOT NULL,
  PRIMARY KEY (`id_duree prelev`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb020`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb021`
--

CREATE TABLE IF NOT EXISTS `sbrhtb021` (
  `id_ville` int(100) NOT NULL,
  `nom ville` varchar(100) NOT NULL,
  `situation geo` varchar(100) NOT NULL,
  `nom pays` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb021`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb022`
--

CREATE TABLE IF NOT EXISTS `sbrhtb022` (
  `id_categorie compte` int(100) NOT NULL,
  `libelle categorie compte` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categorie compte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb022`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb023`
--

CREATE TABLE IF NOT EXISTS `sbrhtb023` (
  `id_compte` int(11) NOT NULL,
  `numero de compte` varchar(100) NOT NULL,
  `type de compte` varchar(100) NOT NULL,
  `IBAN` varchar(100) NOT NULL,
  `SWITF` varchar(100) NOT NULL,
  `id_type compte` int(11) NOT NULL,
  `id_categorie compte` int(11) NOT NULL,
  `id_client physique` int(11) NOT NULL,
  `id_client moral` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  PRIMARY KEY (`id_compte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb023`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb024`
--

CREATE TABLE IF NOT EXISTS `sbrhtb024` (
  `id_avoir type contrat` int(100) NOT NULL,
  `id_type contrat` int(100) NOT NULL,
  `id_client morale` int(100) NOT NULL,
  `id_client physique` int(100) NOT NULL,
  PRIMARY KEY (`id_avoir type contrat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb024`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb025`
--

CREATE TABLE IF NOT EXISTS `sbrhtb025` (
  `id_etre  type client` int(100) NOT NULL AUTO_INCREMENT,
  `id_client physique` int(11) NOT NULL,
  `id_client morale` int(100) NOT NULL,
  `id_client` int(100) NOT NULL,
  PRIMARY KEY (`id_etre  type client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb025`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb026`
--

CREATE TABLE IF NOT EXISTS `sbrhtb026` (
  `id_avoir periode` int(100) NOT NULL AUTO_INCREMENT,
  `id_periode` int(11) NOT NULL,
  `id_demande pret` int(11) NOT NULL,
  `id_echeancier` int(11) NOT NULL,
  PRIMARY KEY (`id_avoir periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb026`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb027`
--

CREATE TABLE IF NOT EXISTS `sbrhtb027` (
  `id_appartenir compte` int(100) NOT NULL AUTO_INCREMENT,
  `id_compte` int(11) NOT NULL,
  `id_type compte` int(11) NOT NULL,
  `id_categorie de compte` int(11) NOT NULL,
  PRIMARY KEY (`id_appartenir compte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb027`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb028`
--

CREATE TABLE IF NOT EXISTS `sbrhtb028` (
  `id_avoir periode` int(100) NOT NULL AUTO_INCREMENT,
  `id_periode` int(11) NOT NULL,
  `id_echeancier` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_avoir periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb028`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb029`
--

CREATE TABLE IF NOT EXISTS `sbrhtb029` (
  `id_inclure pret` int(100) NOT NULL AUTO_INCREMENT,
  `id_type pret` int(11) NOT NULL,
  `id_demande pret` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_inclure pret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb029`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb030`
--

CREATE TABLE IF NOT EXISTS `sbrhtb030` (
  `id_remboursement pret` int(100) NOT NULL AUTO_INCREMENT,
  `id_pret` int(100) NOT NULL,
  `id_mode de reglement` int(100) NOT NULL,
  PRIMARY KEY (`id_remboursement pret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb030`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb031`
--

CREATE TABLE IF NOT EXISTS `sbrhtb031` (
  `id_remettre pret` int(100) NOT NULL AUTO_INCREMENT,
  `id_compte` int(11) NOT NULL,
  `id_pret` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_remettre pret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb031`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb032`
--

CREATE TABLE IF NOT EXISTS `sbrhtb032` (
  `id_pret` int(11) NOT NULL,
  `id_duree prelevement` int(11) NOT NULL,
  `id_suivre pret` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_suivre pret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb032`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb033`
--

CREATE TABLE IF NOT EXISTS `sbrhtb033` (
  `id effectuer operation` int(100) NOT NULL AUTO_INCREMENT,
  `id_compte` int(11) NOT NULL,
  `id_operation` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id effectuer operation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb033`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb034`
--

CREATE TABLE IF NOT EXISTS `sbrhtb034` (
  `id_signer contrat` int(100) NOT NULL AUTO_INCREMENT,
  `id_contrat douverture` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_signer contrat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb034`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb035`
--

CREATE TABLE IF NOT EXISTS `sbrhtb035` (
  `id contracter pret` int(100) NOT NULL AUTO_INCREMENT,
  `id_demandepret` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id contracter pret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb035`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb036`
--

CREATE TABLE IF NOT EXISTS `sbrhtb036` (
  `id_fonction` int(100) NOT NULL AUTO_INCREMENT,
  `nom fonction` varchar(100) NOT NULL,
  `date de creation` date NOT NULL,
  `id_categorie emploi` int(11) NOT NULL,
  PRIMARY KEY (`id_fonction`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb036`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb037`
--

CREATE TABLE IF NOT EXISTS `sbrhtb037` (
  `id_permission` int(100) NOT NULL AUTO_INCREMENT,
  `libelle permission` varchar(100) NOT NULL,
  `type permission` varchar(100) NOT NULL,
  `date de debut` date NOT NULL,
  `date de fin` date NOT NULL,
  `id_employe` int(11) NOT NULL,
  `Raison` text NOT NULL,
  PRIMARY KEY (`id_permission`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb037`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb038`
--

CREATE TABLE IF NOT EXISTS `sbrhtb038` (
  `id_promotion` int(100) NOT NULL AUTO_INCREMENT,
  `libelle promotion` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb038`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb039`
--

CREATE TABLE IF NOT EXISTS `sbrhtb039` (
  `id_conges` int(100) NOT NULL AUTO_INCREMENT,
  `titre conge` varchar(100) NOT NULL,
  `debut conges` date NOT NULL,
  `fin conges` date NOT NULL,
  `id_employe` int(11) NOT NULL,
  `Raisons` text NOT NULL,
  PRIMARY KEY (`id_conges`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb039`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb040`
--

CREATE TABLE IF NOT EXISTS `sbrhtb040` (
  `id_pays` int(100) NOT NULL AUTO_INCREMENT,
  `nom pays` varchar(100) NOT NULL,
  `Continent` varchar(100) NOT NULL,
  `nombre dagence` int(100) NOT NULL,
  PRIMARY KEY (`id_pays`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=199 ;

--
-- Contenu de la table `sbrhtb040`
--

INSERT INTO `sbrhtb040` (`id_pays`, `nom pays`, `Continent`, `nombre dagence`) VALUES
(1, 'Afghanistan', '', 0),
(2, 'Afrique du sud', '', 0),
(3, 'Albanie', '', 0),
(4, 'algerie', '', 0),
(5, 'allemagne', '', 0),
(6, 'Andorre', '', 0),
(7, 'Angola', '', 0),
(8, 'Antigua-et-Barbuda', '', 0),
(9, 'Arabie saoudite', '', 0),
(10, 'Argentine', '', 0),
(11, 'Armenie', '', 0),
(12, 'Australie', '', 0),
(13, 'Autriche', '', 0),
(14, 'Azerbaidjan', '', 0),
(15, 'Angola', '', 0),
(16, 'Bahamas', '', 0),
(17, 'Bahrein', '', 0),
(18, 'Bangladesh', '', 0),
(19, 'Barbade', '', 0),
(20, 'Belgique', '', 0),
(21, 'Belize', '', 0),
(22, 'Benin', '', 0),
(23, 'Bhoutan', '', 0),
(24, 'Bielorussie', '', 0),
(25, 'Birmanie', '', 0),
(26, 'Bolivie', '', 0),
(27, 'Bosnie herzegovine', '', 0),
(28, 'Botswana', '', 0),
(29, 'Bresil', '', 0),
(30, 'Brunei', '', 0),
(31, 'Bulgarie', '', 0),
(32, 'Burkina faso', '', 0),
(33, 'Burundi', '', 0),
(34, 'Cambodge', '', 0),
(35, 'Cameroun', '', 0),
(36, 'canada', '', 0),
(37, 'Cap vert', '', 0),
(38, 'Chili', '', 0),
(39, 'Chine', '', 0),
(40, 'Chypre', '', 0),
(41, 'Colombie', '', 0),
(42, 'Comores', '', 0),
(43, 'Congo', '', 0),
(44, 'Coree du nord', '', 0),
(45, 'Coree du sud', '', 0),
(46, 'Costa rica', '', 0),
(47, 'Cote Divoire', '', 0),
(48, 'Croatie', '', 0),
(49, 'Cuba', '', 0),
(50, 'Danemark', '', 0),
(51, 'Djibouti', '', 0),
(52, 'Dominique', '', 0),
(53, 'Egypte', '', 0),
(54, 'Emirats arabes unis', '', 0),
(55, 'Equateur', '', 0),
(56, 'Erythree', '', 0),
(57, 'Espagne', '', 0),
(58, 'Estonie', '', 0),
(59, 'Etats unis', '', 0),
(60, 'Ethiopie', '', 0),
(61, 'Fidji', '', 0),
(62, 'Finlande', '', 0),
(63, 'France', '', 0),
(64, 'Gabon', '', 0),
(65, 'Gambie', '', 0),
(66, 'Georgie', '', 0),
(67, 'Ghana', '', 0),
(68, 'Grece', '', 0),
(69, 'Grenade', '', 0),
(70, 'Guatemala', '', 0),
(71, 'Guinee', '', 0),
(72, 'Guinee equatoriale', '', 0),
(73, 'Guinee bissau', '', 0),
(74, 'Guyana', '', 0),
(75, 'Haiti', '', 0),
(76, 'Honduras', '', 0),
(77, 'Hongrie', '', 0),
(78, 'ile Maurice', '', 0),
(79, 'Inde', '', 0),
(80, 'Indonesie', '', 0),
(81, 'Irak', '', 0),
(82, 'Iran', '', 0),
(83, 'Irlande', '', 0),
(84, 'Islande', '', 0),
(85, 'Israel', '', 0),
(86, 'Italie', '', 0),
(87, 'jamaique', '', 0),
(88, 'Japon', '', 0),
(89, 'Jordanie', '', 0),
(90, 'Kazakhstan', '', 0),
(91, 'Kenya', '', 0),
(92, 'Kirghiztan', '', 0),
(93, 'Kiribati', '', 0),
(94, 'kosovo', '', 0),
(95, 'koweit', '', 0),
(96, 'Laos', '', 0),
(97, 'Lesotho', '', 0),
(98, 'Lettonie', '', 0),
(99, 'Liban', '', 0),
(100, 'Liberia', '', 0),
(101, 'Libye', '', 0),
(102, 'Leichtenstein', '', 0),
(103, 'Lituanie', '', 0),
(104, 'Luxembourg', '', 0),
(105, 'Macedonie', '', 0),
(106, 'Madagascar', '', 0),
(107, 'Malaisie', '', 0),
(108, 'Malawi', '', 0),
(109, 'Maldives', '', 0),
(110, 'Mali', '', 0),
(111, 'Malte', '', 0),
(112, 'Maroc', '', 0),
(113, 'Marshall', '', 0),
(114, 'Mauritanie', '', 0),
(115, 'Mexique', '', 0),
(116, 'Micronesie', '', 0),
(117, 'Moldavie', '', 0),
(118, 'Monaco', '', 0),
(119, 'Mongolie', '', 0),
(120, 'Montenegro', '', 0),
(121, 'Mozambique', '', 0),
(122, 'Namibie', '', 0),
(123, 'Nauru', '', 0),
(124, 'Nepal', '', 0),
(125, 'Nicaragua', '', 0),
(126, 'Niger', '', 0),
(127, 'Nigeria', '', 0),
(128, 'Norvege', '', 0),
(129, 'Nouvelle zelande', '', 0),
(130, 'Oman', '', 0),
(131, 'Ouganda', '', 0),
(132, 'Ouzbekistan', '', 0),
(133, 'Pakistan', '', 0),
(134, 'Palaos', '', 0),
(135, 'Palestine', '', 0),
(136, 'Panama', '', 0),
(137, 'Papouasie-Nouvelle-Guinee', '', 0),
(138, 'Paraguay', '', 0),
(139, 'Pays bas', '', 0),
(140, 'Perou', '', 0),
(141, 'Philippines', '', 0),
(142, 'Pologne', '', 0),
(143, 'Portugal', '', 0),
(144, 'Qatar', '', 0),
(145, 'Republique Centrafrique', '', 0),
(146, 'RDC', '', 0),
(147, 'Republique dominicaine', '', 0),
(148, 'Republique tcheque', '', 0),
(149, 'Roumanie', '', 0),
(150, 'Royaume uni', '', 0),
(151, 'Russie', '', 0),
(152, 'Rwanda', '', 0),
(153, 'Saint kitts et nevis', '', 0),
(154, 'Saint marin', '', 0),
(155, 'Saint vincent et les grenadines', '', 0),
(156, 'Saint lucie', '', 0),
(157, 'Salomon', '', 0),
(158, 'Salvador', '', 0),
(159, 'Samoa', '', 0),
(160, 'Sao tome et principe', '', 0),
(161, 'Senegal', '', 0),
(162, 'Serbie', '', 0),
(163, 'Seychelles', '', 0),
(164, 'Sierra leone', '', 0),
(165, 'Singapour', '', 0),
(166, 'Slovaquie', '', 0),
(167, 'Slovenie', '', 0),
(168, 'Somalie', '', 0),
(169, 'Soudan', '', 0),
(170, 'Soudan du sud', '', 0),
(171, 'Sri lanka', '', 0),
(172, 'Suede', '', 0),
(173, 'Suisse', '', 0),
(174, 'Suriname', '', 0),
(175, 'Swaziland', '', 0),
(176, 'Syrie', '', 0),
(177, 'Tadjikistan', '', 0),
(178, 'Taiwan', '', 0),
(179, 'Tanzanie', '', 0),
(180, 'Tchad', '', 0),
(181, 'Thailande', '', 0),
(182, 'Timor Oriental', '', 0),
(183, 'Togo', '', 0),
(184, 'Tonga', '', 0),
(185, 'Trinite et Tobago', '', 0),
(186, 'Turquie', '', 0),
(187, 'Tunisie', '', 0),
(188, 'Turkmenistan', '', 0),
(189, 'Tuvalu', '', 0),
(190, 'Ukraine', '', 0),
(191, 'Uruguay', '', 0),
(192, 'Vanuatu', '', 0),
(193, 'Vatican', '', 0),
(194, 'Venezuela', '', 0),
(195, 'Vietnam', '', 0),
(196, 'Yemen', '', 0),
(197, 'Zambie', '', 0),
(198, 'Zimbabwe', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb041`
--

CREATE TABLE IF NOT EXISTS `sbrhtb041` (
  `id_absence` int(100) NOT NULL AUTO_INCREMENT,
  `libelle absence` varchar(100) NOT NULL,
  PRIMARY KEY (`id_absence`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb041`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb042`
--

CREATE TABLE IF NOT EXISTS `sbrhtb042` (
  `id_categorie_poste` int(100) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `date_dajout` date NOT NULL,
  PRIMARY KEY (`id_categorie_poste`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `sbrhtb042`
--

INSERT INTO `sbrhtb042` (`id_categorie_poste`, `Nom`, `date_dajout`) VALUES
(1, 'aaaaaaaaaaa', '2018-06-14'),
(2, 'aaaaaaaaaaaaaaaaa', '2018-06-18'),
(3, 'l', '2018-06-13'),
(4, 'l', '2018-06-13'),
(5, 'l', '2018-06-13'),
(6, 'l', '2018-06-13'),
(7, 'l', '2018-06-13'),
(8, 'l', '2018-06-13'),
(9, 'l', '2018-06-13'),
(10, 'l', '2018-06-13'),
(11, 'l', '2018-06-13'),
(12, 'l', '2018-06-13');

-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb043`
--

CREATE TABLE IF NOT EXISTS `sbrhtb043` (
  `id_formation` int(100) NOT NULL AUTO_INCREMENT,
  `libelle formation` varchar(100) NOT NULL,
  `date de debut` date NOT NULL,
  `date de fin` date NOT NULL,
  `type de formation` varchar(100) NOT NULL,
  `id_employe` int(11) NOT NULL,
  `id_type formation` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb043`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb044`
--

CREATE TABLE IF NOT EXISTS `sbrhtb044` (
  `id_jour ferie` int(100) NOT NULL AUTO_INCREMENT,
  `libelle jour ferie` varchar(100) NOT NULL,
  `date jour ferie` date NOT NULL,
  `fixe` char(10) NOT NULL,
  `paye` char(10) NOT NULL,
  PRIMARY KEY (`id_jour ferie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb044`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb045`
--

CREATE TABLE IF NOT EXISTS `sbrhtb045` (
  `id_contrat` int(100) NOT NULL AUTO_INCREMENT,
  `libelle contrat` varchar(100) NOT NULL,
  `date dembauche` date NOT NULL,
  `date licenciement` date NOT NULL,
  `id_employe` int(11) NOT NULL,
  `Raison` text NOT NULL,
  PRIMARY KEY (`id_contrat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb045`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb046`
--

CREATE TABLE IF NOT EXISTS `sbrhtb046` (
  `id_carriere` int(100) NOT NULL AUTO_INCREMENT,
  `libelle carriere` varchar(100) NOT NULL,
  PRIMARY KEY (`id_carriere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb046`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb047`
--

CREATE TABLE IF NOT EXISTS `sbrhtb047` (
  `id_service` int(100) NOT NULL AUTO_INCREMENT,
  `libelle service` varchar(100) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `Date dajout` date NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb047`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb048`
--

CREATE TABLE IF NOT EXISTS `sbrhtb048` (
  `id_prime` int(100) NOT NULL AUTO_INCREMENT,
  `montant` double NOT NULL,
  `id_employe` int(11) NOT NULL,
  `Raison` text NOT NULL,
  PRIMARY KEY (`id_prime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb048`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb049`
--

CREATE TABLE IF NOT EXISTS `sbrhtb049` (
  `id_certificat` int(100) NOT NULL AUTO_INCREMENT,
  `nom certificat` varchar(100) NOT NULL,
  `date de creation` date NOT NULL,
  `type de certficat` varchar(50) NOT NULL,
  `id_etat` int(11) NOT NULL,
  PRIMARY KEY (`id_certificat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb049`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb050`
--

CREATE TABLE IF NOT EXISTS `sbrhtb050` (
  `id_personne` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date de naissance` date NOT NULL,
  `societe` varchar(100) NOT NULL,
  `adresse postale` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb050`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb051`
--

CREATE TABLE IF NOT EXISTS `sbrhtb051` (
  `id_filiation` int(100) NOT NULL AUTO_INCREMENT,
  `nom du pere` varchar(100) NOT NULL,
  `nom de la mlere` varchar(100) NOT NULL,
  PRIMARY KEY (`id_filiation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb051`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb052`
--

CREATE TABLE IF NOT EXISTS `sbrhtb052` (
  `id_poste` int(100) NOT NULL AUTO_INCREMENT,
  `libelle poste` varchar(100) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `Date dajout` date NOT NULL,
  PRIMARY KEY (`id_poste`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb052`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb053`
--

CREATE TABLE IF NOT EXISTS `sbrhtb053` (
  `id_motif` int(100) NOT NULL AUTO_INCREMENT,
  `libelle motif` varchar(100) NOT NULL,
  `id_type absence` int(11) NOT NULL,
  PRIMARY KEY (`id_motif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb053`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb054`
--

CREATE TABLE IF NOT EXISTS `sbrhtb054` (
  `id_type absence` int(100) NOT NULL AUTO_INCREMENT,
  `libelle type absence` varchar(100) NOT NULL,
  PRIMARY KEY (`id_type absence`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sbrhtb054`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb055`
--

CREATE TABLE IF NOT EXISTS `sbrhtb055` (
  `id_type formation` int(100) NOT NULL AUTO_INCREMENT,
  `libelle type formation` varchar(100) NOT NULL,
  PRIMARY KEY (`id_type formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb055`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb057`
--

CREATE TABLE IF NOT EXISTS `sbrhtb057` (
  `id_etat` int(100) NOT NULL AUTO_INCREMENT,
  `libelle etat` varchar(100) NOT NULL,
  `id_document` int(11) NOT NULL,
  PRIMARY KEY (`id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb057`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb058`
--

CREATE TABLE IF NOT EXISTS `sbrhtb058` (
  `id_domiciliation` int(100) NOT NULL AUTO_INCREMENT,
  `id_agence` int(11) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `numero compte` varchar(100) NOT NULL,
  `agence` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  PRIMARY KEY (`id_domiciliation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb058`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb059`
--

CREATE TABLE IF NOT EXISTS `sbrhtb059` (
  `id_document` int(100) NOT NULL AUTO_INCREMENT,
  `libelle document` varchar(100) NOT NULL,
  `forme document` text NOT NULL,
  PRIMARY KEY (`id_document`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb059`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb060`
--

CREATE TABLE IF NOT EXISTS `sbrhtb060` (
  `id_date promotion` int(100) NOT NULL AUTO_INCREMENT,
  `id_employe` int(11) NOT NULL,
  `id_promotion` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_date promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb060`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb061`
--

CREATE TABLE IF NOT EXISTS `sbrhtb061` (
  `id_possession carriere` int(100) NOT NULL AUTO_INCREMENT,
  `id_employe` int(11) NOT NULL,
  `id_carriere` int(11) NOT NULL,
  PRIMARY KEY (`id_possession carriere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb061`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb062`
--

CREATE TABLE IF NOT EXISTS `sbrhtb062` (
  `id_faire formation` int(11) NOT NULL AUTO_INCREMENT,
  `id_employe` int(11) NOT NULL,
  `id_formation` int(11) NOT NULL,
  `duree formation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_faire formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb062`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb063`
--

CREATE TABLE IF NOT EXISTS `sbrhtb063` (
  `id_delivrer certificat` int(100) NOT NULL AUTO_INCREMENT,
  `id_formation` int(11) NOT NULL,
  `id_certificat` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_delivrer certificat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb063`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb064`
--

CREATE TABLE IF NOT EXISTS `sbrhtb064` (
  `id_avoir prime` int(100) NOT NULL AUTO_INCREMENT,
  `id_employe` int(11) NOT NULL,
  `id_prime` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_avoir prime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb064`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb065`
--

CREATE TABLE IF NOT EXISTS `sbrhtb065` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom utilisateur` varchar(100) NOT NULL,
  `mot de pase` int(11) NOT NULL,
  `date de creation` int(11) NOT NULL,
  `id_client physique` int(100) NOT NULL,
  `id_client moral` int(100) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb065`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb066`
--

CREATE TABLE IF NOT EXISTS `sbrhtb066` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nouveau mot de passe` varchar(100) NOT NULL,
  `date changement` date NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb066`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb067`
--

CREATE TABLE IF NOT EXISTS `sbrhtb067` (
  `id_traitement` int(100) NOT NULL AUTO_INCREMENT,
  `libelle traitement` varchar(100) NOT NULL,
  `descrp traitement` varchar(100) NOT NULL,
  PRIMARY KEY (`id_traitement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb067`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb068`
--

CREATE TABLE IF NOT EXISTS `sbrhtb068` (
  `id_connecter` int(100) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `id_traitement` int(11) NOT NULL,
  `date et heure connect` datetime NOT NULL,
  PRIMARY KEY (`id_connecter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb068`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb069`
--

CREATE TABLE IF NOT EXISTS `sbrhtb069` (
  `id_groupe utilisateur` int(100) NOT NULL AUTO_INCREMENT,
  `intitule groupe` varchar(100) NOT NULL,
  PRIMARY KEY (`id_groupe utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb069`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb070`
--

CREATE TABLE IF NOT EXISTS `sbrhtb070` (
  `id_regrouper` int(100) NOT NULL AUTO_INCREMENT,
  `id_traitement` int(11) NOT NULL,
  `id_groupe utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_regrouper`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb070`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb071`
--

CREATE TABLE IF NOT EXISTS `sbrhtb071` (
  `id_titre` int(50) NOT NULL AUTO_INCREMENT,
  `nom titre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_titre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb071`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb072`
--

CREATE TABLE IF NOT EXISTS `sbrhtb072` (
  `id_categorie emploi` int(100) NOT NULL AUTO_INCREMENT,
  `nom categorie emploi` varchar(100) NOT NULL,
  `date dajout` date NOT NULL,
  PRIMARY KEY (`id_categorie emploi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb072`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb073`
--

CREATE TABLE IF NOT EXISTS `sbrhtb073` (
  `id_gestionnaire` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `situation matrimoniale` varchar(100) NOT NULL,
  `nom pere` varchar(100) NOT NULL,
  `nom mere` varchar(100) NOT NULL,
  `mode identification` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `numero piece` varchar(100) NOT NULL,
  `nationnalite` varchar(100) NOT NULL,
  `date dinscription` date NOT NULL,
  `ville de residence` varchar(100) NOT NULL,
  `lieu de naissance` varchar(100) NOT NULL,
  `pays de residence` varchar(100) NOT NULL,
  `adresse postale` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `fix` varchar(100) NOT NULL,
  `document a fournir` varchar(100) NOT NULL,
  PRIMARY KEY (`id_gestionnaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb073`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb074`
--

CREATE TABLE IF NOT EXISTS `sbrhtb074` (
  `id_depot` int(11) NOT NULL AUTO_INCREMENT,
  `libelle depot` varchar(100) NOT NULL,
  `date depot` date NOT NULL,
  `montant` int(11) NOT NULL,
  `id_client physique` int(11) NOT NULL,
  `id_client moral` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  PRIMARY KEY (`id_depot`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb074`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb075`
--

CREATE TABLE IF NOT EXISTS `sbrhtb075` (
  `id_retrait` int(11) NOT NULL AUTO_INCREMENT,
  `libelle retrait` varchar(100) NOT NULL,
  `date retrait` date NOT NULL,
  `montant` int(11) NOT NULL,
  `id_client moral` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  `id_client physique` int(11) NOT NULL,
  PRIMARY KEY (`id_retrait`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb075`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb076`
--

CREATE TABLE IF NOT EXISTS `sbrhtb076` (
  `id_beneficiaire virement` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `banque` varchar(100) NOT NULL,
  `agence` varchar(100) NOT NULL,
  `IBAN` varchar(100) NOT NULL,
  `SWITF` varchar(100) NOT NULL,
  `MONTANT` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  `id_client moral` int(11) NOT NULL,
  `id_client physique` int(11) NOT NULL,
  PRIMARY KEY (`id_beneficiaire virement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb076`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb077`
--

CREATE TABLE IF NOT EXISTS `sbrhtb077` (
  `id_monnaie` int(11) NOT NULL AUTO_INCREMENT,
  `montant FCFA` int(11) NOT NULL,
  `nouvelle monnaie` varchar(100) NOT NULL,
  `id_client physique` int(11) NOT NULL,
  `id_client moral` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  PRIMARY KEY (`id_monnaie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb077`
--


-- --------------------------------------------------------

--
-- Structure de la table `sbrhtb078`
--

CREATE TABLE IF NOT EXISTS `sbrhtb078` (
  `id_type piece` int(11) NOT NULL AUTO_INCREMENT,
  `libelle type piece` varchar(100) NOT NULL,
  `date dajout` date NOT NULL,
  PRIMARY KEY (`id_type piece`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sbrhtb078`
--

