CREATE TABLE login
(
	id SERIAL PRIMARY KEY NOT NULL
	, username VARCHAR(80) UNIQUE NOT NULL
	, password VARCHAR(255) NOT NULL
);