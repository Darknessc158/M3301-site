-- CREATE TABLE histoireclub{
--       image varchar(10),
--       description STRING,
--       annee varchar(4)
-- };

CREATE TABLE adherent (
     idAdherent  INTEGER PRIMARY KEY,
     nom varchar(30) NOT NULL,
     prenom varchar(30) NOT NULL,
     categorie varchar(30),
     datenaissance DATE,
     adresse varchar(40),
     telephone char(10),
     mail varchar(40),
     numLicence varchar(20) UNIQUE,
     FOREIGN KEY (numLicence) REFERENCES  licence(numLicence)
);

CREATE TABLE paiement (
  idPaiement INTEGER PRIMARY KEY,
  datePaiement DATE,
  prix float,
  description varchar(100),
  etatDuPaiement varchar(50),
  type varchar(35),
  idAdherent INTEGER
);

CREATE TABLE article (
  idArticle INTEGER PRIMARY KEY,
  prix float,
  categorie varchar(35),
  quantite INTEGER,
  description varchar(100),
  marque varchar(35)
);

-- CREATE TABLE licence(
--   numLicence int PRIMARY KEY,
--   federation STRING,
--   idPaiement int,
--   idAdherent int(3),
--    );
--
-- CREATE TABLE paimentLicence(
--   idPaiement int PRIMARY KEY,
--   datePayement date,
--   montant float,
--   typePyement STRING,
--
--   FOREIGN KEY (idAdherent) REFERENCES  adherent(idAdherent)
-- );


/*CREATE TABLE achatArticle(
    idArticle int(3) PRIMARY KEY,
    nom STRING,
    description STRING,
    prixVente float,
    quantite int,
    taille STRING
);

CREATE TABLE achatAdherent(
  idArticle int(3),
  idAdherent int(3),
  dateAchat DATE,
  paiement BOOLEAN,
  PRIMARY KEY(idArticle, idAdherent),
  FOREIGN KEY (idArticle) REFERENCES  article(idArticle),
  FOREIGN KEY (idAdherent) REFERENCES  adherent(idAdherent)
);


CREATE TABLE bonDeCommande(
  idBonDeCommande int(3) PRIMARY KEY,
  dateAchat DATE,
  prixTotal float,
  validation BOOLEAN
);

CREATE TABLE articleCommande(
  idBonDeCommande int(3),
  nom STRING,
  taille STRING,
  quantite int,
  prixDEVente float
);*/
