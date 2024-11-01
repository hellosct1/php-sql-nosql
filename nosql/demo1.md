
create database demo2;
use demo2;

Create table example_table (j JSON);

Desc example_table;

CREATE TABLE table_nosql (
 j JSON
 CHECK (JSON_VALID(j))
);

INSERT INTO table_nosql VALUES ('message test');
INSERT INTO table_nosql VALUES ('{"id": 1, "name": "message succes"}');
select * from table_nosql;
