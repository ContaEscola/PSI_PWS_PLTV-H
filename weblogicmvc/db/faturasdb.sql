
CREATE TABLE empresas(
idempresa int unsigned auto_increment, 
  designacaosocial  varchar(35) NOT NULL,
	email VARCHAR(256) not null,
 telefone VARCHAR(15) not null,
  nif char(9) NOT NULL,
  morada VARCHAR(120) not null,
  codigoPostal int(11) NOT NULL,
  localidade  varchar(50) NOT NULL,
  capitalsocial  int(11) NOT NULL,
 CONSTRAINT pk_empresas PRIMARY KEY (idempresa)
) ENGINE=InnoDB;

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

CREATE TABLE users  (
  iduser int unsigned  auto_increment,
  email  varchar(150) NOT NULL,
  telefone VARCHAR(15) not null,
  nif  char(9) NOT NULL,
  morada VARCHAR(120) not null,
  codigopostal  varchar(38) NOT NULL,
  localidade  varchar(50) NOT NULL,
  username  varchar(20) NOT NULL,
 Pass VARCHAR(64) not null,
   CONSTRAINT pk_users PRIMARY KEY (iduser) 
) ENGINE=InnoDB;