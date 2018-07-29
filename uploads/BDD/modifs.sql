ALTER TABLE electeur ADD civElecteur VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Mr' AFTER CIN;


--
-- 15:32
--
INSERT INTO `province` (`idProvince`, `nomProvince`) VALUES (NULL, 'Antananarivo');
INSERT INTO `province` (`idProvince`, `nomProvince`) VALUES (NULL, 'Antsiranana');
INSERT INTO `province` (`idProvince`, `nomProvince`) VALUES (NULL, 'Fianarantsoa');
INSERT INTO `province` (`idProvince`, `nomProvince`) VALUES (NULL, 'Mahajanga');
INSERT INTO `province` (`idProvince`, `nomProvince`) VALUES (NULL, 'Toamasina');
INSERT INTO `province` (`idProvince`, `nomProvince`) VALUES (NULL, 'Toliara');



--
-- region
--
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '1', 'Itasy'); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '1', 'Analamanga'); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '1', 'Vakinankaratra'); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '1', 'Bongolava'); 


INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '2', 'Diana'); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '2', 'Sava'); 

INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '3', "Amoron'i Mania"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '3', "Matsiatra Ambony"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '3', "Vatovavy-Fitovinany"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '3', "Atsimo-Atsinanana"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '3', "Ihorombe");


INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '4', "Sofia"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '4', "Boeny"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '4', "Betsiboka"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '4', "Melaky"); 

INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '5', "Alaotra-Mangoro"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '5', "Atsinanana"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '5', "Analanjirofo"); 

INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '6', "Menabe"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '6', "Atsimo-Andrefana"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '6', "Androy"); 
INSERT INTO `region` (`idRegion`, `idProvince`, `nomRegion`) VALUES (NULL, '6', "Anosy"); 

--
-- Communes des regions Itasy, Diana et Amoron'i Mania
--
INSERT INTO `commune` (`idCommune`, `idRegion`, `nomCommune`) 
VALUES 
(NULL, '1', 'Arivonimamo I '), 
(NULL, '1', 'Arivonimamo II '), 
(NULL, '1', 'Arivonimamo II '), 

(NULL, '5', 'Hell-Ville'), 
(NULL, '5', 'Ampangorina'), 
(NULL, '5', 'Ambatozavavy'), 

(NULL, '7', 'Ambatofinandrahana'), 
(NULL, '7', 'Itremo'), 
(NULL, '7', 'Fenoarivo');

--
-- Fokotany 
--
INSERT INTO `fokontany` (`idFokontany`, `idCommune`, `nomFokontany`) 
VALUES (NULL, '1', 'Andranomena '),
(NULL, '1', 'Ankeniheny '),

(NULL, '3', 'Camp vert'),
(NULL, '3', 'Miadana'),

(NULL, '5', 'Ambatozavavy'),
(NULL, '5', 'Antafondro')
;


--
-- Appareil 
-- 
INSERT INTO `appareil` (`idAppareil`, `idTerminal`, `clecryptageAppareil`) VALUES (NULL, 'sadsadsadsa32132132sad', '2132131sadas');
INSERT INTO `appareil` (`idAppareil`, `idTerminal`, `clecryptageAppareil`) VALUES (NULL, 'sadfdxcv', '2131388151assaddsa');
INSERT INTO `appareil` (`idAppareil`, `idTerminal`, `clecryptageAppareil`) VALUES (NULL, '6565s21231asd', 'sad1sa23d1sa231221');

--
-- Bureau de vote 
--


INSERT INTO `bureaudevote` (`idBureauDeVote`, `idFokontany`, `idAppareil`, `libelleBureauDeVote`, `adresseBureauDeVote`) VALUES (NULL, '1', '1', 'Bureau de vote 1', 'Lot BDV 3');
INSERT INTO `bureaudevote` (`idBureauDeVote`, `idFokontany`, `idAppareil`, `libelleBureauDeVote`, `adresseBureauDeVote`) VALUES (NULL, '2', '2', 'Bureau de vote 2', 'Lot BDV 2');
INSERT INTO `bureaudevote` (`idBureauDeVote`, `idFokontany`, `idAppareil`, `libelleBureauDeVote`, `adresseBureauDeVote`) VALUES (NULL, '3', '3', 'Bureau de vote 3', 'Lot BDV 3');
--
-- Electeur 
--

INSERT INTO `electeur` (`CIN`, `civElecteur`, `idFokontany`, `idBureauDeVote`, `nomElecteur`, `prenomElecteur`, `ageElecteur`, `adresseElecteur`, `estPresident`) 
VALUES (NULL, 'Mr', '1', '1', 'RAMORA ', 'Favori', '35', 'Lot Quartier RMF', '0');

INSERT INTO `electeur` (`CIN`, `civElecteur`, `idFokontany`, `idBureauDeVote`, `nomElecteur`, `prenomElecteur`, `ageElecteur`, `adresseElecteur`, `estPresident`) 
VALUES (NULL, 'Mr', '1', '1', 'RAJAO ', 'Hary', '50', 'Lot Quartier RJ H', '1');

