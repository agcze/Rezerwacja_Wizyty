CREATE DATABASE FryzjerDB

CREATE TABLE Klienci(
	id int IDENTITY(1,1) PRIMARY KEY,
	Imie varchar(50) NOT NULL,
	Nazwisko varchar(50) NOT NULL,
	Telefon varchar(9) NOT NULL,
	Email varchar(50) NULL
	);
	
	
CREATE TABLE Pracownicy(
	id int IDENTITY(1,1) PRIMARY KEY,
	Imie varchar(50) NOT NULL,
	Nazwisko varchar(50) NOT NULL,
	Specjalizacja varchar(30) NULL,
	Salon int NULL
);	

CREATE TABLE Rezerwacje(
	id int IDENTITY(1,1) PRIMARY KEY,
	KlientID int NULL,
	SalonID int NULL,
	PracownikID int NULL,
	UslugaID int NULL,
	DataRezerwacji date NULL,
	GodzinaRezerwacji time(7) NULL,
	Status varchar(50) NULL
);


CREATE TABLE Salon(
	id int IDENTITY(1,1) PRIMARY KEY,
	Nazwa varchar(50) NOT NULL,
	Ulica varchar(50) NOT NULL,
	Miasto varchar(50) NOT NULL,
	KodPocztowy varchar(6) NOT NULL,
	Telefon varchar(9) NULL,
	GodzinaOtwarcia time(7) NULL,
	GodzinaZamkniecia time(7) NOT NULL
);

CREATE TABLE Uslugi(
	id int IDENTITY(1,1) PRIMARY KEY,
	Nazwa varchar(50) NOT NULL,
	Cena decimal(6, 2) NULL,
	Opis varchar(300) NULL,
	CzasTrwania varchar(10) NULL,
	Typ char(3) NULL,
	Popularnosc int NOT NULL,
	zdj varchar(250) NOT NULL,
);

ALTER TABLE Pracownicy  WITH CHECK ADD FOREIGN KEY(Salon)
REFERENCES Salon (id)
GO
ALTER TABLE Rezerwacje  WITH CHECK ADD FOREIGN KEY(KlientID)
REFERENCES Klienci (id)
GO
ALTER TABLE Rezerwacje  WITH CHECK ADD FOREIGN KEY(PracownikID)
REFERENCES Pracownicy (id)
GO
ALTER TABLE Rezerwacje  WITH CHECK ADD FOREIGN KEY(UslugaID)
REFERENCES Uslugi (id)
GO


	
	