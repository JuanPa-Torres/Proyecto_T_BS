
use Proyecto_BD;


INSERT INTO Perfiles (Perfil, created_at)
	VALUES ('administrador', '2023/08/29 09:00:00'),
			('Cliente', '2023/08/29 09:00:08');


INSERT INTO Usuarios (Perfil, Nombre, Apell_Paterno, Pais, Correo_Elec, Contraseña, created_at)
VALUES
(1, 'Javier', 'García', 'Mexico', 'www.JAvGarc.com', 'P@ssw0rd1', '2023-08-29'),
(2, 'Arleth', 'Vidal','Inglaterra', 'www.ArleVital.com', '12345Abc', '2023-08-29'),
(2, 'Pablo','Johnson', 'EE.UU', 'www.PabloTorr.com','SecurePass!', '2023-08-29'),
(2, 'Cristian','Rossi', 'Italia', 'www.CrissMendez.com','MySecretPass', '2023-08-29'),
(2, 'Carlos', 'Lee','Corea', 'www.CarloParra.com', '1qaz2wsx', '2023-08-29'),
(2, 'Karla', 'Patel', 'India', 'www.karlaMar.com', 'Passw0rd123', '2023-08-29'),
(2, 'Monica', 'Schmidt', 'Alemania', 'www.MonicA.com', 'StrongP@ss', '2023-08-29'),
(2, 'Azul', 'Lopez ','España', 'www.azulEsca.com', 'LetMeIn2020', '2023-08-29'),
(2, 'Frida', 'Ahmed', 'Egipto', 'www.FriddChavez.com', 'FakeP@ssw0rd', '2023-08-29'),
(2, 'Mauricio', 'Kim', 'Corea', 'www.MaurRamon.com', '0p3nSes@m3', '2023-08-29'),
(1, 'Guadalupe', 'Wang', 'China', 'www.LupeRoq.com', 'RainbowP@ss', '2023-08-29'),
(2, 'Moises', 'Mülle', 'Alemania', 'www.moyoCa.com', 'Ch@ngeMeNow', '2023-08-29'),
(2, 'Michel', 'Guzman', 'Mexico', 'www.MichezGum.com', 'Passw0rd!', '2023-08-29'),
(2, 'Vanesa', 'Garcia', 'España', 'www.vanessG.com', 'Ex@mpl3Pass', '2023-08-29'),
(2, 'Hector', 'Rodriguez', 'Mexico', 'www.HectRodri.com', '2BeOrNot2Be', '2023-08-29'),
(2, 'Joseline', 'Adams', 'Inglaterra', 'www.JosseLz.com', 'Sunshine1', '2023-08-29'),
(1, 'Raul', 'Perez', 'España', 'www.raulSAn.com', 'BlueSky#2023', '2023-08-29'),
(1, 'Sara', 'Sanchez', 'España', 'www.Saraby.com', 'P@ssw0rd2023', '2023-08-29'),
(2, 'Brenda', 'Torres', 'Torres', 'www.brent.com', 'Qwerty123', '2023-08-29'),
(2, 'Gillermo', 'Rivera', 'Colombia', 'www.GillermoRiv.com', 'TrustN0One!', '2023-08-29');

	
insert into Distribuidor(Nombre, Ciudad, telefono, Correo)
	VALUES
	('Bicimex', 'Ciudad de México', 5555555555, 'bicimex@example.com'),
	('Bicicletas ABC', 'Guadalajara', 3333333333, 'abc@example.com'),
	('Bicis El Bici', 'Monterrey', 8181818181, 'elbici@example.com'),
	('Bicicletas La Mejor', 'Querétaro', 4444444444, 'lamejor@example.com'),
	('Bicis El Gallo', 'Puebla', 2222222222, 'elgallo@example.com'),
	('Bicicletas El Niño', 'Veracruz', 2222222222, 'elnino@example.com'),
	('Bicis El Tigre', 'Oaxaca', 9519519519, 'eltigre@example.com'),
	('Bicicletas El León', 'Chihuahua', 6146146146, 'eleon@example.com'),
	('Bicis El Águila', 'Durango', 6186186186, 'elaguila@example.com'),
	('Bicicletas El Zorro', 'Sonora', 6626626626, 'elzorro@example.com'),
	('Bicis El Gato', 'Nayarit', 3113113113, 'elgato@example.com'),
	('Bicicletas El Perro', 'Coahuila', 8448448444, 'elperro@example.com'),
	('Bicis El Caballo', 'Guanajuato', 4734734734, 'elcaballo@example.com'),
	('Bicis El Elefante', 'Yucatán', 9999999999, 'elefante@example.com'),
	('Bicis El Mono', 'Campeche', 9819819819, 'elmono@example.com'),
	('Bicis El Pato', 'Quintana Roo', 9989989989, 'elpato@example.com'),
	('Bicis El Conejo', 'Tabasco', 9939939939, 'elconejo@example.com'),
	('Bicis El Perro', 'Veracruz', 2222222222, 'elperro@example.com'),
	('Bicis El Gato', 'Nayarit', 3113113113, 'elgato@example.com'),
	('Bicicletas El Caballo', 'Guanajuato', 4734734734, 'elcaballo@example.com');


