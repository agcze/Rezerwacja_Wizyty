INSERT INTO Klienci (Imie, Nazwisko, Telefon, Email) VALUES
('Zdzisława', 'Maciejewska', '512144747', 'antwhite82@gmaillli.com'),
('Honorata', 'Piątek', '818444545', 'networking808@example.com'),
('Melania', 'Zięba', '798666212', 'mz@op.pl'),
('Hubert', 'Czajkowski', '656898222', NULL),
('Eryka', 'Piotrowska', '545878898', 'ep@wp.pl'),
('Alicja', 'Krawczyk', '959232656', NULL),
('Zenon', 'Dudek', '658258963', NULL),
('Waldemar', 'Król', '626323353', 'wk@np.pl'),
('Przemysław', 'Kruk', '951159519', 'prze@o2.pl'),
('Barbara', 'Mazur', '147874417', 'basienka@element.com'),


------------------------------------------------------------------------

INSERT INTO Salon (Nazwa, Ulica, Miasto,KodPocztowy, Telefon,GodzinaOtwarcia, GodzinaZamkniecia) VALUES
('Salon fryzjerski u Grażyny','Ludowa 2','Świętochłowice','12-184','515412321','08:00:00','16:00:00')
('Zetnij włosa', 'Kasztanowa 23', 'Świnoujście','29-196' ,'192127854','8:00:00','20:00:00'),
('Fryz','Łąkowa 3', 'Siemianowice Śląskie','71-380', '147849877','8:00:00','16:00:00'),
('Złote Nożyczki', 'Kilińskiego  8', 'Toruń','18-236', '185144477', '9:00:00','17:00:00'),
('Fryzury na Fali','Jarzębinowa 5', 'Częstochowa','16-010','444777888', '9:00:00','17:00:00'),
('Fryzjerski Zakątek',  'Różana 16',  'Opole', '95-811', '333444555', '8:30:00','16:30:00'),
('Mistrzowie Stylu', 'Kwiatowa 15','Warszawa','01-234','111222333', '8:00:00','20:00:00'),
('Fryzjerska Oaza', 'Słoneczna 10','Wrocław','35-220' ,'123456789', '9:00:00','17:00:00'),
('Włosowe Cuda',  'Leśna 22', 'Kraków','22-520','128744441','8:00:00','20:00:00'),
('Czarodziejskie Nożyczki', 'Morska 5','Gdańsk','54-787', '125128988','9:00:00','17:00:00'),
('Fryzjerska Przyjemność','Sądowa  9','Białystok','15-001', '666111999', '9:00:00','17:00:00'),
('Tnij włos', 'Rynkowa 4','Katowice','40-330', '108406170', '8:00:00','20:00:00'),
('Dancing Hair',' Wiosenna 10','Wrocław','41-177', '125154787', '9:00:00','17:00:00'),
('Fryzjerskie cuda',' Lechitów 22','Gdańsk','58-212' ,'169854521', '8:30:00','16:30:00'),
('Fryzury w ruchu', 'Jagiellońska 44','Kraków','30-412',  '158974562','9:00:00','17:00:00'),
('Czarujące włosy', 'Zimowa 1','Lublin','87-741','169852583', '8:30:00','16:30:00'),
('Stylowe loksy', 'Nowa 35','Łódź', '15-011', '632123521', '8:00:00','20:00:00'),
('Skręt i cięcie', 'Letnia 56', 'Kraków','17-019','147844788', '9:00:00','17:00:00'),
('Zepnij włosa', 'Radosna 6','Radom', '43-997', '545745475','9:00:00','17:00:00'),
('Eleganckie nożyczki', 'Oponowa 2','Sanok', '54-363', '755552258', '8:00:00','20:00:00');

--------------------------------------------------------------------------------------

