USE game_collection;

DROP TABLE IF EXISTS Utilisateur;
DROP TABLE IF EXISTS Jeu;
DROP TABLE IF EXISTS Plateforme;
DROP TABLE IF EXISTS Disponibilité;
DROP TABLE IF EXISTS Bibliotheque;

CREATE TABLE Utilisateur(
   id_utilisateur INT AUTO_INCREMENT,
   nom_utilisateur VARCHAR(100) NOT NULL,
   prenom_utilisateur VARCHAR(100) NOT NULL,
   mail_utilisateur VARCHAR(100) NOT NULL UNIQUE,
   mdp_utilisateur VARCHAR(255) NOT NULL,
   PRIMARY KEY(id_utilisateur)
);

CREATE TABLE Jeu(
   id_jeu INT AUTO_INCREMENT,
   nom_jeu VARCHAR(100) NOT NULL,
   editeur_jeu VARCHAR(100) NOT NULL,
   date_jeu DATE NOT NULL,
   desc_jeu VARCHAR(255),
   url_img_jeu TEXT NOT NULL,
   url_site_jeu TEXT NOT NULL,
   PRIMARY KEY(id_jeu)
);

CREATE TABLE Plateforme(
   nom_plateforme VARCHAR(50),
   PRIMARY KEY(nom_plateforme)
);

CREATE TABLE Disponibilité(
   id_jeu INT,
   nom_plateforme VARCHAR(50),
   num_ordre_plateforme INT NOT NULL AUTO_INCREMENT,
   PRIMARY KEY(id_jeu, nom_plateforme),
   UNIQUE(num_ordre_plateforme),
   FOREIGN KEY(id_jeu) REFERENCES jeu(id_jeu),
   FOREIGN KEY(nom_plateforme) REFERENCES plateforme(nom_plateforme)
);

CREATE TABLE Bibliotheque(
   id_utilisateur INT,
   id_jeu INT,
   nb_heure_jeu INT NOT NULL,
   PRIMARY KEY(id_utilisateur, id_jeu),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
   FOREIGN KEY(id_jeu) REFERENCES Jeu(id_jeu)
);

INSERT INTO Plateforme values("Playstation"),
	("Xbox"),
	("Nintendo"),
    ("PC");




