CREATE TABLE Pojazdy(
    id int PRIMARY KEY AUTO_INCREMENT,
    rokd_prod int NOT NULL,
    data_rej DATE DEFAULT CURDATE()
);

CREATE TABLE Modele(
    id int AUTO_INCREMENT PRIMARY KEY,
    nazwa_modelu varchar(50) UNIQUE NOT NULL
);

ALTER TABLE Pojazdy
ADD id_modelu int;

ALTER TABLE Pojazdy
ADD CONSTRAINT fk_modele 
FOREIGN KEY(id_modelu) REFERENCES modele(id);

ALTER TABLE Lektura_JG
ADD CONSTRAINT FK_epoka_literacka 
FOREIGN KEY (Epoko_literacka_JG) REFERENCES Epoka_literacka_JG(idEpoka);

ALTER TABLE zgloszenia
ADD CONSTRAINT fk_dyspozytorzy
FOREIGN KEY(dyspozytorzy_Id) REFERENCES dyspozytorzy(id);

ALTER TABLE książki_JG
MODIFY Gatunek varchar(255) UNIQUE;