INSERT INTO Uslugi (Nazwa, Cena, Opis, CzasTrwania, Typ, Popularnosc,Zdj) VALUES
('Strzyżenie męskie', '50.00', NULL, '30 minut', 'M',7,'man_hair.jpg'),
('Strzyżenie damskie', '80.00', 'Usługa obejmuje przycinanie włosów do pożądanej długości oraz nadawanie im odpowiedniego kształtu', '45 minut ', 'K',`10,'scissors.jpg'),
('Strzyżenie dziecięce', '40.00', NULL, '30 minut', 'M/K',0),
('Koloryzacja-krótkie włosy', '150.00', 'Usługa ta polega na zmianie koloru włosów za pomocą farb, szamponów koloryzujących lub innych preparatów. Można wybierać spośród różnych technik, takich jak balayage, ombre, refleksy czy jednolita koloryzacja', '90 minut', 'M/K',10),
('Koloryzacja-długie włosy', '200.00', NULL, ' 120 minut', 'M/K',0,'Palette.jpg'),
('Balayage', '250.00', NULL, ' 150 minut', 'K',0,'baleyage.png'),
('Pasemka', '220.00', 'Usługa polega na nałożeniu jaśniejszych lub ciemniejszych odcieni farby na wybrane sekcje włosów', '120 minut', 'M/K',0),
('Prostowanie włosów', '200.00', NULL, ' 120 minut', 'K',0),
('Trwała ondulacja ', '250.00', 'Nadanie włosom stałej lub długotrwałej falistej lub kręconej struktury', '150 minut ', 'M/K',0),
('Maska na włosy', '40.00', NULL, '30 minut', 'M/K',8),
('Przepięcia i stylizowanie włosów', '70.00', NULL, '60 minut', 'M/K',0),
('Mycie włosów z masażem', '30.00', NULL, ' 20 minut', 'M/K',0),
('Podcinanie końcówek', '30.00', NULL, '20 minut', 'K',0),
('Fryzura okolicznościowa', '100.00', NULL, '60 minut', 'K',3,'hair.png'),
('Stylizacja brody', '40.00', NULL, '30 minut', 'M',5);



INSERT INTO Pracownicy ( Imie, Nazwisko, Specjalizacja,Salon) VALUES
('Jakub', 'Majchrzak', 'Fryzjer męski', 1),
('Igor', 'Kwiatkowski', 'Fryzjer męski', 2),
('Klara', 'Gajewska', 'Fryzjer damski', 3),
('Magdalena', 'Kaczmarek', 'Fryzjer uniwersalny', 4),
('Krzysztof', 'Cybulski', 'Fryzjer uniwersalny', 5),
('Maria', 'Wójcik', 'Fryzjer damski', 6),
('Katarzyna', 'Lewandowska', 'Fryzjer damski', 7),
('Elżbieta', 'Patyk', 'Fryzjer damski', 8),
('Anna', 'Kowalska', 'Fryzjer uniwersalny', 9),
('Agnieszka', 'Zielińska', 'Fryzjer damski', 10),
('Maria', 'Kaczmarek', 'Fryzjer uniwersalny', 11),
('Piotr', 'Lis', 'Fryzjer męski', 12),
('Emilia', 'Wnuk', 'Fryzjer damski', 13),
('Grzegorz', 'Ptak', 'Fryzjer męski', 14),
('Karol', 'Rams', 'Fryzjer uniwersalny', 15),
('Cyprian', 'Pająk', 'Fryzjer uniwersalny', 16),
('Piotr', 'Lach', 'Fryzjer męski', 17),
('Patrycja', 'Dudzik', 'Fryzjer damski', 18),
('Dawid', 'Wielgus', 'Fryzjer uniwersalny', 19),
('Lidia', 'Mróz', 'Fryzjer damski', 20),
('Hubert', 'Bryl', 'Fryzjer męski', 1),
('Anna', 'Himer', 'Fryzjer męski', 2),
('Katarzyna', 'Nosal', 'Fryzjer damski', 3),
('Agnieszka', 'Mól', 'Fryzjer uniwersalny', 4),
('Urszula', 'Czerwińska', 'Fryzjer uniwersalny', 5),
('Klaudiusz', 'Bąk', 'Fryzjer damski', 6),
('Kacper', 'Rataj', 'Fryzjer damski', 7),
('Filip', 'Noga', 'Fryzjer damski', 8),
('Jacek', 'Drep', 'Fryzjer uniwersalny', 9),
('Antoni', 'Litewski', 'Fryzjer damski', 10),
('Michał', 'Hierko', 'Fryzjer uniwersalny', 11),
('Natalia', 'Ares', 'Fryzjer męski', 12),
('Sebastian', 'Nicpoń', 'Fryzjer damski', 13),
('Halina', 'Rak', 'Fryzjer męski', 14),
('Jacek', 'Ryś', 'Fryzjer uniwersalny', 15),
('Celina', 'Res', 'Fryzjer uniwersalny', 16),
('Franciszka', 'Liskier', 'Fryzjer męski', 17),
('Bartosz', 'Samowski', 'Fryzjer damski', 18),
('Natalia', 'Sęp', 'Fryzjer uniwersalny', 19),
('Norbert', 'Wnęk', 'Fryzjer damski', 20);

-------------------------------------------------------

INSERT INTO Rezerwacje (KlientID,SalonID, PracownikID, UslugaID, DataRezerwacji, GodzinaRezerwacji, Status) VALUES
(1, 1, 21,1, '2025-03-26', '14:00:00.0000000', 'Potwierdzona');
