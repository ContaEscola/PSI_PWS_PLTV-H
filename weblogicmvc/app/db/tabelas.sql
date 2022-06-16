CREATE DATABASE pwsdb;

USE pwsdb;

/*
 Iremos utilizar o PASSWORD_DEFAULT como algoritmo de hash logo é recomendado 255 characters na password
 https://www.php.net/manual/en/function.password-hash.php 
*/
CREATE TABLE users(
id 								INT 											UNSIGNED 	AUTO_INCREMENT,
username 						VARCHAR(50) 									NOT NULL	COLLATE			utf8mb4_bin,
password 						VARCHAR(255)									NOT NULL,
email 							VARCHAR(150) 									NOT NULL,
telefone 						CHAR(9) 										NOT NULL,
nif 							CHAR(9) 										NOT NULL,
morada 							VARCHAR(255) 									NOT NULL,
codPostal 						CHAR(8) 										NOT NULL,
localidade 						VARCHAR(50) 									NOT NULL,
role 							ENUM('Administrador','Funcionário','Cliente')  	DEFAULT 'Cliente',
CONSTRAINT pk_user 				PRIMARY KEY(id),
CONSTRAINT uk_user_username 	UNIQUE(username),
CONSTRAINT uk_user_nif 			UNIQUE(nif)
) ENGINE = InnoDB;


CREATE TABLE empresas(
id 											INT 						UNSIGNED	AUTO_INCREMENT, 
designacaoSocial 							VARCHAR(30) 				NOT NULL,
email 										VARCHAR(150) 				NOT NULL,
telefone 									CHAR(9) 					NOT NULL,
nif 										CHAR(9) 					NOT NULL,
morada 										VARCHAR(255) 				NOT NULL,
capitalSocial 								DOUBLE						NOT NULL,
localidade  								VARCHAR(50) 				NOT NULL,
codPostal 									CHAR(8) 					NOT NULL,
CONSTRAINT pk_empresa						PRIMARY KEY(id),
CONSTRAINT uk_empresa_designacaoSocial		UNIQUE(designacaoSocial),
CONSTRAINT uk_empresa_email 				UNIQUE(email),
CONSTRAINT uk_empresa_telefone				UNIQUE(telefone),
CONSTRAINT uk_empresa_nif					UNIQUE(nif)
) ENGINE = InnoDB;


CREATE TABLE ivas (
id 					INT 				UNSIGNED	AUTO_INCREMENT,
percentagem  		INT 				UNSIGNED 	NOT NULL,
descricao 			VARCHAR(35) 		NOT NULL,
emVigor  			BOOL 				NOT NULL,
CONSTRAINT pk_iva	PRIMARY KEY(id),
CONSTRAINT uk_iva	UNIQUE(descricao) 
) ENGINE = InnoDB;

-- A referência tem 7 caracteres, exemplo de uma referencia: 01.0001
CREATE TABLE produtos (
id  								INT 					UNSIGNED				AUTO_INCREMENT,
referencia  						CHAR(7) 				NOT NULL,
descricao  							VARCHAR(255)			NOT NULL,
preco  								DOUBLE 					NOT NULL,
stock  								INT						NOT NULL,
iva_id								INT 					UNSIGNED				NOT NULL,
CONSTRAINT pk_produto				PRIMARY KEY(id),
CONSTRAINT uk_produto_referencia	UNIQUE(referencia),
CONSTRAINT uk_produto_descricao		UNIQUE(descricao),
CONSTRAINT fk_produto_iva			FOREIGN KEY(iva_id)		REFERENCES ivas(id)
) ENGINE = InnoDB;



CREATE TABLE faturas (
id  					INT 								UNSIGNED	AUTO_INCREMENT,
data 					DATETIME 							DEFAULT 	NOW(),
valorTotal 				DOUBLE								NOT NULL,
ivaTotal 				DOUBLE 								NOT NULL,
estado 					ENUM('Em Lançamento', 'Emitida')	NOT NULL,
referenciaFuncionario	INT 								UNSIGNED	NOT NULL,
referenciaCliente  		INT 								UNSIGNED 	NOT NULL,
CONSTRAINT pk_fatura	PRIMARY KEY(id)
) ENGINE = InnoDB;



CREATE TABLE linhafaturas (
id  								INT 						UNSIGNED					AUTO_INCREMENT,
quantidade 							INT 						UNSIGNED 					NOT NULL,
valorUnitario						DOUBLE 						NOT NULL,
valorIva  							DOUBLE		 				NOT NULL,
fatura_id 							INT 						UNSIGNED					NOT NULL,
produto_id							INT 						UNSIGNED 					NOT NULL,
CONSTRAINT pk_linhaFatura			PRIMARY KEY(id),
CONSTRAINT fk_linhaFatura_fatura	FOREIGN KEY(fatura_id)		REFERENCES faturas(id),
CONSTRAINT fk_linhaFatura_produto	FOREIGN KEY(produto_id)		REFERENCES produtos(id)
) ENGINE = InnoDB;