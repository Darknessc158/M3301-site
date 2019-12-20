CREATE TABLE TYPE (
   nomType TEXT PRIMARY KEY,
   tailleMoy FLOAT,
   imberbe BOOLEAN
);


CREATE TABLE PERSONNAGES (
   nomPers TEXT PRIMARY KEY,
   nomType TEXT,
   anNaiss SMALLINT,
   Foreign key (nomType) references TYPE(nomType)
);

CREATE TABLE LIVRE (
   nomPers TEXT NOT NULL
   traitCar TEXT NOT NULL,
   coefCar FLOAT constraint coef_constraint check(coefCar between 0 and 1),
   numChap SMALLINT NOT NULL,
   numLivre TEXT NOT NULL,
   PRIMARY KEY (nomPers, numChap, numLivre, traitCar)
);

CREATE TABLE CHAPITRE (
   numChap SMALLINT NOT NULL,
   numLivre TEXT NOT NULL,
   titre TEXT,
   PRIMARY KEY (numChap, numLivre),
   Foreign key (numLivre, numChap) references LIVRE(numLivre, numChap),
);

INSERT INTO TYPE VALUES ('hobbit', 90, 'no');
INSERT INTO TYPE VALUES ('nain', 100, 'no');
INSERT INTO TYPE VALUES ('Istar', 170, 'no');
INSERT INTO TYPE VALUES ('Elfe', 160, 'yes');
INSERT INTO TYPE VALUES ('humain', 180, 'no');
INSERT INTO TYPE VALUES ('balrog', 9000, 'yes');


INSERT INTO LIVRE VALUES ('Frodon', 'courageux', 0.95, 12, 1);
INSERT INTO LIVRE VALUES ('Frodon', 'joyeux', 0.8, 1, 1 );
INSERT INTO LIVRE VALUES ('Frodon', 'impatient', 0.7, 1, 1);
INSERT INTO LIVRE VALUES ('Frodon', 'triste', 0.5, 17, 1);
INSERT INTO LIVRE VALUES ('Frodon', 'peureux', 0.6, 17, 1);
INSERT INTO LIVRE VALUES ('Frodon', 'triste', 0.85, 22, 1);
INSERT INTO LIVRE VALUES ('Frodon', 'sagace', 0.75, 12, 2);
INSERT INTO LIVRE VALUES ('Frodon', 'découragé', 0.55, 14, 2);
INSERT INTO LIVRE VALUES ('Frodon', 'effrayé', 0.65, 20, 2);
INSERT INTO LIVRE VALUES ('Frodon', 'impatient', 0.45, 4, 3);
INSERT INTO LIVRE VALUES ('Frodon', 'souffrant', 0.95, 10, 3);
INSERT INTO LIVRE VALUES ('Frodon', 'agonisant', 0.85, 13, 3);
INSERT INTO LIVRE VALUES ('Gimli', 'impétueux', 0.99, 22, 1);
INSERT INTO LIVRE VALUES ('Gimli', 'courageux', 0.97, 17, 1);
INSERT INTO LIVRE VALUES ('Gimli', 'téméraire', 0.96, 4, 3);
INSERT INTO LIVRE VALUES ('Gandalf', 'perspicace', 0.80, 12, 1);
INSERT INTO LIVRE VALUES ('Gandalf', 'téméraire', 0.80, 17, 1);
INSERT INTO LIVRE VALUES ('Gandalf', 'courageux', 0.80, 4, 3);
INSERT INTO LIVRE VALUES ('Elrond', 'sage', 0.80, 22, 1);
INSERT INTO LIVRE VALUES ('Elrond', 'paisible', 0.80, 12, 2);
INSERT INTO LIVRE VALUES ('Galadriel', 'paisible', 0.75, 12, 2);
INSERT INTO LIVRE VALUES ('Legolas', 'paisible', 0.78, 12, 2);
INSERT INTO LIVRE VALUES ('Legolas', 'enthousiaste', 0.78, 4, 3);
INSERT INTO LIVRE VALUES ('Aragorn II', 'courageux', 0.93, 22, 1);
INSERT INTO LIVRE VALUES ('Aragorn II', 'angoissé', 0.93, 4, 3);
INSERT INTO LIVRE VALUES ('Eorl', 'fier', 0.93, 12, 2);
INSERT INTO LIVRE VALUES ('Boromir', 'fou', 0.93, 22, 1);
INSERT INTO LIVRE VALUES ('Sméagol', 'maladroit', 0.5, 13, 3);
INSERT INTO LIVRE VALUES ('Fléau de Durin', 'peureux', 0.5, 17, 1);