insert into Marca(Nombre, Pais_Origen, Pais_Distribuidor, Distribuidor)
	VALUES
	('Trek', 'Estados Unidos', 'México', 1),
	('Specialized', 'Estados Unidos', 'México', 2),
	('Cannondale', 'Estados Unidos', 'México', 3),
	('Giant', 'Taiwán', 'México', 4),
	('Scott', 'Suiza', 'México', 5),
	('Orbea', 'España', 'México', 6),
	('BH', 'España', 'México', 7),
	('Merida', 'Taiwán', 'México', 8),
	('Kross', 'Polonia', 'México', 9),
	('Canyon', 'Alemania', 'México', 10),
	('Focus', 'Alemania', 'México', 11),
	('Cube', 'Alemania', 'México', 12),
	('GT', 'Estados Unidos', 'México', 13),
	('Santa Cruz', 'Estados Unidos', 'México', 14),
	('Yeti', 'Estados Unidos', 'México', 15),
	('Pivot', 'Estados Unidos', 'México', 16),
	('Canfield', 'Estados Unidos', 'México', 17),
	('Ibis', 'Estados Unidos', 'México', 18),
	('Norco', 'Canadá', 'México', 19),
	('Rocky Mountain', 'Canadá', 'México', 20);
	


insert into Modelo(Nombre, Modalidad, Año, Gama)
	VALUES
	('Trek Madone SLR 10', 'Carrera', 2023, 'Alta'),
	('Specialized Tarmac SL7', 'Carrera', 2023, 'Alta'),
	('Cannondale SuperSix EVO Hi-Mod', 'Carrera', 2023, 'Alta'),
	('Giant Propel Advanced SL', 'Carrera', 2023, 'Alta'),
	('Scott Addict RC 10', 'Carrera', 2023, 'Alta'),
	('Orbea Orca Aero', 'Carrera', 2023, 'Alta'),
	('BH Ultralight Evo', 'Carrera', 2023, 'Alta'),
	('Merida Reacto Team', 'Carrera', 2023, 'Alta'),
	('Kross Vento 5.0', 'Carrera', 2023, 'Media'),
	('Canyon Aeroad CF SLX 8', 'Carrera', 2023, 'Media'),
	('Focus Izalco Max 8.0', 'Carrera', 2023, 'Media'),
	('Cube Litening C:68X 850', 'Carrera', 2023, 'Media'),
	('GT Grade Carbon Pro', 'Carrera', 2023, 'Media'),
	('Santa Cruz Blur TR CC', 'Montaña', 2023, 'Alta'),
	('Yeti SB150 TR', 'Montaña', 2023, 'Alta'),
	('Pivot Firebird 9 XTR', 'Montaña', 2023, 'Alta'),
	('Canfield Nimble 9 Carbon', 'Montaña', 2023, 'Alta'),
	('Ibis Ripley AF', 'Montaña', 2023, 'Alta'),
	('Norco Range C7', 'Montaña', 2023, 'Alta'),
	('Rocky Mountain Instinct C70', 'Montaña', 2023, 'Alta');

