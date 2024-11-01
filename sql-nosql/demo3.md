

ALTER TABLE example ADD attr_couleur VARCHAR(32) AS (JSON_VALUE(attr, '$.couleur'));

SELECT nom,type,prix,JSON_VALUE(attr, '$.couleur') FROM example;