INSERT INTO `electeur` (`CIN`, `civElecteur`, `idFokontany`, `idBureauDeVote`, `nomElecteur`, `prenomElecteur`, `ageElecteur`, `adresseElecteur`, `estPresident`) 
VALUES (NULL, 'Mr', '1', '1', 'RAKOTO ', 'Zanahary', '20', 'Lot Quartier RZH', '0');

INSERT INTO `electeur` (`CIN`, `civElecteur`, `idFokontany`, `idBureauDeVote`, `nomElecteur`, `prenomElecteur`, `ageElecteur`, `adresseElecteur`, `estPresident`) 
VALUES (NULL, 'Mr', '1', '1', 'RABEZAKA', 'Jean', '35', 'Lot Quartier RBJ', '0');

INSERT INTO `electeur` (`CIN`, `civElecteur`, `idFokontany`, `idBureauDeVote`, `nomElecteur`, `prenomElecteur`, `ageElecteur`, `adresseElecteur`, `estPresident`) 
VALUES (NULL, 'Mr', '1', '1', 'RANORY', 'Patrice', '43', 'Lot Quartier RPT', '0');




INSERT INTO `electeur` (`CIN`, `civElecteur`, `idFokontany`, `idBureauDeVote`, `nomElecteur`, `prenomElecteur`, `ageElecteur`, `adresseElecteur`, `estPresident`) 
VALUES (NULL, 'Mr', '1', '2', 'RAKOTO ', 'Martine', '20', 'Lot Quartier RMR', '0');

INSERT INTO `electeur` (`CIN`, `civElecteur`, `idFokontany`, `idBureauDeVote`, `nomElecteur`, `prenomElecteur`, `ageElecteur`, `adresseElecteur`, `estPresident`) 
VALUES (NULL, 'Mr', '1', '2', 'RABEZAKA', 'Paulette', '65', 'Lot Quartier RBP', '0');

INSERT INTO `electeur` (`CIN`, `civElecteur`, `idFokontany`, `idBureauDeVote`, `nomElecteur`, `prenomElecteur`, `ageElecteur`, `adresseElecteur`, `estPresident`) 
VALUES (NULL, 'Mr', '1', '2', 'RANORY', 'Johary', '53', 'Lot Quartier RNJ', '0');


--
-- Candidat
--
INSERT INTO `candidat` (`idCandidat`, `CIN`, `civCandidat`, `partieCandidat`, `abrevpartieCandidat`, `logopartieCandidat`, `bloqueCandidat`, `eluCandidat`) 
VALUES (NULL, '1', 'Mr', 'Parti Démocrate Ramora', 'PDR', '', '0', NULL);

INSERT INTO `candidat` (`idCandidat`, `CIN`, `civCandidat`, `partieCandidat`, `abrevpartieCandidat`, `logopartieCandidat`, `bloqueCandidat`, `eluCandidat`) 
VALUES (NULL, '2', 'Mr', 'Parti Hary Vaovao', 'PHV', '', '0', NULL);

INSERT INTO `candidat` (`idCandidat`, `CIN`, `civCandidat`, `partieCandidat`, `abrevpartieCandidat`, `logopartieCandidat`, `bloqueCandidat`, `eluCandidat`) 
VALUES (NULL, '3', 'Mme', 'Parti Vert Vaovao', 'PVV', '', '0', NULL);

--
-- Programme
--
ALTER TABLE `candidat` ADD `programmeCandidat` LONGTEXT NULL DEFAULT NULL AFTER `eluCandidat`;

ALTER TABLE `candidat` DROP FOREIGN KEY `fk_Candidat_Electeur1`;
ALTER TABLE `participation` DROP FOREIGN KEY `fk_Participation_Electeur1`;
ALTER TABLE `representantcandidat` DROP FOREIGN KEY `fk_RepresentantCandidat_Electeur1`;

ALTER TABLE `electeur` CHANGE `CIN` `CIN` INT(12) NOT NULL;


ALTER TABLE `candidat`
  ADD CONSTRAINT `fk_Candidat_Electeur1` FOREIGN KEY (`CIN`) REFERENCES `electeur` (`CIN`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `participation`
  ADD CONSTRAINT `fk_Participation_Electeur1` FOREIGN KEY (`Electeur_CIN`) REFERENCES `electeur` (`CIN`) ON DELETE NO ACTION ON UPDATE NO ACTION; 

ALTER TABLE `representantcandidat`
  ADD CONSTRAINT `fk_RepresentantCandidat_Electeur1` FOREIGN KEY (`CIN`) REFERENCES `electeur` (`CIN`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `electeur` ADD `nomFokontany` VARCHAR(255) NULL DEFAULT NULL AFTER `estPresident`;

drop table video;
CREATE TABLE IF NOT EXISTS video (
  idVideo int(11) NOT NULL AUTO_INCREMENT,
  langVideo varchar(45) DEFAULT NULL,
  titreVideo varchar(255) NOT NULL,
  contenuVideo text NOT NULL,
  categorieVideo tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (idVideo)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS files (
  idFile int(11) NOT NULL AUTO_INCREMENT,
  idPath int(11) NOT NULL,
  titreFile varchar(255) DEFAULT 'sans titre',
  sourceFile text NOT NULL,
  PRIMARY KEY (idFile)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;