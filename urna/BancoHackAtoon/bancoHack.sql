
CREATE DATABASE urna;
USE urna ;

CREATE TABLE tb_usuario (
  id_rm INT NOT NULL,
  cd_senha VARCHAR(45) NULL,
  nm_etec VARCHAR(45) NULL,
  PRIMARY KEY (id_rm)
);

CREATE TABLE tb_candidato (
  id_candidato INT NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  ft_candidato VARCHAR(30) NULL,
  nm_funcao VARCHAR(45) NOT NULL,
  ds_funcao VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_candidato),
  CONSTRAINT fk_tb_candidato_tb_usuario FOREIGN KEY (cd_rm) REFERENCES tb_usuario (id_rm)
);

CREATE TABLE tb_eleicao (
  id_eleicao INT NOT NULL,
  qtd_voto INT NULL,
  nm_eleicao VARCHAR(45) NOT NULL,
  data DATE NOT NULL,
  PRIMARY KEY (id_eleicao)
);

CREATE TABLE tb_votacao (
  cd_eleicao INT NOT NULL,
  cd_usuario INT NOT NULL,
  cd_candidato INT NOT NULL,
  dt_voto VARCHAR(45) NULL,
  CONSTRAINT fk_tb_candidato_has_tb_eleicao_tb_eleicao1 FOREIGN KEY (cd_eleicao) REFERENCES tb_eleicao (id_eleicao),
  CONSTRAINT fk_tb_votacao_tb_usuario1 FOREIGN KEY (cd_usuario) REFERENCES tb_usuario (id_rm),
  CONSTRAINT fk_tb_votacao_tb_candidato1 FOREIGN KEY (cd_candidato) REFERENCES tb_candidato (id_candidato) 
);

CREATE TABLE tb_candidatura (
  cd_eleicao INT NOT NULL,
  cd_candidato INT NOT NULL,
  CONSTRAINT fk_tb_eleicao_has_tb_candidato_tb_eleicao1 FOREIGN KEY (cd_eleicao) REFERENCES tb_eleicao (cd_eleicao),
  CONSTRAINT fk_tb_eleicao_has_tb_candidato_tb_candidato1 FOREIGN KEY (cd_candidato) REFERENCES tb_candidato (id_candidato)   
);
