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

-- modelos de protudos
CREATE TABLE modelo (
	id INT NOT NULL AUTO_INCREMENT,
	modelo CHAR(32) NOT NULL,
	PRIMARY KEY(id)
)ENGINE=InnoDB;

-- categorias de produtos
CREATE TABLE categoria (
	id INT NOT NULL AUTO_INCREMENT,
	categoria CHAR(32) NOT NULL,
	PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE produto(
	id INT NOT NULL AUTO_INCREMENT,
	codigo CHAR(6) NOT NULL,
	categoria_id INT NOT NULL,
	modelo_id INT NOT NULL,
	tensao CHAR(10),
	potencia CHAR(10),
	cor CHAR(10),
	bocal CHAR (10),
	lumens CHAR(10),
	qtd_caixa INT,
	preco_unitario INT,
	preco_caixa INT,
	preco_master INT,
	parent_id INT,
	descricao CHAR(32) NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (categoria_id) 
        REFERENCES categoria(id)
        ON DELETE RESTRICT,
    FOREIGN KEY (modelo_id) 
        REFERENCES modelo(id)
        ON DELETE RESTRICT
)ENGINE=InnoDB;

-- INSERTS
INSERT INTO acesso (acesso) VALUES ('brunoid');
INSERT INTO acesso (acesso) VALUES ('administrador');
INSERT INTO acesso (acesso) VALUES ('representante');

INSERT INTO categoria (categoria) VALUES ('Super LED');
INSERT INTO categoria (categoria) VALUES ('LED');
INSERT INTO categoria (categoria) VALUES ('Acessórios');

INSERT INTO modelo (modelo) VALUES ('3U');
INSERT INTO modelo (modelo) VALUES ('2U');
INSERT INTO modelo (modelo) VALUES ('tubular');

INSERT INTO produto (categoria_id, modelo_id, codigo, descricao) VALUES (1, 1, '1234', 'lâmpada de teste');
INSERT INTO produto (categoria_id, modelo_id, codigo, descricao) VALUES (1, 3, '2345', 'lâmpada noturna');