insert into Componentes(Tija, Amortiguador, Ruedas_Delanteras, Ruedas_Traseras, Llantas, Cambio_Delantero, Cambio_Trasero, Casstte, Bielas, Frenos, Rotores_Frenos)
	VALUES
	('Tija de sillín de carbono', 'Amortiguador RockShox SID Select+ RL2', 'Ruedas delanteras Bontrager Aeolus RSL 50', 'Ruedas traseras Bontrager Aeolus RSL 50', 'Neumáticos Bontrager R1 Hard-Case Lite', 'Cambio delantero Shimano Ultegra Di2', 'Cambio trasero Shimano Ultegra Di2', 'Cassette Shimano Ultegra 11-34T', 'Bielas Shimano Ultegra R8000', 'Frenos Shimano Ultegra Disc', 'Rotores de frenos Shimano RT800'),
	('Tija de sillín de fibra de carbono', 'Amortiguador Fox Factory Float SC', 'Ruedas delanteras DT Swiss XRC 1200 Spline', 'Ruedas traseras DT Swiss XRC 1200 Spline', 'Neumáticos Specialized Turbo Cotton', 'Cambio delantero Shimano XTR Di2', 'Cambio trasero Shimano XTR Di2', 'Cassette Shimano XTR 12-34T', 'Bielas Shimano XTR M9100', 'Frenos Shimano XTR Disc', 'Rotores de frenos Shimano XTR RT-MT900'),
	('Tija de sillín de aluminio', 'Amortiguador RockShox Reba RL', 'Ruedas delanteras Giant P-SL0', 'Ruedas traseras Giant P-SL0', 'Neumáticos Giant Gavia Fondo 0', 'Cambio delantero Shimano 105', 'Cambio trasero Shimano 105', 'Cassette Shimano 105 11-34T', 'Bielas Shimano 105', 'Frenos Shimano 105 Disc', 'Rotores de frenos Shimano BR-RS700'),
	('Tija de sillín de aluminio', 'Amortiguador Suntour XCR34 RL-R', 'Ruedas delanteras Shimano WH-RS171', 'Ruedas traseras Shimano WH-RS171', 'Neumáticos Schwalbe Lugano', 'Cambio delantero Shimano Tiagra', 'Cambio trasero Shimano Tiagra', 'Cassette Shimano Tiagra 11-32T', 'Bielas Shimano Tiagra', 'Frenos Shimano Tiagra Disc', 'Rotores de frenos Shimano BR-RS400'),
	('Tija de sillín de acero', 'Amortiguador SR Suntour XCM34', 'Ruedas delanteras Alexrims MD10', 'Ruedas traseras Alexrims MD10', 'Neumáticos Kenda Kwick Roller', 'Cambio delantero Shimano Claris', 'Cambio trasero Shimano Claris', 'Cassette Shimano Claris 11-32T', 'Bielas Shimano Claris', 'Frenos Shimano Claris Disc', 'Rotores de frenos Shimano BR-MT200'),
	('Tija de sillín de carbono', 'Amortiguador RockShox SID SL', 'Ruedas delanteras Bontrager Aeolus 3 V2', 'Ruedas traseras Bontrager Aeolus 3 V2', 'Neumáticos Bontrager R1 Hard-Case Lite', 'Cambio delantero Shimano Ultegra', 'Cambio trasero Shimano Ultegra', 'Cassette Shimano Ultegra 11-34T', 'Bielas Shimano Ultegra', 'Frenos Shimano Ultegra Disc', 'Rotores de frenos Shimano RT700'),
	('Tija de sillín de fibra de carbono', 'Amortiguador Fox Factory Float SC', 'Ruedas delanteras DT Swiss XRC 1200 Spline', 'Ruedas trasera DT Swiss XRC 3200 Spline','Neumatico Maxxis Arden', 'Sin Cambio delantero', 'Cambio trasero Shimano XTR','Cassette Shimano XTR','Biela Shimano XT', 'Frenos Shimano XTR', 'Rotores XTR'),
	('Tija de sillín de carbono', 'Amortiguador RockShox Reba RL', 'Ruedas delanteras Shimano XTR', 'Ruedas traseras Shimano XTR', 'Neumáticos Schwalbe Hans Dampf', 'Cambio delantero Shimano XTR', 'Cambio trasero Shimano XTR', 'Cassette Shimano XTR 12 velocidades', 'Bielas Shimano XTR', 'Frenos Shimano XTR', 'Rotores de freno Shimano XTR 180 mm'),
	('Tija de sillín de aluminio', 'Amortiguador Fox Float 34 Performance Elite', 'Ruedas delanteras DT Swiss XRC 1200', 'Ruedas traseras DT Swiss XRC 1200', 'Neumáticos Continental Race King', 'Cambio delantero Shimano XT', 'Cambio trasero Shimano XT', 'Cassette Shimano XT 12 velocidades', 'Bielas Shimano XT', 'Frenos Shimano XT', 'Rotores de freno Shimano XT 180 mm'),
	('Tija de sillín de aluminio', 'Amortiguador RockShox Recon Silver', 'Ruedas delanteras Mavic Crossmax Elite', 'Ruedas traseras Mavic Crossmax Elite', 'Neumáticos Maxxis Ikon', 'Cambio delantero Shimano Deore', 'Cambio trasero Shimano Deore', 'Cassette Shimano Deore 10 velocidades', 'Bielas Shimano Deore', 'Frenos Shimano Deore', 'Rotores de freno Shimano Deore 160 mm'),
	('Tija de sillín de aluminio', 'Amortiguador Suntour XCR32', 'Ruedas delanteras WTB ST i23', 'Ruedas traseras WTB ST i23', 'Neumáticos Schwalbe Smart Sam', 'Cambio delantero Shimano Altus', 'Cambio trasero Shimano Altus', 'Cassette Shimano Altus 9 velocidades', 'Bielas Shimano Altus', 'Frenos Shimano Altus', 'Rotores de freno Shimano Altus 160 mm'),
	('Tija de sillín de acero', 'Amortiguador Suntour XCM', 'Ruedas delanteras Shimano WH-R501', 'Ruedas traseras Shimano WH-R501', 'Neumáticos Kenda K197', 'Cambio delantero Shimano Tourney', 'Cambio trasero Shimano Tourney', 'Cassette Shimano Tourney 7 velocidades', 'Bielas Shimano Tourney', 'Frenos Shimano V-Brake', 'Rotores de freno Shimano V-Brake 160 mm'),
	('Tija de sillín de carbono', 'Amortiguador RockShox SID SL', 'Ruedas delanteras DT Swiss XMC 1200', 'Ruedas traseras DT Swiss XMC 1200', 'Neumáticos Maxxis Aspen', 'Cambio delantero SRAM X01 Eagle AXS', 'Cambio trasero SRAM X01 Eagle AXS', 'Cassette SRAM X01 Eagle AXS 12 velocidades', 'Bielas SRAM X01 Eagle AXS', 'Frenos SRAM Code RSC', 'Rotores de freno SRAM Code RSC 200 mm');

