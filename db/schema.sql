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

CREATE TABLE user (
	id INT NOT NULL AUTO_INCREMENT,
    acesso_id INT NOT NULL,
	nome CHAR(64) NOT NULL,
	email CHAR(64) NOT NULL,
	senha CHAR(32) NULL,
	ativo INT(1) NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (acesso_id) 
        REFERENCES acesso(id)
        ON DELETE RESTRICT
)ENGINE=InnoDB;

-- tipo: 1 registrar, 2 recuperar
CREATE TABLE user_token(
	id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	data DATETIME NOT NULL,
	tipo INT(1) NOT NULL,
	ativo INT(1) NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (user_id) 
        REFERENCES user(id)
        ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE produto(
	id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id)
)ENGINE=InnoDB;

-- INSERTS
INSERT INTO acesso (acesso) VALUES ('brunoid');
INSERT INTO acesso (acesso) VALUES ('administrador');
INSERT INTO acesso (acesso) VALUES ('representante');
