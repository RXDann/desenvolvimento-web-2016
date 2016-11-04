CREATE TABLE Grupo (
  codigo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_grupo VARCHAR(45) NULL,
  nome_curso VARCHAR(45) NULL,
  senha VARCHAR(45) NULL,
  PRIMARY KEY(codigo)
);

CREATE TABLE Evento (
  codigo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  evento_data VARCHAR(10) NULL,
  evento_tipo VARCHAR(45) NULL,
  evento_detalhes LONGTEXT NULL,
  PRIMARY KEY(codigo)
);

CREATE TABLE Semestre (
  codigo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Evento_codigo INTEGER UNSIGNED NOT NULL,
  Grupo_codigo INTEGER UNSIGNED NOT NULL,
  semestre VARCHAR(25) NULL,
  PRIMARY KEY(codigo),
  INDEX Semestre_FKIndex1(Grupo_codigo),
  INDEX Semestre_FKIndex2(Evento_codigo),
  FOREIGN KEY(Grupo_codigo)
    REFERENCES Grupo(codigo)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Evento_codigo)
    REFERENCES Evento(codigo)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Disciplina (
  codigo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Grupo_codigo INTEGER UNSIGNED NOT NULL,
  Evento_codigo INTEGER UNSIGNED NOT NULL,
  Semestre_codigo INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(45) NULL,
  PRIMARY KEY(codigo),
  INDEX Disciplina_FKIndex1(Semestre_codigo),
  INDEX Disciplina_FKIndex2(Evento_codigo),
  INDEX Disciplina_FKIndex3(Grupo_codigo),
  FOREIGN KEY(Semestre_codigo)
    REFERENCES Semestre(codigo)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Evento_codigo)
    REFERENCES Evento(codigo)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Grupo_codigo)
    REFERENCES Grupo(codigo)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


