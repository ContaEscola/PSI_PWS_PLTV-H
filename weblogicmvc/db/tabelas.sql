

/*
 Iremos utilizar o PASSWORD_DEFAULT como algoritmo de hash logo é recomendado 255 characters na password
 https://www.php.net/manual/en/function.password-hash.php 
*/
CREATE TABLE users(
id 					INT 											UNSIGNED 	AUTO_INCREMENT,
username 			VARCHAR(50) 									NOT NULL,
password 			VARCHAR(255)									NOT NULL,
email 				VARCHAR(150) 									NOT NULL,
telefone 			CHAR(9) 										NOT NULL,
nif 				CHAR(9) 										NOT NULL,
morada 				VARCHAR(255) 									NOT NULL,
codPostal 			CHAR(7) 										NOT NULL,
localidade 			VARCHAR(50) 									NOT NULL,
role 				ENUM('Administrador','Funcionário','Cliente')  	DEFAULT 'Cliente',
CONSTRAINT pk_user 	PRIMARY KEY(id)
) ENGINE = InnoDB;

CREATE TABLE empresas(
id 						INT 				UNSIGNED	AUTO_INCREMENT, 
designacaoSocial 		VARCHAR(30) 		NOT NULL,
email 					VARCHAR(150) 		NOT NULL,
telefone 				CHAR(9) 			NOT NULL,
nif 					CHAR(9) 			NOT NULL,
morada 					VARCHAR(255) 		NOT NULL,
capitalSocial 			INT 				NOT NULL,
localidade  			VARCHAR(50) 		NOT NULL,
codPostal 				CHAR(7) 			NOT NULL,
CONSTRAINT pk_empresa	PRIMARY KEY (id)
) ENGINE = InnoDB;


/*
CREATE TABLE faturas (
  idfatura  int unsigned AUTO_INCREMENT ,
  data date NOT NULL,
  valortotal  double NOT NULL,
  ivatotal int(11) NOT NULL,
  estado varchar(25) NOT NULL,
  referenciafunc int(11) NOT NULL,
  referenciacliente  int(11) NOT NULL,
  CONSTRAINT pk_faturas PRIMARY KEY (idfatura),
   constraint fk_faturas_referenciafunc foreign key users (referenciafunc)
references users (iduser),
 constraint fk_faturas_referenciacliente foreign key  users (referenciacliente)
 references users (iduser)
  
) ENGINE=InnoDB;




CREATE TABLE ivas (
  idiva int unsigned auto_increment,
  percentagem  int(11) NOT NULL,
  descricao varchar(35) NOT NULL,
  emvigor  int(11) NOT NULL,
  CONSTRAINT pk_ivas PRIMARY KEY (idiva) 
) ENGINE=InnoDB;



CREATE TABLE linhafaturas (
  idlinhaf  int unsigned auto_increment,
  quantidade int(11) NOT NULL,
  valorunitario int(11) NOT NULL,
  valoriva  int(11) NOT NULL,
  referenciafatura  int(11) NOT NULL,
  referenciaproduto  int(11) NOT NULL,
  CONSTRAINT pk_linhafaturas PRIMARY KEY (idlinhaf)
  
) ENGINE=InnoDB;



CREATE TABLE produtos (
  idproduto  int unsigned auto_increment,
   referencia  int(11) NOT NULL,
  descricao  varchar(35) NOT NULL,
  preco  double NOT NULL,
  sotck  int(11) NOT NULL,
   CONSTRAINT pk_produtos PRIMARY KEY (idproduto) 
) ENGINE=InnoDB;

