CREATE TABLE users //user is name of table //commas are new columns
(
    id SERIAL PRIMARY KEY
    , username VARCHAR(50) UNIQUE NOT NULL
    , pasword VARCHAR(50) NOT NULL
);
CREATE TABLE pictures 
(
    id SERIAL PRIMARY KEY
    , filepath VARCHAR(100) UNIQUE NOT NULL
    , name VARCHAR(50) UNIQUE NOT NULL
);
CREATE TABLE audio
(
    id SERIAL PRIMARY KEY
    , filepath VARCHAR(100) UNIQUE NOT NULL
    , name VARCHAR(50) UNIQUE NOT NULL
);
CREATE TABLE questions
(
    id SERIAL PRIMARY KEY
    , question VARCHAR(150) NOT NULL
    , audioid SMALLINT
    , FOREIGN KEY(audioid) REFERENCES audio(id) //audioid and id in audio relate
    , picturesid SMALLINT
    , FOREIGN KEY(picturesid) REFERENCES pictures(id) //not creating new table
);
CREATE TABLE animals 
(
    id SERIAL PRIMARY KEY
    , animal VARCHAR(50) NOT NULL
    
);
CREATE TABLE answers
(
    id SERIAL PRIMARY KEY
    , rightanswer VARCHAR(50) NOT NULL
    , wronganswer1 VARCHAR(50) NOT NULL
    , wronganswer2 VARCHAR(50) NOT NULL
    , wronganswer3 VARCHAR(50) NOT NULL
);