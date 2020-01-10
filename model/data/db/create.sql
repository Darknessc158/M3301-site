CREATE TABLE publication{
      idPublication INTEGER PRIMARY KEY AUTO_INCREMENT,
      titre varchar(40),
      description TEXT,
      content varchar(400),
      datePublication DATE
};

 CREATE TABLE histoireclub{
       image varchar(20),
       description varchar(60),
       annee varchar(4)
 };
CREATE DATABASE scale;
USE scale;
CREATE TABLE adherent (
     idAdherent  INTEGER PRIMARY KEY AUTO_INCREMENT,
     nom varchar(30) NOT NULL,
     prenom varchar(30) NOT NULL,
     categorie varchar(30),
     role varchar(60),
     datenaissance DATE,
     adresse varchar(40),
     telephone char(10),
     mail varchar(40),
     numLicence varchar(20),
     urlPhoto varchar(100),
     urlPhotoAlt varchar(100)
);

CREATE TABLE paiement (
  idPaiement INTEGER PRIMARY KEY AUTO_INCREMENT,
  datePaiement DATE,
  prix float,
  description varchar(100),
  etatDuPaiement varchar(50),
  type varchar(35),
  idAdherent INTEGER
);

CREATE TABLE article (
  idArticle INTEGER PRIMARY KEY AUTO_INCREMENT,
  prix float,
  categorie varchar(35),
  quantite INTEGER,
  description varchar(100),
  marque varchar(35)
);



CREATE TABLE commandearticle(
   numArticle INTEGER,
   numPaiement INTEGER,
   quantiteCommande INTEGER,
   FOREIGN KEY (numArticle) REFERENCES  article(idArticle),
   FOREIGN KEY (numPaiement) REFERENCES  paiement(idPaiement)
);

CREATE TABLE users(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
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
