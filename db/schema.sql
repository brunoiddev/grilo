-- CRIA USUÁRIO
-- GRANT ALL PRIVILEGES ON grilo.* TO 'grilo'@'localhost' IDENTIFIED BY 'grilo';
DROP DATABASE IF EXISTS grilo;

CREATE DATABASE grilo DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE grilo

CREATE TABLE acesso (
    id INT NOT NULL AUTO_INCREMENT,
	acesso CHAR(16) NOT NULL,
	PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE usuarios (
	id INT NOT NULL AUTO_INCREMENT,
    acessoId INT NOT NULL,
	nome CHAR(64) NOT NULL,
	email CHAR(64) NOT NULL,
	senha CHAR(32) NULL,
	ativo INT(1) NOT NULL,
	PRIMARY KEY(id)
)ENGINE=InnoDB;

ALTER TABLE usuarios
ADD FOREIGN KEY fk_usuarios_acesso(acessoId)
REFERENCES acesso(id)
ON DELETE RESTRICT;

-- INSERTS
INSERT INTO acesso (acesso) VALUES ('administrador');
INSERT INTO acesso (acesso) VALUES ('comum');
