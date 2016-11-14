INSERT INTO nota VALUES ('','2016-11-14', 'Desenvolvimento web2', 'Elton Machado', 'Teste');
INSERT INTO nota VALUES ('','2016-11-15', 'Computacao Grafica', 'Caio LEandro', 'Resolução da prova');
INSERT INTO nota VALUES ('','2016-11-16', 'SO', 'Vanessa', 'Trabalho em grupo');
INSERT INTO nota VALUES ('','2016-11-16', 'Qualidade', 'Lucas', 'Notas importantes');

SELECT * FROM nota;

DELETE FROM nota WHERE ID = '3';

UPDATE nota SET NOMECURSO='Desenvolvimento Web' WHERE ID = '4';