insert into Caracteristicas (Talla_Cuadro, Material, Colores_Disponibles, Geometrias, Peso, Limite_Peso, Garantia)
VALUES
('S', 'Aluminio', 'Rojo, Blanco, Negro', 'Endurance', '9 kg', '120 kg', '2 años'),
('M', 'Aluminio', 'Rojo, Blanco, Negro', 'Endurance', '10 kg', '125 kg', '2 años'),
('L', 'Aluminio', 'Rojo, Blanco, Negro', 'Endurance', '11 kg', '130 kg', '2 años'),
('XL', 'Aluminio', 'Rojo, Blanco, Negro', 'Endurance', '12 kg', '135 kg', '2 años'),
('S', 'Carbono', 'Rojo, Blanco, Negro', 'Aero', '8 kg', '110 kg', '3 años'),
('M', 'Carbono', 'Rojo, Blanco, Negro', 'Aero', '9 kg', '115 kg', '3 años'),
('L', 'Carbono', 'Rojo, Blanco, Negro', 'Aero', '10 kg', '120 kg', '3 años'),
('XL', 'Carbono', 'Rojo, Blanco, Negro', 'Aero', '11 kg', '125 kg', '3 años'),
('S', 'Acero', 'Rojo, Blanco, Negro', 'Cruiser', '15 kg', '150 kg', '1 año'),
('M', 'Acero', 'Rojo, Blanco, Negro', 'Cruiser', '16 kg', '155 kg', '1 año'),
('L', 'Acero', 'Rojo, Blanco, Negro', 'Cruiser', '17 kg', '160 kg', '1 año'),
('XL', 'Acero', 'Rojo, Blanco, Negro', 'Cruiser', '18 kg', '165 kg', '1 año'),
('S', 'Titanio', 'Rojo, Blanco, Negro', 'Montaña', '12 kg', '100 kg', '5 años'),
('M', 'Titanio', 'Rojo, Blanco, Negro', 'Montaña', '13 kg', '105 kg', '5 años'),
('L', 'Titanio', 'Rojo, Blanco, Negro', 'Montaña', '14 kg', '110 kg', '5 años'),
('XL', 'Titanio', 'Rojo, Blanco, Negro', 'Montaña', '15 kg', '115 kg', '5 años'),
('S', 'Aluminio', 'Rojo, Blanco, Negro', 'Urbana', '11 kg', '120 kg', '2 años'),
('M', 'Aluminio', 'Rojo, Blanco, Negro', 'Urbana', '12 kg', '125 kg', '2 años'),
('L', 'Aluminio', 'Rojo, Blanco, Negro', 'Urbana', '13 kg', '130 kg', '2 años'),
('XL', 'Aluminio', 'Rojo, Blanco, Negro', 'Urbana', '14 kg', '135 kg', '2 años');


