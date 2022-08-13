-- Matheus Arthur 3dsi3
-- 09/06 v1

CREATE DATABASE urna;
USE urna ;

CREATE TABLE tb_usuario (
  id_rm INT PRIMARY KEY NOT NULL,
  cd_senha VARCHAR(10) NULL,
  nm_etec VARCHAR(20) NULL
);

CREATE TABLE tb_candidato (
  id_candidato INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  ft_candidato VARCHAR(30) NULL,
  nm_funcao VARCHAR(20) NOT NULL,
  ds_funcao VARCHAR(45) NOT NULL
);


CREATE TABLE tb_eleicao (
  id_eleicao INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nm_eleicao VARCHAR(20) NOT NULL,
  dt_eleicao DATE NOT NULL
);

CREATE TABLE tb_voto (
  id_voto INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cd_eleicao INT NOT NULL,
  cd_rm INT NOT NULL,
  cd_candidato INT NOT NULL,
  dt_voto VARCHAR(20) NULL 
);


CREATE TABLE tb_candidatura (
  id_candidatura INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  qtd_voto INT NULL,
  cd_eleicao INT NOT NULL,
  cd_candidato INT NOT NULL
);

-- CHAVES ESTRANGEIRAS

ALTER TABLE tb_candidato ADD FOREIGN KEY (cd_rm) REFERENCES tb_usuario (id_rm);

ALTER TABLE tb_voto ADD FOREIGN KEY (cd_eleicao) REFERENCES tb_eleicao (id_eleicao);
ALTER TABLE tb_voto ADD FOREIGN KEY (cd_rm) REFERENCES tb_usuario (id_rm);
ALTER TABLE tb_voto ADD FOREIGN KEY (cd_candidato) REFERENCES tb_candidato (id_candidato);

ALTER TABLE tb_candidatura ADD FOREIGN KEY (cd_eleicao) REFERENCES tb_eleicao (id_eleicao);
ALTER TABLE tb_candidatura ADD FOREIGN KEY (cd_candidato) REFERENCES tb_candidato (id_candidato);
