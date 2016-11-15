CREATE DATABASE crud;
USE crud;

CREATE TABLE pessoas(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL,
	telefone VARCHAR(45) NOT NULL,
	CONSTRAINT pk_id_pessoas
	PRIMARY KEY(id)
);

INSERT INTO pessoas(nome, telefone) VALUES('Bruno', '83 98834 0564');
INSERT INTO pessoas(nome, telefone) VALUES('Danielle', '83 99932 1200');
INSERT INTO pessoas(nome, telefone) VALUES('João', '83 98852 3311');
INSERT INTO pessoas(nome, telefone) VALUES('Maria', '83 3234 2610');
INSERT INTO pessoas(nome, telefone) VALUES('José', '83 98713 0065');