INSERT INTO Bicicleta (Marca, Modelo, Componentes, Caracteristicas, Precio, Foto, created_at)
	VALUES
	(1, 1, 1, 1, 1000, 'https://i.imgur.com/x500000.png','2023-10-08'),
	(2, 2, 2, 2, 2000, 'https://i.imgur.com/y500000.png','2023-10-08'),
	(3, 3, 3, 3, 3000, 'https://i.imgur.com/z500000.png','2023-10-08'),
	(4, 4, 4, 4, 4000, 'https://i.imgur.com/a500000.png','2023-10-08'),
	(5, 5, 5, 5, 5000, 'https://i.imgur.com/b500000.png','2023-10-08'),
	(6, 6, 6, 6, 6000, 'https://i.imgur.com/c500000.png','2023-10-08'),
	(7, 7, 7, 7, 7000, 'https://i.imgur.com/d500000.png','2023-10-08'),
	(8, 8, 8, 8, 8000, 'https://i.imgur.com/e500000.png','2023-10-08'),
	(9, 9, 9, 9, 9000, 'https://i.imgur.com/f500000.png','2023-10-08'),
	(10, 10, 10, 10, 10000, 'https://i.imgur.com/g500000.png','2023-10-08'),
	(11, 11, 11, 11, 11000, 'https://i.imgur.com/h500000.png','2023-10-08'),
	(12, 12, 12, 12, 12000, 'https://i.imgur.com/i500000.png','2023-10-08'),
	(13, 13, 13, 13, 13000, 'https://i.imgur.com/j500000.png','2023-10-08'),
	(14, 14, 4, 14, 14000, 'https://i.imgur.com/k500000.png','2023-10-08'),
	(15, 15, 5, 15, 15000, 'https://i.imgur.com/l500000.png','2023-10-08'),
	(16, 16, 6, 16, 16000, 'https://i.imgur.com/m500000.png','2023-10-08'),
	(17, 17, 7, 17, 17000, 'https://i.imgur.com/n500000.png','2023-10-08'),
	(18, 18, 8, 18, 18000, 'https://i.imgur.com/o500000.png','2023-10-08'),
	(19, 19, 9, 19, 19000, 'https://i.imgur.com/p500000.png','2023-10-08'),
	(20, 20, 2, 20, 20000, 'https://i.imgur.com/q500000.png','2023-10-08');


select * from usuarios;