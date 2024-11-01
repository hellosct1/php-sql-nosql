
create database demo2;
use demo2;

create table example(
id int auto_increment primary key,
nom varchar(40),
type enum ('animal', 'ordinateur'),
prix int,
attr JSON,
CHECK (JSON_VALID(attr))
);

INSERT INTO example VALUES(NULL, 'Atari','ordinateur',500, '{"couleur": "gris", "type": "STe"}');
INSERT INTO example VALUES(NULL, 'elePHPant', 'animal',20, '{"taille": "normal", "description": "peluche"}');
UPDATE example SET  attr = JSON_MERGE(attr,'{"couleur": "bleu"}') where id=2;



ALTER TABLE example ADD attr_couleur VARCHAR(32) AS (JSON_VALUE(attr, '$.couleur'));

SELECT nom,type,prix,JSON_VALUE(attr, '$.couleur') FROM example;
