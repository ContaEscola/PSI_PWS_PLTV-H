USE pws_h;

-- As passwords são todas "exemplo1234" elas estão são convertidas em hash utilizando o PASSWORD_DEFAULT do password_hash() em php

-- A empresa para inserir
INSERT INTO empresas 
(designacaoSocial,	email,	telefone,	nif,	morada,	capitalSocial,	localidade,	codPostal)
VALUES
('Pedro Norberto & Cia. Ltda.', '2211904@my.ipleiria.pt', '966211885', '208581430', 'Avenida de Berna 45 1067-001 Lisboa', 14230.234, 'Lisboa', '1067-001');


-- /////////////////////
-- Os users para inserir
INSERT INTO users 
(username,	password,	email,	telefone,	nif,	morada,	codPostal,	localidade, role)
VALUES

/* -------------
	3 Clientes
   ------------- */
('Pedro Norberto', 		'$2y$10$pL8YeEgTsG9NYphwo.s6x.hdC5X9shduUyxKfPuL0wijMpC9IMzYC', 	"pedronorberto@gmail.com", 		"966211885", 	"101231456", 	"Avenida Pio Xii 11 7301-856 Portalegre",	"7301-856", 	"Portalegre",			DEFAULT),
('Tomás Burgos', 		'$2y$10$pL8YeEgTsG9NYphwo.s6x.hdC5X9shduUyxKfPuL0wijMpC9IMzYC', 	"tomasburgos@gmail.com", 		"912333999", 	"111222333",	"7320-205 Quinta Regalinho", 				"7320-205", 	"Quinta Regalinho",		DEFAULT),
('Filipa Countinho', 	'$2y$10$pL8YeEgTsG9NYphwo.s6x.hdC5X9shduUyxKfPuL0wijMpC9IMzYC', 	"filipacountinho@gmail.com",	"944989010", 	"444555666", 	"Rua José da Gama 7430-165 Crato", 			"7430-165",		"Crato",				DEFAULT),

/* -------------
	1 Administrador
   ------------- */
('Alberta Maria',		'$2y$10$pL8YeEgTsG9NYphwo.s6x.hdC5X9shduUyxKfPuL0wijMpC9IMzYC',		"albertamaria@gmail.com",		"955666777",	"777888999",	"Impasse Nossa Senhora dos Remédios 9100-204 Achada do Moreno",	"9100-204",	"Achada do Moreno", "Administrador"),

/* -------------
	2 Funcionários
   ------------- */
('Cézar Barboza',		'$2y$10$pL8YeEgTsG9NYphwo.s6x.hdC5X9shduUyxKfPuL0wijMpC9IMzYC',		"cezarbarboza@gmail.com",		"912765842",	"190237923",	"4870-001 Alvadia",													"4870-001",		"Alvadia", 					"Funcionário"),
('Raissa Varela',		'$2y$10$pL8YeEgTsG9NYphwo.s6x.hdC5X9shduUyxKfPuL0wijMpC9IMzYC',		"raissavarela@gmail.com",		"961345910",	"094231238",	"Rua Marco Cabaço Marco Cabaço 2821-001 Charneca de Caparica",		"2821-001",		"Charneca de Caparica",		"Funcionário");


-- ////////////////////
-- Os ivas para inserir
INSERT INTO ivas
(percentagem,	descricao,	emVigor)
VALUES

/* -------------
	3 Ivas em vigor
   ------------- */
(23,	"Taxa Normal", 			TRUE),
(13,	"Taxa Intermédia",		TRUE),
(6,		"Taxa Reduzida",		TRUE),

/* -------------
	1 Iva que não está em vigor
   ------------- */
(3,	"Taxa Muito Reduzida",	FALSE);


-- ////////////////////////
-- Os produtos para inserir
INSERT INTO produtos
(referencia,	descricao,	preco,	stock,	iva_id)
VALUES
-- Os ivas nestes produtos é a Taxa Normal, foram tirados da PCDIGA
("01.0001",		"Placa Gráfica XFX Radeon RX 6650 XT Speedster QICK 308 Gaming 8GB GDDR6",	469.915,	10,		1),
("01.0002",		"LEGO DUPLO: Camião do Alfabeto | Idades 1½+ | 36 Peças | Item 10915",		29.901,  	5,		1),
("01.0003",		"Gamepad Krom Gaming Kexal Wireless",										34.90,  	200,	1),

-- Os ivas nestes produtos é a Taxa Intermédia, foram tirados do Uber Eats
("01.0007",		"Sushi Frito",			7.904,  	20,		2),
("01.0008",		"Gambas Panadas",		8.904,  	30,		2),
("01.0009",		"Grelhada Mista",		11.504,		5,		2),
("01.0010",		"Menu Campera",			31.504,  	2,		2),

-- Os ivas nestes produtos é a Taxa Reduzida, foram tirados da Leyaonline
("01.0004",		"A Caminho do Altar",					16.904,		50,		3),
("01.0005",		"Os Bridgerton Felizes Para Sempre",	15.213,		100,	3),
("01.0006",		"BIS - Cães de Caça",					8.954,		500,	3);




-- ///////////////////////
-- As faturas para inserir
INSERT INTO faturas
( data, 					valorTotal,		ivaTotal,		estado,				referenciaFuncionario,		referenciaCliente)
VALUES
(current_timestamp(), 		808.2456,		149.1256, 		"Em Lançamento", 	5, 							1),


(current_timestamp(),		179.667,		15.0892, 		"Em Lançamento", 	5, 							2),


(current_timestamp(), 		808.2456, 		149.1256, 		"Em Lançamento", 	6, 							2),


(current_timestamp(), 		179.667, 		15.0892, 		"Em Lançamento", 	6, 							3);


-- ///////////////////////
-- As linhasFaturas para inserir
INSERT INTO linhafaturas
(quantidade,	valorUnitario,		valorIva,		fatura_id,		produto_id)
VALUES

-- 1º Fatura
(1,				469.92,				108.0816,		1, 				1),
(2,				59.8,				13.754,			1, 				2),
(3, 			104.7,  			24.081,			1,				3),
(2, 			15.8,				2.052,			1,				4),
(1,				8.9,				1.157,			1,				5),


-- 2º Fatura
(1, 			11.50, 				1.495, 			2, 				6),
(2, 			63, 				8.19, 			2, 				7),
(3, 			50.7, 				3.042,			2, 				8),
(2, 			30.42,				1.8252, 		2, 				9),
(1, 			8.95, 				0.537, 			2, 				10),


-- 3º Fatura
(1,				469.92,				108.0816,		3, 				1),
(2,				59.8,				13.754,			3, 				2),
(3, 			104.7,  			24.081,			3,				3),
(2, 			15.8,				2.052,			3,				4),
(1,				8.9,				1.157,			3,				5),


-- 4º Fatura
(1, 			11.50, 				1.495, 			4, 				6),
(2, 			63, 				8.19, 			4, 				7),
(3, 			50.7, 				3.042,			4, 				8),
(2, 			30.42,				1.8252, 		4, 				9),
(1, 			8.95, 				0.537, 			4, 				10);