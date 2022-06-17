CREATE DATABASE vipeventos;

USE vipeventos;

CREATE TABLE tbForm (
	idUser INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (40),
    email VARCHAR (60),
    assunto VARCHAR (100),
    mensagem VARCHAR (200)

);

CREATE TABLE tb_arquivo(
arquivo_id INT PRIMARY KEY AUTO_INCREMENT,
arquivo_nome VARCHAR(50),
arquivo_conteudo MEDIUMBLOB,
arquivo_tipo VARCHAR (50)
);

CREATE TABLE tbCadastro (
	idCadastro INT PRIMARY KEY AUTO_INCREMENT,
    nomeUsuario VARCHAR (40) UNIQUE NOT NULL, 
    email VARCHAR (60) UNIQUE NOT NULL,
    senha VARCHAR (40) NOT NULL
);

SELECT * FROM tbCadastro;
SELECT * FROM tb_arquivo;

DELETE FROM tbCadastro WHERE idCadastro > 0;

  